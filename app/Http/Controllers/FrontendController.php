<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Order;
use App\Models\OrderItems;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function homePage()
    {
        $category = Category::get();
        $Product = Product::get();
        return view('frontend.homePageArea', compact('category', 'Product'));
    }


    public function shop()
    {
        $brand = Brand::get();
        $category = Category::get();
        $Product = Product::get();
        return view('frontend.ShopPage', compact('category', 'Product', 'brand'));
    }


    public function productPage($id)
    {
        $data = Product::findOrFail($id);
        return view('frontend.ProductShop', compact('data'));
    }





    public function addToCart(Request $request)
    {

        $data = Product::findOrFail($request->productIdByCart);

        $productPrice = 0;

        if ($data->discount_price) {
            $productPrice = $data->discount_price;
        } else {
            $productPrice = $data->actual_price;
        }

        $cartData = [];
        $cartData['id'] = $data->id;
        $cartData['name'] = $data->product_title;
        $cartData['qty'] = $request->qty;
        $cartData['price'] = $productPrice;
        $cartData['weight'] = 0;
        $cartData['options']['img'] = $data->ProductImages;


        Cart::add($cartData);

        return response()->json(['success' => 'Item added successfully', 'cart_count' => Cart::count()]);
    }


    public function addToCartOne(Request $request)
    {

        $data = Product::findOrFail($request->productId);

        $productPrice = 0;

        if ($data->discount_price) {
            $productPrice = $data->discount_price;
        } else {
            $productPrice = $data->actual_price;
        }

        $cartData = [];
        $cartData['id'] = $data->id;
        $cartData['name'] = $data->product_title;
        $cartData['qty'] = 1;
        $cartData['price'] =  $productPrice;
        $cartData['weight'] = 0;
        $cartData['options']['img'] = $data->ProductImages;



        Cart::add($cartData);

        return response()->json(['success' => 'Item added successfully', 'cart_count' => Cart::count(), 'subTotal' => Cart::subtotal()]);
    }

    public function cartPage()
    {
        $data = Cart::content();
        return view('frontend.cartPage', compact('data'));
    }


    // update cart 

    public function increment(Request $request)
    {
        Cart::update($request->rowId, $request->quantity);
        $productTotalPrice = $this->ProductTotal($request->rowId);
        return response()->json(['success' => 'Item update successfully', 'cart_count' => Cart::count(), "totalPrice" => $productTotalPrice, 'subTotal' => Cart::subtotal()]);
    }


    public function ProductTotal($rowId)
    {
        $Product = Cart::get($rowId);
        $total = $Product->price * $Product->qty;
        return $total;
    }

    function removeItem($id)
    {
        Cart::remove($id);
        return redirect()->back();
    }

    public function checkout()
    {
        $data = Cart::content();
        return view('frontend.checkout', compact('data'));
    }



    public function checkOutNow(Request $request)
    {
        // dd($request->all());
        $cartTotal = $request->subTotal;
        $order_number = 'ORN' . mt_rand(10000000, 99999999);
        $order_id = Order::insertGetId([
            'name' => $request->name,
            'user_id' => Auth::check() ? Auth::id() : 0,
            'phone' => $request->phone,
            'email' => $request->email,
            'payment_method' => 'Cash On Delivery',
            'payment_type' => 'online',
            'city' => $request->city,
            'post_code' => $request->PostCode,
            'address' => $request->Address,
            'status' => 'pending',
            'sub_total' => str_replace(',', '', $request->subTotal),

            // 'invoice_no' => 'EOS' . mt_rand(10000000, 99999999),
            'order_number' => $order_number,  // Use generated order number
            // 'order_date' => Carbon::now()->format('d F Y'),
            // 'order_month' => Carbon::now()->format('F'),
            // 'order_year' => Carbon::now()->format('Y'),
            'created_at' => Carbon::now(),
        ]);


        $carts = Cart::content();
        foreach ($carts as $cart) {
            OrderItems::insert([
                'order_id' => $order_id,
                'product_id' => $cart->id,
                'qty' => $cart->qty,
                'price' => $cart->price,
                'created_at' => Carbon::now(),
            ]);
        }

        Cart::destroy();






        if (auth()->check() && auth()->user()->role === 'admin') {
            return redirect()->route('pos')->with('success', 'Order submitted successfully');
        } else {
            return redirect()->route('home')->with('success', 'Order submitted successfully');
        }
    }
}

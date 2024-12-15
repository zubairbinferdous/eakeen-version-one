<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class posController extends Controller
{

    public function pos()
    {
        $data = Product::get();
        $dataPos = Cart::content();
        return view('admin.pos ', compact('data', 'dataPos'));
    }


    public function addToCartOnePos(Request $request)
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
        return response()->json([
            'success' => 'Item added successfully',
            'cart_count' => Cart::count(),
            'subTotal' => Cart::subtotal(),
            'dataItem' => Cart::content()
        ]);
    }




    public function adminDashboard()
    {
        return view('admin.admin_dashboard');
    }


    public function sales()
    {
        $data = Order::where('payment_type', 'pos')->get();
        return view('admin.sales', compact('data'));
    }

    public function return()
    {
        return view('admin.return');
    }
    public function addPurchases()
    {
        return view('admin.addPurchases');
    }
    public function addPurchasesData()
    {
        return view('admin.addPurchasesData');
    }
    public function addDamages()
    {
        return view('admin.addDamages');
    }
    public function addDamagesData()
    {
        return view('admin.addDamagesData');
    }



    public function confirm()
    {
        $data = Order::where('payment_type', 'pos')->get();
        return view('admin.pending', compact('data'));
    }
    public function pending()
    {
        $data = Order::where('payment_type', 'online')->get();
        return view('admin.pending', compact('data'));
    }
}

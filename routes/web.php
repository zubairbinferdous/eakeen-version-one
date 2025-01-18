<?php

use App\Http\Controllers\AffiliatedController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\posController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubCategoryController;
use App\Models\Affiliated;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/UserOrder', function () {
    $userid = Auth::user()->id;
    $data = Order::where('payment_type', 'online')->where('id', $userid)->get();
    return view('UserOrder', compact('data'));
})->middleware(['auth', 'verified'])->name('UserOrder');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    // affiliate system

    Route::get('/getAffiliate', [AffiliatedController::class, 'affiliateSystem'])->name('affiliate_system');
    Route::get('/getAffiliateApply', [AffiliatedController::class, 'affiliateApply'])->name('affiliateApply');
    Route::post('/applyForAffiliate', [AffiliatedController::class, 'applyForAffiliate'])->name('applyForAffiliate');
    Route::get('/takeUserdata/{id}', [AffiliatedController::class, 'takeUserdata'])->name('takeUserdata');
});



// front-end-area 

Route::get('/', [FrontendController::class, 'homePage'])->name('home');
Route::get('/shop', [FrontendController::class, 'shop'])->name('shop');
Route::get('/productPage/{id}', [FrontendController::class, 'productPage'])->name('product.page');



//check out page 
Route::get('/checkout', [FrontendController::class, 'checkout'])->name('checkout');


// add to cart 
Route::post('/add-to-cart', [FrontendController::class, 'addToCart'])->name('addToCart');
Route::post('/add-to-cartOne', [FrontendController::class, 'addToCartOne'])->name('addToCartOne');
Route::get('/cartPage', [FrontendController::class, 'cartPage'])->name('cartPage');
Route::get('/removeItem/{id}', [FrontendController::class, 'removeItem'])->name('removeItem');

Route::Post('/cart/increment', [FrontendController::class, 'increment'])->name('increment');
Route::Post('/checkOutNow', [FrontendController::class, 'checkOutNow'])->name('checkOutNow');



// admin-area 
Route::get('/admin-dashboard', [posController::class, 'adminDashboard'])->middleware(['auth', 'role:admin'])->name('admin_dashboard');

Route::middleware(['auth', 'role:admin'])->group(function () {

    // bank
    Route::get('/bankData', [BankController::class, 'bank'])->name('bankData');
    Route::post('/newAccount', [BankController::class, 'newAccount'])->name('newAccount');


    // category-area
    Route::get('/category', [CategoryController::class, 'category'])->name('category');
    Route::post('/categoryAdd', [CategoryController::class, 'categoryDataInsert'])->name('categoryDataInsert');
    Route::get('/categoryData', [CategoryController::class, 'categoryData'])->name('categoryData');
    Route::get('category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('category/delete/{id}', [CategoryController::class, 'destroy'])->name('category.delete');


    //Brand-area
    Route::get('/brand', [BrandController::class, 'brand'])->name('brand');
    Route::post('/brandAdd', [BrandController::class, 'brandDataInsert'])->name('BrandDataInsert');
    Route::get('/brandData', [BrandController::class, 'brandData'])->name('BrandData');
    Route::get('brand/edit/{id}', [BrandController::class, 'brandEdit'])->name('brand.edit');
    Route::post('brand/update/{id}', [BrandController::class, 'brandUpdate'])->name('brand.update');
    Route::get('brand/delete/{id}', [BrandController::class, 'brandDestroy'])->name('brand.delete');


    //subcategory 
    Route::get('/subCategory', [SubCategoryController::class, 'subCategory'])->name('subCategory');
    Route::post('/subCategoryAdd', [SubCategoryController::class, 'subCategoryAdd'])->name('subCategoryAdd');
    Route::get('/subCategoryAll', [SubCategoryController::class, 'subCategoryAll'])->name('subCategoryAll');
    Route::get('subcategory/delete/{id}', [SubCategoryController::class, 'subCateDestroy'])->name('subcategory.delete');

    //product-area
    Route::get('/addProduct', [ProductController::class, 'addProduct'])->name('addProduct');
    Route::post('/productDataSave', [ProductController::class, 'ProductStoreData'])->name('products.store');
    Route::get('/productData', [ProductController::class, 'productData'])->name('productData');
    Route::get('/productDelete/{id}', [ProductController::class, 'productDataDelete'])->name('product.delete');


    //pos-area
    Route::get('/pos', [posController::class, 'pos'])->name('pos');
    Route::post('/add-to-cartOne-pos', [posController::class, 'addToCartOnePos'])->name('addToCartOnePos');
    Route::get('/pos-remove/{id}', [posController::class, 'removeProduct'])->name('removeProduct');

    //owner-area
    Route::get('/owner', [OwnerController::class, 'owner'])->name('owner');
    Route::get('/ownerData', [OwnerController::class, 'ownerData'])->name('ownerData');
    Route::post('/addUser', [OwnerController::class, 'addUser'])->name('addUser');
    Route::get('/deleteUser/{id}', [OwnerController::class, 'deleteUser'])->name('deleteUser');


    // sales pos 
    Route::get('/sales', [posController::class, 'sales'])->name('sales');



    Route::get('/return', [posController::class, 'return'])->name('return');
    Route::get('/addPurchases', [posController::class, 'addPurchases'])->name('addPurchases');
    Route::get('/addPurchasesData', [posController::class, 'addPurchasesData'])->name('addPurchasesData');
    Route::get('/addDamages', [posController::class, 'addDamages'])->name('addDamages');
    Route::get('/addDamagesData', [posController::class, 'addDamagesData'])->name('addDamagesData');


    Route::get('/confirm', [posController::class, 'confirm'])->name('confirm');
    Route::get('/pending', [posController::class, 'pending'])->name('pending');


    // affiliated 
    Route::get('/affiliate', [AffiliatedController::class, 'affiliate'])->name('affiliate');
    Route::post('/packages/store', [AffiliatedController::class, 'packagesStore'])->name('packages.store');
});




require __DIR__ . '/auth.php';

<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\posController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubCategoryController;
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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// admin-area 
Route::get('/admin-dashboard', [posController::class, 'adminDashboard'])->name('admin_dashboard');


Route::get('/bankData', [posController::class, 'bank'])->name('bankData');

Route::get('/sales', [posController::class, 'sales'])->name('sales');
Route::get('/return', [posController::class, 'return'])->name('return');
Route::get('/addPurchases', [posController::class, 'addPurchases'])->name('addPurchases');
Route::get('/addPurchasesData', [posController::class, 'addPurchasesData'])->name('addPurchasesData');
Route::get('/addDamages', [posController::class, 'addDamages'])->name('addDamages');
Route::get('/addDamagesData', [posController::class, 'addDamagesData'])->name('addDamagesData');


Route::get('/confirm', [posController::class, 'confirm'])->name('confirm');
Route::get('/pending', [posController::class, 'pending'])->name('pending');





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


//pos-area
Route::get('/pos', [posController::class, 'pos'])->name('pos');

//owner-area
Route::get('/owner', [OwnerController::class, 'owner'])->name('owner');
Route::get('/ownerData', [OwnerController::class, 'ownerData'])->name('ownerData');








require __DIR__ . '/auth.php';

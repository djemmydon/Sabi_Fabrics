<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\categoryController;
use App\Http\Controllers\Admin\subCategoryController;
use App\Http\Controllers\Admin\productController;
use App\Http\Controllers\Admin\FrontEndController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Front_end\cartsController;
use App\Http\Controllers\Front_end\homeController;
use App\Http\Controllers\Front_end\checkoutController;
use App\Http\Controllers\Front_end\myOrderController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [homeController::class,'index']);
Route::get('/category', [homeController::class,'cate']);
Route::get('/view-category/{slug}', [homeController::class,'viewcategory']);
Route::get('/category/{cate_slug}/{subcate_cate}', [homeController::class,'view_subcategory']);           
Route::get('/view-category/{subcate_slug}/{prod_slug}', [homeController::class,'view_prod']);           
Route::get('/search', [homeController::class, 'search']);

Auth::routes();

    Route::post('/add-to-cart', [cartsController::class, 'cart']);
    Route::post('/remove_from_cart', [cartsController::class, 'remove']);
    Route::post('/update_carts', [cartsController::class, 'update']);

Route::middleware(['auth'])->group(function () {
    Route::get('carts', [cartsController::class, 'addtocart']);
    Route::get('checkout', [checkoutController::class, 'check']);
    Route::post('place-order', [checkoutController::class, 'placeOrder']);

         Route::get('my-order',[myOrderController::class, 'my_order']);
         Route::get(' my-order/view-details/{id}',[myOrderController::class, 'view']);

        
});

   Auth::routes();

  

    Route::middleware(['auth', 'isAdmin'])->group(function () {
        
        Route::get('/dashboard', 'Admin\FrontEndController@index');
        Route::get('dashboard/categories', 'Admin\categoryController@getData');
        Route::get('add-categories', 'Admin\categoryController@add');
        Route::post('insert-category', 'Admin\categoryController@insert');
        Route::get('edit-category/{id}', [categoryController::class, 'edit']);
        Route::put('update-category/{id}', [categoryController::class, 'update']);
        Route::get('delete-category/{id}', [categoryController::class, 'destroy']);

        //sub_Cate
        Route::get('dashboard/sub-category', [subCategoryController::class, 'index']);
        Route::get('dashboard/sub-category/add-sub-category', [subCategoryController::class, 'add']);
        Route::post('insert-sub-category', 'Admin\subCategoryController@insert');
        Route::get('dashboard/edit-sub-category/{id}', [subCategoryController::class, 'edit']);
        Route::put('dashboard/sub-category/update-sub-category/{id}', [subCategoryController::class, 'update']);
        Route::get('dashboard/delete-sub-category/{id}', [subCategoryController::class, 'destroy']);



        Route::get('products', [productController::class, 'index']);
        Route::get('add-products', [productController::class, 'add']);
       Route::post('insert-products', [productController::class, 'insert']);
        Route::get('delete-prod/{id}', [productController::class, 'destroy']);
        Route::put('update-product/{id}', [productController::class, 'update']);
         Route::get('edit-prod/{id}', [productController::class, 'edit']);


         Route::get('dashboard/total-user', [FrontEndController::class, 'user']);
         Route::get('dashboard/order', [OrderController::class, 'index']);
         Route::get('dashboard/order/view-orders/{id}', [OrderController::class, 'view']);
         Route::put('update-order/{id}',[OrderController::class, 'update'] );
         Route::get('order-history', [OrderController::class, 'order_history']);



        
    });




<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\CategoryController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('register',[AuthController::class, 'register']);
Route::post('login',[AuthController::class, 'login']);

Route::middleware('auth:api')->group(function(){
    Route::get('get-user', [AuthController::class, 'userData']);

    //Products Api
    // Route::resource('customers', [CustomerController::class, 'index']);

    //Avatar Api
    Route::get('avatar', [App\Http\Controllers\API\AvatarController::class, 'index']);
    Route::get('avatar/{id}', [App\Http\Controllers\API\AvatarController::class, 'index']);
    Route::post('avatar/add', [App\Http\Controllers\API\AvatarController::class, 'store']);
    Route::patch('avatar/{id}/update', [App\Http\Controllers\API\AvatarController::class, 'update']);
    Route::delete('avatar/{id}/delete', [App\Http\Controllers\API\AvatarController::class, 'destroy']);
    
    //Products Api
    Route::get('products', [App\Http\Controllers\API\ProductController::class, 'index']);
    Route::get('products/{id}', [App\Http\Controllers\API\ProductController::class, 'index']);
    Route::post('product/add', [App\Http\Controllers\API\ProductController::class, 'store']);
    Route::post('product/{id}/update', [App\Http\Controllers\API\ProductController::class, 'update']);
    Route::delete('product/{id}/delete', [App\Http\Controllers\API\ProductController::class, 'destroy']);

    //Product searches
    Route::get('products_search', [App\Http\Controllers\API\ProductController::class, 'search']);

    //Users Api
    Route::get('users', [App\Http\Controllers\API\UserController::class, 'index']);
    Route::get('users/{id}', [App\Http\Controllers\API\UserController::class, 'index']);
    Route::post('users/{id}/update', [App\Http\Controllers\API\UserController::class, 'update']);
    Route::delete('users/{id}/delete', [App\Http\Controllers\API\UserController::class, 'destroy']);


     //Category Api
     Route::post('category/add', [App\Http\Controllers\API\CategoryController::class, 'store']);
     Route::get('categories', [App\Http\Controllers\API\CategoryController::class, 'index']);
     Route::get('categories/{id}', [App\Http\Controllers\API\CategoryController::class, 'index']);
     Route::post('category/{id}/update', [App\Http\Controllers\API\CategoryController::class, 'update']);
     Route::delete('category/{id}/delete', [App\Http\Controllers\API\CategoryController::class, 'destroy']);
     
     //Subcategory Api
     Route::get('subcategories', [App\Http\Controllers\API\SubcategoryController::class, 'index']);
     Route::post('subcategory/add', [App\Http\Controllers\API\SubcategoryController::class, 'store']);
     Route::get('subcategories/{id}', [App\Http\Controllers\API\SubcategoryController::class, 'index']);
     Route::patch('subcategory/update/{id}', [App\Http\Controllers\API\SubcategoryController::class, 'update']);
     Route::delete('subcategory/{id}/delete', [App\Http\Controllers\API\SubcategoryController::class, 'destroy']);

     //Store Api
     Route::get('shops', [App\Http\Controllers\API\ShopsController::class, 'index']);
     Route::post('shops/add', [App\Http\Controllers\API\ShopsController::class, 'store']);
     Route::get('shops/{id}', [App\Http\Controllers\API\ShopsController::class, 'index']);
     Route::patch('shops/update/{id}', [App\Http\Controllers\API\ShopsController::class, 'update']);
     Route::delete('shops/{id}/delete', [App\Http\Controllers\API\ShopsController::class, 'destroy']);

     //Store Api
     Route::get('store', [App\Http\Controllers\API\StoreController::class, 'index']);
     Route::post('store/add', [App\Http\Controllers\API\StoreController::class, 'store']);
     Route::get('store/{id}', [App\Http\Controllers\API\StoreController::class, 'index']);
     Route::patch('store/update/{id}', [App\Http\Controllers\API\StoreController::class, 'update']);
     Route::delete('store/{id}/delete', [App\Http\Controllers\API\StoreController::class, 'destroy']);

      //Designer Api
      Route::get('designer', [App\Http\Controllers\API\DesignerController::class, 'index']);
      Route::post('designer/create', [App\Http\Controllers\API\DesignerController::class, 'store']);
      Route::get('designer/{id}', [App\Http\Controllers\API\DesignerController::class, 'index']);
      Route::patch('designer/update/{id}', [App\Http\Controllers\API\DesignerController::class, 'update']);
      Route::delete('designer/{id}/delete', [App\Http\Controllers\API\DesignerController::class, 'destroy']);

    //Deals Api
    Route::get('deals', [App\Http\Controllers\API\DealsController::class, 'index']);
    Route::post('deals/create', [App\Http\Controllers\API\DealsController::class, 'store']);
    Route::get('deals/{id}', [App\Http\Controllers\API\DealsController::class, 'index']);
    Route::patch('deals/update/{id}', [App\Http\Controllers\API\DealsController::class, 'update']);
    Route::delete('deals/{id}/delete', [App\Http\Controllers\API\DealsController::class, 'destroy']);

    //Order Join Products ApiOrderProductController
    Route::get('orderproducts', [App\Http\Controllers\API\OrderProductController::class, 'index']);
    Route::post('orderproducts/create', [App\Http\Controllers\API\OrderProductController::class, 'store']);
    Route::get('orderproducts/{id}', [App\Http\Controllers\API\OrderProductController::class, 'index']);
    Route::patch('orderproducts/update/{id}', [App\Http\Controllers\API\OrderProductController::class, 'update']);
    Route::delete('orderproducts/{id}/delete', [App\Http\Controllers\API\OrderProductController::class, 'destroy']);
    
     //Role Api
     Route::get('roles', [App\Http\Controllers\API\RolesController::class, 'index']);
     Route::post('roles/create', [App\Http\Controllers\API\RolesController::class, 'store']);
     Route::get('roles/{id}', [App\Http\Controllers\API\RolesController::class, 'index']);
     Route::patch('roles/update/{id}', [App\Http\Controllers\API\RolesController::class, 'update']);
     Route::delete('roles/{id}/delete', [App\Http\Controllers\API\RolesController::class, 'destroy']);

    //Paytm API
    // Route::post('/payment/initiate', [App\Http\Controllers\API\PaymentController::class, 'initiatePayment']);
    // Route::post('/payment/callback', [App\Http\Controllers\API\PaymentController::class, 'callback'])->name('payment.callback');

    // products.reviews
    Route::get('reviews', [App\Http\Controllers\API\ReviewController::class, 'index']);
    Route::get('reviews/{id}', [App\Http\Controllers\API\ReviewController::class, 'index']);
    Route::post('reviews/create', [App\Http\Controllers\API\ReviewController::class, 'store']);
    Route::patch('reviews/update/{id}', [App\Http\Controllers\API\ReviewController::class, 'update']);
    Route::delete('reviews/{id}/delete', [App\Http\Controllers\API\ReviewController::class, 'destroy']);
});

 
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

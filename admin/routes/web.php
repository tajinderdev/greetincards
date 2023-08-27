<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\ChartController;


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
//     return view('dashboard');
// })->name('dashboard');

Route::get('orders', function () {
    return view('orders');
})->name('orders');

Route::get('order-detail', function () {
    return view('order-detail');
})->name('order-detail');

Route::get('product-list', function () {
    return view('product-list');
})->name('product-list');

Route::get('product-grid', function () {
    return view('product-grid');
})->name('product-grid');

Route::get('shopping-cart', function () {
    return view('shopping-cart');
})->name('shopping-cart');

Route::get('checkout', function () {
    return view('checkout');
})->name('checkout');

Route::get('product-detail', function () {
    return view('product-detail');
})->name('product-detail');

Route::get('customers', function () {
    return view('customers');
})->name('customers');

Route::get('chats', function () {
    return view('chats');
})->name('chats');

Route::get('email', function () {
    return view('email');
})->name('email');

Route::get('email-detail', function () {
    return view('email-detail');
})->name('email-detail');

Route::get('todo-list', function () {
    return view('todo-list');
})->name('todo-list');

Route::get('todo-detail', function () {
    return view('todo-detail');
})->name('todo-detail');

Route::get('invoices', function () {
    return view('invoices');
})->name('invoices');

Route::get('invoice-detail', function () {
    return view('invoice-detail');
})->name('invoice-detail');

Route::get('user-list', function () {
    return view('user-list');
})->name('user-list');

Route::get('user-grid', function () {
    return view('user-grid');
})->name('user-grid');

Route::get('settings', function () {
    return view('settings');
})->name('settings');

Route::get('login', function () {
    return view('login');
})->name('login');

Route::get('register', function () {
    return view('register');
})->name('register');

Route::get('reset-password', function () {
    return view('reset-password');
})->name('reset-password');

Route::get('lock-screen', function () {
    return view('lock-screen');
})->name('lock-screen');

Route::get('account-verified', function () {
    return view('account-verified');
})->name('account-verified');

Route::get('buyer-dashboard', function () {
    return view('buyer-dashboard');
})->name('buyer-dashboard');

Route::get('buyer-orders', function () {
    return view('buyer-orders');
})->name('buyer-orders');

Route::get('buyer-addresses', function () {
    return view('buyer-addresses');
})->name('buyer-addresses');

Route::get('buyer-wishlist', function () {
    return view('buyer-wishlist');
})->name('buyer-wishlist');

Route::get('profile-posts', function () {
    return view('profile-posts');
})->name('profile-posts');

Route::get('profile-connections', function () {
    return view('profile-connections');
})->name('profile-connections');

Route::get('pricing-table', function () {
    return view('pricing-table');
})->name('pricing-table');

Route::get('search-page', function () {
    return view('search-page');
})->name('search-page');

Route::get('faq', function () {
    return view('faq');
})->name('faq');

Route::get('404', function () {
    return view('404');
})->name('404');

Route::get('access-denied', function () {
    return view('access-denied');
})->name('access-denied');

Route::get('under-construction', function () {
    return view('under-construction');
})->name('under-construction');

Route::get('email-template', function () {
    return view('email-template');
})->name('email-template');

Route::get('accordion', function () {
    return view('accordion');
})->name('accordion');

Route::get('alert', function () {
    return view('alert');
})->name('alert');

Route::get('badge', function () {
    return view('badge');
})->name('badge');

Route::get('breadcrumb', function () {
    return view('breadcrumb');
})->name('breadcrumb');

Route::get('buttons', function () {
    return view('buttons');
})->name('buttons');

Route::get('button-group', function () {
    return view('button-group');
})->name('button-group');

Route::get('card', function () {
    return view('card');
})->name('card');

Route::get('card-masonry', function () {
    return view('card-masonry');
})->name('card-masonry');

Route::get('carousel', function () {
    return view('carousel');
})->name('carousel');

Route::get('collapse', function () {
    return view('collapse');
})->name('collapse');

Route::get('dropdown', function () {
    return view('dropdown');
})->name('dropdown');

Route::get('list-group', function () {
    return view('list-group');
})->name('list-group');

Route::get('modal', function () {
    return view('modal');
})->name('modal');

Route::get('navs-tabs', function () {
    return view('navs-tabs');
})->name('navs-tabs');

Route::get('pagination', function () {
    return view('pagination');
})->name('pagination');

Route::get('typography', function () {
    return view('typography');
})->name('typography');

Route::get('images', function () {
    return view('images');
})->name('images');

Route::get('figures', function () {
    return view('figures');
})->name('figures');

Route::get('progress', function () {
    return view('progress');
})->name('progress');

Route::get('spinners', function () {
    return view('spinners');
})->name('spinners');

Route::get('toasts', function () {
    return view('toasts');
})->name('toasts');

Route::get('tooltip', function () {
    return view('tooltip');
})->name('tooltip');

Route::get('popovers', function () {
    return view('popovers');
})->name('popovers');

Route::get('colors', function () {
    return view('colors');
})->name('colors');

Route::get('tables', function () {
    return view('tables');
})->name('tables');

Route::get('datatable', function () {
    return view('datatable');
})->name('datatable');

Route::get('apexchart', function () {
    return view('apexchart');
})->name('apexchart');

Route::get('chartjs', function () {
    return view('chartjs');
})->name('chartjs');

Route::get('justgage', function () {
    return view('justgage');
})->name('justgage');

Route::get('morsis', function () {
    return view('morsis');
})->name('morsis');

Route::get('vector-map', function () {
    return view('vector-map');
})->name('vector-map');

Route::get('avatar', function () {
    return view('avatar');
})->name('avatar');

Route::get('icons', function () {
    return view('icons');
})->name('icons');

Route::get('forms', function () {
    return view('forms');
})->name('forms');

Route::get('form-control', function () {
    return view('form-control');
})->name('form-control');

Route::get('select', function () {
    return view('select');
})->name('select');

Route::get('checks-radios', function () {
    return view('checks-radios');
})->name('checks-radios');

Route::get('range', function () {
    return view('range');
})->name('range');

Route::get('input-group', function () {
    return view('input-group');
})->name('input-group');

Route::get('floating-label', function () {
    return view('floating-label');
})->name('floating-label');

Route::get('forms-layout', function () {
    return view('forms-layout');
})->name('forms-layout');

Route::get('form-validation', function () {
    return view('form-validation');
})->name('form-validation');

Route::get('form-wizard', function () {
    return view('form-wizard');
})->name('form-wizard');

Route::get('form-repeater', function () {
    return view('form-repeater');
})->name('form-repeater');

Route::get('select2', function () {
    return view('select2');
})->name('select2');

Route::get('range-slider', function () {
    return view('range-slider');
})->name('range-slider');

Route::get('tags-input', function () {
    return view('tags-input');
})->name('tags-input');

Route::get('input-mask', function () {
    return view('input-mask');
})->name('input-mask');

Route::get('file-upload', function () {
    return view('file-upload');
})->name('file-upload');

Route::get('ckeditor', function () {
    return view('ckeditor');
})->name('ckeditor');

Route::get('datepicker', function () {
    return view('datepicker');
})->name('datepicker');

Route::get('clockpicker', function () {
    return view('clockpicker');
})->name('clockpicker');

Route::get('sweet-alert', function () {
    return view('sweet-alert');
})->name('sweet-alert');

Route::get('lightbox', function () {
    return view('lightbox');
})->name('lightbox');

Route::get('introjs', function () {
    return view('introjs');
})->name('introjs');

Route::get('nestable', function () {
    return view('nestable');
})->name('nestable');

Route::get('rating', function () {
    return view('rating');
})->name('rating');

Route::get('code-highlighter', function () {
    return view('code-highlighter');
})->name('code-highlighter');

Auth::routes();

Route::group(['middelware' => ['auth']], function(){
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index']);
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
    // Route::get('/settings', [App\Http\Controllers\HomeController::class, 'profile'])->name('settings');
    Route::get('/admin/settings', [App\Http\Controllers\HomeController::class, 'profile']);

    Route::resource('subcategories', App\Http\Controllers\SubcategoryController::class);
    Route::resource('categories', App\Http\Controllers\CategoryController::class);
    Route::resource('roles', App\Http\Controllers\RoleController::class);
    Route::resource('users', App\Http\Controllers\UserController::class);
    Route::put('/users/{user}/status', [App\Http\Controllers\UserController::class, 'updateStatus'])->name('users.updateStatus');

    Route::resource('banner', App\Http\Controllers\HomeBannerController::class);
    Route::resource('products', App\Http\Controllers\ProductController::class);
    Route::resource('vouchers', App\Http\Controllers\DealsVouchersController::class);
    Route::resource('shops', App\Http\Controllers\ShopsController::class);
    Route::resource('stores', App\Http\Controllers\StoreController::class);
    Route::resource('orders', App\Http\Controllers\OrderController::class);
    Route::get('/orders/{id}/invoice', [App\Http\Controllers\OrderController::class, 'generateInvoicePdf'])->name('orders.invoice');
    Route::get('form', [CountryController::class, 'country']);
    // Route::get('/orders/print/{id}', [ App\Http\Controllers\OrderController::class, 'print']);
    Route::get('/get-subcategories/{id}', [App\Http\Controllers\SubcategoryController::class, 'getSubcategories'])->name('get-subcategories');
    Route::get('/chart', [App\Http\Controllers\ChartController::class, 'salesChart'])->name('chart.sales');
});
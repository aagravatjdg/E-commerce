<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\Admin_profile;
use App\Http\Controllers\Admin_Change_Password;
use App\Http\Controllers\Admin_manage_users;
use App\Http\Controllers\Admin_manage_seller;
use App\Http\Controllers\User_profile;
use App\Http\Controllers\User_change_password;
use App\Http\Controllers\Sellercontroller;
use App\Http\Controllers\Seller_profile;
use App\Http\Controllers\Seller_change_password;
use App\Http\Controllers\Seller_company;
use App\Http\Controllers\admin_manage_party;
use App\Http\Controllers\Seller_manage_products;
use App\Http\Controllers\Admin_Manage_Products;
use App\Http\Controllers\Site_index_controller;
use App\Http\Controllers\Site_header_footer_controller;
use App\Http\Controllers\Site_contact_controller;
use App\Http\Controllers\Admin_manage_orders;
use App\Http\Controllers\Seller_manage_orders;
use App\Http\Controllers\User_order_controller;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\ChartJsController;
























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

// Route::get('/', function () {
//     return view('Site.index');
// });

//Site View
Route::get('/', [ViewController::class, 'index_view']);

Route::get('/index', [ViewController::class, 'index_view'])->name('index-view');
Route::get('/about', [ViewController::class, 'about_view'])->name('about-view');
Route::get('/contact', [ViewController::class, 'contact_view'])->name('contact-view');
Route::get('/shop', [ViewController::class, 'shop_view'])->name('shop-view');
Route::post('/user_before_login', [ViewController::class, 'before_login']);

Route::get('/shop_single/{id}', [ViewController::class, 'shop_single_view'])->name('shop_single-view');
Route::post('/site-contact-post', [ViewController::class, 'contact_data'])->name('site-contact-post');



//For Uer


Route::middleware(['auth', 'is_user'])->group(function () {

    Route::resource('user-panel',Usercontroller::class);
    Route::resource('user-profile',User_profile::class);
    Route::resource('user-change-password',User_change_password::class);
    Route::resource('user_panel_order',User_order_controller::class);

    Route::get('/user_panel_main', [UserController::class, 'show']);

    Route::get('/index_user', [Usercontroller::class, 'index_view'])->name('index-view-user');

    Route::get('/about_user', [Usercontroller::class, 'about_view'])->name('about-view-user');
    Route::get('/contact_user', [Usercontroller::class, 'contact_view'])->name('contact-view-user');
    Route::get('/shop_user', [Usercontroller::class, 'shop_view'])->name('shop-view-user');
    Route::get('/shop_single_user/{id}', [Usercontroller::class, 'shop_single_view'])->name('shop_single-view');

    Route::get('/checkout', 'App\Http\Controllers\StripeController@checkout')->name('checkout');
    Route::post('/session/{id}', 'App\Http\Controllers\StripeController@session')->name('session');
    Route::get('/success', 'App\Http\Controllers\StripeController@success')->name('success');

});



//For Admin
Route::middleware(['auth', 'is_admin'])->group(function () {

Route::resource('admin-panel',Admincontroller::class);
Route::resource('admin-profile',Admin_profile::class);
Route::resource('admin-change-password',Admin_Change_Password::class);
Route::resource('admin-manage-users',Admin_manage_users::class);
Route::resource('admin-manage-seller',Admin_manage_seller::class);
Route::resource('admin-manage-party',admin_manage_party::class);
Route::resource('admin-manage-products',Admin_Manage_Products::class);
Route::resource('admin-manage-site_index',Site_index_controller::class);
Route::resource('admin-manage-header-footer',Site_header_footer_controller::class);

Route::get('admin_manage_party/{id}',[admin_manage_party::class, 'company_verify'])->name('admin_manage_party');

Route::resource('site-contact',Site_contact_controller::class);
Route::resource('admin-manage-orders',Admin_manage_orders::class);
Route::get('admin-manage-payment',[Admin_manage_orders::class,'show'])->name('admin-manage-payment');

Route::get('chartjs', [ChartJsController::class, 'index'])->name('chartjs.index');




});


//For Seller
Route::middleware(['auth', 'is_seller'])->group(function () {

Route::resource('seller-panel',Sellercontroller::class);
Route::resource('seller-profile',Seller_profile::class);
Route::resource('seller-change-password',Seller_change_password::class);
//For Company
Route::resource('seller-company-detail',Seller_company::class);
Route::resource('seller-manage-products',Seller_manage_products::class);
Route::resource('seller-manage-orders',Seller_manage_orders::class);



Route::get('seller-products-list',[Seller_manage_products::class, 'show'])->name('Seller_manage_products');

});







Auth::routes();

Route::get('/redirects', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

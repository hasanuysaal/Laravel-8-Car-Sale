<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

/*
Route::get('/', function () {
    return view('welcome');
})->name("laravel");
*/



Route::get('/', [HomeController::class, 'index'])->name('home');

//Route::redirect('/anasayfa', '/home');


//Route::get('/home', [HomeController::class, 'index']);
//Route::get('/test/{id}/{name}', [HomeController::class, 'test'])->name("test");;
Route::get('/home', [HomeController::class, 'index'])->name('homepage');
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name("aboutus");
Route::get('/references', [HomeController::class, 'references'])->name("references");
Route::get('/faq', [HomeController::class, 'faq'])->name("faq");
Route::get('/contact', [HomeController::class, 'contact'])->name("contact");
Route::post('/sendmessage', [HomeController::class, 'sendmessage'])->name("sendmessage");
Route::get('/product/{id}', [HomeController::class, 'product'])->name("product");
Route::get('/categoryproducts/{id}', [HomeController::class, 'categoryproducts'])->name("categoryproducts");
Route::get('/addtocart/{id}', [HomeController::class, 'addtocart'])->whereNumber('id')->name("addtocart");
Route::post('/getproduct', [HomeController::class, 'getproduct'])->name("getproduct");
Route::get('/productlist/{search}', [HomeController::class, 'productlist'])->name("productlist");
Route::get('/deneme/{id}/{make}', [HomeController::class, 'deneme'])->name("deneme");


//--- Admin---

Route::middleware('auth')->prefix('admin')->group(function () {

    Route::middleware('admin')->group(function (){

        Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name("admin_home");

        Route::get('/category', [App\Http\Controllers\Admin\CategoryController::class, 'index'])->name("admin_category");
        Route::get('/category/add', [App\Http\Controllers\Admin\CategoryController::class, 'add'])->name("admin_category_add");
        Route::post('/category/create', [App\Http\Controllers\Admin\CategoryController::class, 'create'])->name("admin_category_create");
        Route::get('/category/edit/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name("admin_category_edit");
        Route::post('/category/update/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'update'])->name("admin_category_update");
        Route::get('/category/delete/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name("admin_category_delete");
        Route::get('/category/show', [App\Http\Controllers\Admin\CategoryController::class, 'show'])->name("admin_category_show");

        Route::prefix('product')->group(function () {

            Route::get('/', [App\Http\Controllers\Admin\ProductController::class, 'index'])->name("admin_products");
            Route::get('/create', [App\Http\Controllers\Admin\ProductController::class, 'create'])->name("admin_product_add");
            Route::post('/store', [App\Http\Controllers\Admin\ProductController::class, 'store'])->name("admin_product_store");
            Route::get('/edit/{id}', [App\Http\Controllers\Admin\ProductController::class, 'edit'])->name("admin_product_edit");
            Route::post('/update/{id}', [App\Http\Controllers\Admin\ProductController::class, 'update'])->name("admin_product_update");
            Route::get('/delete/{id}', [App\Http\Controllers\Admin\ProductController::class, 'destroy'])->name("admin_product_delete");
            Route::get('/show', [App\Http\Controllers\Admin\ProductController::class, 'show'])->name("admin_product_show");
        });

        Route::prefix('message')->group(function () {

            Route::get('/', [App\Http\Controllers\Admin\MessageController::class, 'index'])->name("admin_message");
            Route::get('/edit/{id}', [App\Http\Controllers\Admin\MessageController::class, 'edit'])->name("admin_message_edit");
            Route::post('/update/{id}', [App\Http\Controllers\Admin\MessageController::class, 'update'])->name("admin_message_update");
            Route::get('/delete/{id}', [App\Http\Controllers\Admin\MessageController::class, 'destroy'])->name("admin_message_delete");
            Route::get('/show', [App\Http\Controllers\Admin\MessageController::class, 'show'])->name("admin_message_show");
        });

        Route::prefix('review')->group(function () {

            Route::get('/', [App\Http\Controllers\Admin\ReviewController::class, 'index'])->name("admin_review");
            Route::post('/update/{id}', [App\Http\Controllers\Admin\ReviewController::class, 'update'])->name("admin_review_update");
            Route::get('/delete/{id}', [App\Http\Controllers\Admin\ReviewController::class, 'destroy'])->name("admin_review_delete");
            Route::get('/show/{id}', [App\Http\Controllers\Admin\ReviewController::class, 'show'])->name("admin_review_show");
        });

        Route::prefix('image')->group(function () {

            Route::get('/create/{product_id}', [App\Http\Controllers\Admin\ImageController::class, 'create'])->name("admin_image_add");
            Route::post('/store/{product_id}', [App\Http\Controllers\Admin\ImageController::class, 'store'])->name("admin_image_store");
            Route::get('/delete/{id}/{product_id}', [App\Http\Controllers\Admin\ImageController::class, 'destroy'])->name("admin_image_delete");
            Route::get('/show', [App\Http\Controllers\Admin\ImageController::class, 'show'])->name("admin_image_show");
        });

        Route::get('/setting', [App\Http\Controllers\Admin\SettingController::class, 'index'])->name("admin_setting");
        Route::post('/setting/update', [App\Http\Controllers\Admin\SettingController::class, 'update'])->name("admin_setting_update");

        Route::prefix('faq')->group(function () {

            Route::get('/', [App\Http\Controllers\Admin\FaqController::class, 'index'])->name("admin_faq");
            Route::get('/create', [App\Http\Controllers\Admin\FaqController::class, 'create'])->name("admin_faq_add");
            Route::post('/store', [App\Http\Controllers\Admin\FaqController::class, 'store'])->name("admin_faq_store");
            Route::get('/edit/{id}', [App\Http\Controllers\Admin\FaqController::class, 'edit'])->name("admin_faq_edit");
            Route::post('/update/{id}', [App\Http\Controllers\Admin\FaqController::class, 'update'])->name("admin_faq_update");
            Route::get('/delete/{id}', [App\Http\Controllers\Admin\FaqController::class, 'destroy'])->name("admin_faq_delete");
            Route::get('/show', [App\Http\Controllers\Admin\FaqController::class, 'show'])->name("admin_faq_show");
        });

        Route::prefix('user')->group(function () {

            Route::get('/', [App\Http\Controllers\Admin\UserController::class, 'index'])->name("admin_user");
            Route::post('/create', [App\Http\Controllers\Admin\UserController::class, 'create'])->name("admin_user_add");
            Route::post('/store', [App\Http\Controllers\Admin\UserController::class, 'store'])->name("admin_user_store");
            Route::get('/edit/{id}', [App\Http\Controllers\Admin\UserController::class, 'edit'])->name("admin_user_edit");
            Route::post('/update/{id}', [App\Http\Controllers\Admin\UserController::class, 'update'])->name("admin_user_update");
            Route::get('/delete/{id}', [App\Http\Controllers\Admin\UserController::class, 'destroy'])->name("admin_user_delete");
            Route::get('/show/{id}', [App\Http\Controllers\Admin\UserController::class, 'show'])->name("admin_user_show");
            Route::get('/userrole/{id}', [App\Http\Controllers\Admin\UserController::class, 'user_roles'])->name("admin_user_roles");
            Route::post('/userrolestore/{id}', [App\Http\Controllers\Admin\UserController::class, 'user_role_store'])->name("admin_user_role_add");
            Route::get('/userroledelete/{userid}/{roleid}', [App\Http\Controllers\Admin\UserController::class, 'user_role_delete'])->name("admin_user_role_delete");
        });


    });

});

Route::middleware('auth')->prefix('/user')->namespace('user')->group(function () {

    Route::get('/profile', [\App\Http\Controllers\UserController::class, 'index'])->name("myprofile");

    Route::prefix('product')->group(function () {

        Route::get('/', [App\Http\Controllers\ProductController::class, 'index'])->name("user_products");
        Route::get('/create', [App\Http\Controllers\ProductController::class, 'create'])->name("user_product_add");
        Route::post('/store', [App\Http\Controllers\ProductController::class, 'store'])->name("user_product_store");
        Route::get('/edit/{id}', [App\Http\Controllers\ProductController::class, 'edit'])->name("user_product_edit");
        Route::post('/update/{id}', [App\Http\Controllers\ProductController::class, 'update'])->name("user_product_update");
        Route::get('/delete/{id}', [App\Http\Controllers\ProductController::class, 'destroy'])->name("user_product_delete");
        Route::get('/show', [App\Http\Controllers\ProductController::class, 'show'])->name("user_product_show");
    });

    Route::prefix('image')->group(function () {

        Route::get('/create/{product_id}', [App\Http\Controllers\ImageController::class, 'create'])->name("user_image_add");
        Route::post('/store/{product_id}', [App\Http\Controllers\ImageController::class, 'store'])->name("user_image_store");
        Route::get('/delete/{id}/{product_id}', [App\Http\Controllers\ImageController::class, 'destroy'])->name("user_image_delete");
        Route::get('/show', [App\Http\Controllers\ImageController::class, 'show'])->name("user_image_show");
    });

    Route::prefix('wishlist')->group(function () {

        Route::get('/', [App\Http\Controllers\WishlistController::class, 'index'])->name("user_wishlist");
        Route::get('/store/{id}', [App\Http\Controllers\WishlistController::class, 'store'])->name("user_wishlist_add");
        Route::post('/update/{id}', [App\Http\Controllers\WishlistController::class, 'update'])->name("user_wishlist_update");
        Route::get('/delete/{id}', [App\Http\Controllers\WishlistController::class, 'destroy'])->name("user_wishlist_delete");
    });

});


Route::get('/admin/login', [App\Http\Controllers\HomeController::class, 'login'])->name("admin_login");
Route::post('/admin/logincheck', [App\Http\Controllers\HomeController::class, 'logincheck'])->name("admin_logincheck");
Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name("logout");


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware('auth')->prefix('user')->namespace('user')->group(function () {

    Route::get('/profile',[\App\Http\Controllers\UserController::class,'index'])->name('userprofile');
    Route::get('/myreviews',[\App\Http\Controllers\UserController::class,'myreviews'])->name('myreviews');
    Route::get('/deletereview/{id}',[\App\Http\Controllers\UserController::class,'destroyreview'])->name('myreview_delete');
});

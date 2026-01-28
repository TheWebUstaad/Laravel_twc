<?php

use App\Http\Controllers\AdminController;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


// without Controller Routes
Route::get('/file',[ProductController::class,'create'])->name('products.create');

Route::post('/file/store',[ProductController::class,'store'])->name('products.store');

Route::get('/',[ProductController::class,'index'])->name('products.index');

Route::get('/file/{product}/edit',[ProductController::class,'edit'])->name('products.edit');

Route::put('/file/{product}/update',[ProductController::class,'update'])->name('products.update');

Route::delete('/file/{product}',[ProductController::class,'destroy'])->name('products.destroy');


Route::resource('categories',CategoryController::class)->except('show');

Route::get('/login',[AuthController::class,'loginForm'])->name('login.form');
Route::get('/register',[AuthController::class,'registerForm'])->name('register.form');
Route::post('/register/store',[AuthController::class,'register'])->name('register.formstore');

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('admin/create',[AdminController::class,'create']);
// Route::post('admin/store',[AdminController::class,'store'])->name('admin.store');

// Route::get('/testingroute',function(){
//     return view('admins.create');
// })->name('testingroute');

// Route::get('/mainpage',function(){
//     return view('admins.index');
// })->name('mainpage');

// Route::get('/about',function(){
//     return view('admins.about');
// })->name('about');

// Route::resource('admin',AdminController::class);





// Route::group(['prefix'=>'shop'],function(){
//     Route::get('/index',function(){
//     return view('shop.index');
// })->name('shopindex');


// Route::get('/about',function(){
//     return view('shop.about');
// })->name('shopabout');



// Route::get('/contact',function(){
//     return view('shop.contact');
// })->name('shopcontact');


// Route::get('/products',function(){
//     return view('shop.products');
// })->name('shopproducts');
    
// });


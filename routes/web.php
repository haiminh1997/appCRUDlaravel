<?php

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

Route::get('/', function () {
    return view('webmag.views.homepage.homepage');
});
Route::get('/category/{id}/{minh}', function ($id,$minh) {
    var_dump($id);
    echo "<br>";
    var_dump($minh);
    exit();
    return view('webmag.views.category.category');
});
Route::get('/contact', function () {
    return view('webmag.views.contact.contact');
});
Route::get('/page', function () {
    return view('webmag.views.page.page');
});
Route::get('/post', function () {
    return view('webmag.views.post.post');
});

/*
 * Gọi đến view welcome
 */
Route::get("/abc" , function (){
    return view('welcom1');
});
Route::get("/abc1", function (){
    return view('folder1.welcome2');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/**
 * Route admin CRUD trả về view
 */
Route::prefix("admin")->group(function() {
    // view liệt kê các bản ghi
    Route::get("/products", "Backend\ProductController@index");
    Route::get("/products/demo1", "Backend\ProductController@demo1");
    Route::get("/products/demo2", "Backend\ProductController@demo2");
    // view tạo mới
    Route::get("/products/create", "Backend\ProductController@create");
    // view sửa
    Route::get("/products/edit/{id}", "Backend\ProductController@edit");
    // view xoá
    Route::get("/products/delete/{id}", "Backend\ProductController@delete");
    /**
     * Tạo 3 route để trực tiếp thêm sửa xóa
     */
    // thêm mới bản ghi
    Route::post("/products","Backend\ProductController@store");
    //Sửa sản phẩm
    Route::post("/products/edit/{id}","Backend\ProductController@update");
    //Xóa sản phẩm
    Route::post("/products/delete/{id}","Backend\ProductController@destroy");
});


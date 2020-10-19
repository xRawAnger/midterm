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
    return view('welcome');
});

Route::get("/admin","AdminController@index")->name("adminindex");

Route::get("/user","UserController@index")->name("userindex");

Route::post("/admin/create","AdminController@create")->name("admincreate");
Route::get("/admin/store","AdminController@store")->name("adminstore");

Route::get("/admin/delete","AdminController@delete")->name("admindelete");
Route::post("/admin/update","AdminController@update")->name("adminupdate");

Route::get("/admin/edit/{id}","AdminController@edit")->name("adminedit");
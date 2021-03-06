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
Route::get('/', "StudentController@test");
Route::get('/home', "StudentController@show");
Route::get("/addMember","StudentController@create");
Route::post('/addMember','StudentController@add');
Route::get("/member/delete/{member}","StudentController@delete");
Route::get("/editMember/{member}","StudentController@edit");
Route::post("member/update/{member}","StudentController@update");

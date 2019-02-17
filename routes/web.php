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

Route::get('/app/single', function () {
    return view('admin.single');
});

// Route::get('/app/traning', function () {
//     return view('admin.single');
// });

Route::get('/app/workshop', function () {
    return view('admin.single');
});

Auth::routes();

// Admin Route Start
Route::get('/app', 'Admin\RootController@index')->name('app');

Route::get('/app/user', 'Admin\RootController@newUser')->name('request');
Route::put('/app/user/verify/{id}', 'Admin\RootController@verifyResearchUser');
Route::put('/app/user/unverify/{id}', 'Admin\RootController@unverifyResearchUser');
Route::get('/app/user/add', 'Admin\AdminController@createUser');
Route::post('/app/user/store', 'Admin\AdminController@storeUser')->name('storeUser');






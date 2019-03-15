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

Route::get('/app/test', function () {
    return view('admin.message.index');
});

// Route::get('/app/traning', function () {
//     return view('admin.single');
// });

Route::get('/app/workshop', function () {
    return view('admin.single');
});

Auth::routes();

// Admin Panel Route Start
Route::get('/app', 'Admin\DefaultController@index')->name('app');

Route::get('/app/user', 'Admin\AdminController@newUser')->name('request');
Route::put('/app/user/verify/{id}', 'Admin\AdminController@verifyResearchUser');
Route::put('/app/user/unverify/{id}', 'Admin\AdminController@unverifyResearchUser');
Route::get('/app/user/add', 'Admin\AdminController@createUser')->name('createUser');
Route::post('/app/user/add', 'Admin\AdminController@storeUser')->name('storeUser');

Route::resource('/app/skill', 'Admin\SkillController', ['as'=>'admin']);
Route::resource('/app/research', 'Admin\ResearchController', [
    'except' => [ 'show' ],
    'as'=>'admin'
]);

Route::put('/app/research/publish/{id}', 'Admin\AdminController@publish');
Route::put('/app/research/pending/{id}', 'Admin\AdminController@pending');

Route::get('/app/research/{id}', 'Admin\DefaultController@singleResearch');
Route::put('/app/research/{id}/apply', 'Admin\DefaultController@apply');

// Interview Appointmaent Route
Route::get('/app/research/{id}/call/{user}', 'Admin\SupervisorController@interviewForm');
Route::put('/app/invite', 'Admin\SupervisorController@interviewSave');


// Interview Appointmaent Route
Route::get('/app/research/{id}/award/{user}/raid/{raid}', 'Admin\SupervisorController@award');
Route::put('/app/invite', 'Admin\SupervisorController@interviewSave');






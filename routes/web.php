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

use App\Http\Controllers\UserController;
use App\Http\Controllers\ScoutlistController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ScoutController;


use function PHPSTORM_META\map;



Auth::routes();

Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');

Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');

Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');

Route::post('password/reset/{token}', 'Auth\ResetPasswordController@reset');


//resource contoroller 

Route::group(['middleware' => 'auth'], function() {
    
Route::resource('posts','PostController');
Route::resource('scouts','ScoutController',['only' => ['index','edit', 'update',]]);
Route::resource('scoutlists','ScoutlistController',['only' => ['index','show', 'edit',]]);


Route::get('/past/post', 'PostController@past')->name('posts.past');


//新規登録（選手）

Route::get('/newplayer_register',[UserController::class, 'createnewplayer'])->name('create.newplayer');
Route::post('/newplayer_register',[UserController::class, 'createnewplayerregister']);

Route::get('/newplayer_confirm', function () {
    return view('newplayer_confirm');
});

//選手カード編集（選手）
Route::get('/playercard_edit_form/{id}',[UserController::class, 'editcard'])->name('edit.card');
Route::post('/playercard_edit_form/{id}',[UserController::class, 'editcardform']);


//新規登録（スカウト）

Route::get('/newscout_register',[UserController::class, 'createnewscout'])->name('create.newscout');
Route::post('/newscout_register',[UserController::class, 'createscoutregister']);

//スカウト情報編集（スカウト）
Route::get('/scout_edit_form/{id}',[UserController::class, 'editscout'])->name('edit.scout');
Route::post('/scout_edit_form/{id}',[UserController::class, 'editscoutform']);

//スカウトお断り
Route::get('/scoutlist/delete/{id}',[ScoutlistController::class, 'delete'])->name('scoutlists.delete');


//無限スクロール

Route::post('/infinite_scroll',[PostController::class, 'infiniteScroll']);

//my page
Route::get('/mypage',[UserController::class, 'mypage'])->name('mypage');

});















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

//スカウトページ
use App\Http\Controllers\UserController;
use App\Http\Controllers\ScoutlistController;
use App\Http\Controllers\PostController;

use function PHPSTORM_META\map;

Route::get('/post_detail', function () {
    return view('postdetail');
});

Route::get('/scout_form', function () {
    return view('scoutform');
});

Route::get('/scout_complete', function () {
    return view('scoutcomplete');
});

Route::get('/scout_now', function () {
    return view('scoutnow');
});

Route::get('/postdetail_scoutnow', function () {
    return view('postdetailscoutnow');
});



//選手ページ


Route::get('/playercard_edit_form', function () {
    return view('playercard_edit_form');
});

Route::get('/get_scout', function () {
    return view('get_scout');
});

Route::get('/scout_detail', function () {
    return view('scout_detail');
});

Route::get('/scoutsend_complete', function () {
    return view('scoutsend_complete');
});

Route::get('/scoutdelete_confirm', function () {
    return view('scoutdelete_confirm');
});

Route::get('/past_post_details', function () {
    return view('past_post_details');
}); 

Route::get('/new_postform', function () {
    return view('new_postform');
});

Route::get('/post_edit_form', function () {
    return view('post_edit_form');
});


//新規登録（選手）

Route::get('/newplayer_register', function () {
    return view('newplayer_register');
});

Route::get('/newplayer_confirm', function () {
    return view('newplayer_confirm');
});



//新規登録（スカウトチーム）

Route::get('/newscout_register', function () {
    return view('newscout_register');
});

Route::get('/newscout_confirm', function () {
    return view('newscout_confirm');
});







Auth::routes();

Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');

Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');

Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');

Route::post('password/reset/{token}', 'Auth\ResetPasswordController@reset');

Route::get('/home', 'HomeController@index')->name('home');

//resource contoroller 

Route::group(['middleware' => 'auth'], function() {
    
Route::resource('posts','PostController');
Route::resource('scouts','ScoutController');
Route::resource('scoutlists','ScoutlistController');


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
Route::get('/post_detail',[PostController::class, 'show']);
});















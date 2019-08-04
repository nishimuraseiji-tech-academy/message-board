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


/*
Route::get('/', function () {
    //return view('welcome');
    Route::get('/', 'MessagesController@index');
    Route::resource('messages', 'MessagesController');
});
*/

/*
Route::get('/', 'MessagesController@index');
Route::resource('messages', 'MessagesController');


// メッセージボート：6.2　GRUDのコードを追記 ↓
//（１〜５は、数字の順番というより、idみたいに区別するため）
// １：メッセージの個別詳細ページ表示
Route::get('messages/{id}', 'MessagesController@show');

// ２：メッセージの新規登録を処理（新規登録画面を表示するためのものではありません）
Route::post('messages', 'MessagesController@store');

// ３：メッセージの更新処理（編集画面を表示するためのものではありません）
Route::put('messages/{id}', 'MessagesController@update');

// ４；メッセージを削除
Route::delete('messages/{id}', 'MessagesController@destroy');


// １−２：index: showの補助ページ
Route::get('messages', 'MessagesController@index')->name('messages.index');

// ２−２：メッセージの保存先をつくる（@create）
// create: 新規作成用のフォームページ
Route::get('messages/create', 'MessagesController@create')->name('messages.create');

// ３−２：updateするために更新用のページを作る
// edit: 更新用のフォームページ
Route::get('messages/{id}/edit', 'MessagesController@edit')->name('messages.edit');

*/

/*
// デフォルトのコメント部分は省略
Route::get('/', 'MessagesController@index');

Route::resource('messages', 'MessagesController');

// CRUD
// メッセージの個別詳細ページ表示
Route::get('messages/{id}', 'MessagesController@show');

// メッセージの新規登録を処理（新規登録画面を表示するためのものではありません）

Route::post('messages', 'MessagesController@store');

// メッセージの更新処理（編集画面を表示するためのものではありません）
Route::put('messages/{id}', 'MessagesController@update');

// メッセージを削除
Route::delete('messages/{id}', 'MessagesController@destroy');

// index: showの補助ページ
Route::get('messages', 'MessagesController@index')->name('messages.index');

// create: 新規作成用のフォームページ
Route::get('messages/create', 'MessagesController@create')->name('messages.create');

// edit: 更新用のフォームページ
Route::get('messages/{id}/edit', 'MessagesController@edit')->name('messages.edit');
*/

Route::get('/', 'MessagesController@index');

Route::resource('messages', 'MessagesController');

// CRUD
// メッセージの個別詳細ページ表示
Route::get('messages/{id}', 'MessagesController@show')->name('messages.show');
// Route::get('messages/{id}', 'MessagesController@show');

// メッセージの新規登録を処理（新規登録画面を表示するためのものではありません）

Route::post('messages', 'MessagesController@store')->name('messages.store');

// メッセージの更新処理（編集画面を表示するためのものではありません）
Route::put('messages/{id}', 'MessagesController@update');

// メッセージを削除
Route::delete('messages/{id}', 'MessagesController@destroy');

// index: showの補助ページ
Route::get('messages', 'MessagesController@index')->name('messages.index');

// create: 新規作成用のフォームページ
Route::get('messages/create', 'MessagesController@create')->name('messages.create');

// edit: 更新用のフォームページ
Route::get('messages/{id}/edit', 'MessagesController@edit')->name('messages.edit');
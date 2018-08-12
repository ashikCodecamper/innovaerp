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

Auth::routes();
// Settings routes
Route::group(['prefix'=>'settings','middleware'=>'auth'],function() {
    Route::get('group','GroupController@index')->name('groupindex');
    Route::get('group-user','GroupController@groupUser')->name('groupindex');

});
// HR Vacancy ALL Routs

Route::group(['prefix'=>'vacancy','middleware'=>'guest'],function() {
    Route::get('list','VacancyController@index')->name('vacancylist');
    Route::get('apply','VacancyController@apply')->name('apply');
    Route::get('show/{id}','VacancyController@show')->name('vacancyshow');
    Route::post('saveapply','VacancyController@saveapply')->name('saveapply');
});

//Development Critical Path
Route::group(['prefix'=>'dcp','middleware'=>'auth'],function(){
  Route::resources([
    'protoentry'=> 'ProtoEntryController',
  ]);
});

// Home Routes
Route::get('/home', 'HomeController@index')->name('home');

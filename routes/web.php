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

Route::group(['middleware' => ['auth','checkRole:admin']],function(){
    Route::get('/laporan','laporanAdminController@index');
    Route::post('/laporan/submit', 'laporanAdminController@submit');
    Route::resource('feedback', 'FeedbackReportController');
    Route::resource('/divisi', 'DivisiController');
});

Route::group(['middleware' => ['auth','checkRole:hero']],function(){
    Route::get('/lakukanaksi', 'lakukanAksiController@index')->middleware('verified');
    Route::post('go', 'lakukanAksiController@save');
    Route::get('/laporanUser','laporanUserController@index')->middleware('verified');
    Route::get('/feedback-user', 'FeedbackController@index')->middleware('verified');
    Route::post('apply', 'FeedbackController@save');
    Route::get('/status', 'BuktiController@index')->middleware('verified');
    // Route::get('vendor/add', function(){
    //     return View::make('add');
    // });
});

Route::group(['middleware' => ['auth','checkRole:pekerja']],function(){
    Route::get('/terima/tugas','pekerjaController@index')->middleware('verified');
    Route::post('send/email', 'MailController@sendemail');
    Route::view('/bukti', 'statusPekerja')->middleware('verified');
    Route::post('submit', 'BuktiController@save');
});

Route::group(['middleware' => ['auth','checkRole:admin,hero,pekerja']],function(){
    Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
});

Auth::routes(['verify' => true]);

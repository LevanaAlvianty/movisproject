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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/logintemplate', 'HomeController@coba')->name('logintemplate');
Route::group(['as'=>'admin.','prefix'=>'admin','namespace'=>'Admin','middleware'=>['auth','admin']], function(){
    Route::get('dashboard','DashboardController@index')->name('dashboard');
});

Route::group(['as'=>'spi.','prefix'=>'spi','namespace'=>'Spi','middleware'=>['auth','spi']], function(){
    Route::get('dashboard','DashboardController@index')->name('dashboard');
    Route::resource('proposal','ProposalController');
    Route::get('daftarproposal','ProposalController@daftar')->name('proposal.daftar');
    Route::get('penilaianproposal','ProposalController@penilaian')->name('proposal.penilaian');
    Route::get('editproposal','ProposalController@editproposal')->name('proposal.editproposal');
    Route::get('ketuapelaksana', 'ProposalController@KetuaPelaksana');
    Route::get('kodeunit', 'ProposalController@Kodeunit');
});

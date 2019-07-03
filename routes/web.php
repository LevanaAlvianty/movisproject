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
Route::get('/pegawai/login', function () {
    return view('auth.pegawai-login');
});

Route::get('/pegawai/login', 'Auth\PegawaiLoginController@showLoginForm')->name('pegawai.login');
Route::post('/pegawai/login', 'Auth\PegawaiLoginController@login')->name('pegawai.login.post');
Route::post('/pegawai/logout', 'Auth\PegawaiLoginController@logout')->name('pegawai.logout');

Route::group(['middleware' => 'pegawai'], function () {
    Route::get('/pegawai/home', 'Pegawai\HomeController@index')->name('pegawai.home');
});

 // PIC
Route::get('/spi/dashboard','Spi\DashboardController@index')->name('spi.dashboard');
Route::resource('/spi/proposal','Spi\ProposalController');
Route::get('/spi/daftarproposal','Spi\ProposalController@daftar')->name('proposal.daftar');
Route::get('/spi/penilaianproposal','Spi\ProposalController@penilaian')->name('proposal.penilaian');
Route::get('/spi/editproposal','Spi\ProposalController@editproposal')->name('proposal.editproposal');
Route::get('ketuapelaksana', 'Spi\ProposalController@KetuaPelaksana');
Route::get('kodeunit', 'Spi\ProposalController@Kodeunit');
Route::get('unitpelaksana', 'Spi\ProposalController@Unitpelaksana');

// Admin Perencaan
Route::resource('/perencanaan/kegiatanpo','AdminPerencanaan\KegiatanPOController');
Route::post('/kegiatan/import_excel', 'AdminPerencanaan\KegiatanPOController@import_excel');
Route::get('/kegiatan/export_excel', 'AdminPerencanaan\KegiatanPOController@export_excel');

/* Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logintemplate', 'HomeController@coba')->name('logintemplate');
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
    Route::get('unitpelaksana', 'ProposalController@Unitpelaksana');
}); */

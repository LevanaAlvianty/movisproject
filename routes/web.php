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
    return view('pegawai-welcome');
});

Route::get('/pegawai/login', 'Auth\PegawaiLoginController@showLoginForm')->name('pegawai.login');
Route::post('/pegawai/login', 'Auth\PegawaiLoginController@login')->name('pegawai.login.post');
Route::post('/pegawai/logout', 'Auth\PegawaiLoginController@logout')->name('pegawai.logout');
// Route::get('/pegawai/changePassword','Admin\ProfilController@showChangePasswordForm');
Route::post('/pegawai/changePassword','ProfilController@changePassword')->name('pegawai.changePassword');

Route::group(['middleware' => 'pegawai'], function () {
    Route::get('/pegawai/home', 'Pegawai\HomeController@index')->name('pegawai.home');
});
Route::post('/tinymce/upload', 'Tinymce\UploadController@store')->name('tinymce.upload.store');

Route::resource('profil','ProfilController');

// PIC
//Dashboard
Route::get('/spi/dashboard','Spi\DashboardController@index')->name('spi.dashboard');

//Proposal
Route::get('/findBarang','Spi\ProposalController@findBarang');
Route::get('/findData','Spi\ProposalController@findData');
Route::get('/findPanitiaDalam','Spi\ProposalController@findPanitiaDalam');
Route::get('/findPeserta','Spi\ProposalController@findPeserta');
Route::get('ketuapelaksana', 'Spi\ProposalController@KetuaPelaksana');
Route::get('kodeunit', 'Spi\ProposalController@Kodeunit');
Route::get('/spi/proposal','Spi\ProposalController@index')->name('proposal.index');
Route::get('/spi/proposal/{proposal}','Spi\ProposalController@buka')->name('proposal.pertama');
Route::post('/spi/proposal/{proposal}','Spi\ProposalController@insert')->name('proposal.insert');
Route::get('/spi/proposal/{proposal}/edit','Spi\ProposalController@edit')->name('proposal.edit');
Route::put('/spi/proposal/{proposal}', 'Spi\ProposalController@update')->name('proposal.update');
Route::get('unitpelaksana', 'Spi\ProposalController@Unitpelaksana');
Route::get('/viewpdf/{proposal}','Spi\ProposalController@ViewPDF')->name('proposal.viewpdf');
Route::get('/viewpdf2/{idKegiatan}','Spi\ProposalController@viewPdf2')->name('proposal.viewpdf2');

//Laporan
Route::get('/spi/laporan','Spi\LaporanController@index')->name('laporan.index');
Route::get('/spi/laporan/{laporan}','Spi\LaporanController@buatLaporan')->name('laporan.buatlaporan');
Route::post('/spi/laporan/{laporan}','Spi\LaporanController@simpanLaporan')->name('laporan.simpanlaporan');
Route::get('/spi/laporan/{laporan}/edit','Spi\LaporanController@ubahLaporan')->name('laporan.ubahLaporan');
Route::put('/spi/laporan/{laporan}','Spi\LaporanController@updateLaporan')->name('laporan.updateLaporan');
Route::get('/viewlaporanpdf/{idKegiatan}','Spi\LaporanController@viewLaporanPdf')->name('laporan.viewlaporanpdf');

//Kegiatan
Route::resource('/spi/kegiatan','Spi\KegiatanController');

// Admin Perencaan
Route::get('/kegiatan/export_excel', 'AdminPerencanaan\KegiatanPOController@export_excel');
Route::post('/kegiatan/import_excel', 'AdminPerencanaan\KegiatanPOController@import_excel');
Route::get('pic', 'AdminPerencanaan\KegiatanPOController@pic');
Route::resource('/perencanaan/kegiatanpo','AdminPerencanaan\KegiatanPOController');

//Admin
Route::resource('/admin/akun','Admin\AkunController');
Route::resource('/admin/barang','Admin\BarangController');
Route::resource('/admin/indikator','Admin\IndikatorController');
Route::resource('/admin/kelang','Admin\KelompokAnggaranController');
Route::resource('/admin/kelompok-akun','Admin\KelompokAkunController');
Route::resource('/admin/pegawai','Admin\PegawaiController');
Route::resource('/admin/pejabat','Admin\PejabatController');
Route::resource('/admin/programutama','Admin\ProgramUtamaController');
Route::resource('/admin/renstra','Admin\RenstraController');
Route::resource('/admin/role','Admin\RolesController');
Route::resource('/admin/satuan','Admin\SatuanController');

//Pimpinan
Route::resource('/pimpinan/kegiatanpimpinan','Pimpinan\KegiatanPimpinanController');

//AdminSPI
Route::resource('/adminspi/kegiatanadminspi','Adminspi\KegiatanAdminSpiController');

//KabagKeuangan
Route::resource('/kabagkeuangan/kegiatankabagkeuangan','KabagKeuangan\KegiatanKabagKeuanganController');

//ReviewerSPI
Route::resource('/reviewerspi/reviewproposal','ReviewerSpi\ReviewProposalController');
Route::get('/reviewerspi/reviewproposal/{reviewproposal}','ReviewerSpi\ReviewProposalController@buatReviewProposal')->name('reviewerspi.reviewproposal');
Route::post('/reviewerspi/reviewproposal/{reviewproposal}','ReviewerSpi\ReviewProposalController@simpanReviewProposal')->name('reviewerspi.simpan');
Route::get('/reviewerspi/reviewproposal/{reviewproposal}/edit','ReviewerSpi\ReviewProposalController@edit')->name('reviewerspi.edit');
Route::put('/reviewerspi/reviewproposal/{reviewproposal}', 'ReviewerSpi\ReviewProposalController@update')->name('reviewerspi.update');
Route::put('/reviewerspi/reviewproposal', 'ReviewerSpi\ReviewProposalController@approval')->name('reviewerspi.approval');
Route::put('/reviewerspi/reviewproposal/anggaran-approved/{id}', 'ReviewerSpi\ReviewProposalController@anggaranApproved')->name('reviewerspi.reviewproposal.anggaran-approved');
Route::put('/reviewerspi/reviewproposal/anggaran-unapproved/{id}', 'ReviewerSpi\ReviewProposalController@anggaranUnapproved')->name('reviewerspi.reviewproposal.anggaran-unapproved');
Route::put('/reviewerspi/reviewproposal/proposal-unapproved/{id}', 'ReviewerSpi\ReviewProposalController@proposalUnapproved')->name('reviewerspi.reviewproposal.proposal-unapproved');

Route::get('/reviewerspi/reviewlaporan','ReviewerSpi\ReviewLaporanController@index')->name('reviewerspi.reviewlaporan.index');
Route::get('/reviewerspi/reviewlaporan/{reviewlaporan}','ReviewerSpi\ReviewLaporanController@buatReviewLaporan')->name('reviewerspi.reviewlaporan.buatreviewlaporan');
Route::post('/reviewerspi/reviewlaporan/{reviewlaporan}','ReviewerSpi\ReviewLaporanController@simpanReviewLaporan')->name('reviewerspi.reviewlaporan.simpanreviewlaporan');
Route::get('/reviewerspi/reviewlaporan/{reviewlaporan}/edit','ReviewerSpi\ReviewLaporanController@editReviewLaporan')->name('reviewerspi.reviewlaporan.editreviewlaporan');
Route::put('/reviewerspi/reviewlaporan/{reviewlaporan}', 'ReviewerSpi\ReviewLaporanController@updateReviewLaporan')->name('reviewerspi.reviewlaporan.updatereviewlaporan');
Route::put('/reviewerspi/reviewlaporan/laporan-approved/{id}', 'ReviewerSpi\ReviewLaporanController@laporanApproved')->name('reviewerspi.reviewlaporan.laporan-approved');
Route::put('/reviewerspi/reviewlaporan/laporan-unapproved/{id}', 'ReviewerSpi\ReviewLaporanController@laporanUnapproved')->name('reviewerspi.reviewlaporan.laporan-unapproved');

//Chart
Route::get('/get-proposal-chart-data','Pegawai\HomeController@getYearlyProposalData');
Route::get('/get-laporan-chart-data','Pegawai\HomeController@getYearlyLaporanData');
Route::get('/test','Pegawai\HomeController@getYearlyProposalData');


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


Route::get('/', 'IndexController@index')->name('index');


Auth::routes();

Route::middleware('permission:dashboard')->get('/home', 'HomeController@index')->name('home');

Route::get('/adminlte', function () {
    return view('admin/adminlte');
});

//Profil
Route::prefix('profil')->group(function () {
    Route::get('profil-bspjimedan', 'IndexController@profilbspjimedan');
    Route::get('profil-ppid', 'IndexController@profilppid');
    Route::get('tugas-tanggung-jawab-ppid', 'IndexController@tugastanggungjawabppid');
    Route::get('struktur-ppid', 'IndexController@strukturppid');
    Route::get('visi-misi-ppid', 'IndexController@visimisippid');
});


//Layanan Informasi
Route::prefix('layanan-informasi')->group(function () {
    Route::get('permohonan-informasi', 'IndexController@permohonaninformasi');
    Route::post('proses-permohonan-informasi', 'IndexController@prosespermohonaninformasi');
    Route::get('permohonan-keberatan-informasi', 'IndexController@permohonankeberataninformasi');
    Route::post('proses-permohonan-keberatan-informasi', 'IndexController@prosespermohonankeberataninformasi');
    Route::get('laporan-layanan-informasi', 'IndexController@laporanlayananinformasi');
    Route::get('unit-pelayanan-publik', 'IndexController@unitpelayananpublik');
});


//Standar Layanan
Route::prefix('standar-layanan')->group(function () {
    Route::get('tata-cara-permohonan-informasi', 'IndexController@tatacarapermohonaninformasi');
    Route::get('tata-cara-pengajuan-keberatan', 'IndexController@tatacarapengajuankeberatan');
    Route::get('tata-cara-penyelesaian-sengketa-informasi', 'IndexController@tatacarapenyelesaiansengketainformasi');
    Route::get('maklumat-pelayanan-informasi-publik', 'IndexController@maklumatpelayananinformasipublik');
    Route::get('jalur-waktu-layanan', 'IndexController@jalurwaktulayanan');
    Route::get('biaya-layanan', 'IndexController@biayalayanan');
});

//Informasi Publik
Route::prefix('informasi-publik')->group(function () {
    Route::get('informasi-berkala', 'IndexController@informasiberkala');
    Route::get('informasi-setiap-saat', 'IndexController@informasisetiapsaat');
    Route::get('informasi-serta-merta', 'IndexController@informasisertamerta');
    Route::get('informasi-dikecualikan', 'IndexController@informasidikecualikan');
});

//Permohonan Informasi Publik
Route::get('daftar-permohonan-informasi-publik', 'InformasiPublikController@daftarpermohonaninformasipublik');
Route::get('daftar-permohonan-informasi-publik/{status}', 'InformasiPublikController@daftarpermohonaninformasipublikbystatus');
Route::get('update-permohonan-in-progress/{id}', 'InformasiPublikController@updatepermohonaninprogress');
Route::post('update-permohonan-solved', 'InformasiPublikController@updatepermohonansolved');
Route::post('update-permohonan-cancel', 'InformasiPublikController@updatepermohonancancel');
Route::get('detail-permohonan-informasi-publik/{id}', 'InformasiPublikController@detailpermohonan');

//Permohonan Keberatan Informasi Publik
Route::get('daftar-permohonan-keberatan-informasi-publik', 'InformasiPublikController@daftarpermohonankeberataninformasipublik');
Route::get('daftar-permohonan-keberatan-informasi-publik/{status}', 'InformasiPublikController@daftarpermohonankeberataninformasipublikbystatus');
Route::get('update-permohonan-keberatan-in-progress/{id}', 'InformasiPublikController@updatepermohonankeberataninprogress');
Route::post('update-permohonan-keberatan-solved', 'InformasiPublikController@updatepermohonankeberatansolved');
Route::post('update-permohonan-keberatan-cancel', 'InformasiPublikController@updatepermohonankeberatancancel');
Route::get('detail-permohonan-keberatan-informasi-publik/{id}', 'InformasiPublikController@detailpermohonankeberatan');

//Informasi Layanan
Route::get('tarif-layanan', 'IndexController@tariflayanan');
Route::get('jsondataparameter/{id_komoditi}','IndexController@jsondataparameter');
Route::get('jsongethargaparameter/{id_parameter}','IndexController@jsongethargaparameter');
Route::get('alur-layanan-pengujian', 'IndexController@alurlayananpengujian');
Route::get('alur-layanan-kalibrasi', 'IndexController@alurlayanankalibrasi');
Route::get('alur-layanan-sertifikasi', 'IndexController@alurlayanansertifikasi');
Route::get('standar-pelayanan', 'IndexController@standarpelayanan');


//Pengaduan
Route::get('pengaduan', 'IndexController@pengaduan');
Route::post('proses-pengaduan', 'IndexController@prosespengaduan');
Route::get('daftar-pengaduan', 'PengaduanController@daftarpengaduan');
Route::get('daftar-pengaduan/{status}', 'PengaduanController@daftarpengaduanbystatus');
Route::get('update-pengaduan-in-progress/{id}', 'PengaduanController@updatepengaduaninprogress');
Route::post('update-pengaduan-solved', 'PengaduanController@updatepengaduansolved');
Route::post('update-pengaduan-cancel', 'PengaduanController@updatepengaduancancel');
Route::get('detail-pengaduan/{id}', 'PengaduanController@detailpengaduan');

//Kontak
Route::get('kontak-kami', 'IndexController@kontakkami');

//Pengaturan
Route::get('role', 'PengaturanController@daftarrole');
Route::get('permission', 'PengaturanController@daftarpermission');
Route::get('tambahpermission', 'PengaturanController@tambahpermission');
Route::post('prosestambahpermission', 'PengaturanController@prosestambahpermission');
Route::get('user', 'PengaturanController@daftaruser');
Route::get('ubahuser/{id_user}','PengaturanController@ubahuser');
Route::post('prosesubahuser','PengaturanController@prosesubahuser');
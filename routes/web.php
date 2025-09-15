<?php

use App\Http\Controllers\Admin\ArtikelController;
use App\Http\Controllers\Admin\BaseController;
use App\Http\Controllers\Admin\LaporanController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\MutabaahController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\VidController;
use App\Models\Artikel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('front.ini');
});

Auth::routes();

// ADMIN
Route::prefix('Admin')->middleware(['auth', 'isAdmin'])->group(function(){

    Route::controller(BaseController::class)->group(function(){
        Route::get('/dashboard', 'index')->name('dashboard');
    });
    Route::controller(UserController::class)->group(function(){
        Route::get('/dashboard/data-user', 'index')->name('data.user');
        Route::get('/dashboard/data-user/detail/{id}', 'detail')->name('data.user.detail');
        Route::get('/dashboard/data-user/mutabaah/{id}', 'mutabaah')->name('data.user.mutabaah');
        Route::delete('/dashboard/data-user/mutabaah/{mutabaah}', 'destroyMutabaah')->name('data.user.mutabaah.delete');
        Route::delete('/dashboard/data-user/hapus/{id}', 'hapusUser')->name('hapus.user');
    });
    Route::controller(ReviewController::class)->group(function(){
        Route::get('/dashboard/review{id}', 'index')->name('data.review');
        Route::post('/dashboard/create-review', 'store')->name('create.review');
        Route::delete('/dashboard/review/{id}', 'destroy')->name('delete.review');
    });
    Route::controller(LaporanController::class)->group(function(){
        Route::get('/dashboard/laporan', 'index')->name('data.laporan');
        Route::get('/dashboard/form-laporan', 'create')->name('form.laporan');
        Route::post('/dashboard/create-laporan', 'store')->name('create.laporan');
        Route::delete('/laporan/{id}', 'destroy')->name('laporan.destroy');
    });
    Route::controller(ArtikelController::class)->group(function(){
        Route::get('/dashboard/artikel', 'index')->name('artikel');
        Route::get('/dashboard/artikel/form', 'form')->name('form.artikel');
        Route::post('/dashboard/artikel/create', 'create')->name('create.artikel');
        Route::get('/dashboard/artikel/edit/{id}', 'edit')->name('edit.artikel');
        Route::put('/dashboard/artikel/update/{id}', 'update')->name('update.artikel');
        Route::delete('/dashboard/artikel/delete', 'delete')->name('delete.artikel');
    });
    Route::controller(VideoController::class)->group(function(){
        Route::get('/dashboard/video', 'index')->name('video');
        Route::get('/dashboard/video/form', 'form')->name('form.video');
        Route::post('/dashboard/video/create', 'create')->name('create.video');
        Route::get('/dashboard/video/edit/{id}', 'edit')->name('edit.video');
        Route::put('/dashboard/video/update/{id}', 'update')->name('update.video');
        Route::delete('/dashboard/video/delete', 'delete')->name('delete.video');
    });
    Route::resource('videos', VidController::class);
}); 

// USER
Route::middleware(['auth', 'isUser'])->group(function(){
    Route::controller(MutabaahController::class)->group(function(){
        Route::get('/mymutabaah', 'mutabaah')->name('mutabaah');
        Route::get('/mymutabaah/form', 'formMutabaah')->name('form.mutabaah');
        Route::post('/mymutabaah/form/create', 'createMutabaah')->name('create.mutabaah');
        Route::get('/mutabaahku', 'userMutabaah')->name('user.mutabaah');
        Route::delete('/mutabaah/delete/{mutabaah}', 'hapusMutabaah')->name('hapus.mutabaah');
    });
    Route::controller(ProfileController::class)->group(function(){
        Route::get('/mymutabaah/profile', 'profileUser')->name('profile.user');
        Route::get('/mymutabaah/form/profile', 'formProfile')->name('form.profile');
        Route::get('/mymutabaah/edit/profile/{id}', 'formEditProfile')->name('form.edit.profile');
        Route::put('/mymutabaah/update/profile/{id}', 'UpdateProfile')->name('update.profile');
        Route::post('/daftar/mymutabaah', 'daftarMutabaah')->name('daftar.mutabaah');
        
        Route::get('/hai', 'thxU')->name('thx.u');
    });
    Route::controller(HomeController::class)->group(function(){
        Route::get('/mymutabaah/home', 'homeUser')->name('home.user');
        Route::get('/mymutabaah/laporan', 'laporanUser')->name('laporan.user');
    });
}); 

// Halaman Utama
Route::controller(FrontController::class)->group(function(){
    Route::get('/home', 'home')->name('home');
    Route::get('/MyArtikel', 'myartikel')->name('myartikel');
    Route::get('/MyMurottal', 'mymurottal')->name('mymurottal');
    Route::get('/search-artikel', 'searchArtikel')->name('search.artikel');
    Route::get('/filter-artikel', 'filterArtikel')->name('filter.artikel');
    Route::get('/MyVideo', 'videos')->name('videos');
    Route::get('/search-videos', 'searchVideo')->name('search.videos');
});
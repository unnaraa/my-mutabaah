<?php

use App\Http\Controllers\Admin\ArtikelController;
use App\Http\Controllers\Admin\BaseController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\MutabaahController;
use App\Http\Controllers\User\ProfileController;
use App\Models\Artikel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('front.ini');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// ADMIN
Route::prefix('Admin')->middleware(['auth', 'isAdmin'])->group(function(){
    Route::controller(BaseController::class)->group(function(){
        Route::get('/dashboard', 'index')->name('dashboard');
        // Route::get('/dashboard/data-user', 'dataUser')->name('data.user');
    });
    Route::controller(UserController::class)->group(function(){
        Route::get('/dashboard/data-user', 'index')->name('data.user');
        Route::get('/dashboard/data-user/detail/{id}', 'detail')->name('data.user.detail');
        Route::get('/dashboard/data-user/mutabaah/{id}', 'mutabaah')->name('data.user.mutabaah');
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
}); 
// USER
Route::middleware(['auth', 'isUser'])->group(function(){
    Route::controller(MutabaahController::class)->group(function(){
        Route::get('/mymutabaah', 'mutabaah')->name('mutabaah');
        Route::get('/mymutabaah/form', 'formMutabaah')->name('form.mutabaah');
        Route::post('/mymutabaah/form/create', 'createMutabaah')->name('create.mutabaah');
        Route::get('/mutabaahku', 'userMutabaah')->name('user.mutabaah');
    });
    Route::controller(ProfileController::class)->group(function(){
        Route::get('/mymutabaah/profile', 'profileUser')->name('profile.user');
        Route::get('/mymutabaah/form/profile', 'formProfile')->name('form.profile');
        Route::post('/daftar/mymutabaah', 'daftarMutabaah')->name('daftar.mutabaah');
    });
    Route::controller(HomeController::class)->group(function(){
        Route::get('/mymutabaah/home', 'homeUser')->name('home.user');
    });
}); 

// Halaman Utama
Route::controller(FrontController::class)->group(function(){
    Route::get('/home', 'home')->name('home');
    Route::get('/MyArtikel', 'myartikel')->name('myartikel');
    Route::get('/MyMurottal', 'mymurottal')->name('mymurottal');
    Route::get('/search-artikel', 'searchArtikel')->name('search.artikel');
    Route::get('/filter-artikel', 'filterArtikel')->name('filter.artikel');
    Route::get('/videop', 'front')->name('videop');

});
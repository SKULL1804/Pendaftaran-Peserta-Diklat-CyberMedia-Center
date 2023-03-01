<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PendaftaranControler;
use App\Http\Controllers\DaftarDiklatController;
use App\Http\Controllers\Fronted\HeroController;
use App\Http\Controllers\Fronted\AboutController;
use App\Http\Controllers\Fronted\WhyUsController;
use App\Http\Controllers\Fronted\AlamatController;
use App\Http\Controllers\Fronted\CountsController;
use App\Http\Controllers\Fronted\SosmedController;
use App\Http\Controllers\Fronted\ContactController;
use App\Http\Controllers\Fronted\PopulerController;
use App\Http\Controllers\Fronted\OurMascotController;

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

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('home.about');
Route::get('/diklat', [HomeController::class, 'course'])->name('home.course');
Route::get('/diklat/details/{id}', [HomeController::class, 'details'])->name('home.details');
 // Contact
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');
Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');
// Pendaftaran
Route::get('/pendaftaran', [PendaftaranControler::class, 'create'])->name('pendaftaran.create');
Route::post('/pendaftaran', [PendaftaranControler::class, 'store'])->name('pendaftaran.store');

Route::middleware('auth')->group(function () {
    Route::middleware('role:admin')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
        // Profile
        Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
        Route::post('/profile/store', [ProfileController::class, 'store'])->name('profile.store');
        Route::get('/change/password', [ProfileController::class, 'changepassword'])->name('change.password');
        Route::post('/profile/update', [ProfileController::class, 'updatepassword'])->name('update.password');
        // Hero
        Route::get('/home', [HeroController::class, 'edit'])->name('hero.edit');
        Route::post('/home/update', [HeroController::class, 'update'])->name('hero.update');
        // About
        Route::get('/dashboard/about', [AboutController::class,'edit'])->name('about.edit');
        Route::post('/about/update', [AboutController::class, 'update'])->name('about.update');
        Route::get('/about/gallery', [AboutController::class, 'gallery'])->name('about.gallery');
        Route::post('/about/gallery', [AboutController::class, 'store'])->name('store.gallery');
        Route::get('/all/gallery', [AboutController::class, 'allgallery'])->name('all.gallery');
        Route::get('/edit/gallery/{id}', [AboutController::class, 'editgallery'])->name('edit.gallery');
        Route::post('/update/gallery', [AboutController::class, 'updategallery'])->name('update.gallery');
        Route::get('/delete/gallery/{id}', [AboutController::class, 'deletegallery'])->name('delete.gallery');
        // Why Us
        Route::get('/why-us', [WhyUsController::class, 'edit'])->name('why.edit');
        Route::post('/why-us/update', [WhyUsController::class, 'update'])->name('why.update');
        // Our Mascot
        Route::get('/our-mascot', [OurMascotController::class, 'index'])->name('mascot');
        Route::get('/our-mascot/create', [OurMascotController::class, 'create'])->name('mascot.create');
        Route::post('/our-mascot/store', [OurMascotController::class, 'store'])->name('mascot.store');
        Route::get('/our-mascot/{id}', [OurMascotController::class, 'edit'])->name('mascot.edit');
        Route::post('/our-mascot', [OurMascotController::class, 'update'])->name('mascot.update');
        Route::get('/our-mascot/delete/{id}', [OurMascotController::class, 'delete'])->name('mascot.delete');
        // Populer
        Route::get('/populer', [PopulerController::class, 'index'])->name('populer');
        Route::get('/populer/create', [PopulerController::class, 'create'])->name('populer.create');
        Route::post('/populer/store', [PopulerController::class, 'store'])->name('populer.store');
        Route::get('/populer/{id}', [PopulerController::class, 'edit'])->name('populer.edit');
        Route::post('/populer', [PopulerController::class, 'update'])->name('populer.update');
        Route::get('/populer/delete/{id}', [PopulerController::class, 'delete'])->name('populer.delete');
        // Daftar Diklat
        Route::resource('/daftar-diklat', DaftarDiklatController::class)->only(['index', 'create']);
        Route::post('/daftar-diklat', [DaftarDiklatController::class, 'store'])->name('daftar-diklat.store');
        Route::get('/daftar-diklat/{id}', [DaftarDiklatController::class, 'edit'])->name('daftar-diklat.edit');
        Route::post('/daftar-diklat/update/{id}', [DaftarDiklatController::class, 'update'])->name('daftar-diklat.update');
        Route::get('/daftar-diklat/delete/{id}', [DaftarDiklatController::class, 'delete'])->name('daftar-diklat.delete');
        // Data Pendaftaran
        Route::get('/data-pendaftaran', [PendaftaranControler::class, 'index'])->name('pendaftaran.index');
        Route::get('/data-pendaftaran/{id}', [PendaftaranControler::class, 'edit'])->name('pendaftaran.edit');
        Route::post('/data-pendaftaran', [PendaftaranControler::class, 'update'])->name('pendaftaran.update');
        Route::get('/data-pendaftaran/delete/{id}', [PendaftaranControler::class, 'delete'])->name('pendaftaran.delete');
        // ALamat
        Route::get('/alamat', [AlamatController::class, 'edit'])->name('alamat.edit');
        Route::post('/alamat/update', [AlamatController::class, 'update'])->name('alamat.update');
        // Sosmed
        Route::get('/sosmed', [SosmedController::class, 'edit'])->name('sosmed.edit');
        Route::post('/sosmed/update', [SosmedController::class, 'update'])->name('sosmed.update');
        // Contact Message
        Route::get('contact-message', [ContactController::class, 'index'])->name('contact.index');
        Route::get('/contact-message/delete/{id}', [ContactController::class, 'delete'])->name('contact.delete');
    });

    Route::delete('/logout', [AuthController::class, 'logout'])->name('auth.logout');
});

Route::middleware('guest')->group(function () {
    // auth
    Route::get('/login', [AuthController::class, 'index'])->name('auth.login');
    Route::post('/login', [AuthController::class, 'authenticate']);
});

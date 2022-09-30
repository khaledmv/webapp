<?php

use App\Http\Controllers\dashboard\ContactController;
use App\Http\Controllers\dashboard\DashboardController;
use Illuminate\Support\Facades\Route;

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
    return view('frontend/home');
})->name('home-page');

Route::get('/contact', function () {
    return view('frontend/contact');
})->name('contact-page');

Route::get('/blog', function () {
    return view('frontend/blog');
})->name('blog-page');

Route::get('/work', function () {
    return view('frontend/work');
})->name('work-page');




//========================= Backend Route



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('backend/dashboard');
    })->name('dashboard');

    Route::get('/logout', [DashboardController::class, 'logout'])->name('logout');
    Route::get('/dashboard/contact', [ContactController::class, 'index'])->name('admin-contact');
    Route::post('/contact/form', [ContactController::class, 'contactForm'])->name('contact.form');
    
});


// logout 



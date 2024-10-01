<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\TravelController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\GuestAuthRegisterController;
use App\Http\Controllers\Auth\GuestAuthLoginController;
use App\Http\Controllers\ContactController;



Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::post('guest/auth/logout', [GuestAuthController::class, 'logout'])->name('guest.logout');


Route::get('/', function () {
    return view('home');
});

Route::get('/content/page1', function () {
    return view('content/page1');
});

Route::get('/content/page2', function () {
    return view('content/page2');
});

Route::get('/content/page3', function () {
    return view('content/page3');
});

Route::get('/blog', function () {
    return view('blog');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/nav-log', function () {
    return view('nav-log');
});

Route::get('/guest/auth/g-login', function () {
    return view('guest.auth.g-login');
})->name('guest.auth.g-login');

Route::get('/guest/auth/g-register', function () {
    return view('guest.auth.g-register');
})->name('guest.auth.g-register');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/contact', function () {
    return view('contact');
})->name('contact.form');

Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('dashboard', [ContactController::class, 'showContacts'])->name('dashboard');
Route::delete('/admin/dashboard/{id}', [ContactController::class, 'destroy'])->name('contact.destroy');

Route::get('/programs', [TravelController::class, 'index'])->name('content.programs');

Route::match(['get', 'post'], '/blog', [PostController::class, 'blog'])->name('blog');

Route::get('/about', function () {
    return view('about');
});


// Route::get('/admin/dashboard', function () {
//     return view('/admin/dashboard');

// })->middleware(['auth', 'verified'])->name('dashboard');






Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// routes/web.php




Route::prefix('guest')->namespace('App\Http\Controllers\GuestAuth')->group(function () {
    Route::get('/login', 'LoginController@showLoginForm')->name('guest.login');
    Route::post('/login', 'LoginController@login');
    Route::post('/logout', 'LoginController@logout')->name('guest.logout');

    Route::get('/register', 'RegisterController@showRegistrationForm')->name('guest.register');
    Route::post('/register', 'RegisterController@register');
});






require __DIR__.'/auth.php';

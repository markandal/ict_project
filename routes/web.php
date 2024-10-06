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
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\GuestAuthController;
use App\Http\Controllers\StaffAuthController;
use App\Http\Controllers\GuestRegisterController;

// Guest Registration Routes
Route::get('/guest/register', [GuestRegisterController::class, 'showRegistrationForm'])->name('guest.register.form');
Route::post('/guest/register', [GuestRegisterController::class, 'register'])->name('guest.register');



Route::get('/home', function () {
    return view('home'); // Make sure the home view exists in resources/views
})->name('home');

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

Route::get('/', function () {
    return view('home');
});

Route::get('/blog', function () {
    return view('blog');
});
Route::get('/nav-log', function () {
    return view('nav-log');
});
Route::get('/places', function () {
    return view('places');
});

Route::get('/create', function () {
    return view('create');
});

Route::get('/about', function () {
    return view('about');
});

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

Route::get('/packages', [TravelController::class, 'index'])->name('content.packages');

//BLOG ROUTES

Route::match(['get', 'post'], '/blog', [PostController::class, 'blog'])->name('blog');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// routes/web.php





Route::get('/guest/register', [GuestRegisterController::class, 'showRegistrationForm'])->name('guest.register.form');
Route::post('/guest/register', [GuestRegisterController::class, 'register'])->name('guest.register');

// Guest Login Routes
Route::get('/guest/login', [GuestAuthController::class, 'showLoginForm'])->name('guest.login');
Route::post('/guest/login', [GuestAuthController::class, 'login']);




Route::get('/places', [PlaceController::class, 'index'])->name('places');
Route::post('/places', [PlaceController::class, 'store'])->name('places.store');

// Show the list of places
Route::get('/places', [PlaceController::class, 'index'])->name('places');

// Show a specific place
Route::get('/places/{id}', [PlaceController::class, 'show'])->name('show');




Route::get('/create', [PlaceController::class, 'create'])->name('create');
Route::post('/places', [PlaceController::class, 'store'])->name('places.store');
Route::get('/places', [PlaceController::class, 'index'])->name('places.index');



Route::get('/guest/{id}', [GuestController::class, 'show'])->name('guest.show');











require __DIR__.'/auth.php';

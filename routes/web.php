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
use App\Http\Controllers\StaffHomeController;
use App\Http\Controllers\GuestBookingController;

// Guest Registration Routes
Route::get('/guest/register', [GuestRegisterController::class, 'showRegistrationForm'])->name('guest.register.form');
Route::post('/guest/register', [GuestRegisterController::class, 'register'])->name('guest.register');



Route::get('/home', function () {
    return view('home'); // Make sure the home view exists in resources/views
})->name('home');

Route::get('/pacakes/page1', function () {
    return view('content/page1');
});

Route::get('/content/page2', function () {
    return view('content/page2');
});

Route::get('/content/page3', function () {
    return view('content/page3');
});

Route::get('/content/packages', function () {
    return view('/content/packages');
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

// Route::get('/guests/index', function () {
//     return view('/guests/index');
// });

// Route::get('/guests/create', function () {
//     return view('/guests/create');
// });

// Route::get('/guests/edit', function () {
//     return view('/guests/edit');
// });

Route::get('/about', function () {
    return view('about');
});

Route::get('/packages', [TravelController::class, 'index'])->name('travel.packages');

Route::get('/packages/{id}', [TravelController::class, 'show'])->name('travel.package');


Route::get('/dashboard', function () {
    return view('dashboard');
})
->middleware('role:admin')
->name('dashboard');


Route::get('/guest/booking', function () {
    return view('/guest/booking');
})
->middleware('role:guest')
->name('guest/booking');




Route::get('/dash-1', function () {
    return view('dash-1');
})->name('dash-1');

Route::get('/dash-2', function () {
    return view('dash-2');
})->name('dash-2');



Route::get('/contact', function () {
    return view('contact');
})->name('contact.form');

Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::delete('/admin/dashboard/{id}', [ContactController::class, 'destroy'])->name('contact.destroy');

Route::get('/programs', [TravelController::class, 'index'])->name('content.programs');

//BLOG ROUTES

Route::match(['get', 'post'], '/blog', [PostController::class, 'blog'])->name('blog');

Route::get('/dash-2', [GuestController::class, 'index'])->name('dash-2');


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



Route::resource('guests', GuestController::class);

Route::get('staff/login', [StaffAuthController::class, 'showLoginForm'])->name('staff.login');
Route::post('staff/login', [StaffAuthController::class, 'login']);

Route::get('staff/register', [StaffAuthController::class, 'showRegisterForm'])
     ->name('staff.register')
     ->middleware('auth'); // Ensure the user is authenticated

Route::post('staff/register', [StaffAuthController::class, 'register'])
     ->name('staff.register.post')
     ->middleware('auth');

 Route::get('/staff/s-home', [ContactController::class, 'showContacts'])
        ->name('staff.s-home')
        ->middleware('role:staff');


        Route::middleware(['role:guest'])->group(function () {
    Route::get('/guest/booking', [GuestBookingController::class, 'create'])->name('guest.booking.create');
    Route::post('/guest/booking', [GuestBookingController::class, 'store'])->name('guest.booking.store');
});

        Route::middleware(['role:staff'])->group(function () {
  Route::get('/staff/booking-list', [GuestBookingController::class, 'index'])->name('staff.booking-list.index');
    Route::delete('/staff/booking-list{id}', [GuestBookingController::class, 'destroy'])->name('bookings.destroy');
 });



require __DIR__.'/auth.php';

<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GuestController;

Route::get('/', function () {
   // return view('welcome');
   return redirect()->route('login'); // Redirect to login page
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Logout Route
Route::get('/logout', function () {
    Auth::logout();
    return redirect('/login');
});

/*Route::get('/client/add', function () {
    return view('client.add'); // You can return a view directly
})->name('client.add'); */
Route::get('/client/add', [ClientController::class, 'create'])->name('client.add');

/*Route::get('/client/list', function () {
    return view('client.list'); // You can return a view directly
})->name('client.list'); */
Route::get('/client/list', [ClientController::class, 'index'])->name('client.list');
Route::post('/client/store', [ClientController::class, 'store'])->name('client.store');

Route::prefix('event')->group(function () {
    Route::get('/', [EventController::class, 'index'])->name('event.list');
    Route::get('/add', [EventController::class, 'create'])->name('event.add');
    Route::post('/store', [EventController::class, 'store'])->name('event.store');
    Route::get('/edit/{id}', [EventController::class, 'edit'])->name('event.edit');
    Route::post('/update/{id}', [EventController::class, 'update'])->name('event.update');
    Route::delete('/delete/{id}', [EventController::class, 'destroy'])->name('event.destroy'); // Soft Delete
});

Route::prefix('group')->group(function () {
    Route::get('/', [GroupController::class, 'index'])->name('group.list');
    Route::get('/add', [GroupController::class, 'create'])->name('group.add');
    Route::post('/store', [GroupController::class, 'store'])->name('group.store');
    Route::get('/edit/{group}', [GroupController::class, 'edit'])->name('group.edit');
    Route::post('/update/{group}', [GroupController::class, 'update'])->name('group.update');
    Route::delete('/delete/{group}', [GroupController::class, 'destroy'])->name('group.delete');
});

Route::prefix('hotel')->group(function () {
    Route::get('/', [HotelController::class, 'index'])->name('hotel.list');
    Route::get('/add', [HotelController::class, 'create'])->name('hotel.add');
    Route::post('/store', [HotelController::class, 'store'])->name('hotel.store');
    Route::get('/edit/{hotel}', [HotelController::class, 'edit'])->name('hotel.edit');
    Route::post('/update/{hotel}', [HotelController::class, 'update'])->name('hotel.update');
    Route::delete('/delete/{hotel}', [HotelController::class, 'destroy'])->name('hotel.delete');
});

Route::post('/hotel/store-ajax', [HotelController::class, 'storeAjax'])->name('hotel.store.ajax');
Route::post('/group/store-ajax', [GroupController::class, 'storeAjax'])->name('group.store.ajax');

Route::prefix('guest')->group(function () {
    Route::get('/register', [GuestController::class, 'showRegisterForm'])->name('guest.register');
    Route::post('/register', [GuestController::class, 'register'])->name('guest.register.submit');
    Route::get('/login', [GuestController::class, 'showLoginForm'])->name('guest.login');
    Route::post('/login', [GuestController::class, 'login'])->name('guest.login.submit');
    Route::get('/logout', [GuestController::class, 'logout'])->name('guest.logout');
    Route::get('/form',[GuestController::class,'showForm'])->name('guest.form');

    Route::post('/store-step1', [GuestController::class, 'storeStep1'])->name('guest.storeStep1');
    Route::post('/store-step2', [GuestController::class, 'storeStep2'])->name('guest.storeStep2');

});



Route::get('/booking/view', function () {
    return view('booking.view'); // You can return a view directly
})->name('booking.view');


require __DIR__.'/auth.php';

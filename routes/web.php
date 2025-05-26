<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReviewController; // Pastikan ini ada

Route::get('/', function () {
    return redirect()->route('home');
});
 
// Halaman utama, panggil method index dari ReviewController
Route::get('/home', [ReviewController::class, 'index'])->name('home');

// Halaman lain
Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/chatbot', function () {
    return view('chatbot');
});

Route::get('/detail/taman', function () {
    return view('detail.taman');
});

Route::get('/detail/joging', function () {
    return view('detail.joging');
});

Route::get('/detail/spot', function () {
    return view('detail.spot');
});

Route::get('/detail/toilet', function () {
    return view('detail.toilet');
});

Route::get('/detail/parkir', function () {
    return view('detail.parkir');
});

Route::get('/detail/gazebo', function () {
    return view('detail.gazebo');
});

Route::get('/detail/event', function () {
    return view('detail.event');
});

Route::get('/detail/outdor', function () {
    return view('detail.outdor');
});

Route::get('/detail/keamanan', function () {
    return view('detail.keamanan');
});


// Proses kirim ulasan
Route::post('/submit-review', [ReviewController::class, 'store'])->name('submit.review');

<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/work', function () {
    return view('work-us');
});

Route::get('/service', function () {
    return view('service-boost');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/FAQ', function () {
    return view('faq');
});

Route::get('/preparation', function () {
    return view('preparation');
});




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/cabinet', function () {
        return view('cabinet-client');
    });

    Route::get('/settings', function () {
        return view('cabinet-client-settings-account');
    });
});

require __DIR__.'/auth.php';

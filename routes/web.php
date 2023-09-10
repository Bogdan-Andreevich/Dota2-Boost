<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\AboutPageController;

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

Route::get('/', [MainPageController::class, 'index'])->name('index');

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/blog', [BlogController::class, 'index'])->name('blog.blog');


Route::get('/work', function () {
    return view('work-us');
});

Route::get('/service', function () {
    return view('service-boost');
});

Route::get('/about', [AboutPageController::class, 'index'])->name('about');

Route::get('/FAQ', function () {
    return view('faq');
});

Route::get('/preparation', function () {
    return view('preparation');
});




Route::middleware('admin')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/cabinet', function () {
        return view('cabinet-client');
    });

    Route::get('/settings', function () {
        return view('cabinet-client-settings-account');
    });


    Route::get('/admin/blog/create', [BlogController::class, 'create'])->name('admin-panel.admin');
    Route::get('/admin/blogs', function () {
        return view('admin-panel.show-blogs');
    })->name('admin-panel.show-blogs');
    Route::get('/admin/edit/{id}', [BlogController::class, 'edit'])->name('admin-panel.edit-blog');
    Route::put('/admin/update/{id}', [BlogController::class, 'update'])->name('admin-panel.update-blog');

    Route::delete('/admin/blog/{id}', [BlogController::class, 'destroy'])->name('blogs.destroy');


    Route::post('/blog', [BlogController::class, 'store'])->name('blog.store');
    Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog.show');


    Route::get('/admin', function () {
        return view('admin-panel.admin');
    });

    Route::post('/admin/article/create', [MainPageController::class, 'store']);
    Route::get('/admin/article/create', [MainPageController::class, 'create'])->name('admin-panel.create-2-forms-for-MainPage');

    Route::post('/admin/about/create', [AboutPageController::class, 'store']);
    Route::get('/admin/about/create', [AboutPageController::class, 'create'])->name('admin-panel.create-4-forms-for-AboutPage');



    Route::post('/admin/faq/create', [FAQController::class, 'store']);
    Route::get('/admin/faq/create', [FAQController::class, 'create'])->name('admin-panel.create-faq');

    Route::get('/admin/faqs', function () {
        return view('admin-panel.show-faqs');
    })->name('admin-panel.show-faqs');

    Route::get('/admin/edit/faq/{id}', [FAQController::class, 'edit'])->name('admin-panel.edit-faq');
    Route::put('/admin/update/faq/{id}', [FAQController::class, 'update'])->name('admin-panel.update-faq');
    Route::delete('/admin/faq/{id}', [FAQController::class, 'destroy'])->name('faqs.destroy');

});

require __DIR__.'/auth.php';

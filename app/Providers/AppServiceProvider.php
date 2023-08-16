<?php

namespace App\Providers;

use App\Models\FAQ;
use Illuminate\Support\ServiceProvider;
use App\Models\Posts;
use App\Models\MainPage;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::share('posts', Posts::latest()->get());
        if (Schema::hasTable('f_a_q_s')) {
            View::share('faqs', FAQ::latest()->get());
        }
    }
}

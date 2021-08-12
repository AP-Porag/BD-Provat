<?php

namespace App\Providers;

use App\Models\Author;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', function ($view) {
            $author = Author::first();
            $view->with('author', $author);
        });

        //check the HTTP request to determine if the app is on local or production mode

        if (env('APP_ENV') !== 'local'){
            URL::forceScheme('https');
        }
    }
}

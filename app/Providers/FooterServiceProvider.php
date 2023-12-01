<?php

namespace App\Providers;
use App\Models\Post;
use Illuminate\Support\ServiceProvider;

class FooterServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(
            'client.layouts.footer', 
            function ($view) {
                $view->with(['posts'=> Post::all()]);
            }
        );
    }
}

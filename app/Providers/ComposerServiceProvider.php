<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
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
            'layouts.header-main',
            'App\Http\ViewComposers\CategoryComposer'
        );

        view()->composer(
            'product.index',
            'App\Http\ViewComposers\CategoryComposer'
        );
    }
}

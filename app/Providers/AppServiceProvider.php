<?php

namespace Ideal\Providers;

use Illuminate\Support\ServiceProvider;
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\Schema;
>>>>>>> 3286041c1c35bf2dcf44203b613236d926746093

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
<<<<<<< HEAD
        //
=======
        Schema::defaultStringLength(150);
>>>>>>> 3286041c1c35bf2dcf44203b613236d926746093
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\tbl_categories;

class AppServiceProvider extends ServiceProvider {

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {
        view()->share('categories', tbl_categories::all());
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() {
        //
    }

}

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\tbl_categories;
use Anam\Phpcart\Cart;

class AppServiceProvider extends ServiceProvider {

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {
        $cart = new Cart();
        view()->share('categories', tbl_categories::all());
        view()->share('cart_count', $cart->count());
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

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Order;

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
        View::composer(['/layout/master'], function() {
            $orderId = session('orderId');
            if (!is_null($orderId)) 
            {
              $order = Order::find($orderId);
              View::share('order', $order);
            }
        });
    }
}

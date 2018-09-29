<?php

namespace webazin\KaveNegar;

use Illuminate\Support\ServiceProvider;

class KaveNegarServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/kavenegar.php' => config_path('kavenegar.php')
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/config/kavenegar.php', 'kavenegar'
        );
    }
}

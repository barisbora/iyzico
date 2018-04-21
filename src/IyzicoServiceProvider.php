<?php

namespace barisbora\Iyzico;

use Illuminate\Support\ServiceProvider;

class IyzicoServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->publishes( [
            __DIR__ . '/../config/iyzico.php' => config_path( 'iyzico.php' ),
        ], 'config' );

        $this->mergeConfigFrom( __DIR__ . '/../config/iyzico.php', 'iyzico' );

    }


    public function provides()
    {
        return [ 'Iyzico' ];
    }

}

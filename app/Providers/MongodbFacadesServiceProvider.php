<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Facades\Mongodb\Mongodb;
use Illuminate\Support\Facades\App;

class MongodbFacadesServiceProvider extends ServiceProvider
{


    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('mongodb',function() {
            return new Mongodb();
        });
    }
}

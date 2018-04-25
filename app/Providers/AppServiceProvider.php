<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    
        //app\Providers\AppServiceProvider.php に以下を追加する。



        public function boot() { Schema::defaultStringLength(191); }


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

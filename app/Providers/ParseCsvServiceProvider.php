<?php

namespace App\Providers;

use App\Services\ParseCsv\League\League;
use App\Contracts\ParseCsv;
use Illuminate\Support\ServiceProvider;

class ParseCsvServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //Подключение реализации для контракта
            $this->app->bind(ParseCsv::class, function ($app) {
                return new League;
                //return new ParSistem;
            });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

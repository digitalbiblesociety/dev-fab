<?php

namespace App\Providers;

use DigitalBibleSociety\Shin\Models\Bible\Bible;
use Illuminate\Support\ServiceProvider;
use Spatie\Export\Exporter;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Exporter $exporter)
    {
        Schema::defaultStringLength(191);
        //$bibles = Bible::select('id')->get()->pluck('id')->map(function($bible) {
        //    return "/bibles/$bible";
        //});
        //foreach ($bibles as $bible) {
        //    $exporter->paths($bible);
        //}
    }
}

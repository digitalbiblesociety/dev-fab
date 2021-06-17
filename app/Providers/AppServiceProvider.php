<?php

namespace App\Providers;

use DigitalBibleSociety\Shin\Models\Bible\Bible;
use Illuminate\Support\ServiceProvider;
use Spatie\Export\Exporter;

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
        $bibles = Bible::select('id')->get()->pluck('id')->map(function($bible) {
            return "/bibles/$bible";
        });
        foreach ($bibles as $bible) {
            $exporter->paths($bible);
        }
    }
}

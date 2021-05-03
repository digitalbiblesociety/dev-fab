<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LanguagesController;
use App\Http\Controllers\CountriesController;
use App\Http\Controllers\OrganizationsController;
use App\Http\Controllers\BiblesController;
use App\Http\Controllers\HomeController;

foreach (i18n::getSupportedLocales() as $iso => $locale) {
    if($iso == 'eng') {
        $iso = '';
    }
Route::group(['prefix' => $iso], function()
{
    Route::get('/',                   [HomeController::class, 'index'])->name('home');

    Route::get('languages/{id}',      [LanguagesController::class, 'show'])->name('languages.show');
    Route::get('languages',           [LanguagesController::class, 'index'])->name('languages.index');
    Route::get('countries/{id}/maps', [CountriesController::class, 'maps'])->name('countries.maps');
    Route::get('countries/{id}',      [CountriesController::class, 'show'])->name('countries.show');
    Route::get('countries',           [CountriesController::class, 'index'])->name('countries.index');
    Route::get('organizations/{id}',  [OrganizationsController::class, 'show'])->name('organizations.show');
    Route::get('fobai',               [OrganizationsController::class, 'fobai'])->name('organizations.fobai');
    Route::get('organizations',       [OrganizationsController::class, 'index'])->name('organizations.index');
    Route::get('bibles/{id}',         [BiblesController::class, 'show'])->name('bibles.show');
    Route::get('bibles',              [BiblesController::class, 'index'])->name('bibles.index');

    Route::view('world-maps',         'countries.maps.worldmap');
    Route::view('about',              'about.index')->name('about');
    Route::view('about/contact',      'about.contact')->name('contact');
    Route::view('about/privacy',      'about.privacy')->name('privacy');
    Route::view('about/progress',     'about.progress')->name('progress');
    Route::view('about/faq',          'about.faq')->name('faq');
    Route::view('about/volunteer',    'about.volunteer')->name('volunteer');
    Route::view('about/api',          'about.api')->name('api');
    Route::view('about/feedback',     'about.api')->name('feedback');
});
}

Route::group(['prefix' => i18n::setLocale()], function()
{
    Route::get('/',                   [HomeController::class, 'index'])->name('home');

    Route::get('languages/{id}',      [LanguagesController::class, 'show'])->name('languages.show');
    Route::get('languages',           [LanguagesController::class, 'index'])->name('languages.index');
    Route::get('countries/{id}',      [CountriesController::class, 'show'])->name('countries.show');
    Route::get('countries',           [CountriesController::class, 'index'])->name('countries.index');
    Route::get('organizations/{id}',  [OrganizationsController::class, 'show'])->name('organizations.show');
    Route::get('fobai',               [OrganizationsController::class, 'fobai'])->name('organizations.fobai');
    Route::get('organizations',       [OrganizationsController::class, 'index'])->name('organizations.index');
    Route::get('bibles/{id}',         [BiblesController::class, 'show'])->name('bibles.show');
    Route::get('bibles',              [BiblesController::class, 'index'])->name('bibles.index');

    Route::view('about',              'about.index')->name('about');
    Route::view('about/contact',      'about.contact')->name('contact');
    Route::view('about/privacy',      'about.privacy')->name('privacy');
    Route::view('about/progress',     'about.progress')->name('progress');
    Route::view('about/faq',          'about.faq')->name('faq');
    Route::view('about/volunteer',    'about.volunteer')->name('volunteer');
    Route::view('about/api',          'about.api')->name('api');
    Route::view('about/feedback',     'about.api')->name('feedback');
});

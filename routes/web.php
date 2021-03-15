<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LanguagesController;
use App\Http\Controllers\CountriesController;
use App\Http\Controllers\OrganizationsController;
use App\Http\Controllers\BiblesController;

Route::group(['prefix' => i18n::setLocale()], function()
{
    Route::view('/',                  'index');

    Route::get('languages/{id}',      [LanguagesController::class, 'show']);
    Route::get('languages',           [LanguagesController::class, 'index']);
    Route::get('countries/{id}',      [CountriesController::class, 'show']);
    Route::get('countries',           [CountriesController::class, 'index']);
    Route::get('organizations/{id}',  [OrganizationsController::class, 'show']);
    Route::get('fobai',               [OrganizationsController::class, 'fobai']);
    Route::get('organizations',       [OrganizationsController::class, 'index']);
    Route::get('bibles/{id}',         [BiblesController::class, 'show']);
    Route::get('bibles',              [BiblesController::class, 'index']);

    Route::view('about',              'about.index')->name('about');
    Route::view('about/contact',      'about.contact')->name('contact');
    Route::view('about/privacy',      'about.privacy')->name('privacy');
    Route::view('about/progress',     'about.progress')->name('progress');
    Route::view('about/faq',          'about.faq')->name('faq');
    Route::view('about/volunteer',    'about.volunteer')->name('volunteer');
    Route::view('about/api',          'about.api')->name('api');
    Route::view('about/feedback',     'about.api')->name('feedback');
});

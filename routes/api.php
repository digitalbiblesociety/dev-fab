<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountriesController;
use App\Http\Controllers\LanguagesController;
use App\Http\Controllers\BiblesController;

Route::get('/countries/{id}',             [CountriesController::class, 'showAPI']);
Route::get('/countries/',                 [CountriesController::class, 'indexAPI']);
Route::get('/languages/{iso}/resources',  [LanguagesController::class, 'showResourcesAPI']);
Route::get('/languages/{iso}/bibles',     [LanguagesController::class, 'showBiblesAPI']);
Route::get('/languages/{iso}',            [LanguagesController::class, 'showAPI']);
Route::get('/languages/',                 [LanguagesController::class, 'indexAPI']);

Route::get('/bibles/{id}',                [BiblesController::class, 'showAPI']);
Route::get('/bibles/',                    [BiblesController::class, 'indexAPI']);

//showBiblesAPI

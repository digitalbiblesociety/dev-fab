<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers as Ctrl;

Route::get('/countries/{id}',             [Ctrl\CountriesController::class, 'showAPI']);
Route::get('/countries/',                 [Ctrl\CountriesController::class, 'indexAPI']);
Route::get('/languages/{iso}/resources',  [Ctrl\LanguagesController::class, 'showResourcesAPI']);
Route::get('/languages/{iso}/bibles',     [Ctrl\LanguagesController::class, 'showBiblesAPI']);
Route::get('/languages/{iso}',            [Ctrl\LanguagesController::class, 'showAPI']);
Route::get('/languages/',                 [Ctrl\LanguagesController::class, 'indexAPI']);
Route::get('/films/',                     [Ctrl\FilmsController::class, 'indexAPI']);
Route::get('/resources/',                 [Ctrl\ResourcesController::class, 'indexAPI']);

Route::get('/bibles/{id}',                [Ctrl\BiblesController::class, 'showAPI']);
Route::get('/bibles/',                    [Ctrl\BiblesController::class, 'indexAPI']);

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('countries/{id}', [\App\Http\Controllers\CountriesController::class, 'showAPI']);

<?php

namespace App\Http\Controllers;

use DigitalBibleSociety\Shin\Models\Country\Country;
use i18n;

class CountriesController extends Controller
{
    /*
     *
     */
    public function index()
    {
        $countries = Country::with('currentTranslation')->get();
        return view('countries.index', compact('countries'));
    }

    /*
     *
     */
    public function show($id)
    {
        $country = Country::with('languages.currentTranslation', 'languages.bibles', 'languages.resources', 'languages.films', 'currentTranslation')->find($id);
        return view('countries.show', compact('country'));
    }

    public function maps($id)
    {
        $country = Country::with('languages.currentTranslation', 'languages.bibles', 'languages.resources', 'languages.films', 'currentTranslation')->find($id);
        return view('countries.maps.countrymap', compact('country'));
    }


}

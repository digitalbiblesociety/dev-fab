<?php

namespace App\Http\Controllers;

use Common\Modals\Country\Country;
use Illuminate\Http\Request;

class CountriesController extends Controller
{
    public function index()
    {
        $countries = Country::with('currentTranslation')->get();
        return view('countries.index', compact('countries'));
    }

    public function show($id)
    {
        $country = Country::find($id);
        return view('countries.show', compact('country'));
    }

}

<?php

namespace App\Http\Controllers;

use DigitalBibleSociety\Shin\Models\Country\Country;
use DigitalBibleSociety\Shin\Models\Organization\Organization;

class HomeController extends Controller
{

    public function index()
    {
        $organizations = Organization::select('slug','latitude','longitude')->get();
        $countries     = Country::with('persecution')->get();
        return view('index', compact('countries', 'organizations'));
    }


}

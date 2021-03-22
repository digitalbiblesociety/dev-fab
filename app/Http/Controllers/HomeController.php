<?php

namespace App\Http\Controllers;

use Common\Modals\Country\Country;
use Common\Modals\Organization\Organization;

class HomeController extends Controller
{

    public function index()
    {
        $organizations = Organization::select('slug','latitude','longitude')->get();
        $countries = Country::with('persecution')->get();
        return view('index', compact('countries', 'organizations'));
    }


}

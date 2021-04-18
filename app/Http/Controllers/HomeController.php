<?php

namespace App\Http\Controllers;

use DigitalBibleSociety\Shin\Models\Country\Country;
use DigitalBibleSociety\Shin\Models\Organization\Organization;

class HomeController extends Controller
{

    public function index()
    {
        $fab_id = Organization::where('id','the-forum-of-bible-agencies')->select('id')->first()->id;

        $organizations = Organization::doesnthave('fobai')->get();
        $fobai = Organization::has('fobai')->get();

        $countries     = Country::with('persecution')->get();
        return view('index', compact('countries', 'organizations','fobai'));
    }


}

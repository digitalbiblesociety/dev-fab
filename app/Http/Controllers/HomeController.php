<?php

namespace App\Http\Controllers;

use DigitalBibleSociety\Shin\Models\Country\Country;
use DigitalBibleSociety\Shin\Models\Organization\Organization;

class HomeController extends Controller
{

    public function index()
    {
        $fab_id = Organization::where('id','the-forum-of-bible-agencies')->select('id')->first()->id;

        $organizations = Organization::doesnthave('relationships')->get();
        $fobai = Organization::whereHas('relationships', function ($query) {
            $query->where('organization_parent_id', '=', 'the-forum-of-bible-agencies');
        })->get();
        $ubs = Organization::whereHas('relationships', function ($query) {
            $query->where('organization_parent_id', '=', 'united-bible-societies');
        })->get();

        $countries = Country::with('persecution')->get();
        return view('index', compact('countries', 'organizations','fobai','ubs'));
    }


}

<?php

namespace App\Http\Controllers;

use DigitalBibleSociety\Shin\Models\Bible\Bible;
use DigitalBibleSociety\Shin\Models\Country\Country;
use DigitalBibleSociety\Shin\Models\Language\Language;
use DigitalBibleSociety\Shin\Models\Organization\Organization;
use DigitalBibleSociety\Shin\Models\Resource\Film;
use DigitalBibleSociety\Shin\Models\Resource\Resource;

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

        $bible_count = Bible::whereNull('parent_bible_id')->count();
        $language_count = Language::whereHas('bibles')->orWhereHas('resources')->orWhereHas('films')->count();
        $resource_count = Resource::count() + Film::count();

        $countries = Country::with('persecution')->get();
        return view('index', compact('countries', 'organizations','fobai','ubs', 'language_count','bible_count','resource_count'));
    }


}

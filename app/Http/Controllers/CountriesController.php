<?php

namespace App\Http\Controllers;

use DigitalBibleSociety\Shin\Models\Country\Country;
use DigitalBibleSociety\Shin\Transformers\LanguageTableTransformer;
use DigitalBibleSociety\Shin\Transformers\LanguageTransformer;
use i18n;
use League\Fractal\Serializer\DataArraySerializer;
use Spatie\Fractal\Facades\Fractal;
use DigitalBibleSociety\Shin\Traits\CountriesTrait;

class CountriesController extends Controller
{

    use CountriesTrait;

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
        $languages = Fractal::create($country->languages, LanguageTableTransformer::class, DataArraySerializer::class)->toArray();
        return view('countries.show', compact('country','languages'));
    }

    public function maps($id)
    {
        $country = Country::with('languages.currentTranslation', 'languages.bibles', 'languages.resources', 'languages.films', 'currentTranslation')->find($id);
        return view('countries.maps.countrymap', compact('country'));
    }


}

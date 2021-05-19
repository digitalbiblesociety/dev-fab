<?php

namespace App\Http\Controllers;

use DigitalBibleSociety\Shin\Models\Bible\Bible;
use DigitalBibleSociety\Shin\Models\Language\Language;
use DigitalBibleSociety\Shin\Models\Resource\Resource;
use DigitalBibleSociety\Shin\Models\Resource\Film;
use DigitalBibleSociety\Shin\Transformers\BibleTableTransformer;
use DigitalBibleSociety\Shin\Transformers\LanguageTableTransformer;
use DigitalBibleSociety\Shin\Transformers\LanguageTransformer;
use DigitalBibleSociety\Shin\Transformers\ResourcesTableTransformer;

use League\Fractal\Serializer\DataArraySerializer;
use Spatie\Fractal\Facades\Fractal;


class LanguagesController extends Controller
{
    public function index()
    {
        $languages = Language::withCount('bibles')->withCount('films')->withCount('resources')
            ->select('iso','name','population','country_id')
            ->with('primaryCountry:id,name,continent_id')->get();
        $languages = Fractal::create($languages, new LanguageTableTransformer(), DataArraySerializer::class)->toArray();
        return view('languages.index', compact('languages'));
    }

    public function show($iso)
    {
        $language = Language::where('iso', $iso)->first();
        $bibles = Bible::where('iso',$language->iso)->get();
        $bibles = Fractal::create($bibles, new BibleTableTransformer(), DataArraySerializer::class)->toArray();

        $resources = Resource::where('iso',$iso)->select('title', 'title_vernacular','iso','link','type')->get();
        $films = Film::where('iso',$iso)->select('title', 'title_vernacular','iso','url as link','type as film')->get();
        $resources = $resources->concat($films);
        $resources = \Spatie\Fractal\Fractal::create($resources, new ResourcesTableTransformer(), DataArraySerializer::class)->toArray();

        return view('languages.show', compact('language', 'bibles', 'resources'));
    }
}

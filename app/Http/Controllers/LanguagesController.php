<?php

namespace App\Http\Controllers;

use DigitalBibleSociety\Shin\Models\Language\Language;

class LanguagesController extends Controller
{
    public function index()
    {
        return view('languages.index');
    }

    public function show($iso)
    {
        $language = Language::where('iso', $iso)->first();
        return view('languages.show', compact('language'));
    }
}

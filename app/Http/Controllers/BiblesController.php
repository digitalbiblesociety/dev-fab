<?php

namespace App\Http\Controllers;

use DigitalBibleSociety\Shin\Models\Bible\Bible;
use Illuminate\Http\Request;

class BiblesController extends Controller
{
    public function index()
    {
        return view('bibles.index');
    }

    public function show($id)
    {
        $bible = Bible::find($id);
        return view('bibles.show', compact('bible'));
    }

}

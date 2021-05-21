<?php

namespace App\Http\Controllers;

use DigitalBibleSociety\Shin\Models\Bible\Bible;
use Illuminate\Http\Request;
use DigitalBibleSociety\Shin\Traits\BiblesTrait;

class BiblesController extends Controller
{
    use BiblesTrait;

}

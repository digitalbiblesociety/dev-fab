<?php

namespace App\Http\Controllers;

use DigitalBibleSociety\Shin\Models\Bible\Bible;
use DigitalBibleSociety\Shin\Models\Bible\BibleEquivalent;
use DigitalBibleSociety\Shin\Models\Organization\Organization;
use DigitalBibleSociety\Shin\Models\Resource\Film;
use DigitalBibleSociety\Shin\Models\Resource\Resource;
use Illuminate\Http\Request;

class OrganizationsController extends Controller
{
    public function index()
    {

        return view('organizations.index');
    }

    public function fobai()
    {
        $fab_id = Organization::where('id','the-forum-of-bible-agencies')->select('id')->first()->id;

        $organizations = Organization::whereHas('relationships', function($q) use($fab_id){
            $q->where('organization_parent_id', '=', $fab_id);
        })->get();

        return view('organizations.fobai', compact('organizations'));
    }

    public function show($id)
    {
        $organization = Organization::find($id);

        $bibles = Bible::whereHas('equivalents', function($q) use($id){
            $q->where('bible_equivalents.organization_id', $id);
        })->orWhereHas('organizations', function($q) use($id){
            $q->where('bible_organization.organization_id', $id);
        })->orWhereHas('links', function($q) use($id){
            $q->where('bible_links.organization_id', $id);
        })->with('language')->get();

        $resources = Resource::where('organization_id',$id)->get();

        return view('organizations.show', compact('organization', 'bibles','resources'));
    }
}

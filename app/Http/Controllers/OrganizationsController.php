<?php

namespace App\Http\Controllers;

use DigitalBibleSociety\Shin\Models\Bible\Bible;
use DigitalBibleSociety\Shin\Models\Bible\BibleOrganization;
use DigitalBibleSociety\Shin\Models\Bible\BibleEquivalent;
use DigitalBibleSociety\Shin\Models\Organization\Organization;
use DigitalBibleSociety\Shin\Models\Resource\Film;
use DigitalBibleSociety\Shin\Models\Resource\Resource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        $bible_equivalents = BibleEquivalent::where('bible_equivalents.organization_id', $id)
                                                   ->select('bible_id')->get()->pluck('bible_id')->toArray();
        $bible_organization = BibleOrganization::where('bible_organization.organization_id', $id)
            ->select('bible_id')->get()->pluck('bible_id')->toArray();
        $bible_links = DB::connection('shin')->table('bible_links')->where('bible_links.organization_id', $id)
            ->select('bible_id')->get()->pluck('bible_id')->toArray();
        $bibles = Bible::whereIn('id',array_merge($bible_equivalents,$bible_organization,$bible_links))->with('language:name')->get();

        $resources = Resource::where('organization_id',$id)->get();

        return view('organizations.show', compact('organization', 'bibles','resources'));
    }
}

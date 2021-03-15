<?php

namespace App\Http\Controllers;


use Common\Modals\Organization\Organization;
use Illuminate\Http\Request;

class OrganizationsController extends Controller
{
    public function index()
    {
        return view('organizations.index');
    }

    public function fobai()
    {
        $fab_id = Organization::where('slug','the-forum-of-bible-agencies')->select('id','slug')->first()->id;
        $organizations = Organization::whereHas('relationships', function($q) use($fab_id){
            $q->where('organization_parent_id', '=', $fab_id);
        })->get();
        return view('organizations.fobai', compact('organizations'));
    }

    public function show($slug)
    {
        $organization = Organization::where('slug',$slug)->first();
        return view('organizations.show', compact('organization'));
    }
}

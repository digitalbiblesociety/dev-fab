@extends('_layouts.main')

@section('header')
    @parent
    <style>
        a.nav-agencies                    {color: var(--primary-color)!important}
        .table i {background-color: var(--primary-color);width: 2.7em; color: #fff;
            border-radius: 16px; margin: 0 auto; font-size:.8em; padding:3px;}
    </style>
@endsection

@section('page_info')
    <div class="modal-info">
        {!!  trans('shin::fab.help.agencies') !!}
        <div class="small-hide">{!!  trans('shin::fab.help.started') !!}{!!  trans('shin::fab.help.scenario_3') !!}</div>
        {!!  trans('shin::fab.help.more') !!}
    </div>
@endsection

@section('main')

    @include('shin::_partials.banner', [
    'title'           => trans('shin::fab.organizations.title'),
    'subtitle'        => trans('shin::fab.organizations.subtitle'),
    'icon'            => 'people_agencies',
    'iconClass'       => 'banner-icon',
    'iconType'        => 'icons',
    'backgroundImage' => 'https://images.bible.cloud/fab/banners/agencies.jpg',
    'tabs' => [
            i18n_link('/fobai')  => 'FOBAI <span class="tab-badge">'. \DigitalBibleSociety\Shin\Models\Organization\OrganizationRelationship::where('organization_parent_id','the-forum-of-bible-agencies')->count().'</span>',
            '#'                  => trans('shin::fields.agencies') . ' <span class="tab-badge">'.\DigitalBibleSociety\Shin\Models\Organization\Organization::count().'</span>'
    ],
    'breadcrumbs' => [
            i18n_link('/')  => trans('shin::fields.home'),
            i18n_link('/organizations/fobai')  => 'FOBAI',
            '#'   => trans('shin::fields.agencies'),
    ]
])


    @include('shin::organizations.index')
@endsection


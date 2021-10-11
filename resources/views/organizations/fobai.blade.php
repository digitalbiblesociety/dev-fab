@extends('_layouts.main')

@section('header')
    @parent
    <style>
        a.nav-agencies     {color: var(--primary-color)!important}
    </style>
@endsection

@section('page_info')
    <div class="modal-info">
        {!!  trans('shin::fab.help.agencies') !!}
        <div class="small-hide">{!!  trans('shin::fab.help.started') !!}{!!  trans('shin::fab.help.scenario_3') !!}</div>
        {!!  trans('shin::fab.help.more', ['url' => i18n_link('/about/help')]) !!}
    </div>
@endsection

@section('main')

    @include('shin::_partials.banner', [
    'title'           => trans('shin::fab.organizations.fobai.title'),
    'subtitle'        => trans('shin::fab.organizations.fobai.subtitle'),
    'icon'            => 'people_agencies',
    'iconClass'       => 'banner-icon',
    'iconType'        => 'icons',
    'backgroundImage' => 'https://images.bible.cloud/fab/banners/agencies-1.jpg',
    'tabs' => [
                    i18n_link('/organizations/') => trans('shin::fields.agencies') . ' <span class="tab-badge">'.\DigitalBibleSociety\Shin\Models\Organization\Organization::count().'</span>',
                     '#'                          => 'FOBAI <span class="tab-badge">'. \DigitalBibleSociety\Shin\Models\Organization\OrganizationRelationship::where('organization_parent_id','the-forum-of-bible-agencies')->count().'</span>',
                     i18n_link('/organization-map')  => 'Organization Map',
    ],
    'breadcrumbs' => [
            i18n_link('/')  => trans('shin::fields.home'),
            '#'   => 'FOBAI'
    ]
])


    @include('shin::organizations.fobai')

@endsection

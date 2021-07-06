@extends('_layouts.main')

@section('header')
    @parent
    <style>
        a.nav-countries                     {color: var(--primary-color)!important}
    </style>

@endsection

@section('page_info')
    <div class="modal-info">
        {!!  trans('shin::fab.help.countries') !!}
        <div class="small-hide">{!!  trans('shin::fab.help.started') !!}{!!  trans('shin::fab.help.scenario_2') !!}</div>
        {!!  trans('shin::fab.help.more') !!}
    </div>
@endsection

@section('main')

    @include('shin::_partials.banner', [
    'title'           => trans('shin::fields.countries'),
    'subtitle'        => trans('shin::fab.countries.subtitle'),
    'icon'            => 'menu_countries',
    'iconClass'       => 'banner-icon',
    'iconType'        => 'icons',
    'backgroundImage' => 'https://images.bible.cloud/fab/banners/countries.jpg',
    'tabs' => [
        '#'                       => trans('shin::fields.countries').' <span class="tab-badge">'.\DigitalBibleSociety\Shin\Models\Country\Country::count().'</span>',
        i18n_link('/world-maps')  => trans('shin::fields.geo.maps').' <span class="tab-badge">22</span>',
    ],
    'breadcrumbs' => [
        i18n_link('/')  => trans('shin::fields.home'),
        '#'   => trans('shin::fields.countries')
    ]
])


    @include('shin::countries.index')
@endsection

@extends('_layouts.main')

@section('header')
    @parent
    <style>
        a.nav-countries    {color: var(--primary-color)!important}
        nav[role=tablist] a {font-size: clamp(.8rem, 3vw, .9rem); padding: 0.7rem .75rem;}
        .map-view h1        {font-size: clamp(1.2rem, 3vw, 1.6rem); text-align:center;margin-bottom: 1.5rem;}
        .map-view .row      {margin: 0 10%}
    </style>
@endsection

@section('main')

    @include('shin::_partials.banner', [
        'title'           => trans('shin::fields.countries'),
        'subtitle'        => trans('shin::fab.countries.subtitle'),
        'icon'            => 'menu_countries',
        'iconClass'       => 'banner-icon',
        'iconType'        => 'icons',
        'tabs'            => [
            'world'     => trans('shin::fields.world'),
            'africa'    => trans('shin::fab.index.africa'),
            'americas'     => trans('shin::fab.index.americas'),
            'asia'     => trans('shin::fab.index.asia'),
            'europe'     => trans('shin::fab.index.europe'),
            'oceania'     => trans('shin::fab.index.oceania'),

        ],
        'backgroundImage' => 'https://images.bible.cloud/fab/banners/countries.jpg',
        'breadcrumbs' => [
            i18n_link('/')  => trans('shin::fields.home'),
            '#'   => trans('shin::fields.countries')
        ]
    ])

    @include('shin::countries.maps.world-maps')

@endsection

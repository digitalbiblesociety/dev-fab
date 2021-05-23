@extends('_layouts.main')

@section('header')
    @parent
    <style>
        a.nav-countries    {color: var(--primary-color)!important}
        h3  {font-size: clamp(1rem, 3vw, 1.3rem); color: #666; text-align:center;margin-bottom: 1.5rem;}
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
            i18n_link('/countries') => trans('shin::fields.countries'),
            '#' => trans('shin::fields.geo.maps')

        ],
        'backgroundImage' => 'https://images.bible.cloud/fab/banners/countries.jpg',
        'breadcrumbs' => [
            i18n_link('/')  => trans('shin::fields.home'),
            '#'   => trans('shin::fields.countries')
        ]
    ])

    @include('shin::countries.maps.world-maps')

@endsection

@extends('_layouts.main')

@section('header')
    @parent
    <style>
        a.nav-countries    {color: var(--primary-color)!important}
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
            'world'     => 'world',
            'africa'    => 'africa'
        ],
        'backgroundImage' => 'https://images.bible.cloud/fab/banners/countries.jpg',
        'breadcrumbs' => [
            i18n_link('/')  => trans('shin::fields.home'),
            '#'   => trans('shin::fields.countries')
        ]
    ])

    @include('shin::countries.maps.world-maps')

@endsection

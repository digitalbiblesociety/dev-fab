@extends('_layouts.main')

@section('header')
    @parent
    <title>{{ $country->name }} | {{ trans('app.title') }}</title>
    <style>
        a.nav-countries     {color: var(--primary-color)!important}
        .link-container a[href^="https://find.bible"] {display: none;}
        .banner.gradient .banner-image:after       {background: linear-gradient(180deg, rgba(167, 207, 223, 0.4) 0, rgba(35, 83, 138, 0.6));}



    </style>
@endsection

@section('main')

    @include('shin::_partials.banner', [
        'title'           => $country->currentTranslation->name ?? $country->name,
        'subtitle'        => trans('shin::fab.countries.of_region') . ' ' . trans("shin::fields.geo.continent.$country->continent_id"),
        'backgroundImage' => 'https://images.bible.cloud/fab/banners/satellite/'.$country->id.'.jpg',
        'icon'            => 'https://images.bible.cloud/maps/icons/'.strtolower($country->id).'_white.png',
        'iconClass'       => 'banner-country',
        'iconType'        => 'link',
        'tabs' => [
            i18n_link("/countries/$country->id") => $country->name,
            '#'                      => trans('shin::fields.geo.maps_info')
        ],
        'breadcrumbs' => [
            i18n_link('/')            => trans('shin::fields.home'),
            i18n_link('/countries')   => trans('shin::fields.countries'),
            i18n_link("/countries/$country->id") =>  $country->name,
            '#'                     => trans('shin::fields.geo.maps')
        ]
    ])


    @include('shin::countries.maps.country', ['country' => $country])

@endsection

@extends('_layouts.main')

@section('header')
    @parent
    <title>{{ $country->name }} | {{ trans('app.title') }}</title>
    <style>
        #subheader          {margin-top:82px; background:#fff;}
        a.nav-countries     {color: var(--primary-color)!important}
        .country-aside      {padding:1.2em;max-width:300px;}
        .country-aside p    {font-size:.9rem; line-height: 1rem;}
        .country-overview   {margin: 1em 0; font-size:.78em;}
        .country-location   {margin:2em auto 1em auto; max-width:240px;}
        .country-facts      {margin: 0 0 1.5em 0;}
    </style>
@endsection

@section('main')

    @include('shin::_partials.banner', [
        'title'           => $country->currentTranslation->name ?? $country->name,
        'subtitle'        => 'A country of Asia',
        'backgroundImage' => 'https://images.bible.cloud/fab/banners/country/'.$country->id.'.jpg',
        'icon'            => 'https://images.bible.cloud/maps/icons/'.strtolower($country->id).'_white.png',
        'tabs' => [
            i18n_link('/countries/') => trans('shin::fields.languages'),
            '#'                      => trans('shin::fields.geo.maps')
        ],
        'breadcrumbs' => [
            i18n_link('/')            => trans('shin::fields.home'),
            i18n_link('/countries')   => trans('shin::fields.countries'),
            '#'                       =>  $country->name
        ]
    ])






    @include('shin::countries.maps.country', ['country' => $country])

@endsection

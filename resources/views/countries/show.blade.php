@extends('_layouts.main')
@section('header')
    @parent
    <style>
        a.nav-countries     {color: var(--primary-color)!important}
    #subheader              {height:8.5em;}

    </style
@endsection


@section('subnav')
    @include('shin::_partials.banner-country', [
    'title'           => $country->currentTranslation->name ?? $country->name,
    'subtitle'        => 'A country of Asia',
    'backgroundImage' => 'https://images.bible.cloud/fab/banners/country/'.$country->id.'.jpg',
    'flag'            => 'https://images.bible.cloud/flags/'.strtolower($country->id).'.svg',
    'icon'            => 'https://images.bible.cloud/maps/icons/'.strtolower($country->id).'_white.png',
    'tabs' => [
        '#' => 'Bibles',
        '#' => 'Resources'
        ]
])


@endsection


@include('shin::_partials.nav.subnav', [
    'links' => [
        '#'  => trans('shin::fields.countries'),
        i18n_link('/countries/maps')   => trans('shin::fields.geo.maps')
    ] ])



@section('main')
    @include('shin::_partials.nav.breadcrumbs', [
           'breadcrumbs' => [
                i18n_link('/')  => trans('shin::fields.home'),
                i18n_link('/countries')   => trans('shin::fields.countries'),
                '#'         =>  $country->name
            ]])


    @include('shin::countries.show', ['country' => $country])

@endsection

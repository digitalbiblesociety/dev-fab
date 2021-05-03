@extends('_layouts.main')

@section('header')
    @parent
    <style>
        a.nav-countries                     {color: var(--primary-color)!important}
    </style>

@endsection

@section('subnav')
    @include('shin::_partials.banner', [
        'title'           => trans('shin::fields.countries'),
        'subtitle'        => trans('shin::fab.countries.subtitle'),
        'icon'            => 'menu_countries',
        'iconClass' => 'banner-icon',
        'iconSVG'   => true,
        'backgroundImage' => 'https://images.bible.cloud/fab/banners/countries.jpg',
        'tabs' => [
            '#' => trans('shin::fields.information'),
            i18n_link('/countries/maps')  => trans('shin::fields.geo.maps')
        ]
])

@endsection


@section('main')

    @include('shin::_partials.nav.breadcrumbs', [
       'breadcrumbs' => [
            i18n_link('/')  => trans('shin::fields.home'),
            '#'   => trans('shin::fields.countries')
        ]])


    @include('shin::countries.index')
@endsection

@extends('_layouts.main')
@section('header')
    @parent
    <style>
        a.nav-countries     {color: var(--primary-color)!important}
    </style
@endsection

@section('subnav')
    @include('shin::_partials.banner', [
    'title'           => $country->currentTranslation->name ?? $country->name,
    'subtitle'        => 'A country of Asia',
    'backgroundImage' => 'https://images.bible.cloud/fab/banners/country/'.$country->id.'.jpg',
    'flag'            => 'https://images.bible.cloud/flags/'.strtolower($country->id).'.svg',
    'tabs' => [
        '#' => trans('shin::fields.languages'),
        i18n_link('/countries/maps')  => trans('shin::fields.geo.maps')
        ]
])
@endsection


@section('main')
    @include('shin::_partials.nav.breadcrumbs', [
           'breadcrumbs' => [
                i18n_link('/')  => trans('shin::fields.home'),
                i18n_link('/countries')   => trans('shin::fields.countries'),
                '#'         =>  $country->name
            ]])


    @include('shin::countries.show', ['country' => $country])

@endsection

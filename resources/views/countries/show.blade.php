@extends('_layouts.main')

@section('header')
    @parent
    <style>
        a.nav-countries     {color: var(--primary-color)!important}
    </style
@endsection

@section('main')

    @include('shin::_partials.banner', [
        'title'           => $country->currentTranslation->name ?? $country->name,
        'subtitle'        => trans('shin::fab.countries.of_region') . ' ' . trans("shin::fields.geo.continent.$country->continent_id"),
        'backgroundImage' => 'https://images.bible.cloud/fab/banners/country/'.$country->id.'.jpg',
        'icon'            => 'https://images.bible.cloud/flags/'.strtolower($country->id).'.svg',
        'iconClass'       => 'banner-flag',
        'iconType'        => 'link',
        'tabs' => [
            '#'                                        => trans('shin::fields.languages'),
            i18n_link("/countries/$country->id/maps")  => trans('shin::fields.geo.maps_info')
        ],
        'breadcrumbs' => [
            i18n_link('/')          => trans('shin::fields.home'),
            i18n_link('/countries') => trans('shin::fields.countries'),
            '#'                     =>  $country->name
        ]
    ])

    @include('shin::countries.show', ['country' => $country])

@endsection

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
        'subtitle'        => 'A country of Asia',
        'backgroundImage' => 'https://images.bible.cloud/fab/banners/country/'.$country->id.'.jpg',
        'icon'            => $country->id,
        'iconClass'       => 'banner-flag',
        'iconType'        => 'flags',
        'tabs' => [
            '#'                                        => trans('shin::fields.languages'),
            i18n_link("/countries/$country->id/maps")  => trans('shin::fields.geo.maps')
        ],
        'breadcrumbs' => [
            i18n_link('/')          => trans('shin::fields.home'),
            i18n_link('/countries') => trans('shin::fields.countries'),
            '#'                     =>  $country->name
        ]
    ])

    @include('shin::countries.show', ['country' => $country])

@endsection

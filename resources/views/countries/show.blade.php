@extends('_layouts.main')

@section('header')
    @parent
    <style>
        a.nav-countries     {color: var(--primary-color)!important}
        .link-container a[href^="https://find.bible"] {display: none;}
    </style
@endsection

@section('page_info')
    <div class="modal-info">
        {!!  trans('shin::fab.help.countries') !!}
        <div class="small-hide">{!!  trans('shin::fab.help.started') !!}{!!  trans('shin::fab.help.scenario_2') !!}</div>
        {!!  trans('shin::fab.help.more') !!}
    </div>
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
            i18n_link("/countries/$country->id/maps")  => $country->name." ".trans('shin::fields.geo.maps_info')
        ],
        'breadcrumbs' => [
            i18n_link('/')          => trans('shin::fields.home'),
            i18n_link('/countries') => trans('shin::fields.countries'),
            '#'                     =>  $country->name
        ]
    ])

    @include('shin::countries.show', ['country' => $country])

@endsection

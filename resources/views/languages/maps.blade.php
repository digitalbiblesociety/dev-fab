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
        'title'           => trans('shin::fab.languages.language_maps'),
        'subtitle'        => trans('shin::fab.languages.language_maps_subtitle'),
        'icon'            => 'menu_languages',
        'iconClass'       => 'banner-icon',
        'iconType'        => 'icons',
        'tabs'            => [
            i18n_link('/languages/') => trans('shin::fields.languages'),
        '#'                          => trans('shin::fields.geo.maps'),

        ],
        'backgroundImage' => 'https://images.bible.cloud/fab/banners/languages_list.jpg',
        'breadcrumbs' => [
            i18n_link('/')  => trans('shin::fields.home'),
            i18n_link('/languages/')  => trans('shin::fields.languages'),
            '#' => trans('shin::fab.languages.language_maps'),
        ]
    ])

    @include('shin::languages.maps')

@endsection

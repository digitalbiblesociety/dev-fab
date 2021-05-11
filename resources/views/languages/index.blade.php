@extends('_layouts.main')
@section('header')
    @parent
    <style>
        a.nav-languages  {color: var(--primary-color)!important}
        .table i {background-color: var(--primary-color);width: 2.7em; color: #fff;
                    border-radius: 16px; margin: 0 auto; font-size:.8em; padding:3px;}
    </style>

@endsection

@section('main')

    @include('shin::_partials.banner', [
    'title'           => trans('shin::fields.languages'),
    'subtitle'        => trans('shin::fab.languages.subtitle'),
    'icon'            => 'menu_languages',
    'iconClass'       => 'banner-icon',
    'iconType'        => 'icons',
    'backgroundImage' => 'https://images.bible.cloud/fab/banners/languages_list.jpg',
    'tabs' => [
        '#'                           => trans('shin::fields.languages'),
        i18n_link('/language/maps')   => trans('shin::fields.geo.maps'),
    ],
    'breadcrumbs' => [
        i18n_link('/')  => trans('shin::fields.home'),
        '#'   => trans('shin::fields.languages'),
    ]
])


@include('shin::languages.index')

@endsection

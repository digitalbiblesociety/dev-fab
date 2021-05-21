@extends('_layouts.main')

@section('header')
    @parent
    <style>
        a.nav-agencies                    {color: var(--primary-color)!important}
    </style>
@endsection


@section('main')

    @include('shin::_partials.banner', [
    'title'           => trans('shin::fab.resources.title'),
    'subtitle'        => trans('shin::fab.resources.subtitle'),
    'icon'            => 'people_agencies',
    'iconClass'       => 'banner-icon',
    'iconType'        => 'icons',
    'backgroundImage' => 'https://images.bible.cloud/fab/banners/agencies.jpg',
    'tabs' => [
            i18n_link('/fobai')  => 'FOBAI',
            '#'                  => trans('shin::fields.agencies')
    ],
    'breadcrumbs' => [
            i18n_link('/')  => trans('shin::fields.home'),
            i18n_link('/resources/fobai')  => 'FOBAI',
            '#'   => trans('shin::fields.agencies'),
    ]
])


    @include('shin::resources.index')
@endsection


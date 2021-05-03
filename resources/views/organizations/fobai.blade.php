@extends('_layouts.main')

@section('header')
    @parent
    <style>
        a.nav-agencies     {color: var(--primary-color)!important}
    </style>
@endsection


@section('main')

    @include('shin::_partials.banner', [
    'title'           => trans('shin::fab.organizations.fobai.title'),
    'subtitle'        => trans('shin::fab.organizations.fobai.subtitle'),
    'icon'            => 'people_agencies',
    'iconClass'       => 'banner-icon',
    'iconType'        => 'icons',
    'backgroundImage' => 'https://images.bible.cloud/fab/banners/agencies-1.jpg',
    'tabs' => [
            '#'  => 'FOBAI',
            i18n_link('/organizations/')  => trans('shin::fields.agencies')
    ],
    'breadcrumbs' => [
            i18n_link('/')  => trans('shin::fields.home'),
            '#'   => 'FOBAI'
    ]
])


    @include('shin::organizations.fobai')

@endsection

@extends('_layouts.main')

@section('header')
    @parent
    <style>
        a.nav-agencies                    {color: var(--primary-color)!important}
    </style>
@endsection


@section('main')

    @include('shin::_partials.banner', [
    'title'           => trans('shin::fab.organizations.title'),
    'subtitle'        => trans('shin::fab.organizations.subtitle'),
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
            i18n_link('/organizations/fobai')  => 'FOBAI',
            '#'   => trans('shin::fields.agencies'),
    ]
])


    @include('shin::organizations.index')
@endsection


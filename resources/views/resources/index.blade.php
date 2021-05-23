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
        'icon'            => 'resources',
        'iconClass'       => 'banner-icon',
        'iconType'        => 'icons',
        'backgroundImage' => 'https://images.bible.cloud/fab/banners/agencies.jpg',
        'tabs' => [
            i18n_link('bibles') => trans('shin::fields.bibles'),
            i18n_link('films')  => trans('shin::fields.films'),
            '#'  => trans('shin::fields.resources'),
            ],
        'breadcrumbs' => [
                i18n_link('/')  => trans('shin::fields.home'),
                '#'             => 'Resources',
           ]
    ])

    @include('shin::resources.index')

@endsection


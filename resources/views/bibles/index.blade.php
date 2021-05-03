@extends('_layouts.main')

@section('header')
    @parent
    <style>
        a.nav-bibles  {color: var(--primary-color)!important}
    </style>

@endsection

@section('main')

    @include('shin::_partials.banner', [
    'title'           => trans('shin::fields.bibles'),
    'subtitle'        => trans('shin::fab.bibles.subtitle'),
    'icon'            => 'bible',
    'iconClass'       => 'banner-icon',
    'iconType'        => 'icons',
    'backgroundImage' => 'https://images.bible.cloud/fab/banners/bibles2.jpg',
    'tabs' => [
        '#' => trans('shin::fields.information'),
        i18n_link('/bibles')  => trans('shin::fields.films'),
        i18n_link('/bibles')  => trans('shin::fields.resources'),
    ],
    'breadcrumbs' => [
        i18n_link('/')  => trans('shin::fields.home'),
     '#'   => trans('shin::fields.bibles')
    ]
])



    @include('shin::bibles.index')

@endsection

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
        '#'                     => trans('shin::fields.bibles') .' <span class="tab-badge">'. number_format(\DigitalBibleSociety\Shin\Models\Bible\Bible::count()).'</span>',
        i18n_link('films')      => trans('shin::fields.films') .' <span class="tab-badge">'. number_format(\DigitalBibleSociety\Shin\Models\Resource\Film::count()).'</span>',
        i18n_link('resources')  => trans('shin::fields.resources') .' <span class="tab-badge">'. number_format(\DigitalBibleSociety\Shin\Models\Resource\Resource::count()).'</span>',
    ],
    'breadcrumbs' => [
        i18n_link('/')  => trans('shin::fields.home'),
     '#'   => trans('shin::fields.bibles')
    ]
])



    @include('shin::bibles.index')

@endsection

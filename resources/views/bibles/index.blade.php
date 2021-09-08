@extends('_layouts.main')

@section('header')
    @parent
    <style>
        a.nav-bibles  {color: var(--primary-color)!important}
    </style>

@endsection

@section('page_info')
    <div class="modal-info">
        {!!  trans('shin::fab.help.bibles') !!}
        <div class="small-hide">{!!  trans('shin::fab.help.started') !!}{!!  trans('shin::fab.help.scenario_1') !!}</div>
        {!!  trans('shin::fab.help.more', ['url' => i18n_link('/about/help')]) !!}
    </div>
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

@extends('_layouts.main')
@section('header')
    @parent
    <style>
        a.nav-languages  {color: var(--primary-color)!important}
        .table i {background-color: var(--primary-color);width: 2.7em; color: #fff;
                    border-radius: 16px; margin: 0 auto; font-size:.8em; padding:3px;}
    </style>
@endsection

@section('page_info')
    <div class="modal-info">
        {!!  trans('shin::fab.help.languages') !!}
        <div class="small-hide">{!!  trans('shin::fab.help.started') !!}{!!  trans('shin::fab.help.scenario_2') !!}</div>
        {!!  trans('shin::fab.help.more') !!}
    </div>
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
        '#'                           => trans('shin::fields.languages').' <span class="tab-badge">'. (\DigitalBibleSociety\Shin\Models\Language\Language::count()).'</span>',
        i18n_link('/language/maps')   => trans('shin::fab.languages.family_maps') .' <span class="tab-badge">15</span>',
    ],
    'breadcrumbs' => [
        i18n_link('/')  => trans('shin::fields.home'),
        '#'   => trans('shin::fields.languages'),
    ]
])


@include('shin::languages.index')

@endsection

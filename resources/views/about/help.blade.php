@extends('_layouts.main')

@section('header')
    @parent
    <title>{{ trans('shin::fab.fields.help') }} | {{ trans('app.title') }}</title>
    <style>
        a.nav-about     {color: var(--primary-color)!important}
        .about-content  {margin: 1rem auto; padding:1em 15%;}
        .about          {margin-bottom:1.5em;}
        h4              {text-align:left;margin: .5em 0;}
        .aside p         {font-size: .8em;margin-top: 1em}
    .aside img          {margin-right: 1em; float:left; width: 80px;}
    .freebirdFormviewerViewCenteredContent {width:100%!important;}
    </style>
@endsection

@section('page_info')
    <div class="modal-info">
        {!!  trans('shin::fab.help.introduction') !!}
        {!!  trans('shin::fab.help.mission') !!}
        {!!  trans('shin::fab.help.about') !!}
        {!!  trans('shin::fab.help.more') !!}
    </div>
@endsection

@include('shin::_partials.banner', [
'title'           => trans('shin::fab.fields.help'),
'subtitle'        => trans('shin::fab.about.help.subtitle'),
'icon'            => 'people_agencies',
'iconClass'       => 'banner-icon',
'iconType'        => 'icons',
'page_info'       => true,
'backgroundImage' => 'https://images.bible.cloud/fab/banners/about.jpg',
'tabs' => [
i18n_link('/about')         => trans('shin::fields.about'),
i18n_link('/about/faq')     => trans('shin::fields.faq'),
'#'   => trans('shin::fab.fields.help'),
i18n_link('/about/suggest') => trans('shin::fab.bibles.suggest_bibles'),
i18n_link('/about/contact') => trans('shin::fields.contact'),
],
'breadcrumbs' => [
    i18n_link('/')  => trans('shin::fields.home'),
    i18n_link('/about')  => trans('shin::fields.about'),
    '#'   => trans('shin::fab.fields.help'),
]
])

@section('main')

    

@endsection

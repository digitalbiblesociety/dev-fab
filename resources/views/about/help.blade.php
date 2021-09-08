@extends('_layouts.main')

@section('header')
    @parent
    <title>{{ trans('shin::fab.about.help.title') }} | {{ trans('app.title') }}</title>
    <style>
        a.nav-about     {color: var(--primary-color)!important}
        .about-content  {margin: 1rem auto; padding:1em 15%;}
        .about          {margin-bottom:1.5em; max-width: 860px;}
        .about p, .about li   {font-size: .82em; line-height: 1.3em;}
        .about h3        {font-size: 1.2em; text-align:left;margin: .5em 0; font-weight:normal;}
        .aside p         {font-size: .8em;margin-top: 1em}
        .about img          {margin: 1.5em 1em 0 0 ; float:left; width: 80px; height: 80px;}
        .scenarios          {margin-bottom: 1.5em;}
        .freebirdFormviewerViewCenteredContent {width:100%!important;}
    </style>
@endsection

@section('page_info')
    <div class="modal-info">
        {!!  trans('shin::fab.help.introduction') !!}
        {!!  trans('shin::fab.help.mission') !!}
        {!!  trans('shin::fab.help.about') !!}
        {!!  trans('shin::fab.help.more', ['url' => i18n_link('/about/help')]) !!}
    </div>
@endsection

@include('shin::_partials.banner', [
'title'           => trans('shin::fab.about.help.title'),
'subtitle'        => trans('shin::fab.about.help.subtitle'),
'icon'            => 'menu_faqs',
'iconClass'       => 'banner-icon',
'iconType'        => 'icons',
'page_info'       => true,
'backgroundImage' => 'https://images.bible.cloud/fab/banners/about3.jpg',
'tabs' => [
i18n_link('/about')         => trans('shin::fields.about'),
i18n_link('/about/faq')     => trans('shin::fields.faq'),
'#'                         => trans('shin::fab.fields.help'),
i18n_link('/about/add')     => trans('shin::fab.bibles.suggest_bibles'),
i18n_link('/about/contact') => trans('shin::fields.contact'),
],
'breadcrumbs' => [
    i18n_link('/')  => trans('shin::fields.home'),
    i18n_link('/about')  => trans('shin::fields.about'),
    '#'   => trans('shin::fab.fields.help'),
]
])

@section('main')

        <div class="row">
            <div class="about row">
                <div class="medium-2 flex-center"><img src="/img/about/fab_color_introduction.svg"/></div>
                <div class="medium-10">
                    {!!  trans('shin::fab.help.introduction') !!}
                </div>
            </div>

            <div class="about row">
                <div class="medium-2 flex-center"><img src="/img/about/fab_color_mission.svg"/></div>
                <div class="medium-10">
                    {!!  trans('shin::fab.help.mission') !!}
                </div>
            </div>

            <div class="about row">
                <div class="medium-2 flex-center"><img src="/img/about/fab_color_started.svg"/></div>
                <div class="medium-10">
                    <div class="scenarios">{!!  trans('shin::fab.help.started') !!}</div>
                    <div class="scenarios">{!!  trans('shin::fab.help.scenario_1') !!}</div>
                    <div class="scenarios">{!!  trans('shin::fab.help.scenario_2') !!}</div>
                    <div class="scenarios">{!!  trans('shin::fab.help.scenario_3') !!}</div>
                </div>
            </div>

            <div class="about row">
                <div class="medium-2 flex-center"><img src="/img/about/fab_color_started.svg"/></div>
                <div class="medium-10">
                    {!!  trans('shin::fab.help.front') !!}
                </div>
            </div>

            <div class="about row">
                <div class="medium-2 flex-center"><img src="/img/about/fab_color_bibles.svg"/></div>
                <div class="medium-10">
                    {!!  trans('shin::fab.help.bibles') !!}
                </div>
            </div>

            <div class="about row">
                <div class="medium-2 flex-center"><img src="/img/fab_color_language.svg"/></div>
                <div class="medium-10">
                    {!!  trans('shin::fab.help.languages') !!}
                </div>
            </div>


            <div class="about row">
                <div class="medium-2 flex-center"><img src="/img/about/fab_color_countries.svg"/></div>
                <div class="medium-10">
                    {!!  trans('shin::fab.help.countries') !!}
                </div>
            </div>

            <div class="about row">
                <div class="medium-2 flex-center"><img src="/img/fab_color_group.svg"/></div>
                <div class="medium-10">
                    {!!  trans('shin::fab.help.agencies') !!}
                </div>
            </div>

            <div class="about row">
                <div class="medium-2 flex-center"><img src="/img/fab_color_team.svg"/></div>
                <div class="medium-10">
                    {!!  trans('shin::fab.help.about') !!}
                </div>
            </div>

        </div>


    </div>


@endsection

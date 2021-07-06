@extends('_layouts.main')

@section('header')
    @parent
    <title>{{ trans('shin::fab.bibles.suggest_bibles') }} | {{ trans('app.title') }}</title>
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
'title'           => trans('shin::fab.about.suggest.title'),
'subtitle'        => trans('shin::fab.about.suggest.subtitle'),
'icon'            => 'people_agencies',
'iconClass'       => 'banner-icon',
'iconType'        => 'icons',
'page_info'       => true,
'backgroundImage' => 'https://images.bible.cloud/fab/banners/about.jpg',
'tabs' => [
i18n_link('/about')         => trans('shin::fields.about'),
i18n_link('/about/faq')     => trans('shin::fields.faq'),
'#'                         => trans('shin::fab.bibles.suggest_bibles'),
i18n_link('/about/contact') => trans('shin::fields.contact'),
],
'breadcrumbs' => [
    i18n_link('/')  => trans('shin::fields.home'),
    '#'   => trans('shin::fields.about'),
]
])

@section('main')

    <div class="row">
        <div class="medium-3 aside">
            <h4>{{ trans('shin::fab.about.suggest.heading') }}</h4>
            <hr />
            <img src="https://images.bible.cloud/fab/fab_color_helping.svg" alt="Suggest Bibles" />
            <p>{!! trans('shin::fab.about.suggest.instructions') !!}</p>
            <p><a style="text-align: right" href="https://images.bible.cloud/fab/docs/FAB_Suggest_Bibles.zip">Download Sheet</a></p>
        </div>
        <div class="medium-9">
            <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSclHomVT1Ad7RwjaNG-FgS3N0iDph7qIzozHcRtif1C4HJMYQ/viewform?embedded=true"
                    width="100%" height="1381" frameborder="0" marginheight="0" marginwidth="0">
                Loading…</iframe>
        </div>
    </div>

@endsection

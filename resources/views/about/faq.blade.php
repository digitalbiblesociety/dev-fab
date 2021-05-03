@extends('_layouts.main')

@section('header')
    @parent
    <title>{{ trans('shin::fields.faq') }} | {{ trans('app.title') }}</title>
    <style>
        #faq            {padding:2em 10%;}
        #faq div        {margin-top:1em;}
        #faq h3, #faq p {padding:1rem; text-align: left;}
        .faq-icon       {}
    </style>
@endsection



@section('main')

    @include('shin::_partials.banner', [
    'title'           => trans('shin::fab.about.faq.title'),
    'subtitle'        => trans('shin::fab.about.faq.subtitle'),
    'icon'            => 'people_agencies',
    'iconClass'       => 'banner-icon',
    'iconType'        => 'icons',
    'backgroundImage' => 'https://images.bible.cloud/fab/banners/bibles2.jpg',
    'tabs' => [
        i18n_link('/about')         => trans('shin::fields.about'),
        '#'                         => trans('shin::fields.faq'),
        i18n_link('/about/contact') => trans('shin::fields.contact')
    ],
    'breadcrumbs' => [
            i18n_link('/')  => trans('shin::fields.home'),
            i18n_link('/about')   => trans('shin::fields.about'),
            '#'                         => trans('shin::fields.faq'),
    ]
])


    <div class="row small-center" id="faq">

        <div class="row">
            <div class="small-1"><img class="faq-icon" src="/img/icon_fab_notitle.svg" alt="About Find.Bible" /></div>
            <div class="small-11"><h3>{{ trans('app.about.faq.1_title') }}</h3></div>
            <p>{{ trans('app.about.faq.1_description') }}</p>
        </div>

        <div class="row">
            <div class="small-1"><img class="faq-icon" src="/img/fab_color_globe.svg" alt="Find.Bible Creation" /></div>
            <div class="small-11"><h3>{{ trans('app.about.faq.2_title') }}</h3></div>
            <p>{!! trans('app.about.faq.2_description') !!}</p>
        </div>

        <div class="row">
            <div class="small-1"><img class="faq-icon" src="/img/fab_color_forumn.svg" alt="Find.Bible Forumn" /></div>
            <div class="small-11"><h3>{{ trans('app.about.faq.3_title') }}</h3></div>
            <p>{{ trans('app.about.faq.3_description') }}</p>
        </div>

        <div class="row">
            <div class="small-1"><img class="faq-icon" src="/img/fab_color_group.svg" alt="Who is FOBAI" /></div>
            <div class="small-11"><h3>{{ trans('app.about.faq.4_title') }}</h3></div>
            <p>{{ trans('app.about.faq.4_description') }}</p>
        </div>

        <div class="row">
            <div class="small-1"><img class="faq-icon" src="/img/fab_color_faq3.svg" alt="Find.Bible Ownership" /></div>
            <div class="small-11"><h3>{{ trans('app.about.faq.5_title') }}</h3></div>
            <p>{{ trans('app.about.faq.5_description') }}</p>
        </div>

        <div class="row">
            <div class="small-1"><img class="faq-icon" src="/img/fab_color_team.svg" alt="Find.Bible Team" /></div>
            <div class="small-11"><h3>{{ trans('app.about.faq.6_title') }}</h3></div>
            <p>{!! trans('app.about.faq.6_description',  ['contactLink' => i18n_link('about/contact')]) !!}</p>
        </div>

        <div class="row">
            <div class="small-1"><img class="faq-icon" src="/img/fab_color_helping.svg" alt="Find.Bible Work" /></div>
            <div class="small-11"><h3>{{ trans('app.about.faq.7_title') }}</h3></div>
            <p>{!! trans('app.about.faq.7_description',  ['contactLink' => i18n_link('about/contact')]) !!}</p>
        </div>

    </div>

@endsection

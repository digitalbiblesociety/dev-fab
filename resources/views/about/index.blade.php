@extends('_layouts.main')

@section('header')
    @parent
    <title>{{ trans('shin::fields.about') }} | {{ trans('app.title') }}</title>
    <style>
        .about-content  {margin: 1rem auto;max-width: 800px; padding:1em 10%;}
        .about          {margin-bottom:1.5em;}
        h4              {text-align:left;}
    </style>
@endsection


@section('main')

    @include('shin::_partials.banner', [
    'title'           => trans('shin::fab.about.title'),
    'subtitle'        => trans('shin::fab.about.subtitle'),
    'icon'            => 'people_agencies',
    'iconClass'       => 'banner-icon',
    'iconType'        => 'icons',
    'backgroundImage' => 'https://images.bible.cloud/fab/banners/about.jpg',
    'tabs' => [
        '#'                         => trans('shin::fields.about'),
        i18n_link('/about/faq')     => trans('shin::fields.faq'),
        i18n_link('/about/contact') => trans('shin::fields.contact')
    ],
    'breadcrumbs' => [
            i18n_link('/')  => trans('shin::fields.home'),
            '#'   => trans('shin::fields.about'),
    ]
])


    <section class="about-content">
        <div class="row">
            <div class="about row">
                <div class="medium-2 flex-center"><img class="small-8" src="/img/about/project.svg"/></div>
                <div class="medium-10">
                    <h4 class="medium-mb2">{{ trans('app.about.index.project_title') }}</h4>
                    <p>{{ trans('app.about.index.project_description') }}</p>
                </div>
            </div>

            <div class="about row">
                <div class="medium-2 flex-center"><img class="small-8" src="/img/about/resources.svg"/></div>
                <div class="medium-10">
                    <h4 class="medium-mb2">{{ trans('app.about.index.volunteer_title') }}</h4>
                    <p>{{ trans('app.about.index.volunteer_description') }}</p>
                    <p><a href="{{ i18n_link('about/contact') }}">{{ trans('shin::fields.contact') }}</a></p>
                </div>
            </div>

            <div class="about row">
                <div class="medium-2 flex-center"><img class="small-8" src="/img/about/symposium.svg"/></div>
                <div class="medium-10">
                    <h4 class="medium-mb2">{{ trans('app.about.index.symposium_title') }}</h4>
                    <p>{{ trans('app.about.index.symposium_description') }}</p>
                    <p><a target="_blank" rel="nofollow noopener" href="https://forum-intl.org/">Learn More</a></p>
                </div>
            </div>

            <div class="about row">
                <div class="medium-2 flex-center"><img class="small-8" src="/img/about/faq.svg"/></div>
                <div class="medium-10">
                    <h4 class="medium-mb2">{{ trans('app.about.index.faq_title') }}</h4>
                    <p>{{ trans('app.about.index.faq_description') }}</p>
                    <p><a href="{{ i18n_link('about/faq') }}">{{ trans('shin::fields.learn_more') }}</a></p>
                </div>
            </div>
        </div>
    </section>

@endsection

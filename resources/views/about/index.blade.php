@extends('_layouts.main')


@section('subnav')

    @include('shin::_partials.nav.subnav', [
    'links' => [
        '#'           => trans('shin::fields.about'),
        '/about/faq'      => trans('shin::fields.faq'),
        '/about/contact'   => trans('shin::fields.contact')
     ]
    ])

@endsection

@section('main')



    <section class="medium-mt2">
        <div class="row">
            <div class="medium-6 row">
                <div class="medium-2 flex-center"><img class="small-8" src="/img/about/project.svg"/></div>
                <div class="medium-10">
                    <h4 class="medium-mb2">{{ trans('app.about.index.project_title') }}</h4>
                    <p>{{ trans('app.about.index.project_description') }}</p>
                </div>
            </div>
            <div class="medium-6 row">
                <div class="medium-2 flex-center"><img class="small-8" src="/img/about/symposium.svg"/></div>
                <div class="medium-10">
                    <h4 class="medium-mb2">{{ trans('app.about.index.symposium_title') }}</h4>
                    <p>{{ trans('app.about.index.symposium_description') }}</p>
                    <a target="_blank" rel="nofollow noopener" href="https://forum-intl.org/">Learn More</a>
                </div>
            </div>
            <div class="medium-6 row">
                <div class="medium-2 flex-center"><img class="small-8" src="/img/about/resources.svg"/></div>
                <div class="medium-10">
                    <h4 class="medium-mb2">{{ trans('app.about.index.volunteer_title') }}</h4>
                    <p>{{ trans('app.about.index.volunteer_description') }}</p>
                    <a href="{{ i18n_link('about/contact') }}">{{ trans('shin::fields.contact') }}</a>
                </div>
            </div>
            <div class="medium-6 row">
                <div class="medium-2 flex-center"><img class="small-8" src="/img/about/faq.svg"/></div>
                <div class="medium-10">
                    <h4 class="medium-mb2">{{ trans('app.about.index.faq_title') }}</h4>
                    <p>{{ trans('app.about.index.faq_description') }}</p>
                    <a href="{{ i18n_link('about/faq') }}">{{ trans('shin::fields.learn_more') }}</a>
                </div>
            </div>
        </div>
    </section>

@endsection

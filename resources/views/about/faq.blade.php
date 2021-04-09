@extends('_layouts.main')

@section('subheader')
<style>
    #faq h3,
    #faq p {
        padding:1rem;
    }
</style>
@endsection

@section('main')

    @include('shin::_partials.banner', [
        'title'     => trans('shin::fields.faq'),
        'subtitle'  => trans('app.about.faq_subtitle'),
        'backgroundImage' => 'https://images.bible.cloud/fab/banners/agencies.jpg',
        'tabs' => [
            i18n_link('/about')         => trans('shin::fields.about'),
            i18n_link('/about/faq')     => trans('shin::fields.faq'),
            i18n_link('/about/contact') => trans('shin::fields.contact'),
        ]
    ])

    <div class="row small-center" id="faq">
        <div class="small-10 medium-10">
        <h3>{{ trans('app.about.faq.faq_1_title') }}</h3>
        <p>{{ trans('app.about.faq.faq_1_description') }}</p>
        <h3>{{ trans('app.about.faq.faq_2_title') }}</h3>
        <p>{{ trans('app.about.faq.faq_2_description') }}</p>
        <h3>{{ trans('app.about.faq.faq_3_title') }}</h3>
        <p>{{ trans('app.about.faq.faq_3_description') }}</p>
        <h3>{{ trans('app.about.faq.faq_4_title') }}</h3>
        <p>{{ trans('app.about.faq.faq_4_description') }}</p>
        <h3>{{ trans('app.about.faq.faq_5_title') }}</h3>
        <p>{{ trans('app.about.faq.faq_5_description') }}</p>
        <h3>{{ trans('app.about.faq.faq_6_title') }}</h3>
        <p>{{ trans('app.about.faq.faq_6_description') }}</p>
        <h3>{{ trans('app.about.faq.faq_7_title') }}</h3>
        <p>{{ trans('app.about.faq.faq_7_description') }}</p>
    </div>
    </div>

@endsection

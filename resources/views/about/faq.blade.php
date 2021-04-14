@extends('_layouts.main')

@section('header')
    @parent
    <title>{{ trans('shin::fields.faq') }} | {{ trans('app.title') }}</title>
@endsection

@section('subheader')
<style>
    #faq h3, #faq p {padding:1rem;}
</style>
@endsection

@section('subnav')

    @include('shin::_partials.nav.subnav', [
    'links' => [
        '/about'          => trans('shin::fields.about'),
        '#'      => trans('shin::fields.faq'),
        '/about/contact'  => trans('shin::fields.contact')
     ]
    ])

@endsection

@section('main')


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

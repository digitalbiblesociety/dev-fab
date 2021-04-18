@extends('_layouts.main')

@section('header')
    @parent
    <title>{{ trans('shin::fields.fobai') }} | {{ trans('app.title') }}</title>
    <style>
        .orgs a {flex-basis:20%; height:120px;}
        /* Media Queries 960px 720px 480px */
            @media screen and (max-width:60em){ .orgs a {flex-basis:25%}}
            @media screen and (max-width:45em){ .orgs a {flex-basis:33%}}
            @media screen and (max-width:30em){ .orgs a {flex-basis:50%}}

        .orgs svg {width: 1em;height: 1em;vertical-align: -.15em;fill: currentColor;overflow: hidden;
                    margin: 0 auto;display: block;font-size: 9rem; max-height:90px;}
         div.page-title {margin:2em auto 1em auto;}
    </style>
@endsection
@section('subnav')
    @include('shin::_partials.nav.subnav', [
        'links' => [
            '#'      => 'FOBAI',
            i18n_link('/organizations/')      => trans('shin::fields.agencies')
        ]
    ])
@endsection
@section('main')
    <section>
        <div class="row">
            <div class="row page-title">
                <svg class="dt-aside-icon" >
                    <use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="/img/icons.svg#people_agencies"></use>
                </svg>
                <span class="dt-aside-title">{{ trans('shin::fields.fobai') }}</span>
            </div>
        </div>

    <div class="row orgs">
        @foreach($organizations as $org)
            <a class="small-6 medium-4" href="{{ i18n_link("/organizations/$org->id") }}">{!! $org->logo !!}</a>
        @endforeach
    </div>

    </section>
@endsection

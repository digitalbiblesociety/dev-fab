@extends('_layouts.main')

@section('header')
    @parent
    <title>{{ trans('shin::fields.fobai') }} | {{ trans('app.title') }}</title>
    <style>
        a.nav-agencies     {color: var(--primary-color)!important}
        .orgs a             {flex-basis:20%; height:120px;}
        /* Media Queries 960px 720px 480px */
            @media screen and (max-width:60em){ .orgs a {flex-basis:25%}}
            @media screen and (max-width:45em){ .orgs a {flex-basis:33%}}
            @media screen and (max-width:30em){ .orgs a {flex-basis:50%}}

        .orgs svg {width: 1em;height: 1em;vertical-align: -.15em;fill: currentColor;overflow: hidden;
                    margin: 0 auto;display: block;font-size: 9rem; max-height:90px;}

    </style>
@endsection

@section('subnav')
    @include('shin::_partials.nav.subnav', [
        'links' => [
            '#'  => 'FOBAI',
            i18n_link('/organizations/')  => trans('shin::fields.agencies')
        ]
    ])
@endsection

@section('main')
    @include('shin::_partials.nav.breadcrumbs', [
       'breadcrumbs' => [
            i18n_link('/')  => trans('shin::fields.home'),
            '#'   => 'FOBAI'
        ]])

    <section>
        <div class="row aside-page flex-inline">
            <svg class="aside-icon"><use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="/img/icons.svg#people_agencies"></use></svg>
            <span class="aside-title">{{ trans('shin::fields.fobai') }}</span>
        </div>

        <div class="row orgs">
            @foreach($organizations as $org)
                <a class="small-6 medium-4" href="{{ i18n_link("/organizations/$org->id") }}">{!! $org->logo !!}</a>
            @endforeach
        </div>

    </section>
@endsection

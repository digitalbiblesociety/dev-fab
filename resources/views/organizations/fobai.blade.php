@extends('_layouts.main')

@section('header')
    @parent
    <title>{{ trans('shin::fields.fobai') }} | {{ trans('app.title') }}</title>
    <style>
        .orgs a {flex-basis:20%; max-height:132px;}
        /* Media Queries 960px 720px 480px */
            @media screen and (max-width:60em){ .orgs a {flex-basis:25%}}
            @media screen and (max-width:45em){ .orgs a {flex-basis:33%}}
            @media screen and (max-width:30em){ .orgs a {flex-basis:50%}}

        .orgs svg {width: 1em;height: 1em;vertical-align: -.15em;fill: currentColor;overflow: hidden;
                    margin: 0 auto;display: block;font-size: 9rem;}
    </style>
@endsection
@section('subnav')
    @include('shin::_partials.nav.subnav', [
        'links' => [
            '/organizations/'      => trans('shin::fields.agencies'),
            '#'      => 'FOBAI'
        ]
    ])
@endsection
@section('main')


    <div class="row orgs">
        @foreach($organizations as $org)
            <a class="small-6 medium-4" href="/organizations/{{ $org->id }}">{!! $org->logo !!}</a>
        @endforeach
    </div>

@endsection

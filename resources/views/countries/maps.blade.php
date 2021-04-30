@extends('_layouts.main')

@section('header')
    @parent
    <style>
        a.nav-countries    {color: var(--primary-color)!important}
    </style>
@endsection

@section('subnav')
    @include('shin::_partials.nav.subnav', [
        'links' => [
            i18n_link('/countries/')  => trans('shin::fields.countries'),
            '#'  => trans('shin::fields.geo.maps')
        ]
    ])
@endsection

@section('main')

    @include('shin::countries.maps')

@endsection

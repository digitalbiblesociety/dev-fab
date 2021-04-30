@section('header')
    @parent
    <style>
        a.nav-languages  {color: var(--primary-color)!important}
        .table i {background-color: var(--primary-color);width: 2.7em; color: #fff;
                    border-radius: 16px; margin: 0 auto; font-size:.8em; padding:3px;}
    </style>

@endsection

@extends('_layouts.main')

@section('subnav')
    @include('shin::_partials.nav.subnav', [
        'links' => [
            '#'  => trans('shin::fields.languages'),
            i18n_link('/countries/maps')   => trans('shin::fields.geo.maps')
        ]
    ])
@endsection


@section('main')
        @include('shin::_partials.nav.breadcrumbs', [
               'breadcrumbs' => [
                    i18n_link('/')  => trans('shin::fields.home'),
                    '#'   => trans('shin::fields.languages')
                ]])


@include('shin::languages.index')

@endsection

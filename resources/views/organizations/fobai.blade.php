@extends('_layouts.main')

@section('header')
    @parent
    <style>
        a.nav-agencies     {color: var(--primary-color)!important}
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


    @include('shin::organizations.fobai')

@endsection

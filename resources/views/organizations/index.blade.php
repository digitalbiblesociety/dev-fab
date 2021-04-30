@extends('_layouts.main')

@section('header')
    @parent
    <style>
        a.nav-agencies                    {color: var(--primary-color)!important}
    </style>
@endsection

@section('subnav')
    @include('shin::_partials.nav.subnav', [
        'links' => [
            i18n_link('/fobai')  => 'FOBAI',
            '#'                  => trans('shin::fields.agencies')
        ]])
@endsection


@section('main')
    @include('shin::_partials.nav.breadcrumbs', [
       'breadcrumbs' => [
            i18n_link('/')  => trans('shin::fields.home'),
            i18n_link('/organizations/fobai')  => 'FOBAI',
            '#'   => trans('shin::fields.agencies'),
        ]])


    @include('shin::organizations.index')
@endsection


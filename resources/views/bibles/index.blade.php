@extends('_layouts.main')

@section('header')
    @parent
    <style>
        a.nav-bibles  {color: var(--primary-color)!important}
    </style>

@endsection

@section('main')

    @include('shin::_partials.nav.breadcrumbs', [
       'breadcrumbs' => [
            i18n_link('/')  => trans('shin::fields.home'),
            '#'   => trans('shin::fields.bibles')
        ]])


    @include('shin::bibles.index')

@endsection

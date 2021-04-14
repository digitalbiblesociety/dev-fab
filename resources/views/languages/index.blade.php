@section('header')
    @parent
    <style>
        .table i {background-color: var(--primary-color);width: 2.7em; color: #fff;
                    border-radius: 16px; margin: 0 auto; font-size:.8em; padding:3px;}
    </style>

@endsection


@extends('_layouts.main')

@section('main')

    @include('shin::languages.index')

@endsection

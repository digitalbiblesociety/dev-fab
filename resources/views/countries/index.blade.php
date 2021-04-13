@section('header')
    @parent
    <title>World Map | Find a Bible</title>

@endsection



@extends('_layouts.main')

@section('subheader')

@endsection

@section('main')

    @include('shin::countries.index')

@endsection

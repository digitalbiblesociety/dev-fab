@section('header')
    @parent
    <title>World Map | Find a Bible</title>
    <style>
        aside.column  {min-width:200px; margin:1rem 1rem 0 0;}
    </style>
@endsection



@extends('_layouts.main')

@section('subheader')

@endsection

@section('main')

    @include('shin::countries.index')

@endsection

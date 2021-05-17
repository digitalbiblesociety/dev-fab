@extends('_layouts.main')

@php
$languages = \DigitalBibleSociety\Shin\Models\Language\Language::select('iso','name')->get()->pluck('name','iso');
$countries = \DigitalBibleSociety\Shin\Models\Country\Country::select('id','name')->get()->pluck('name','id');
$bibles = \DigitalBibleSociety\Shin\Models\Bible\Bible::select('id','name')->get()->pluck('name','id');
$organizations = \DigitalBibleSociety\Shin\Models\Organization\Organization::select('id','name')->get()->pluck('name','id');
@endphp


@section('main')

        @foreach($languages as $iso => $name)
            <a href="/languages/{{ $iso }}">{{ $name }}</a>
        @endforeach
        @foreach($countries as $id => $name)
            <a href="/countries/{{ $id }}">{{ $name }}</a>
        @endforeach
        @foreach($bibles as $id => $name)
            <a href="/bibles/{{ $id }}">{{ $name }}</a>
        @endforeach
        @foreach($organizations as $id => $name)
            <a href="/organizations/{{ $id }}">{{ $name }}</a>
        @endforeach


@endsection

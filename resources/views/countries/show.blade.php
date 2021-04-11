@extends('_layouts.main')

@section('main')

    @include('shin::countries.show', ['country' => $country])

@endsection

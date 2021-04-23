@extends('_layouts.main')

@section('main')

    @include('shin::countries.showMaps', ['country' => $country])

@endsection

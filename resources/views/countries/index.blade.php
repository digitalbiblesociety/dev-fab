@extends('_layouts.main')

@section('subheader')
    <style>
        thead tr th:nth-child(-n + 3),
        tr td:nth-child(-n + 3) {
            display: none;
        }

    </style>
@endsection

@section('main')

    @include('shin::countries.index')

@endsection

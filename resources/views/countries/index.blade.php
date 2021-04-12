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
    @include('shin::_partials.banner', [
        'title'           => trans('app.countries.title'),
        'subtitle'        => trans('app.countries.subtitle'),
        'icon'            => 'menu_countries',
        'backgroundImage' => 'https://images.bible.cloud/fab/banners/countries.jpg'
    ])
    @include('shin::countries.index')

@endsection

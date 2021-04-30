@extends('_layouts.main')

@section('header')
    @parent
    <style>
        #subheader          {margin-top:82px; background:#fff;}
        a.nav-languages     {color: var(--primary-color)!important}
    </style
@endsection


@section('subnav')

@include('shin::_partials.banner', [
    'title'           => $language->name,
    'subtitle'        => '',
    'backgroundImage' => 'https://images.bible.cloud/fab/banners/languages_list.jpg',
    'tabs' => [
        'bibles' => 'Bibles',
        'resources' => 'Resources'
    ]
])

@endsection


@section('main')


    @include('shin::_partials.nav.breadcrumbs', [
           'breadcrumbs' => [
                i18n_link('/')  => trans('shin::fields.home'),
                i18n_link('/languages')   => trans('shin::fields.languages'),
                '#'         =>  $language->name,
            ]])

    @include('shin::languages.show')

@endsection

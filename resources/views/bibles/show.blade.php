@extends('_layouts.main')
@section('header')
    @parent
    <style>
        a.nav-bibles  {color: var(--primary-color)!important}
    </style>
@endsection

@section('subnav')
    @include('shin::_partials.banner', [
    'title'     => $bible->title,
    'subtitle'  => $bible->title_vernacular,
    'backgroundImage' => 'https://images.bible.cloud/fab/banners/language/'.substr($bible->id,0,3).'.jpg',
    'tabs' => [
        i18n_link('bibles') => trans('shin::fields.bibles'),
        i18n_link('films')  => trans('shin::fields.films'),
        i18n_link('resources')  => trans('shin::fields.resources'), ],
     'breadcrumbs' => [
        i18n_link('/')  => trans('shin::fields.home'),
        i18n_link('/bibles')   => trans('shin::fields.bibles'),
        i18n_link('/languages/[ $bible->iso ]')   => $bible->iso,
            '#'         =>  $bible->title,
    ],

])
@endsection


@section('main')


    @include('shin::bibles.show')

@endsection


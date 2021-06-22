@extends('_layouts.main')
@section('header')
    @parent
    <style>
        a.nav-bibles  {color: var(--primary-color)!important}
        [role="tablist"] {display: flex;flex-wrap: wrap}
        nav[role=tablist] a {
            background: white;
            border-radius: 0;
        }
    </style>
@endsection

@section('subnav')
    @include('shin::_partials.banner', [
    'title'     => $bible->title,
    'subtitle'  => $bible->title_vernacular,
    'backgroundImage' => 'https://images.bible.cloud/fab/banners/language/'.substr($bible->id,0,3).'.jpg',
    'breadcrumbs' => [
        i18n_link('/')        => trans('shin::fields.home'),
        i18n_link('/bibles')  => trans('shin::fields.bibles'),
        '#'                   => $bible->title,
    ],
    'tabs' => collect($bible->children->mapWithKeys(function ($bible) {
        return [$bible->id => $bible->title];
    }))->merge([$bible->id => $bible->title])->toArray()

])
@endsection


@section('main')


    @include('shin::bibles.show')

@endsection


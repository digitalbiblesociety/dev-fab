@extends('_layouts.main')
@section('header')
    @parent
    <style>
        a.nav-bibles  {color: var(--primary-color)!important}
        [role="tablist"] {display: flex;flex-wrap: wrap}
        nav[role=tablist] a {background-color: rgba(250, 250, 250, 0.75)}
    </style>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/jonbitgood/fontable/fonts/{{$bible->script}}/default.css">

@endsection

@section('subnav')
    @include('shin::_partials.banner', [
    'title'     => $bible->title,
    'subtitle'  => $bible->title_vernacular,
    'subtitle_class' => 'font-'.strtolower($bible->script),
    'backgroundImage' => 'https://images.bible.cloud/fab/banners/language/'.substr($bible->id,0,3).'.jpg',
    'breadcrumbs' => [
        i18n_link('/')        => trans('shin::fields.home'),
        i18n_link('/bibles')  => trans('shin::fields.bibles'),
        i18n_link('/languages/'.$bible->iso) =>  $bible->language->name,
        '#'                   => $bible->title,
    ],
    'tabs' => collect($bible->children->mapWithKeys(function ($bible) {
        return [$bible->id => $bible->title];
    }))->merge([$bible->id => $bible->title])->toArray()

])
@endsection

@section('page_info')
    <div class="modal-info">
        {!!  trans('shin::fab.help.bibles') !!}
        <div class="small-hide">{!!  trans('shin::fab.help.started') !!}{!!  trans('shin::fab.help.scenario_1') !!}</div>
        {!!  trans('shin::fab.help.more', ['url' => i18n_link('/about/help')]) !!}
    </div>
@endsection

@section('main')


    @include('shin::bibles.show')

@endsection


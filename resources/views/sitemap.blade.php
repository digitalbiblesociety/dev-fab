@extends('_layouts.main')

@php
$languages = \DigitalBibleSociety\Shin\Models\Language\Language::select('iso','name')->get()->pluck('name','iso');
$countries = \DigitalBibleSociety\Shin\Models\Country\Country::select('id','name')->get()->pluck('name','id');
$bibles = \DigitalBibleSociety\Shin\Models\Bible\Bible::select('id','title')->get()->pluck('title','id');
$organizations = \DigitalBibleSociety\Shin\Models\Organization\Organization::select('id','name')->get()->pluck('name','id');
@endphp

@section('header')
    @parent
    <title>Sitemap</title>
    <style>
        .columns { column-count: 3 }
    </style>
@endsection


@section('header')
    @parent
    <title>Sitemap</title>
    <style>
        .icon    {margin-right:.5em;}
        .list {display: flex;flex-direction: row;flex-wrap: wrap}
        .site {margin:1em; padding-bottom: 1em;border-bottom: thin solid #ccc;}
        .site_section { column-count: 5 }
        .site_section a {font-size:.75em;}
        .top         {font-size: 1.5em; color:var(--primary-color); text-align:right;}

        #siteFilter {
            background-position: 10px 12px;background-repeat: no-repeat;width: 35%;min-width: 280px;font-size: 12px; border-radius: 6px;
            padding: 12px 20px 12px 9px;border: 1px solid #ddd;margin: 0px auto 16px auto;display: block;-webkit-box-shadow: 5px 5px 4px -5px rgb(0 0 0 / 95%);
            box-shadow: 5px 5px 4px -5px #222}

        /* Media Queries 1200px 960px 720px 480px 384px */
        @media all and (max-width:75em) {}
        @media all and (max-width:60em) {.site_section { column-count: 4 }}
        @media all and (max-width:45em) {.site_section { column-count: 3 }}
        @media all and (max-width:30em) {.site_section { column-count: 2 }}
        @media all and (max-width:24em) {}

    </style>
@endsection

@section('main')

    @include('shin::_partials.banner', [
    'title'           => trans('shin::fields.sitemap'),
    'subtitle'        => trans('shin::fab.languages.subtitle'),
    'icon'            => 'menu_folders',
    'iconClass'       => 'banner-icon',
    'iconType'        => 'icons',
    'backgroundImage' => 'https://images.bible.cloud/fab/banners/languages_list.jpg',
    'tabs' => [
        '#'                           => trans('shin::fields.countries'),
        i18n_link('/sitemap/#languages')   => trans('shin::fields.languages'),
        i18n_link('/sitemap/#bibles')   => trans('shin::fields.bibles'),
        i18n_link('/sitemap/#organizations')   => trans('shin::fields.organizations'),
    ],
    'breadcrumbs' => [
        i18n_link('/')  => trans('shin::fields.home'),
        '#'   => trans('shin::fields.sitemap'),
    ]
])



    <div id="sitemap-list">
        <input type="search" class="search" placeholder="Filter by Language or Name here...">
        <h1 id="countries" class="site">
            <svg class="icon"><use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="/img/icons.svg#menu_countries"></use></svg>Countries</h1>

        <ul class="list">
        @foreach($countries as $id => $name)
            <li class="medium-3"><a class="name" href="/countries/{{ $id }}">{{ $id }} - {{ $name }}</a></li>
        @endforeach

        <h1 id="languages" class="site">
            <svg class="icon"><use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="/img/icons.svg#menu_languages"></use></svg>Languages</h1>
            <div class="top"><a href="#" alt="To Top"> ↑ </a></div>

        @foreach($languages as $iso => $name)
                <li class="medium-2"><a class="name" href="/languages/{{ $iso }}">{{ $iso }} - {{ $name }}</a></li>
            @endforeach


        <h1 id="bibles" class="site">
            <svg class="icon"><use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="/img/icons.svg#bible"></use></svg>Bibles</h1>
            <div class="top"><a href="#" alt="To Top"> ↑ </a></div>

            @foreach($bibles as $id => $title)
                <li class="medium-4"><a class="name" href="/bibles/{{ $id }}">{{ $id }} - {{ $title }}</a></li>
            @endforeach


        <h1 id="organizations" class="site">
            <svg class="icon"><use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="/img/icons.svg#people_agencies"></use></svg>Organizations</h1>
            <div class="top"><a href="#" alt="To Top"> ↑ </a></div>

            @foreach($organizations as $id => $name)
                <li class="medium-4"><a class="name" href="/organizations/{{ $id }}">{{ $name }}</a></li>
            @endforeach
        </ul>
    </div>
        <div class="top"><a href="#" alt="To Top"> ↑ </a></div>
@endsection

@section('footer')
    <script src="//cdnjs.cloudflare.com/ajax/libs/list.js/2.3.1/list.min.js"></script>
    <script>
        var options = {
            valueNames: [ 'name' ]
        };

        var hackerList = new List('sitemap-list', options);
    </script>
@endsection

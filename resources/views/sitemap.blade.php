@extends('_layouts.main')

@php
$languages = \DigitalBibleSociety\Shin\Models\Language\Language::select('iso','name')->get()->pluck('name','iso');
$countries = \DigitalBibleSociety\Shin\Models\Country\Country::select('id','name')->get()->pluck('name','id');
$bibles = \DigitalBibleSociety\Shin\Models\Bible\Bible::select('id','name')->get()->pluck('name','id');
$organizations = \DigitalBibleSociety\Shin\Models\Organization\Organization::select('id','name')->get()->pluck('name','id');
@endphp


@section('header')
    @parent
    <title>Sitemap</title>
    <style>
        .icon    {margin-right:.5em;}
        .site {margin:1em; padding-bottom: 1em;border-bottom: thin solid #ccc;}
        .site_section { column-count: 5 }
        .site_section a {font-size:.75em;}
        .top         {font-size: 1.5em; color:var(--primary-color); text-align:right;}

        #siteFilter {
            background-position: 10px 12px;background-repeat: no-repeat;width: 35%;min-width: 280px;font-size: 12px; border-radius: 6px;
            padding: 12px 20px 12px 9px;border: 1px solid #ddd;margin: 0px auto 16px auto;display: block;-webkit-box-shadow: 5px 5px 4px -5px rgb(0 0 0 / 95%);
            box-shadow: 5px 5px 4px -5px rgb(0 0 0 / 95%);}

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

    <input type="text" id="siteFilter" onkeyup="filterSitemap()" placeholder="Filter by Language or Name here...">

    <div id="siteMapList">
        <h1 id="countries" class="site">
            <svg class="icon"><use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="/img/icons.svg#menu_countries"></use></svg>Countries</h1>
        <div class="site_section">
        @foreach($countries as $id => $name)
            <a href="/countries/{{ $id }}">{{ $id }} - {{ $name }}</a><br>
        @endforeach
        </div>

        <h1 id="languages" class="site">
            <svg class="icon"><use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="/img/icons.svg#menu_languages"></use></svg>Languages</h1>
            <div class="top"><a href="#" alt="To Top"> ↑ </a></div>
        <div class="site_section">
        @foreach($languages as $iso => $name)
                <a href="/languages/{{ $iso }}">{{ $iso }} - {{ $name }}</a><br>
            @endforeach
        </div>

        <h1 id="bibles" class="site">
            <svg class="icon"><use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="/img/icons.svg#bible"></use></svg>Bibles</h1>
            <div class="top"><a href="#" alt="To Top"> ↑ </a></div>
        <div class="site_section">
            @foreach($bibles as $id => $name)
                <a href="/bibles/{{ $id }}">{{ $id }} - {{ $name }}</a><br>
            @endforeach
        </div>

        <h1 id="organizations" class="site">
            <svg class="icon"><use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="/img/icons.svg#people_agencies"></use></svg>Organizations</h1>
            <div class="top"><a href="#" alt="To Top"> ↑ </a></div>
        <div class="site_section">
            @foreach($organizations as $id => $name)
                <a href="/organizations/{{ $id }}">{{ $name }}</a><br>
            @endforeach
        </div>
    </div>
        <div class="top"><a href="#" alt="To Top"> ↑ </a></div>



    <script type="text/template" id="no-results-found">
        <h1 class="text-center">No Results Found</h1>
    </script>
    <script async defer src="/js/main.js"></script>

    <div id="amzn-assoc-ad-809c9919-55af-41cb-9d4a-453c79707d25"></div>
    <script async src="https://z-na.amazon-adsystem.com/widgets/onejs?MarketPlace=US&adInstanceId=809c9919-55af-41cb-9d4a-453c79707d25"></script>
    <script>
        function filterSitemap() {
            // Declare variables
            var input, filter, ul, li, a, i, txtValue;
            input = document.getElementById('siteFilter');
            filter = input.value.toUpperCase();
            ul = document.getElementById("siteMapList");
            li = ul.getElementsByTagName('a');

            // Loop through all list items, and hide those who don't match the search query
            for (i = 0; i < li.length; i++) {
                a = li[i].getElementsByTagName("a")[0];
                txtValue = a.textContent || a.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    li[i].style.display = "";
                } else {
                    li[i].style.display = "none";
                }
            }
        }
    </script>
@endsection

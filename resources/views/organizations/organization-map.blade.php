@extends('_layouts.main')

@section('header')
    @parent
    <title>{{ trans('shin::fields.countries') }} | {{ trans('app.title') }}</title>

    <style>
        .map-img        {padding: 1em 1.5em;}
        .map-google iframe    {margin: 0 auto 2em auto; display:block;}
        .map-img img    {margin:0 auto; display:block; padding:0 1em; max-height: 8.5em; border: 3px solid var(--primary-color)}
        .map-img img:hover     {border: 3px solid var(--secondary-color)}
        #mapid             {height:800px; width:auto; margin: 0 5% 2em 5%; border-radius: .3em; border: thin solid #ccc; z-index:2;}
        .country-aside      {padding:1.2em;}
        .country-aside p    {font-size:.8rem; line-height: 1rem;}
        .country-overview   {margin: 1em 0; font-size:.78em;}
        .country-location   {margin:2em auto 1em auto;}
        .country-facts      {margin: 0 0 1.5em 0;}
        .table i {background-color: var(--primary-color); width: 2.7em; color: #fff; border-radius: 16px; margin: 0 auto;
            font-size: .8em;padding: 3px;}
        .link-container      {margin: 1em 0;}
        .link-container p   {padding:0 .2em; font-size: .6em; color:#666; line-height: .93em; text-align: center;}
        .link-container img {padding:0 .2em;}
        .pdf-icon           {width: 2em;height: 2.5em;position: relative;top: 12px;left: 6px;}

    </style>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
          integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
          crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
            integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
            crossorigin=""></script>
@endsection

@section('main')

    @include('shin::_partials.banner', [
        'title'           => trans('shin::fab.organizations.title'),
        'subtitle'        => trans('shin::fab.organizations.subtitle'),
        'icon'            => 'people_agencies',
        'iconClass'       => 'banner-icon',
        'iconType'        => 'icons',
        'backgroundImage' => 'https://images.bible.cloud/fab/banners/agencies.jpg',
        'tabs' => [
                i18n_link('/organizations/') => trans('shin::fields.agencies'),
                i18n_link('/fobai')          => 'FOBAI',
                '#'                          => 'Organization Map',


        ]
    ])

{{-- Grab all languages in country / check for lat longs / and create pins --}}
{{--OpenStreenMap Display  --}}
<div class="map-img row">
    <h4>Organizations Map</h4>
</div>
<div id="mapid"></div>

</div>
@endsection

@section('footer_scripts')
    @parent('footer_scripts')
    <script>
        var mymap = L.map('mapid').setView([0,0], 3);
        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
            maxZoom: 18,
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
                'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1,
        }).addTo(mymap);

        var FOBAI = new L.Icon({
            iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-green.png',
            shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
            iconSize: [25, 41],
            iconAnchor: [12, 41],
            popupAnchor: [1, -34],
            shadowSize: [41, 41]
        });

        var UBS = new L.Icon({
            iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-red.png',
            shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
            iconSize: [25, 41],
            iconAnchor: [12, 41],
            popupAnchor: [1, -34],
            shadowSize: [41, 41]
        });

        var Library = new L.Icon({
            iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-red.png',
            shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
            iconSize: [25, 41],
            iconAnchor: [12, 41],
            popupAnchor: [1, -34],
            shadowSize: [41, 41]
        });

        var Agency = new L.Icon({
            iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-blue.png',
            shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
            iconSize: [25, 41],
            iconAnchor: [12, 41],
            popupAnchor: [1, -34],
            shadowSize: [41, 41]
        });

        @foreach($organizations as $key => $organization)
        @if($organization->latitude && $organization->longitude)
        let marker_{{$key}} = L.marker([{{ $organization->latitude }}, {{ $organization->longitude }}], {icon: {{ $organization->type ?? 'Agency' }} }).addTo(mymap);
        marker_{{$key}}.bindPopup('<a href="/organizations/{{$organization->id}}">{{ $organization->name }}</a>').openPopup();
        @endif
        @endforeach

    </script>
@endsection

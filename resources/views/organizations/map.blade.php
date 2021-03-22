@extends('_layouts.main')

@section('main')


    <div id="map"></div>

@endsection

@section('footer')
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmkjooXwUmOfU3APyslfHJp7rDq5URtHo&callback=initMap&libraries=&v=weekly"
        async
    ></script>
    <script>
        let map;

        function initMap() {
            map = new google.maps.Map(document.getElementById("map"), {
                center: new google.maps.LatLng(0, 0),
                zoom: 3,
            });
            const icons = {
                @foreach($organizations as $org)
                    "{{$org->slug}}": { icon: '/img/logos/icons/{{$org->slug}}.svg' }@if(!$loop->last),@endif
                @endforeach
            };

            const features = [
                @foreach($organizations as $org)
                { position: new google.maps.LatLng({{ $org->latitude }}, {{ $org->longitude }}), type: '{{$org->slug}}'}@if(!$loop->last),@endif
                @endforeach
            ];

            // Create markers.
            for (let i = 0; i < features.length; i++) {
                const marker = new google.maps.Marker({
                    position: features[i].position,
                    icon: icons[features[i].type].icon,
                    map: map,
                });
            }
        }
    </script>
@endsection

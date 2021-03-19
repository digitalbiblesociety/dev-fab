@extends('_layouts.main')

@section('subheader')
    <title>World Map | Find a Bible</title>
    <meta name="description" content="">
    <style>
        #world_map_wrap {
            background: linear-gradient(142deg,#085078 10%,#85d8ce);
        }

        #world_map {
            display: block;
            max-width: 1200px;
            margin: 0 auto;
        }

        #world_map path:hover {
            fill: #222;
            cursor: pointer;
        }

        .tagline {
            font-size: 1.25rem;
            line-height: 2;
            max-width: 600px;
            margin: 0 auto;
            text-align: center;
        }

    </style>
@endsection

@section('main')

    <div id="world_map_wrap">
        @include('_partials.maps.world')
    </div>

    <div class="tagline">
        <p> {{ trans('fab.index.stat_line', [
                'numBibles'        => number_format(\Common\Modals\Bible\Bible::count()),
                'numOrganizations' => \Common\Modals\Organization\Organization::count(),
                'numResources'     => number_format(\Common\Modals\Resource\Resource::count())
            ]) }}</p>
    </div>

@endsection

@section('footer')
<script>
  let world_map = document.getElementById("world_map"),
      country_info = document.getElementById("country_info"),
      countries = world_map.querySelectorAll("path");

  world_map.addEventListener("click", function(e) {
    let country = e.target;
    if(country.dataset.id) {
      window.location.href = '/countries/' + country.dataset.id;
    }
  })
</script>
@endsection

@extends('_layouts.main')

@section('subheader')
<style>
    .banner-heading {
        padding: 2rem 0;
    }

    .banner-heading img {
        float: left;
        width: 4rem;
        height: 4rem;
        fill: #fff;
        margin-top: -1rem;
        z-index: 2;
    }

    #languages_length {
        display: none;
    }

    .languages_filter {
        width: 100%;
        margin: 1rem;
    }

    .dataTables_filter input[type="search"] {
        border: 1px solid #bbb;
        width: 100%;
        padding: 10px;
        font-size: 14px;
        margin-bottom: 20px;
        opacity: .7;
    }

</style>
@endsection

@section('main')

    @include('_partials.banner', [
    'title'           => $country->name,
    'subtitle'        => '',
    'backgroundImage' => 'https://images.bible.cloud/fab/banners/country/'.$country->id.'.jpg',
    'icon'            => 'https://images.bible.cloud/maps/icons/'.strtolower($country->id).'_white.png'
])

    <div class="row">
        <div class="medium-3">

            <ul class="fact-group row">
                <div class="medium-6 columns"><b>Population:</b> {{ $country->population }}</div>
                <div class="medium-6 columns"><b>Region:</b> {{ $country->maps }}</div>
                <div class="medium-6 columns"><b>Official Language</b> AAAAAA</div>
            </ul>

            {{ $country->overview }}
        </div>
        <div class="medium-7">
            <table id="languages" class="table responsive" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>iso</th>
                    <th>name</th>
                    <th>autonym</th>
                    <th>population</th>
                    <th>level</th>
                </tr>
                </thead>
                <tbody>
                @foreach($country->languages as $language)
                    <tr>
                        <td>{{ $language->iso }}</td>
                        <td><a href="/languages/{{ $language->iso }}">{{ $language->name }}</a></td>
                        <td><a href="/languages/{{ $language->iso }}">{{ $language->autonym }}</a></td>
                        <td>{{ $language->population }}</td>
                        <td>{{ $language->level }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection


@section('subfooter')
    <script
            src="https://code.jquery.com/jquery-2.2.4.min.js"
            integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
            crossorigin="anonymous"></script>
    <script src="{{ mix('js/dataTables.js') }}"></script>
@endsection

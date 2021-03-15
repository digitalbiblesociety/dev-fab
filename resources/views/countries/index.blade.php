@extends('_layouts.main')

@section('main')

    @include('_partials.banner', [
    'title'     => 'Countries',
    'subtitle'  => 'Discover the World\'s Languages by Country',
    'backgroundImage' => 'https://images.bible.cloud/fab/banners/countries.jpg',
    'icon'      => '/img/icons.svg#faqs'
])

    <div class="row">
        <div class="small-hide medium-2">
            <fieldset id="regions" class="filters" data-table="countries" data-name="co">
                <legend class="filter-title" data-i18n="fields.filterregion">Region</legend>

                <input id="all-regions" type="radio" name="continent_id[]" value="" checked />
                <label for="all-regions" data-i18n="fields.all" class="text-center">
                    <svg class="icon"><use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="/img/icons.svg#menu_countries"></use></svg>
                    All</label>

                <input id="EU" type="radio" name="continent_id[]" value="EU" />
                <label for="EU" data-i18n="wiki.region_europe">
                    <svg class="icon"><use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="/img/flags.svg#continent_EU"></use></svg>
                    Europe
                </label>

                <input id="AS" type="radio" name="continent_id[]" value="AS" />
                <label for="AS" data-i18n="wiki.region_asia">
                    <svg class="icon"><use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="/img/flags.svg#continent_AS"></use></svg>
                    Asia</label>

                <input id="NA" type="radio" name="continent_id[]" value="NA" />
                <label for="NA" data-i18n="wiki.region_northAmerica">
                    <svg class="icon"><use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="/img/flags.svg#continent_NA"></use></svg>
                    North America</label>

                <input id="AF" type="radio" name="continent_id[]" value="AF" />
                <label for="AF" data-i18n="wiki.region_africa">
                    <svg class="icon"><use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="/img/flags.svg#continent_AF"></use></svg>
                    Africa</label>

                <input id="SA" type="radio" name="continent_id[]" value="SA" />
                <label for="SA" data-i18n="wiki.region_southAmerica">
                    <svg class="icon"><use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="/img/flags.svg#continent_SA"></use></svg>
                    South America</label>

                <input id="OC" type="radio" name="continent_id[]" value="OC" />
                <label for="OC" data-i18n="wiki.region_oceania">
                    <svg class="icon"><use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="/img/flags.svg#continent_OC"></use></svg>
                    Oceania</label>
            </fieldset>
        </div>
        <div class="medium-10">
            <table id="countries" class="table responsive" cellspacing="0" width="100%"
                   data-route="countries_table" data-searchplaceholder="Filter Countries">
                <thead>
                    <tr>
                        <th data-column-name="co" data-invisible>Continent</th>
                        <th data-column-name="tt" data-image="/img/flags.svg#" data-filename="id"></th>
                        <th data-column-name="tt" data-path="countries" data-link="id">Name</th>
                        <th data-column-name="po">Population</th>
                    </tr>
                </thead>
                <tbody>
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

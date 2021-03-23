@extends('_layouts.main')

@section('subheader')
    <style>
        thead tr th:nth-child(-n + 3),
        tr td:nth-child(-n + 3) {
            display: none;
        }

    </style>
@endsection

@section('main')

    @include('_partials.banner', [
        'title'           => trans('fab.countries.title'),
        'subtitle'        => trans('fab.countries.subtitle'),
        'backgroundImage' => 'https://images.bible.cloud/fab/banners/countries.jpg'
    ])

    <div class="row">
        <div class="small-hide medium-2">
            <aside>
            <fieldset class="filters" data-table="countries" data-selector="#independence">
                <legend class="filter-title" data-i18n="fields.filterregion">{{ trans('fab.fields.region') }}</legend>
                <input id="independent_countries" type="radio" name="unique_countries[]" value="1" checked />
                <label for="independent_countries" data-i18n="fields.all" class="text-center">{{ trans('fab.fields.all') }}</label>

                <input id="territories" type="radio" name="unique_countries[]" value="" />
                <label for="territories" data-i18n="fields.all" class="text-center">{{ trans('fab.countries.territory') }}</label>
            </fieldset>

            <fieldset class="filters" data-table="countries" data-selector="#continent_id">
                <legend class="filter-title" data-i18n="fields.filterregion">{{ trans('fab.fields.region') }}</legend>
                <input id="all-regions" type="radio" name="continent_id[]" value="" checked />
                <label for="all-regions" data-i18n="fields.all" class="text-center">
                    <svg class="icon" xmlns:xlink="https://www.w3.org/1999/xlink"><use xlink:href="/img/icons.svg#menu_countries"></use></svg>
                    {{ trans('fab.fields.all') }}
                </label>
                @foreach(\Common\Modals\Country\CountryContinent::all() as $continent)
                    @if($continent->id == 'AN') @continue @endif
                    <input id="{{ $continent->id }}" type="radio" name="continent_id[]" value="{{ $continent->id }}" />
                    <label for="{{ $continent->id }}" data-i18n="wiki.region_europe">
                        <svg class="icon"><use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="/img/flags.svg#continent_{{ $continent->id }}"></use></svg>
                        {{ $continent->currentTranslation->name ?? $continent->name }}
                    </label>
                @endforeach
            </fieldset>
            </aside>
        </div>
        <div class="medium-10">
            <table id="countries" class="table responsive" cellspacing="0" width="100%" data-route="countries_table" data-searchplaceholder="{{ trans('fab.search.title') }}">
                <thead>
                    <tr>
                        <th data-column-name="id">{{ trans('fab.tt') }}</th>
                        <th id="continent_id" data-column-name="co">{{ trans('fab.tt') }}</th>
                        <th id="independence" data-column-name="in">{{ trans('fab.tt') }}</th>
                        <th data-column-name="id" data-image="img/flags.svg#" data-filename="id"></th>
                        <th data-column-name="tt" data-link="id" data-path="countries">{{ trans('fab.fields.name') }}</th>
                        <th data-column-name="tv">{{ trans('fab.fields.vname') }}</th>
                        <th data-column-name="po">{{ trans('fab.fields.population') }}</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('subfooter')
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="{{ mix('js/dataTables.js') }}"></script>
@endsection

@extends('_layouts.main')

@section('header')
    <style>
        thead tr th:first-child,
        tr td:first-child {
            display: none;
        }
    </style>
@endsection

@section('main')

    @include('_partials.banner', [
        'title'           => trans('fab.countries.title'),
        'subtitle'        => trans('fab.countries.subtitle'),
        'backgroundImage' => 'https://images.bible.cloud/fab/banners/countries.jpg',
        'icon'            => '/img/icons.svg#faqs'
    ])

    <div class="row">
        <div class="small-hide medium-2">
            <fieldset id="regions" class="filters" data-table="countries" data-name="co">
                <legend class="filter-title" data-i18n="fields.filterregion">{{ trans('fab.fields.region') }}</legend>
                <input id="all-regions" type="radio" name="continent_id[]" value="" checked />
                <label for="all-regions" data-i18n="fields.all" class="text-center">
                    <svg class="icon" xmlns:xlink="https://www.w3.org/1999/xlink">
                        <use xlink:href="/img/icons.svg#menu_countries"></use>
                    </svg>
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
        </div>
        <div class="medium-10">
            <table id="countries" class="table responsive" cellspacing="0" width="100%"
                   data-searchplaceholder="{{ trans('fab.search.title') }}">
                <thead>
                    <tr>
                        <th data-invisible>{{ trans('fab.fields_continent') }}</th>
                        <th>{{ trans('fab.fields.name') }}</th>
                        <th>{{ trans('fab.fields.population') }}</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($countries as $country)
                    <tr>
                        <td>{{ $country->continent_id }}</td>
                        <td>
                            <a href="{{ route('countries.show', $country->id) }}">
                                <svg class="icon"><use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="/img/flags.svg#{{ $country->id }}"></use></svg>
                                {{ $country->currentTranslation->name ?? $country->name }}
                            </a>
                        </td>
                        <td>{{ number_format($country->population) }}</td>
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

@extends('_layouts.main')

@section('subheader')
<style>
    #languages tr td:nth-child(-n+3),
    #languages tr th:nth-child(-n+3) {
        display: none;
    }
</style>
@endsection

@section('main')

    @include('_partials.banner', [
    'title'           => $country->currentTranslation->name ?? $country->name,
    'subtitle'        => '',
    'backgroundImage' => 'https://images.bible.cloud/fab/banners/country/'.$country->id.'.jpg',
    'icon'            => 'https://images.bible.cloud/maps/icons/'.strtolower($country->id).'_white.png'
])

    <div class="row">
        <div class="medium-3">
            <div class="fact-group row">
                <div class="medium-6 columns"><b>{{ trans('fab.fields.population') }}:</b> {{ $country->population }}</div>
                <div class="medium-6 columns"><b>{{ trans('fab.fields.region') }}:</b> {{ $country->maps }}</div>
            </div>
            @if(\i18n::getCurrentLocale() == 'eng')
                {{ $country->overview }}
            @endif

            <fieldset id="regions" class="filters" data-table="languages" data-selector="#status_id">
                <legend class="filter-title" data-i18n="fields.filterregion">{{ trans('fab.fields.status') }}</legend>
                <input id="status_all" type="radio" name="status_id[]" value="" />
                <label for="status_all"> {{ trans('fab.fields.all') }} </label>

                <input id="status_0" type="radio" name="status_id[]" value="0" />
                <label for="status_0"> {{ trans('fab.languages.status.status_0') }} </label>

                <input id="status_1" type="radio" name="status_id[]" value="1" />
                <label for="status_1"> {{ trans('fab.languages.status.status_1') }} </label>

                <input id="status_2" type="radio" name="status_id[]" value="2" />
                <label for="status_2"> {{ trans('fab.languages.status.status_2') }} </label>

                <input id="status_3" type="radio" name="status_id[]" value="3" />
                <label for="status_3"> {{ trans('fab.languages.status.status_3') }} </label>

                <input id="status_4" type="radio" name="status_id[]" value="4" />
                <label for="status_4"> {{ trans('fab.languages.status.status_4') }} </label>

                <input id="status_5" type="radio" name="status_id[]" value="5" />
                <label for="status_5"> {{ trans('fab.languages.status.status_5') }} </label>

                <input id="status_6a" type="radio" name="status_id[]" value="6a" />
                <label for="status_6a"> {{ trans('fab.languages.status.status_6a') }} </label>

                <input id="status_6b" type="radio" name="status_id[]" value="6b" />
                <label for="status_6b"> {{ trans('fab.languages.status.status_6b') }} </label>

                <input id="status_7" type="radio" name="status_id[]" value="7" />
                <label for="status_7"> {{ trans('fab.languages.status.status_7') }} </label>

                <input id="status_8a" type="radio" name="status_id[]" value="8a" />
                <label for="status_8a"> {{ trans('fab.languages.status.status_8a') }} </label>

                <input id="status_8b" type="radio" name="status_id[]" value="8b" />
                <label for="status_8b"> {{ trans('fab.languages.status.status_8b') }} </label>

                <input id="status_9" type="radio" name="status_id[]" value="9" />
                <label for="status_9"> {{ trans('fab.languages.status.status_9') }} </label>

                <input id="status_10" type="radio" name="status_id[]" value="10" />
                <label for="status_10"> {{ trans('fab.languages.status.status_10') }} </label>
            </fieldset>

        </div>
        <div class="medium-7">
            <table id="languages" class="table responsive" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>Films Count</th>
                    <th>Resources Count</th>
                    <th>Bibles Count</th>
                    <th>iso</th>
                    <th id="status_id">{{ trans('fab.fields.status') }}</th>
                    <th>{{ trans('fab.fields.name') }}</th>
                    <th>{{ trans('fab.fields.vname') }}</th>
                    <th>{{ trans('fab.fields.population') }}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($country->languages as $language)
                    <tr>
                        <td>{{ $language->films->count() }}</td>
                        <td>{{ $language->resources->count() }}</td>
                        <td>{{ $language->bibles->count() }}</td>
                        <td>{{ $language->iso }}</td>
                        <td>{{ $language->status_id }}</td>
                        <td><a href="/languages/{{ $language->iso }}">{{ $language->currentTranslation->name ?? $language->name}}</a></td>
                        <td><a href="/languages/{{ $language->iso }}">{{ $language->autonym }}</a></td>
                        <td>{{ $language->population ? number_format($language->population) : ''}}</td>
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

@extends('_layouts.main')

@section('main')

    @include('_partials.banner', [
        'title'           => trans('fab.bibles.title'),
        'subtitle'        => trans('fab.bibles.subtitle'),
        'backgroundImage' => 'https://images.bible.cloud/fab/banners/bibles2.jpg'
    ])

    <div class="row">

        <table id="bibles" class="table responsive" cellspacing="0" width="100%"
               data-route="bibles_table"
               data-searchplaceholder="{{ trans('fab.search.title') }}">
            <thead>
            <tr>
                <th data-column-name="ln" data-i18n="field.language" data-link="is" data-path="languages">{{ trans('fab.languages.title') }}</th>
                <th data-column-name="tt" data-i18n="field.title" data-link="id" data-path="bibles">{{ trans('fab.fields.name') }}</th>
                <th data-column-name="tv" data-i18n="field.title_vernacular" data-link="id" data-path="bibles">{{ trans('fab.fields.vname') }}</th>
                <th data-column-name="cn" data-i18n="field.countries" data-link="ci" data-path="countries">{{ trans('fab.countries.title') }}</th>
                <th data-column-name="dt" data-i18n="field.date">{{ trans('fab.fields.date') }}</th>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>

    </div>

@endsection

@section('subfooter')
    <script
            src="https://code.jquery.com/jquery-2.2.4.min.js"
            integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
            crossorigin="anonymous"></script>
    <script src="{{ mix('js/dataTables.js') }}"></script>
@endsection

@extends('_layouts.main')

@section('main')

    @include('_partials.banner', [
        'title'     => trans('fab.languages.title'),
        'subtitle'  => trans('fab.languages.subtitle'),
        'backgroundImage' => 'https://images.bible.cloud/fab/banners/languages_list.jpg'
    ])

    <div class="row">
    <table id="languages" class="table responsive" cellspacing="0" width="100%"
           data-route="languages_table"
           data-searchplaceholder="{{ trans('fab.search.title') }}">
        <thead>
        <tr>
            <th data-column-name="nm" data-link="iso" data-path="languages">{{ trans('fab.fields.name') }}</th>
            <th data-column-name="iso">Iso</th>
            <th data-column-name="bc">{{ trans('fab.bibles.title') }}</th>
            <th data-column-name="fc">{{ trans('fab.films.title') }}</th>
            <th data-column-name="rc">{{ trans('fab.resources.title') }}</th>
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

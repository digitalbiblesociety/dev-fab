@extends('_layouts.main')

@section('main')

    @include('_partials.banner', [
        'title'           => 'Bibles',
        'subtitle'        => 'Search the Unity Bible Directory in every Language',
        'backgroundImage' => 'https://images.bible.cloud/fab/banners/bibles2.jpg',
        'icon'            => '/img/icons.svg#faqs'
    ])

    <div class="row">

        <table id="bibles" class="table responsive" cellspacing="0" width="100%"
               data-route="bibles_table"
               data-searchplaceholder="Filter by Name or Language">
            <thead>
            <tr>
                <th data-column-name="ln" data-i18n="field.language" data-link="is" data-path="languages">Language</th>
                <th data-column-name="tt" data-i18n="field.title" data-link="id" data-path="bibles">Title</th>
                <th data-column-name="tv" data-i18n="field.title_vernacular" data-link="id" data-path="bibles">Vernacular</th>
                <th data-column-name="cn" data-i18n="field.countries" data-link="ci" data-path="countries">Country</th>
                <th data-column-name="dt" data-i18n="field.date">Date</th>
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

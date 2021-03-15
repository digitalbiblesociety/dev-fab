@extends('_layouts.main')

@section('main')

    @include('_partials.banner', [
        'title'     => 'Languages',
        'subtitle'  => 'More than 6,000 Languages with Biblical Resources',
        'backgroundImage' => 'https://images.bible.cloud/fab/banners/languages_list.jpg',
        'icon'      => '/img/icons.svg#faqs'
    ])

    <div class="row">
    <table id="languages" class="table responsive" cellspacing="0" width="100%"
           data-route="languages_table"
           data-searchplaceholder="Filter Language">
        <thead>
        <tr>
            <th data-column-name="nm" data-link="iso" data-path="languages">Name</th>
            <th data-column-name="iso">Iso</th>
            <th data-column-name="bc">Bibles Count</th>
            <th data-column-name="fc">Films Count</th>
            <th data-column-name="rc">Resources Count</th>
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

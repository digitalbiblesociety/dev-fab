@extends('_layouts.main')

@section('main')

    @include('_partials.banner', [
        'title'           => $language->name,
        'subtitle'        => '',
        'backgroundImage' => 'https://images.bible.cloud/fab/banners/languages_list.jpg',
        'tabs' => [
            'bibles'    => 'Bibles',
            'resources' => 'Resources'
        ]
    ])

    <section role="tabpanel" aria-hidden="false" id="bibles" class="row">
        <div class="row">
            <div class="medium-4">
                <b data-i18n="field.name">name:</b> {{ $language->name }} <br>
                <b data-i18n="field.autonym">autonym:</b> {{ $language->autonym }} <br>
                <b data-i18n="field.population">population:</b> {{ $language->population }} <br>
                <b data-i18n="field.status_id">status_id:</b> {{ $language->status_id }} <br>
            </div>
            <div class="medium-8">
                @if(count($language->bibles) === 0)
                    No records!
                @else
                    <table id="languages" class="table responsive" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>title</th>
                            <th>title_vernacular</th>
                            <th>date</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($language->bibles as $bible)
                            <tr>
                                <td class="title"><a href="/bibles/{{ $bible->id }}">{{ $bible->title }}</a></td>
                                <td class="title_vernacular"><a href="/bibles/{{ $bible->id }}">{{ $bible->title_vernacular }}</a></td>
                                <td class="date">{{ $bible->date }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </section>
    <section role="tabpanel" aria-hidden="true" id="resources" class="row">
        <table id="resources" class="table responsive" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>type</th>
                <th>name</th>
                <th>links</th>
                <th>author</th>
            </tr>
            </thead>
            <tbody>
            @foreach($language->resources as $current_resource)
                <tr>
                    <td>{{ $current_resource->type }}</td>
                    <td><a href="{{ $current_resource->url }}">{{ $current_resource->title }}</a></td>
                    <td>{{ $current_resource->title_vernacular }}</td>
                    <td>{{ $current_resource->author }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </section>
@endsection

@section('subfooter')
        <script
                src="https://code.jquery.com/jquery-2.2.4.min.js"
                integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
                crossorigin="anonymous"></script>
        <script src="{{ mix('js/dataTables.js') }}"></script>
@endsection

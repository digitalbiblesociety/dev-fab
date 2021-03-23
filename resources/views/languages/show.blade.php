@extends('_layouts.main')

@section('subheader')
    <style>
        table.infobox {font-family: Myriad Pro, 'Source Sans Pro', sans-serif; font-weight:400; border-collapse: separate;display: table;box-sizing: border-box;
            border-spacing: 3px;font-size: .85em;line-height: 1.4em;z-index: 0;
            background-color: #fff; margin:0 0 0.5em 1em; padding: 0.2em; float: right;clear: right;}
        .infobox a {text-decoration: none;color: #0645ad;background: none;}
        .infobox a:visited {color: #0b0080;}
        .infobox td, .infobox th {vertical-align: top;text-align: left; border-bottom: 1px solid #e2e2e2;}
        .infobox tbody {display: table-row-group;vertical-align: middle;border-color: inherit;}
        .infobox tr {display: table-row;vertical-align:text-top;}
        .infobox th {display: table-cell;vertical-align: inherit;font-weight: 600;text-align: -internal-center;}
        .infobox ul {display: block;list-style-type: disc;margin-block-start: 1em;margin-block-end: 1em;margin-inline-start: 0px;margin-inline-end:0px;padding-inline-start: 40px;line-height: 100%;margin-left: 1.35em;padding-left: 0;}
        .infobox li	{display: list-item;text-align: -webkit-match-parent;line-height:.9 em;}

        .infobox th.lang-title, .infobox th.lang-section, .infobox td.lang-desc
        {text-align: center; font-size: 140%;font-weight: 600; color:#222;}
        .infobox th.lang-section	{font-size:110%;padding-top:1em;}
        .infobox td.lang-desc	{font-size: 100%; font-weight: normal;}
        .infobox th.lang-title 	{border-bottom: none;text-transform: uppercase;padding-top:0}

        tr.family-tree li, tr.early-forms li, tr.ethnicity li  {line-height: .5em!important;white-space:nowrap;text-overflow:ellipsis;}
        tr.ethnicity li 	{line-height: 1.2em!important;}

        .plainlist ol, .plainlist ul {line-height: inherit;list-style: none none;margin: 0;}
        code {font-family: sans-serif;}
        .wrap, .wraplinks a {white-space: normal;}
        .no-wrap	{white-space: nowrap;}
        #frb-inline {display: table;position: relative;background: white;color: black;font-size: 14px;margin: 12px 0 38px;border: 5px solid #900;-webkit-transition: all .2s ease-in-out;-moz-transition: all .2s ease-in-out;-o-transition: all .2s ease-in-out;-ms-transition: all .2s ease-in-out;transition: all .2s ease-in-out;}
        div.link-container {display:inline-flex}
        span.link-sites	{display:flex}
        .link-logo		{width:44px; margin:9px 6px 9px 3px;}
    </style>
@endsection

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
                {!! $language->aside !!}
                {{--
                <b data-i18n="field.name">name:</b> {{ $language->name }} <br>
                <b data-i18n="field.autonym">autonym:</b> {{ $language->autonym }} <br>
                <b data-i18n="field.population">population:</b> {{ $language->population }} <br>
                <b data-i18n="field.status_id">status_id:</b> {{ $language->status_id }} <br>
                --}}
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

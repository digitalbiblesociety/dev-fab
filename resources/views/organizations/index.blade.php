@extends('_layouts.main')

@section('subheader')
    <style>
        .dataTables_header {
            width: 50%;
            height: 40px;
            margin: 20px auto;
        }

        .dataTable thead,
        .dataTable tr.even {
            background-color: #fff;
        }

        tr th {
            display: none;
        }

        tr,td {
            display: block;
        }

        tr td:nth-child(2) {
            display: none;
        }

        tr {
            width:31.5%;
            margin:0 .5%;
            height:40px;
            float:left;
        }

        td a {
            display: block;
            text-align: center;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
        }

        fieldset.filters {
            margin-top:2rem;
        }

        #organizations_filter {
            width: 85%;
        }

        #organizations_filter input {
            width: 100%;
        }

    </style>
@endsection

@section('main')

    @include('_partials.banner', [
        'title'           => trans('fab.organizations.title'),
        'subtitle'        => '',
        'backgroundImage' => 'https://images.bible.cloud/fab/banners/agencies.jpg',
        'icon'            => '',
        'tabs'            => [
            route('organizations.fobai')  => trans('fab.organizations.fobai.title'),
            route('organizations.index')  => trans('fab.organizations.title')
        ]
    ])

    <div class="row small-center">

        <table id="organizations" class="table responsive" cellspacing="0" width="100%"
               data-route="organizations_table"
               data-searchplaceholder="{{ trans('fab.search.title') }}">
            <thead>
            <tr>
                <th data-column-name="tt" data-i18n="field.name" data-link="id" data-path="organizations">organizations</th>
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

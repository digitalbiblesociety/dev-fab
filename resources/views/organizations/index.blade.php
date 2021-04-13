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


@section('subnav')

    @include('shin::_partials.nav.subnav', [
    'links' => [
        '#'           => trans('shin::fields.agencies'),
        '/organizations/fobai'      => 'FOBAI',
        '/organizations/map'   => trans('shin::fields.map')
     ]
    ])

@endsection

@section('main')


    @include('shin::organizations.index')

@endsection

@extends('_layouts.main')

@section('header')
    @parent
    <title>{{ trans('shin::fields.agencies') }} | {{ trans('app.title') }}</title>

    <style>

        .dataTables_header  {margin:0 auto; width:33%; min-width:300px;padding:0;}
        .datTables_length   {width:25%}
        .dataTables_filter   {width:75%;}
        thead tr, tr th {display: none;}
        tr,td {display: block;}
        tr td:nth-child(2) {display: none;}
        tr {width:33%;margin:0;height:60px;float:left; border: thin solid #e2e2e2; padding: 12px 0 0 0}
        td a {display: block;text-align: center;overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;}



        div.page-title {margin:1.8em auto 0;}
    </style>
@endsection

@section('subheader')

@endsection


@section('subnav')

    @include('shin::_partials.nav.subnav', [
        'links' => [
            i18n_link('/fobai')  => 'FOBAI',
            '#'                  => trans('shin::fields.agencies')
        ]
    ])

@endsection

@section('main')
    <div class="row">
        <div class="row page-title">
            <svg class="dt-aside-icon">
                <use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="/img/icons.svg#people_agencies"></use>
            </svg>
            <span class="dt-aside-title">{{ trans('shin::fields.agencies') }}</span>
        </div>
    </div>

    @include('shin::organizations.index')
@endsection

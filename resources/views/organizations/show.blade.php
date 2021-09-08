@extends('_layouts.main')

@section('header')
    @parent
    <title>{{ $organization->name }} | {{ trans('app.title') }}</title>
    <style>
        .nav-agencies                        {color: var(--primary-color)!important}
        .banner-image img                    {filter: grayscale(1)}
        .banner.gradient .banner-image:after {opacity: .85;background: linear-gradient(to right, {{ $organization->primary_color ?? '#222' }}, {{ $organization->secondary_color ?? '#f1f1f1' }})}
    </style>
@endsection

@section('page_info')
    <div class="modal-info">
        {!!  trans('shin::fab.help.agencies') !!}
        <div class="small-hide">{!!  trans('shin::fab.help.started') !!}{!!  trans('shin::fab.help.scenario_3') !!}</div>
        {!!  trans('shin::fab.help.more', ['url' => i18n_link('/about/help')]) !!}
    </div>
@endsection

@include('shin::_partials.banner', [
    'title'           => $organization->name,
    'backgroundImage' => "https://images.bible.cloud/fab/banners/agencies/$organization->id.jpg",
    'icon'            => 'people_groups',
    'iconClass'       => 'banner-icon',
    'iconType'        => 'icons',
    'tabs' => [
        'bibles'    => trans('shin::fields.bibles') . ' <span class="tab-badge">' . count($bibles['data']) . '</span>',
        'resources' => trans('shin::fields.resources') . ' <span class="tab-badge">' . count($resources['data']) . '</span>'
    ],
    'breadcrumbs' => [
        i18n_link('/')  => trans('shin::fields.home'),
        i18n_link('/organizations/')   => trans('shin::fields.agencies'),
        '#'             => $organization->name
    ]
])

@section('main')
    @include('shin::organizations.show', [
        'organization' => $organization,
        'resources' => $resources
    ])
@endsection

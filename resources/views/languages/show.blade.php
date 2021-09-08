@extends('_layouts.main')
@section('header')
    @parent
    <style>
        a.nav-languages     {color: var(--primary-color)!important}
        .link-container a[href^="https://find.bible"] {display: none;}
        table.infobox      {border: thin solid #d7d7d7; border-radius: 6px;}
        .table i {background-color: var(--primary-color);width: 2.7em; color: #fff;
            border-radius: 16px; margin: 0 auto; font-size:.8em; padding:3px;}

    </style
@endsection

@section('page_info')
    <div class="modal-info">
        {!!  trans('shin::fab.help.languages') !!}
        <div class="small-hide">{!!  trans('shin::fab.help.started') !!}{!!  trans('shin::fab.help.scenario_2') !!}</div>
        {!!  trans('shin::fab.help.more', ['url' => i18n_link('/about/help')]) !!}
    </div>
@endsection


@section('subnav')
    @include('shin::_partials.banner', [
    'title'           => $language->name,
    'subtitle'        => '',
    'backgroundImage' => 'https://images.bible.cloud/fab/banners/languages_list.jpg',
    'tabs' => [
        'bibles-tab' => 'Bibles <span class="tab-badge">'. count($bibles['data']).'</span>',
        'films-tab' => 'Films <span class="tab-badge">'. count($films['data']).'</span>',
        'resources-tab' => 'Resources <span class="tab-badge">'.count($resources['data']).'</span>'
    ]
])
@endsection

@section('main')

    @include('shin::_partials.nav.breadcrumbs', [
        'breadcrumbs' => [
             i18n_link('/')          => trans('shin::fields.home'),
             i18n_link('/languages') => trans('shin::fields.languages'),
             '#'                     =>  $language->name,
        ]
    ])

    @include('shin::languages.show')
@endsection

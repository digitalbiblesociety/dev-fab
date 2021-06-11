@extends('_layouts.main')
@section('header')
    @parent
    <style>
        a.nav-languages     {color: var(--primary-color)!important}
        .link-container a[href^="https://find.bible"] {display: none;}
        table.infobox      {border: thin solid #d7d7d7; border-radius: 6px;}

    </style
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

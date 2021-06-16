@extends('_layouts.main')

@section('header')
    @parent
    <title>{{ trans('shin::fab.bibles.suggest_bibles') }} | {{ trans('app.title') }}</title>
    <style>
        a.nav-about     {color: var(--primary-color)!important}
        .about-content  {margin: 1rem auto; padding:1em 15%;}
        .about          {margin-bottom:1.5em;}
        h4              {text-align:left;}
    </style>
@endsection

@section('page_info')
    @include('shin::help.about')
@endsection

@include('shin::_partials.banner', [
'title'           => trans('shin::fab.about.title'),
'subtitle'        => trans('shin::fab.about.subtitle'),
'icon'            => 'people_agencies',
'iconClass'       => 'banner-icon',
'iconType'        => 'icons',
'page_info'       => true,
'backgroundImage' => 'https://images.bible.cloud/fab/banners/about.jpg',
'tabs' => [
i18n_link('/about')         => trans('shin::fields.about'),
i18n_link('/about/faq')     => trans('shin::fields.faq'),
'#'                         => trans('shin::fab.bibles.suggest_bibles'),
i18n_link('/about/contact') => trans('shin::fields.contact'),
],
'breadcrumbs' => [
    i18n_link('/')  => trans('shin::fields.home'),
    '#'   => trans('shin::fields.about'),
]
])

@section('main')

    <div class="row">
        <div class="medium-3">Help</div>
        <div class="medium-9">
            <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSclHomVT1Ad7RwjaNG-FgS3N0iDph7qIzozHcRtif1C4HJMYQ/viewform?embedded=true" width="100%" height="1381" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
        </div>
    </div>
@endsection

@extends('wrapper')

@section('header')
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    @yield('subheader')
@endsection

@section('translations')

    <div id="i18n_wrap_open"></div>
    <div id="i18n_wrap">
        <nav>
            @foreach(i18n::getSupportedLocales() as $language)
                <a href="/{{ $language['regional'] }}/">{{ $language['name'] }}</a>
            @endforeach
            <div id="i18n_wrap_close">X</div>
        </nav>
    </div>

@endsection

@section('body')

    @include('_partials.nav.header', [
        'logo' => '/img/logo.svg',
        'logo_tagline' => 'Find a Bible',
        'logo_height' => '40px',
        'logo_width' => '40px',
        'donate' => false,
        'links'   => [
            ['url' => '/bibles', 'name' => 'Bibles'],
            ['url' => '/languages', 'name' => 'Languages'],
            ['url' => '/countries', 'name' => 'Countries'],
            ['url' => '/organizations', 'name' => 'Partners'],
            ['url' => '/about', 'name' => 'About']
        ]
    ])
    @include('_partials.nav.subheader')

    <main>
        <div id="search_results"></div>
        @yield('main')
    </main>

@endsection

@section('footer')
    @yield('subfooter')
@endsection

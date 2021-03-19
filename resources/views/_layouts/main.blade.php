@extends('wrapper')

@section('header')
    @yield('subheader')
@endsection

@section('translations')

    <div id="i18n_wrap_open"></div>
    <div id="i18n_wrap">
        <nav>
            @foreach(i18n::getSupportedLocales() as $iso => $language)
                <a href="{{ i18n::getLocalizedURL($iso) }}">
                    {{ \Common\Modals\Language\LanguageTranslation::where('source_iso',$iso)->where('translation_iso',i18n::getCurrentLocale())->first()->name ?? $language['name'] }}
                </a>
            @endforeach
            <div id="i18n_wrap_close">X</div>
        </nav>
    </div>

@endsection

@section('body')

    @include('_partials.nav.header', [
        'logo' => '/img/logo.svg',
        'logo_tagline' => trans('fab.title'),
        'logo_height' => '40px',
        'logo_width' => '40px',
        'donate' => false,
        'links'   => [
            ['url' => route('bibles.index'), 'name' => trans('fab.nav.bibles')],
            ['url' => route('languages.index'), 'name' => trans('fab.nav.languages')],
            ['url' => route('countries.index'), 'name' => trans('fab.nav.countries')],
            ['url' => route('organizations.index'), 'name' => trans('fab.nav.partners')],
            ['url' => route('about'), 'name' => trans('fab.nav.about')]
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

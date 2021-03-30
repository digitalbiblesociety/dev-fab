@extends('wrapper')

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


    <main>
		{{-- @include('_layouts.search') --}}
        @yield('main')
    </main>



    <template id="search_results_template">
        <div class="row">
            <div class="medium-8 small-12 flex-center column">
                <h2 data-i18n="search.bible_title">Bibles</h2>
                <section data-type="bibles"></section>
            </div>
            <div class="medium-4 small-6 column">
                <h2 data-i18n="search.language_title">Language</h2>
                <section data-type="language"></section>
            </div>
            <div class="medium-4 small-6 column">
                <h2 data-i18n="search.country_title">Countries</h2>
                <section data-type="countries"></section>
            </div>
            <div class="medium-4 small-6 column">
                <h2 data-i18n="search.resource_title">Resources</h2>
                <section data-type="resources"></section>
            </div>
            <div class="medium-4 small-6 column">
                <h2 data-i18n="search.organization_title">Organizations</h2>
                <section data-type="organizations"></section>
            </div>
        </div>
    </template>

@endsection

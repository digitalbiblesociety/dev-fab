@extends('shin::wrapper')

@section('header')
    @parent
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
@endsection

@section('translations')

    <div id="i18n_wrap_open"></div>
    <div id="i18n_wrap">
        <nav>
            @foreach(i18n::getSupportedLocales() as $iso => $language)
                <a href="{{ i18n::getLocalizedURL($iso) }}">
                    {{ \DigitalBibleSociety\Shin\Models\Language\LanguageTranslation::where('source_iso',$iso)->where('translation_iso',i18n::getCurrentLocale())->first()->name ?? $language['name'] }}
                </a>
            @endforeach
            <div id="i18n_wrap_close">X</div>
        </nav>
    </div>

@endsection

@section('body')

    @include('shin::_partials.nav.header', [
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
    @yield('subnav')
    @include('shin::_partials.search.search')


    <main>
        @yield('main')
    </main>

    <footer id="footer">
            <section>
                <h4 class="text-center">Forum of Bible Agencies</h4>
                <div class="row">
                    <div class="small-6">
                        <a rel="noopener" href="http://www.forum-intl.org/" target="_blank">Forum of Bible Agencies</a>
                        <a rel="noopener" href="http://www.forum-intl.net/resources" target="_blank">Translation Group</a>
                    </div>
                    <div class="small-6">
                        <a rel="noopener" href="http://www.forum-intl.org/membership" target="_blank">Members</a>
                        <a rel="noopener" href="https://www.facebook.com/fobai" target="_blank">Forum Facebook</a>
                    </div>
                </div>
            </section>
            <section>
                <h4 class="text-center">Find a Bible</h4>
                <hr><div class="row">
                    <div class="small-6">
                        <a href="/about/faq">FAQs</a>
                        <a href="/organizations">Partners</a>
                    </div>
                    <div class="small-6">
                        <a href="/about/contact">Feedback</a>
                        <a href="/about/privacy">Privacy</a>
                    </div>
                </div>
            </section>
            <section>
                <a rel="noopener" href="http://www.forum-intl.net/" target="_blank"><img src="https://images.bible.cloud/fab/logos/forum-logo.svg"></a>
                <div class="copyright"><a href="https://www.dbs.org" target="_blank">© 2021 Digital Bible Society</a>
                </div>
            </section>
        </div>
    </footer>

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

@section('footer_scripts')
    <script src="{{ mix('/js/app.js') }}"></script>

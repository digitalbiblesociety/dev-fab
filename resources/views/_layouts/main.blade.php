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
                    {{ \DigitalBibleSociety\Shin\Models\Language\LanguageTranslation::where('source_iso',$iso)
                        ->where('translation_iso',i18n::getCurrentLocale())->first()->name ?? $language['name'] }}
                </a>
            @endforeach
            <div id="i18n_wrap_close">X</div>
        </nav>
    </div>

@endsection

@section('body')

    @include('shin::_partials.nav.header', [
        'logo' => '/img/logo.svg',
        'logo_tagline' => trans('app.title'),
        'logo_height' => '40px',
        'logo_width' => '40px',
        'logo_url' => i18n_link('/'),
        'donate' => false,
        'links'   => [
            ['url' => route('bibles.index'), 'name' => trans('shin::fields.bible.title')],
            ['url' => route('languages.index'), 'name' => trans('shin::fields.languages')],
            ['url' => route('countries.index'), 'name' => trans('shin::fields.countries')],
            ['url' => route('organizations.index'), 'name' => trans('shin::fields.partners')],
            ['url' => route('about'), 'name' => trans('shin::fields.about')]
        ]
    ])
    @include('shin::_partials.nav.subheader')

    <main>
        <div id="search_results"></div>
        @yield('main')
    </main>

    <footer id="footer">
            <section>
                <h4 class="text-center">{{ trans('app.footer.forum.title') }}</h4>
                <div class="row">
                    <div class="small-6">
                        <a rel="noopener" href="http://www.forum-intl.org/" target="_blank">{{ trans('app.footer.forum.title') }}</a>
                        <a rel="noopener" href="http://www.forum-intl.net/resources" target="_blank">{{ trans('app.footer.forum.translationGroup') }}</a>
                    </div>
                    <div class="small-6">
                        <a rel="noopener" href="http://www.forum-intl.org/membership" target="_blank">{{ trans('app.footer.forum.members') }}</a>
                        <a rel="noopener" href="https://www.facebook.com/fobai" target="_blank">{{ trans('app.footer.forum.members') }}</a>
                    </div>
                </div>
            </section>
            <section>
                <h4 class="text-center">{{ trans('app.title') }}</h4>
                <hr><div class="row">
                    <div class="small-6">
                        <a href="/about/faq">{{ trans('shin::fields.faq') }}</a>
                        <a href="/organizations">{{ trans('shin::fields.partners') }}</a>
                    </div>
                    <div class="small-6">
                        <a href="/about/contact">{{ trans('shin::fields.contact') }}</a>
                        <a href="/about/privacy">{{ trans('shin::fields.privacy') }}</a>
                    </div>
                </div>
            </section>
            <section>
                <a rel="noopener" href="http://www.forum-intl.net/" target="_blank"><img src="https://images.bible.cloud/fab/logos/forum-logo.svg"></a>
                <div class="copyright"><a href="https://www.dbs.org" target="_blank">© 2021 {{ trans('shin::fields.digital') }}</a>
                </div>
            </section>
        </div>
    </footer>

    <template id="search_results_template">
        <div class="row">
            <div class="medium-3 small-6">
                <h2 data-i18n="search.language_title">{{ trans('fields.languages') }}</h2>
                <section data-type="languages"></section>
            </div>
            <div class="medium-6 small-12 flex-center">
                <h2 data-i18n="search.bible_title">{{ trans('fields.bibles') }}</h2>
                <section data-type="bibles"></section>
            </div>
            <div class="medium-3 small-6">
                <h2 data-i18n="search.country_title">{{ trans('fields.countries') }}</h2>
                <section data-type="countries"></section>
            </div>
            <div class="medium-12 small-6">
                <h2 data-i18n="search.organization_title">{{ trans('fields.organizations') }}</h2>
                <section data-type="organizations"></section>
            </div>
        </div>
    </template>

@endsection

@section('footer_scripts')
    <script defer src="{{ mix('/js/app.js') }}"></script>
@endsection

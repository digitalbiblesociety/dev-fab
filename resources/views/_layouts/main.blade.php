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
                    @if($iso != 'eng')
                    {{ \DigitalBibleSociety\Shin\Models\Language\LanguageTranslation::where('source_iso',$iso)
                        ->where('translation_iso',i18n::getCurrentLocale())->first()->name ?? $language['name'] }}
                    @else
                        {{ $language['name'] }}
                    @endif
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
            ['url' => route('bibles.index'),'icon' => 'bible', 'name' => trans('shin::fields.bibles')],
            ['url' => route('languages.index'), 'icon' => 'menu_languages', 'name' => trans('shin::fields.languages')],
            ['url' => route('countries.index'),'icon' => 'menu_countries', 'name' => trans('shin::fields.countries')],
            ['url' => route('organizations.index'),'icon' => 'people_agencies', 'name' => trans('shin::fields.agencies')],
            ['url' => route('about'), 'icon' => 'nav_info', 'name' => trans('shin::fields.about')]
        ]
    ])
    @include('shin::_partials.nav.subheader')

    <main>
        <div id="search_results"></div>
        @yield('main')
    </main>

    <footer id="footer">
        <div class="footer-box">
            <h4>{{ trans('shin::fields.fobai') }}</h4>
            <div class="row">
                <div class="column">
                    <ul>
                        <li><a rel="noopener" href="https://forum-intl.org/" target="_blank">{{ trans('shin::fields.fobai') }}</a></li>
                        <li><a rel="noopener" href="https://forum-intl.org/resources/" target="_blank">{{ trans('shin::fields.resources') }}</a></li>
                    </ul>
                </div>
                <div class="column footer-links">
                    <ul>
                        <li><a rel="noopener" href="https://forum-intl.org/membership" target="_blank">{{ trans('shin::fields.partners') }}</a></li>
                        <li><a rel="noopener" href="https://www.facebook.com/fobai" target="_blank">Facebook</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="footer-box">
            <h4>{{ trans('app.title') }}</h4>
            <div class="row">
                <div class="column">
                    <ul>
                        <li><a href="/about/faq">{{ trans('shin::fields.faq') }}</a></li>
                        <li><a href="/organizations">{{ trans('shin::fields.partners') }}</a></li>
                    </ul>
                </div>
                <div class="column">
                    <ul>
                        <li><a href="/about/contact">{{ trans('shin::fields.contact') }}</a></li>
                        <li><a href="/about/privacy">{{ trans('shin::fields.privacy') }}</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="footer-box">
            <div class="row">
                <img src="https://images.bible.cloud/fab/logos/forum-logo.svg" class="footer-logo">
            </div>
            <div class="row copyright">
                <a href="https://www.dbs.org" target="_blank">© 2021 {{ trans('shin::fields.dbs') }}</a>
            </div>
        </div>

    </footer>

    <template id="search_results_template">
        <div class="row">
            <div class="medium-3 small-6">
                <h2 data-i18n="search.language_title">{{ trans('shin::fields.languages') }}</h2>
                <section data-type="languages" class="search-languages"></section>
            </div>
            <div class="medium-5 small-12">
                <h2 data-i18n="search.bible_title">{{ trans('shin::fields.bibles') }}</h2>
                <section data-type="bibles" class="search-bibles"></section>
            </div>
            <div class="medium-2 small-6">
                <h2 data-i18n="search.country_title">{{ trans('shin::fields.countries') }}</h2>
                <section data-type="countries" class="search-countries"></section>
            </div>
            <div class="medium-2 small-6">
                <h2 data-i18n="search.organization_title">{{ trans('shin::fields.organizations') }}</h2>
                <section data-type="organizations" class="search-organizations"></section>
            </div>
        </div>
    </template>

@endsection

@section('footer_scripts')
    <script defer src="{{ mix('/js/app.js') }}"></script>
@endsection

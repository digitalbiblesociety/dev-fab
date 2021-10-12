@extends('shin::wrapper')

@section('header')
    @parent
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
    <link href="{{ mix('/css/print.css') }}" rel="stylesheet" media="print">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-70YXYF5WWE"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-70YXYF5WWE');
    </script>
@endsection

@section('body')

    @include('shin::_partials.nav.header', [
        'logo' => '/img/icon_fab_notitle.svg',
        'logo_tagline' => trans('app.title'),
        'logo_height' => '40px',
        'logo_width' => '40px',
        'logo_url' => i18n_link('/'),
        'donate' => false,
        'links'   => [
            ['url' => i18n_link('bibles'),'icon' => 'bible_resources', 'name' => trans('shin::fields.bibles'), 'class' => 'nav-bibles nav-wide' ],
            ['url' => i18n_link('languages'), 'icon' => 'menu_languages', 'name' => trans('shin::fields.languages'), 'class' => 'nav-languages nav-wide'],
            ['url' => i18n_link('countries'),'icon' => 'menu_countries', 'name' => trans('shin::fields.countries'), 'class' => 'nav-countries'],
            ['url' => i18n_link('organizations'),'icon' => 'people_agencies', 'name' => trans('shin::fields.agencies'), 'class' => 'nav-agencies'],
            ['url' => i18n_link('about'), 'icon' => 'menu_about', 'name' => trans('shin::fields.about'), 'class' => 'nav-about']
        ]
    ])

    <main>
        <div id="search_results"></div>
            @yield('banner')
        <div id="content">
            @yield('main')
        </div>
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
                        <li><a href="{{ i18n_link('/fobai') }}">{{ trans('shin::fields.partners') }}</a></li>
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
                        <li><a href="{{ i18n_link('/about/faq') }}">{{ trans('shin::fields.faq') }}</a></li>
                        <li><a href="{{ i18n_link('/organizations') }}">{{ trans('shin::fields.partners') }}</a></li>
                        <li><a rel="noopener" href="https://forum-intl.org/legal/privacy/" target="_blank">Privacy</a></li>
                    </ul>
                </div>
                <div class="column">
                    <ul>
                        <li><a href="{{ i18n_link('/sitemap') }}">Sitemap</a></li>
                        <li><a href="{{ i18n_link('/about/contact') }}">{{ trans('shin::fields.contact') }}</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="footer-box">
            <div class="row">
                <img src="https://images.bible.cloud/fab/logos/forum-logo.svg" class="footer-logo">
            </div>
            <div class="row copyright">
                <a href="https://dbs.org" target="_blank">© 2021 {{ trans('shin::fields.dbs') }}</a>
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

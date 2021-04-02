@extends('_layouts.main')

@section('subheader')
    <style>
        h4 {padding:1rem 0}
    </style>
@endsection

@section('subnav')
    @include('shin::_partials.nav.subnav', [
    'links' => [
        'about' => 'About'
    ]
])
@endsection

@section('main')

    @include('shin::_partials.banner', [
        'title'               => 'About',
        'subtitle'            => 'The Worldwide Directory of Bibles in every Language.',
        'backgroundImage'     => 'https://images.bible.cloud/fab/banners/agencies.jpg',
        'tabs'      => [
            '/about'          => 'About',
            '/about/faq'      => 'FAQ',
            '/about/contact'  => 'Contact'
        ]
    ])

    <section class="medium-mt2">
        <div class="row">
        <div class="medium-6 row">
            <div class="medium-2 flex-center"><img class="small-8" src="/img/about/project.svg" /></div>
            <div class="medium-10">
                <h4 class="medium-mb2">The Project</h4>
                <p>Find-A-Bible is a collaborative project by the Forum of Bible Agencies International built to increase the Bible's accessibility and to facilitate access to scripture.</p>
            </div>
        </div>

        <div class="medium-6 row">
            <div class="medium-2 flex-center"><img class="small-8" src="/img/about/symposium.svg" /></div>
            <div class="medium-10">
                <h4 class="medium-mb2">Find-A-Bible Symposium</h4>
                <p>During annual gatherings of the International Bible Forum (FOBAI), friendly people meet to collaborate around Find-A-Bible. Perhaps you would like to join us? Contact us for details, or join us at an upcoming FOBAI annual meeting.</p>
                <a href="https://forum-intl.org/">Learn More</a>
            </div>
        </div>

        <div class="medium-6 row">
            <div class="medium-2 flex-center"><img class="small-8" src="/img/about/help.svg" /></div>
            <div class="medium-10">
                <h4 class="medium-mb2">We need your help!</h4>
                <p>We really could use your help finding Bibles. If you are an archivist, a librarian, a search enthusiast, and IT techie, or a lover of God's Word, we invite you to join us in the search for world's Bibles. Our aim is to catalog every major edition of every Bible in every language in a way that those Bibles can be discovered, purchased or downloaded and shared.</p>
                <a href="https://dbs.org/contact">Get in touch</a>
            </div>
        </div>

        <div class="medium-6 row">
            <div class="medium-2 flex-center"><img class="small-8" src="/img/about/faq.svg" /></div>
            <div class="medium-10">
                <h4 class="medium-mb2">FAQ</h4>
                <p>Find-A-Bible was envisioned by the members of the Forum of Bible Agencies International with the intent to simplify the discovery and securing of Bibles and Bible resources in every language.</p>
                <a href="/about/faq">Learn More</a>
            </div>
        </div>

        <div class="medium-6 row">
            <div class="medium-2 flex-center"><img class="small-8" src="/img/about/resources.svg" /></div>
            <div class="medium-10">
                <h4 class="medium-mb2">Adding Resources</h4>
                <p>Know of a Bible that needs to be in this directory? We would sure like to hear about it. Does your organization have multi-language Bible resources that should be listed here? Let us know!</p>
                <a href="/about/contact">Get in Touch</a>
            </div>
        </div>

        <div class="medium-6 row">
            <div class="medium-2 flex-center"><img class="small-8" src="/img/about/feedback.svg" /></div>
            <div class="medium-10">
                <h4 class="medium-mb2">Feedback and Suggestions</h4>
                <p>Broken links. 404s. Navigation to nowhere. Strange displays and OS madness. Pointing to ever-changing websites. God help us! Let us know when things don't work. Perhaps you have some ideas that may help pursue the dream of "God's Word accessible in every language." We'd love to hear from you.</p>
                <a href="/about/faq">Get in Touch</a>
            </div>
        </div>
        </div>
    </section>

@endsection

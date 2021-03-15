@extends('_layouts.main')

@section('subheader')
<style>
    #faq h3,
    #faq p {
        padding:1rem;
    }
</style>
@endsection

@section('main')

    @include('_partials.banner', [
        'title'     => 'FAQ',
        'subtitle'  => '',
        'backgroundImage' => 'https://images.bible.cloud/fab/banners/agencies.jpg',
        'icon'      => '/img/icons.svg#faqs',
        'tabs' => [
            '/about' => 'about',
            '/about/faq' => 'faq',
            '/about/contact' => 'contact',
        ]
    ])


    <div class="row small-center" id="faq">
        <div class="small-10 medium-10">
        <h3>What is Find-A-Bible?</h3>
        <p>Find-A-Bible (FAB) is a web directory providing links to Bibles and biblical resources in the 6000+ languages
            of the world. The FAB directory primarily consists of content created by members of the Forum of Bible
            Agencies International (FOBAI) and is intended to help users discover and obtain Scriptures and biblical
            resources in the language and media of their choice for discipleship, evangelism, and church planting. The
            associated databases and delivery tools were created and are maintained by the Digital Bible Society (DBS).
            Find-A-Bible also features links to print Bibles, print-on-demand Bibles, digital Bibles, audio Bibles,
            visual Bibles and Bible resources – in multiple formats.</p>
        <h3>Why was Find-A-Bible Created?</h3>
        <p>The mission of Find-A-Bible is to ensure that the world’s Bibles and great biblical resources are easily
            found and shared. While it is possible to search for a great many Biblical resources online, the sheer
            quantity of available content is overwhelming. Consequently, FOBAI launched Find-A-Bible in 2006, and, in
            2013, commissioned the Digital Bible Society to create and maintain a single location on the internet where
            people looking for Bible resources can identify and obtain them.</p>
        <h3>What makes Find-A-Bible distinctive?</h3>
        <p>Find-A-Bible is the single digital platform where the major Bible agencies of the world and their affiliates
            have agreed to collaborate together to ensure that all Bibles and biblical resources are easily discoverable
            – in every language. Find-A-Bible was built to be a convenient hub delivering fast, accurate, and relevant
            information with minimal user effort. Also, it serves as a reference point for Bible translation
            organizations seeking to discover what Bibles have or have not been published in a specific language.</p>
        <h3>Who is FOBAI and its members?</h3>
        <p>The Forum of Bible Agencies International (FOBAI) is an alliance of more than 25 leading international Bible
            agencies and mission organizations that span more than 120 countries, headquartered in five different
            nations and subscribing to the beliefs set down in the Lausanne Covenant. This alliance was founded upon a
            unified vision,: Working together to maximize the worldwide access and impact of God’s Word
            (www.forum-intl.net).</p>
        <h3>Who owns Find-A-Bible content?</h3>
        <p>The Bible-based resources available in the Find-A-Bible directory are the property of the individual members
            of FOBAI or the organizations they endorse. Although some material accessible through Find-A-Bible is freely
            available to the public, other resources are offered for sale from member websites. Find-A-Bible does not
            own any copyrights for any of the discoverable resources nor does it offer resources for sale.</p>
        <h3>Whose work is reflected on the Find-A-Bible website?</h3>
        <p>In April 2013, FOBAI commissioned the Digital Bible Society to design, build, and maintain the Find-A-Bible
            website. Find-A-Bible is a work in progress and will be updated regularly by the Digital Bible Society. The
            gathering of metadata reflected here is the work of many partnering organizations that make up FOBAI.</p>
        <h3>How can I support the work of Find-A-Bible?</h3>
        <p>We welcome your support in spreading the word that Find-A-Bible exists, informing us of Bible and Bible-based
            content that is not in our directory, suggesting improvements to the site, praying for the mission of FOBAI,
            and donating to the ongoing work of Find-A-Bible.</p>
    </div>
    </div>

@endsection

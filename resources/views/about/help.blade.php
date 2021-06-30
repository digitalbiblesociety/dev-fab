@extends('_layouts.main')

@section('header')
    @parent
    <title>{{ trans('shin::fab.bibles.suggest_bibles') }} | {{ trans('app.title') }}</title>
    <style>
        a.nav-about     {color: var(--primary-color)!important}
        .about-content  {margin: 1rem auto; padding:1em 15%;}
        .about          {margin-bottom:1.5em;}
        h4              {text-align:left;margin: .5em 0;}
        .aside p         {font-size: .8em;margin-top: 1em}
    .aside img          {margin-right: 1em; float:left; width: 80px;}
    .freebirdFormviewerViewCenteredContent {width:100%!important;}
    </style>
@endsection

@section('page_info')
    @include('shin::help.about')
@endsection

@include('shin::_partials.banner', [
'title'           => trans('shin::fab.about.suggest.title'),
'subtitle'        => trans('shin::fab.about.suggest.subtitle'),
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
        Find-A-Bible is a web-directory of known Bibles Resources available in the many languages of the world.  It was created to simplify the process of discovering and securing Bibles in foreign languages.

        Introduction
        Find-A-Bible was first created in 2006 by the Forum of Bible Agencies (FOBAI) as a way to help people discover and secure Bibles by language or country.  The project originally featured Bible resources from FOBAI  but has been expanded to show resources from over 900 agencies.  Pioneer Bible Translation International  initially created and maintained the site.  Since 2013, the Digital Bible Society has voluntarily designed, programed and maintained the site and its databases.

        Mission
        Find-A-Bible is intended to serve any person or agency looking to secure Bible resources by language or by geographical region.  Toward that end, a considerable amount of data is  provided which is intended to assist in discovering, securing and distributing  Bible resources. Our goal is to make this process as simple as possible, whether it be to provide a single BIble to a neighbor,  or to plan massive distribution initiatives on a country-wide scale.

        Getting Started
        One of the best way to get started is by simply asking questions. We have provided three scenarios that may be of help in understanding the site.

        Scenarios:
        1. My neighbor speaks a language of India called Gujarati and is asking for a Bible in their language.
        1. On the main  find and click India on the map.  (Or choose the Countries Button on the top of the page.)
        2. You will see the 500+ languages of India sorted by population.   If you see their language (Gujarati) click on it to go to that language page. (Or you can start typing the name of the language in the filter box.)
        3. Once you are on the Gujarati language page, select a Bible by title (or you can also select the FILMS or RESOURCES  tabs to select additional resources in that language).
        4. From there you can find a variety of printed, online based Bibles, Apps or downloadable Bibles.
        2. My church is sending a missions group to Mexico  and we would like to bring Bibles.
        1. From the top menu select COUNTRIES.  You will see that Mexico has about 129 million people who speak 300+ languages.
        2. Click the Mexico page and you will see those languages sorted by population  spoken inside the country of Mexico. 
        3. On the  Tab, select Mexico Maps and Info.  Use the provide maps to research which languages your group might encounter by geography.  Click on the pin to view resources in a given language.
        3. Our missions agency is seeking to create content for and partner with agencies working in Africa.
        1. There are a number of functions that may be of assistance here. From the top menu select LANGUAGES.  From the sidebar with filter by Continent, select Africa.
        2. The languages of Africa are sorted by Bible Content, but by click the arrows on Population, you can see the population of each language - showing the most populous languages of Africa.
        3. You can also sort by Country and to see the languages for each Country. From there you can click on each country or each language to explore more possibilities.
        4. From the top menu select AGENCIES, then select the Agencies tab to view the organizations listed in Find.Bible.  In the filter box on the left, select Africa to see the African based organizations working in the Bible world.

        Front Page:
        The world map shown here is a convention that dates back to the original Find-A-Bible (FAB).  We had added some additional data that allow it to be more functional. The ORGANIZATIONS tab shows those groups who are included in the Find-A-Bible (FAB) database. The WORLD WATCH LIST tab shows the nations of the world where Christian persecution is most prominent (as referenced by Open Doors International www.odi.org) The map can be zoomed in and any country can be selected which will take you directly that country page.

        In addition, there is a SEARCH glass icon in the upper right banner of each page that allows you to enter any text to search for filtering the possible results in FAB for the entire site.  This is intended to give you quick access to identify languages even when you may not know the spelling of the name. Try it out, we think you will like it.

        The Find-A-Bible (FAB) interphase can be translated into a number of major languages.  Those languages can be accessed from any page by clicking the TRANSLATION icon in the banner of each page.


        Bibles Page:
        The BIBLES page presents a solution to the nearly impossible dream of providing active links to the Bible versions in every language of the world where they exist. The difficulty is that many while many organizations are working very hard to create and publish Bibles in print, audio, film and story, they are also working hard to create and update websites where those Bibles resources can be purchased or accessed.  When an organization updates their websites, their previous links are often broken, making this task quite challenging.  (Unless, of course, they notify us of the updates.)

        On the BIBLES page, you can sort by name, country, language to discover resources.  You can also type a Bible name, country or language into the filter bar to zero in on your targets. On the left hand size of your screen you will see filters that enable you to reduce the results by type or by continent.  Please take some time to play with it and let us know what you think.

        A quick pointer, on the Bible page, you can jump directly into the Bible page where you can see available links to that Bible. But you can also launch directly into the pages made for each language and each country.

        There is a view results box just below the banner and next to the filter box.  This dropdown allows you to select the number of results shown on each page.

        Recently added to the Bibles page is the option to view FILMS or RESOURCES in the FAB database. By selecting these tabs you can use the same search conventions to locate, view, listen to, or download resources for your missions work.  To download a film, simply click the FILMS tab and select a film to play. Depending upon your internet browser, you should be able to right click on the playing film and select download.


        Languages Page:
        There are some 7900 languages in the world, most of which have Bible resources created in those languages. Those languages are shown here each on their unique page. Although many do not have resources associated with them  yet. However, new Bibles are being translated faster than ever and hundreds of content creators are creating Bible resources and films faster than ever imagined.

        With deep gratitude to such Bibles agencies as Wycliff Bible Translators,  Global Recording Network Faith Comes by Hearing, The Jesus Film Project and quite a few others, Bible resources in new languages are being added all the time.

        The world's languages can be displayed and sorted by country, population, ISO code, or the number of Bible resource links that occur in Find-A-Bible (FAB).

        The languages are named and arranged by SIL's ISO code. Much of the information about each language on each language particular page is derived from Wikipedia, Joshua Project, The Glotologue, and others.  For a more comprehensive and authoritative study of each language, please refer to the SIL Ethnologue - the world's foremost authority on languages.

        Where there is content in a particular language, you can view either BIBLES, FILMS or RESOURCES from the tabs on each language page.

        Also provided from the LANGUAGES page are some handy LANGUAGE FAMILY MAPS that may assist in doing some basic research.


        Country Pages:
        Most missions organizations think in terms of countries when it comes to their work.  The COUNTRY pages were designed to assist in the research and rapid discovery of the Languages that might be encountered in a given Country.

        Upon visiting the COUNTRIES page, the user is presented with a table of what we believe is helpful data in accessing the need and scope of critical elements by country. Provided are sortable columns  that include population, number of spoken languages, refugee count,  literacy and level of the persecution (as researched by the OpenDoors WorldWatch List).  You can also compare nations by Continents or Territories using the filter boxes on the left. Take a minute to play with the different sort functions while you filter by continent. We think you will find it helpful and illuminating.

        Once you click on a given COUNTRY, you will be taken to that page where you will find a list of languages know to be spoken in that country. They languages are initially sorted by a population estimate of speakers in that country, which, in theory,  will most likely be the languages you encounter should you travel there. Also provided is a variety of information and links that might assist in your research. For each COUNTRY, an additional tab is provided giving you access to information, maps and links.


        Agencies Pages
        As a service to the Forum of Bible Agencies and the  many Bible agencies of the world, these pages are added to allow quick identification of which of their resources are discoverable in Find-A-Bible, and where they are being shared by other sites.

        Listed from the FOBAI tab are the members of the  Forum of Bible Agencies International. The second tab lists all the agencies included in the Find-A-Bible database.

        Doubtless, many agencies will discover that we have missed some of their resources.  For which, we apologize in advance.  For those, you will find a submission page under the ABOUT link on the top menu. Let us know what you have and where it can be accessed and we will add it as we are able.


        About Pages
        In the ABOUT pages you will find tabs that will present the project overview, answer FAQs, get help, proving easy ways to SUGGEST content additions, and a CONTACT page.  If you desire to add content in bulk, you can download a spreadsheet form from the SUGGEST BIBLES tab as well. The Digital Bible Society is honored to be a part of this project. And, we are indebted to those members of FOBAI for their foresight in creating API systems to track and deliver the Bible content they have created.

    </div>

@endsection

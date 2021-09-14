@extends('_layouts.main')

@section('header')
    @parent
    <style>
        .tagline {margin: 1rem 0;font-size: 1.4rem;line-height: 1.5;}
        .jvectormap-marker {display: none;}
        div.questions  {margin:2.5em auto;}  @media (max-width:46em){div.questions {display:none;}}
        .questions img  {margin-bottom: .8em;}
        div.answers    {margin: 2em auto; width: 60%; display:flex;} @media (max-width:46em){div.answers {width:80%;}}
        .answers-image {margin-right:2em;}
        .answers-svg   {width:12em}
        nav[role=tablist] a {background:none;border:none;}
        nav[role=tablist] a:hover   {color:var(--primary-color);}

    </style>
    <title>Find a Bible</title>
@endsection


@section('page_info')
    <div class="modal-info">
        {!!  trans('shin::fab.help.introduction') !!}
        {!!  trans('shin::fab.help.mission') !!}
        {!!  trans('shin::fab.help.front') !!}
        {!!  trans('shin::fab.help.more', ['url' => i18n_link('/about/help')]) !!}
    </div>
@endsection

@section('main')

    @include('shin::_partials.banner', [
        'noGradient' => true,
        'map'  => 'map1',
        'page_info' => true
    ])

    <div class="christian-percent-key">
        <div class="small-1 smaller">0%</div>
        <div class="small-10 info-gradient smaller text-center">Christian %</div>
        <div class="small-1 smaller"> 100%</div>
    </div>

    <div class="world-watch-list-key row">
        <div class="legend-container flex-center">
            <div class="legend-title">{{ trans('shin::fab.index.persecution') }}:</div>
            <div class="legend-key extreme">{{ trans('shin::fab.index.extremePersecution') }}</div>
            <div class="legend-key severe">{{ trans('shin::fab.index.severePersecution') }}</div>
            <a href="https://www.opendoorsusa.org/christian-persecution/world-watch-list/" title="World Watch List" target="_blank">
                <svg class="legend-info"><use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="/img/icons.svg#nav_info"></use></svg></a>
        </div>
    </div>

    <div class="organizations-key row">
        <div class="legend-container flex-center">
            <div class="legend-title">{{ trans('shin::fields.agencies') }}:</div>
            <div class="legend-key fobai">{{ trans('shin::fields.fobai') }}</div>
            <div class="legend-key org">{{ trans('shin::fields.organizations') }}</div>
            <div class="legend-key ubs">{{ trans('shin::fields.bible_societies') }}</div>
            <a href="https://www.opendoorsusa.org/christian-persecution/world-watch-list/" title="World Watch List" target="_blank">
                <svg class="legend-info"><use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="/img/icons.svg#nav_info"></use></svg></a>
        </div>
    </div>

    <div class="tagline text-center">
        <h4> {!! trans('app.index.stat_line', [
                'numBibles'        => "<a href='".i18n_link('bibles')."'>".\DigitalBibleSociety\Shin\Shin::i18n_numeral($bible_count)."</a>",
                'numOrganizations' => "<a href='".i18n_link('organizations')."'>".\DigitalBibleSociety\Shin\Shin::i18n_numeral(\DigitalBibleSociety\Shin\Models\Organization\Organization::count())."</a>",
                'numLangs'         => "<a href='".i18n_link('languages')."'>".\DigitalBibleSociety\Shin\Shin::i18n_numeral($language_count)."</a>",
                'numResources'     => "<a href='".i18n_link('languages')."'>".\DigitalBibleSociety\Shin\Shin::i18n_numeral($resource_count)."</a>"
            ])  !!}.</h4>
    </div>

    <div class="row text-center questions">
        <div class="medium-3">
            <img src="/img/fab_color_language.svg" /><br>
            {{ trans('app.index.question_looking_for_bible') }}
        </div>
        <div class="medium-3">
            <img src="/img/fab_color_traveler.svg" /><br>
            {{ trans('app.index.question_traveling') }}
        </div>
        <div class="medium-3">
            <img src="/img/fab_color_group.svg" /><br>
            {{ trans('app.index.question_missionary') }}
        </div>
        <div class="medium-3">
            <img src="/img/fab_color_present.svg" /><br>
            {{ trans('app.index.question_outreach') }}
        </div>
    </div>

    <div class="answers">
        <div class="answers-image">
            <img class="answers-svg" src="https://images.bible.cloud/fab_color_globe.svg"/>
        </div>
         <div class="answers-text">
                {{ trans('app.index.answer_provide') }}
                {{ trans('app.index.answer_help') }}
                {{ trans('app.index.answer_contact') }}
         </div>
    </div>

@endsection

@section('footer')
    @parent
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="{{ mix('js/map.js') }}"></script>
    <script>
        jQuery(function() {
            let $ = jQuery;
            let unset = {"BD":"#f0f0f0","BE":"#f0f0f0","BF":"#f0f0f0","BG":"#f0f0f0","BA":"#f0f0f0","BN":"#f0f0f0","BO":"#f0f0f0","JP":"#f0f0f0","BI":"#f0f0f0","BJ":"#f0f0f0","BT":"#f0f0f0","JM":"#f0f0f0","BW":"#f0f0f0","BR":"#f0f0f0","BS":"#f0f0f0","BY":"#f0f0f0","BZ":"#f0f0f0","RU":"#f0f0f0","RW":"#f0f0f0","RS":"#f0f0f0","LT":"#f0f0f0","LU":"#f0f0f0","LR":"#f0f0f0","RO":"#f0f0f0","GW":"#f0f0f0","GT":"#f0f0f0","GR":"#f0f0f0","GQ":"#f0f0f0","GY":"#f0f0f0","GE":"#f0f0f0","GB":"#f0f0f0","GA":"#f0f0f0","GN":"#f0f0f0","GM":"#f0f0f0","GL":"#f0f0f0","KW":"#f0f0f0","GH":"#f0f0f0","OM":"#f0f0f0","_2":"#f0f0f0","_1":"#f0f0f0","_0":"#f0f0f0","JO":"#f0f0f0","HR":"#f0f0f0","HT":"#f0f0f0","HU":"#f0f0f0","HN":"#f0f0f0","PR":"#f0f0f0","PS":"#f0f0f0","PT":"#f0f0f0","PY":"#f0f0f0","PA":"#f0f0f0","PG":"#f0f0f0","PE":"#f0f0f0","PK":"#f0f0f0","PH":"#f0f0f0","PL":"#f0f0f0","ZM":"#f0f0f0","EH":"#f0f0f0","EE":"#f0f0f0","EG":"#f0f0f0","ZA":"#f0f0f0","EC":"#f0f0f0","AL":"#f0f0f0","AO":"#f0f0f0","KZ":"#f0f0f0","ET":"#f0f0f0","ZW":"#f0f0f0","ES":"#f0f0f0","ER":"#f0f0f0","ME":"#f0f0f0","MD":"#f0f0f0","MG":"#f0f0f0","MA":"#f0f0f0","UZ":"#f0f0f0","MM":"#f0f0f0","ML":"#f0f0f0","MN":"#f0f0f0","MK":"#f0f0f0","MW":"#f0f0f0","MR":"#f0f0f0","UG":"#f0f0f0","MY":"#f0f0f0","MX":"#f0f0f0","VU":"#f0f0f0","FR":"#f0f0f0","FI":"#f0f0f0","FJ":"#f0f0f0","FK":"#f0f0f0","NI":"#f0f0f0","NL":"#f0f0f0","NO":"#f0f0f0","NA":"#f0f0f0","NC":"#f0f0f0","NE":"#f0f0f0","NG":"#f0f0f0","NZ":"#f0f0f0","NP":"#f0f0f0","CI":"#f0f0f0","CH":"#f0f0f0","CO":"#f0f0f0","CN":"#f0f0f0","CM":"#f0f0f0","CL":"#f0f0f0","CA":"#f0f0f0","CG":"#f0f0f0","CF":"#f0f0f0","CD":"#f0f0f0","CZ":"#f0f0f0","CY":"#f0f0f0","CR":"#f0f0f0","CU":"#f0f0f0","SZ":"#f0f0f0","SY":"#f0f0f0","KG":"#f0f0f0","KE":"#f0f0f0","SS":"#f0f0f0","SR":"#f0f0f0","KH":"#f0f0f0","SV":"#f0f0f0","SK":"#f0f0f0","KR":"#f0f0f0","SI":"#f0f0f0","KP":"#f0f0f0","SO":"#f0f0f0","SN":"#f0f0f0","SL":"#f0f0f0","SB":"#f0f0f0","SA":"#f0f0f0","SE":"#f0f0f0","SD":"#f0f0f0","DO":"#f0f0f0","DJ":"#f0f0f0","DK":"#f0f0f0","DE":"#f0f0f0","YE":"#f0f0f0","AT":"#f0f0f0","DZ":"#f0f0f0","US":"#f0f0f0","LV":"#f0f0f0","UY":"#f0f0f0","LB":"#f0f0f0","LA":"#f0f0f0","TW":"#f0f0f0","TT":"#f0f0f0","TR":"#f0f0f0","LK":"#f0f0f0","TN":"#f0f0f0","TL":"#f0f0f0","TM":"#f0f0f0","TJ":"#f0f0f0","LS":"#f0f0f0","TH":"#f0f0f0","TF":"#f0f0f0","TG":"#f0f0f0","TD":"#f0f0f0","LY":"#f0f0f0","AE":"#f0f0f0","VE":"#f0f0f0","AF":"#f0f0f0","IQ":"#f0f0f0","IS":"#f0f0f0","IR":"#f0f0f0","AM":"#f0f0f0","IT":"#f0f0f0","VN":"#f0f0f0","AR":"#f0f0f0","AU":"#f0f0f0","IL":"#f0f0f0","IN":"#f0f0f0","TZ":"#f0f0f0","AZ":"#f0f0f0","IE":"#f0f0f0","ID":"#f0f0f0","UA":"#f0f0f0","QA":"#f0f0f0","MZ":"#f0f0f0"};
            let christianpct = {"BD":"#e3ece3","BE":"#75a375","BF":"#94b894","BG":"#6c9d6c","BA":"#7ca87c","BN":"#a7c4a7","BO":"#679a67","JP":"#c9dbc9","BI":"#70a070","BJ":"#82ac82","BT":"#d3e2d3","JM":"#75a375","BW":"#72a172","BR":"#6a9b6a","BS":"#679a67","BY":"#7aa77a","BZ":"#6f9f6f","RU":"#80aa80","RW":"#689b68","RS":"#689b68","LT":"#6c9d6c","LU":"#72a172","LR":"#6c9d6c","RO":"#669966","GW":"#a9c6a9","GT":"#679a67","GR":"#679a67","GQ":"#679967","GY":"#79a679","GE":"#6a9c6a","GB":"#78a578","GA":"#72a172","GN":"#a9c6a9","GM":"#abc7ab","GL":"#679a67","KW":"#9fbf9f","GH":"#73a273","OM":"#c5d8c5","_2":"white","_1":"white","_0":"white","JO":"#b4cdb4","HR":"#699b69","HT":"#6c9d6c","HU":"#6d9e6d","HN":"#6b9c6b","PR":"#679a67","PS":"white","PT":"#689a68","PY":"#679a67","PA":"#699b69","PG":"#669966","PE":"#689b68","PK":"#ccddcc","PH":"#699b69","PL":"#689a68","ZM":"#679a67","EH":"#f6f9f6","EE":"#93b793","EG":"#9bbc9b","ZA":"#6d9e6d","EC":"#669966","AL":"#9bbc9b","AO":"#6a9c6a","KZ":"#7da87d","ET":"#76a476","ZW":"#6c9d6c","ES":"#6f9f6f","ER":"#76a476","ME":"#6e9f6e","MD":"#679a67","MG":"#84ad84","MA":"#c8dac8","UZ":"#c4d8c4","MM":"#aec9ae","ML":"#b8d0b8","MN":"#c8dac8","MK":"#75a375","MW":"#6e9e6e","MR":"#ebf2eb","UG":"#6a9c6a","MY":"#a5c3a5","MX":"#699b69","VU":"white","FR":"#75a375","FI":"#6d9e6d","FJ":"#75a375","FK":"#689a68","NI":"#6a9c6a","NL":"#82ab82","NO":"#6b9d6b","NA":"#6a9c6a","NC":"white","NE":"#b8d0b8","NG":"#7da87d","NZ":"#7aa67a","NP":"#d5e3d5","CI":"#8ab18a","CH":"#6d9d6d","CO":"#abc7ab","CN":"#b8d0b8","CM":"#73a273","CL":"#6b9c6b","CA":"#74a274","CG":"#689a68","CF":"#aec9ae","CD":"#6a9b6a","CZ":"#a6c4a6","CY":"#6e9e6e","CR":"#6c9d6c","CU":"#6c9d6c","SZ":"#6d9e6d","SY":"#a9c6a9","KG":"#9cbd9c","KE":"#6c9d6c","SS":"#77a577","SR":"#7da97d","KH":"#d3e2d3","SV":"#6d9e6d","SK":"#6b9c6b","KR":"#8eb38e","SI":"#6e9f6e","KP":"#bcd3bc","SO":"#ffffff","SN":"#b1cbb1","SL":"#8db38d","SB":"white","SA":"#b6ceb6","SE":"#74a274","SD":"#c9dbc9","DO":"#689a68","DJ":"#b4cdb4","DK":"#6d9d6d","DE":"#77a477","YE":"#ffffff","AT":"#73a273","DZ":"#c9dbc9","US":"#71a071","LV":"#7aa67a","UY":"#79a579","LB":"#84ad84","LA":"#c7dac7","TW":"white","TT":"#79a679","TR":"#e7efe7","LK":"#b0cab0","TN":"#e7efe7","TL":"white","TM":"#abc7ab","TJ":"#cedfce","LS":"#6a9c6a","TH":"#d8e5d8","TF":"white","TG":"#8eb48e","TD":"#89b189","LY":"#c9dbc9","AE":"#abc7ab","VE":"#679967","AF":"#fbfcfb","IQ":"#c2d6c2","IS":"#689a68","IR":"#e0eae0","AM":"#669966","IT":"#6c9d6c","VN":"#aec9ae","AR":"#abc7ab","AU":"#77a477","IL":"#bfd4bf","IN":"#c4d8c4","TZ":"#77a477","AZ":"#b9d0b9","IE":"#689a68","ID":"#d3e2d3","UA":"#6c9d6c","QA":"#a1c1a1","MZ":"#7aa67a"};
            let opendoors = {
                @foreach($countries as $country) @if($country->persecution)"{{ $country->id }}": "{{ ($country->persecution->rank < 13) ? '#ac152b' : '#FF7A0D' }}"@if(!$loop->last), @endif @else "{{ $country->id }}": "#f0f0f0" @if(!$loop->last), @endif @endif @endforeach
            };

            let organizations = [
                @foreach($organizations as $organization)
                    {
                        latLng: [{{ $organization->latitude }}, {{$organization->longitude}}],
                        id: "{{ $organization->id }}",
                        name: "{{ $organization->name }}",
                        parent_id: 0
                    },
                @endforeach
                @foreach($fobai as $organization)
                {
                    latLng: [{{ $organization->latitude }}, {{$organization->longitude}}],
                    id: "{{ $organization->id }}",
                    name: "{{ $organization->name }}",
                    parent_id: 1
                },
                @endforeach
                @foreach($ubs as $organization)
                {
                    latLng: [{{ $organization->latitude }}, {{$organization->longitude}}],
                    id: "{{ $organization->id }}",
                    name: "{{ $organization->name }}",
                    parent_id: 2
                },
                @endforeach
            ];

            function focusRegion(r,s,lt,lg) {
                $('.' + r).click(function(){
                    $('#map1').vectorMap('set', 'focus', {scale:s, lat:lt, lng:lg, animate:true});
                });
            }

            focusRegion("australia", 3, -22, 150);
            focusRegion("africa", 3, -2, 30);
            focusRegion("southamerica", 4, -15, -65);
            focusRegion("northamerica", 4, 39, -95);
            focusRegion("asia", 4, 36, 105);
            focusRegion("europe", 4, 54, 6);

            $('#map1').vectorMap({
                map:'world_mill_en',
                zoomOnScroll: false,
                panOnDrag:true,
                focusOn:{
                    x:0.5,
                    y:0.5,
                    scale:1,
                    animate:true
                },
                series:{
                    regions:[{
                        attribute:'fill'
                    }],
                    markers: [{
                        attribute: 'fill',
                        scale: ['#f0c087', '#0093ff','#FFFE00'],
                        values: organizations.reduce(function(p, c, i){ p[i] = c.parent_id; return p }, {}),
                        min: 0,
                        max: 2
                    }]
                },
                markers: organizations,
                onRegionClick:function(event, code) {
                    $(location).attr("href", "{{URL::to('/')}}/countries/"+ code);
                },
                onMarkerClick: function (event, index) {
                    $(location).attr("href", "{{URL::to('/')}}/organizations/" + organizations[index].id);
                }
            });

            let map = $('#map1').vectorMap('get', 'mapObject');
            map.series.regions[0].setValues(christianpct);

            $('#view_persecution').click(function(e) {
                let map = $('#map1').vectorMap('get', 'mapObject');
                $(this).addClass("active")
                $(this).siblings().removeClass("active")
                $(".world-watch-list-key").slideDown("slow");
                $(".christian-percent-key").slideUp("slow");
                $(".organizations-key").slideUp("slow");
                $('.jvectormap-marker').hide();

                map.series.regions[0].setValues(unset);
                map.series.regions[0].setValues(opendoors);
            });

            $('#view_christians').click(function(e) {
                let map = $('#map1').vectorMap('get', 'mapObject');
                $(this).addClass("active")
                $(this).siblings().removeClass("active")
                $(".world-watch-list-key").slideUp("slow");
                $(".christian-percent-key").slideUp("slow");
                $(".organizations-key").slideUp("slow");
                $('.jvectormap-marker').hide();

                map.series.regions[0].setValues(unset);
                map.series.regions[0].setValues(christianpct);

            });

            $('#view_organizations').click(function(e) {
                let map = $('#map1').vectorMap('get', 'mapObject');
                $(this).addClass("active")
                $(this).siblings().removeClass("active")
                $('.jvectormap-marker').toggle();
                $(".world-watch-list-key").slideUp("slow");
                $(".christian-percent-key").slideUp("slow");
                $(".organizations-key").slideDown("slow");
            });
        })

    </script>
@endsection

jQuery(function(){
    var $ = jQuery;

    var unset = {"BD":"#f0f0f0","BE":"#f0f0f0","BF":"#f0f0f0","BG":"#f0f0f0","BA":"#f0f0f0","BN":"#f0f0f0","BO":"#f0f0f0","JP":"#f0f0f0","BI":"#f0f0f0","BJ":"#f0f0f0","BT":"#f0f0f0","JM":"#f0f0f0","BW":"#f0f0f0","BR":"#f0f0f0","BS":"#f0f0f0","BY":"#f0f0f0","BZ":"#f0f0f0","RU":"#f0f0f0","RW":"#f0f0f0","RS":"#f0f0f0","LT":"#f0f0f0","LU":"#f0f0f0","LR":"#f0f0f0","RO":"#f0f0f0","GW":"#f0f0f0","GT":"#f0f0f0","GR":"#f0f0f0","GQ":"#f0f0f0","GY":"#f0f0f0","GE":"#f0f0f0","GB":"#f0f0f0","GA":"#f0f0f0","GN":"#f0f0f0","GM":"#f0f0f0","GL":"#f0f0f0","KW":"#f0f0f0","GH":"#f0f0f0","OM":"#f0f0f0","_2":"#f0f0f0","_1":"#f0f0f0","_0":"#f0f0f0","JO":"#f0f0f0","HR":"#f0f0f0","HT":"#f0f0f0","HU":"#f0f0f0","HN":"#f0f0f0","PR":"#f0f0f0","PS":"#f0f0f0","PT":"#f0f0f0","PY":"#f0f0f0","PA":"#f0f0f0","PG":"#f0f0f0","PE":"#f0f0f0","PK":"#f0f0f0","PH":"#f0f0f0","PL":"#f0f0f0","ZM":"#f0f0f0","EH":"#f0f0f0","EE":"#f0f0f0","EG":"#f0f0f0","ZA":"#f0f0f0","EC":"#f0f0f0","AL":"#f0f0f0","AO":"#f0f0f0","KZ":"#f0f0f0","ET":"#f0f0f0","ZW":"#f0f0f0","ES":"#f0f0f0","ER":"#f0f0f0","ME":"#f0f0f0","MD":"#f0f0f0","MG":"#f0f0f0","MA":"#f0f0f0","UZ":"#f0f0f0","MM":"#f0f0f0","ML":"#f0f0f0","MN":"#f0f0f0","MK":"#f0f0f0","MW":"#f0f0f0","MR":"#f0f0f0","UG":"#f0f0f0","MY":"#f0f0f0","MX":"#f0f0f0","VU":"#f0f0f0","FR":"#f0f0f0","FI":"#f0f0f0","FJ":"#f0f0f0","FK":"#f0f0f0","NI":"#f0f0f0","NL":"#f0f0f0","NO":"#f0f0f0","NA":"#f0f0f0","NC":"#f0f0f0","NE":"#f0f0f0","NG":"#f0f0f0","NZ":"#f0f0f0","NP":"#f0f0f0","CI":"#f0f0f0","CH":"#f0f0f0","CO":"#f0f0f0","CN":"#f0f0f0","CM":"#f0f0f0","CL":"#f0f0f0","CA":"#f0f0f0","CG":"#f0f0f0","CF":"#f0f0f0","CD":"#f0f0f0","CZ":"#f0f0f0","CY":"#f0f0f0","CR":"#f0f0f0","CU":"#f0f0f0","SZ":"#f0f0f0","SY":"#f0f0f0","KG":"#f0f0f0","KE":"#f0f0f0","SS":"#f0f0f0","SR":"#f0f0f0","KH":"#f0f0f0","SV":"#f0f0f0","SK":"#f0f0f0","KR":"#f0f0f0","SI":"#f0f0f0","KP":"#f0f0f0","SO":"#f0f0f0","SN":"#f0f0f0","SL":"#f0f0f0","SB":"#f0f0f0","SA":"#f0f0f0","SE":"#f0f0f0","SD":"#f0f0f0","DO":"#f0f0f0","DJ":"#f0f0f0","DK":"#f0f0f0","DE":"#f0f0f0","YE":"#f0f0f0","AT":"#f0f0f0","DZ":"#f0f0f0","US":"#f0f0f0","LV":"#f0f0f0","UY":"#f0f0f0","LB":"#f0f0f0","LA":"#f0f0f0","TW":"#f0f0f0","TT":"#f0f0f0","TR":"#f0f0f0","LK":"#f0f0f0","TN":"#f0f0f0","TL":"#f0f0f0","TM":"#f0f0f0","TJ":"#f0f0f0","LS":"#f0f0f0","TH":"#f0f0f0","TF":"#f0f0f0","TG":"#f0f0f0","TD":"#f0f0f0","LY":"#f0f0f0","AE":"#f0f0f0","VE":"#f0f0f0","AF":"#f0f0f0","IQ":"#f0f0f0","IS":"#f0f0f0","IR":"#f0f0f0","AM":"#f0f0f0","IT":"#f0f0f0","VN":"#f0f0f0","AR":"#f0f0f0","AU":"#f0f0f0","IL":"#f0f0f0","IN":"#f0f0f0","TZ":"#f0f0f0","AZ":"#f0f0f0","IE":"#f0f0f0","ID":"#f0f0f0","UA":"#f0f0f0","QA":"#f0f0f0","MZ":"#f0f0f0"};
    var christianpct = {"BD":"#e3ece3","BE":"#75a375","BF":"#94b894","BG":"#6c9d6c","BA":"#7ca87c","BN":"#a7c4a7","BO":"#679a67","JP":"#c9dbc9","BI":"#70a070","BJ":"#82ac82","BT":"#d3e2d3","JM":"#75a375","BW":"#72a172","BR":"#6a9b6a","BS":"#679a67","BY":"#7aa77a","BZ":"#6f9f6f","RU":"#80aa80","RW":"#689b68","RS":"#689b68","LT":"#6c9d6c","LU":"#72a172","LR":"#6c9d6c","RO":"#669966","GW":"#a9c6a9","GT":"#679a67","GR":"#679a67","GQ":"#679967","GY":"#79a679","GE":"#6a9c6a","GB":"#78a578","GA":"#72a172","GN":"#a9c6a9","GM":"#abc7ab","GL":"#679a67","KW":"#9fbf9f","GH":"#73a273","OM":"#c5d8c5","_2":"white","_1":"white","_0":"white","JO":"#b4cdb4","HR":"#699b69","HT":"#6c9d6c","HU":"#6d9e6d","HN":"#6b9c6b","PR":"#679a67","PS":"white","PT":"#689a68","PY":"#679a67","PA":"#699b69","PG":"#669966","PE":"#689b68","PK":"#ccddcc","PH":"#699b69","PL":"#689a68","ZM":"#679a67","EH":"#f6f9f6","EE":"#93b793","EG":"#9bbc9b","ZA":"#6d9e6d","EC":"#669966","AL":"#9bbc9b","AO":"#6a9c6a","KZ":"#7da87d","ET":"#76a476","ZW":"#6c9d6c","ES":"#6f9f6f","ER":"#76a476","ME":"#6e9f6e","MD":"#679a67","MG":"#84ad84","MA":"#c8dac8","UZ":"#c4d8c4","MM":"#aec9ae","ML":"#b8d0b8","MN":"#c8dac8","MK":"#75a375","MW":"#6e9e6e","MR":"#ebf2eb","UG":"#6a9c6a","MY":"#a5c3a5","MX":"#699b69","VU":"white","FR":"#75a375","FI":"#6d9e6d","FJ":"#75a375","FK":"#689a68","NI":"#6a9c6a","NL":"#82ab82","NO":"#6b9d6b","NA":"#6a9c6a","NC":"white","NE":"#b8d0b8","NG":"#7da87d","NZ":"#7aa67a","NP":"#d5e3d5","CI":"#8ab18a","CH":"#6d9d6d","CO":"#abc7ab","CN":"#b8d0b8","CM":"#73a273","CL":"#6b9c6b","CA":"#74a274","CG":"#689a68","CF":"#aec9ae","CD":"#6a9b6a","CZ":"#a6c4a6","CY":"#6e9e6e","CR":"#6c9d6c","CU":"#6c9d6c","SZ":"#6d9e6d","SY":"#a9c6a9","KG":"#9cbd9c","KE":"#6c9d6c","SS":"#77a577","SR":"#7da97d","KH":"#d3e2d3","SV":"#6d9e6d","SK":"#6b9c6b","KR":"#8eb38e","SI":"#6e9f6e","KP":"#bcd3bc","SO":"#ffffff","SN":"#b1cbb1","SL":"#8db38d","SB":"white","SA":"#b6ceb6","SE":"#74a274","SD":"#c9dbc9","DO":"#689a68","DJ":"#b4cdb4","DK":"#6d9d6d","DE":"#77a477","YE":"#ffffff","AT":"#73a273","DZ":"#c9dbc9","US":"#71a071","LV":"#7aa67a","UY":"#79a579","LB":"#84ad84","LA":"#c7dac7","TW":"white","TT":"#79a679","TR":"#e7efe7","LK":"#b0cab0","TN":"#e7efe7","TL":"white","TM":"#abc7ab","TJ":"#cedfce","LS":"#6a9c6a","TH":"#d8e5d8","TF":"white","TG":"#8eb48e","TD":"#89b189","LY":"#c9dbc9","AE":"#abc7ab","VE":"#679967","AF":"#fbfcfb","IQ":"#c2d6c2","IS":"#689a68","IR":"#e0eae0","AM":"#669966","IT":"#6c9d6c","VN":"#aec9ae","AR":"#abc7ab","AU":"#77a477","IL":"#bfd4bf","IN":"#c4d8c4","TZ":"#77a477","AZ":"#b9d0b9","IE":"#689a68","ID":"#d3e2d3","UA":"#6c9d6c","QA":"#a1c1a1","MZ":"#7aa67a"};
    var opendoors = {"AE":"#68a3b2", "AF":"#ac1f2d", "DZ":"#a7a247", "AZ":"#68a3b2", "BD":"#68a3b2", "MM":"#d9a03f", "BT":"#a7a247", "BN":"#a7a247", "LK":"#68a3b2", "CN":"#a7a247", "CN":"#a7a247", "CO":"#a7a247", "CF":"#d9a03f", "DJ":"#d9a03f", "EG":"#d9a03f", "ER":"#ac1f2d", "ET":"#d9a03f", "ID":"#68a3b2", "IN":"#d9a03f", "IR":"#ac1f2d", "IQ":"#ac1f2d", "JO":"#a7a247", "KE":"#d9a03f", "KP":"#ac1f2d", "KW":"#68a3b2", "KZ":"#68a3b2", "LA":"#a7a247", "LY":"#d9a03f", "ML":"#a7a247", "MR":"#68a3b2", "OM":"#a7a247", "MV":"#ac1f2d", "MX":"#a7a247", "MY":"#a7a247", "NG":"#ac1f2d", "PK":"#ac1f2d", "QA":"#d9a03f", "SA":"#ac1f2d", "SO":"#ac1f2d", "SD":"#ac1f2d", "SY":"#ac1f2d", "TJ":"#68a3b2", "TN":"#a7a247", "TR":"#68a3b2", "TM":"#d9a03f", "TZ":"#a7a247", "UZ":"#d9a03f", "VN":"#d9a03f", "PS":"#d9a03f", "YE":"#d9a03f"};
    var worldreligions = {"AW":"#ffffff",
        "AG":"#ffffff",
        "AE":"#abdda4",
        "AF":"#abdda4",
        "DZ":"#abdda4",
        "AZ":"#abdda4",
        "AL":"#abdda4",
        "AM":"#ffffff",
        "AD":"#ffffff",
        "AO":"#ffffff",
        "AS":"#ffffff",
        "AR":"#ffffff",
        "AU":"#ffffff",
        "AT":"#ffffff",
        "AI":"#ffffff",
        "BH":"#abdda4",
        "BB":"#ffffff",
        "BW":"#ffffff",
        "BM":"#ffffff",
        "BE":"#ffffff",
        "BS":"#ffffff",
        "BD":"#abdda4",
        "BZ":"#ffffff",
        "BA":"#abdda4",
        "BO":"#ffffff",
        "MM":"#d53e4f","BJ":"#ffffff",
        "BY":"#ffffff",
        "SB":"#ffffff",
        "BR":"#ffffff",
        "BT":"#d53e4f","BG":"#ffffff",
        "BN":"#abdda4",
        "BI":"#ffffff",
        "CA":"#ffffff",
        "KH":"#d53e4f","TD":"#abdda4",
        "LK":"#d53e4f","CG":"#ffffff",
        "CD":"#ffffff",
        "CN":"#cccccc","CL":"#ffffff",
        "KY":"#ffffff",
        "CC":"#abdda4",
        "CM":"#ffffff",
        "KM":"#abdda4",
        "CO":"#ffffff",
        "MP":"#ffffff",
        "CR":"#ffffff",
        "CF":"#ffffff",
        "CU":"#ffffff",
        "CV":"#ffffff",
        "CK":"#ffffff",
        "CY":"#ffffff",
        "DK":"#ffffff",
        "DJ":"#abdda4",
        "DM":"#ffffff",
        "DO":"#ffffff",
        "EC":"#ffffff",
        "EG":"#abdda4",
        "IE":"#ffffff",
        "GQ":"#ffffff",
        "EE":"#cccccc","ER":"#abdda4",
        "SV":"#ffffff",
        "ET":"#ffffff",
        "CZ":"#cccccc","GF":"#ffffff",
        "FI":"#ffffff",
        "FJ":"#ffffff",
        "FK":"#ffffff",
        "FM":"#ffffff",
        "FO":"#ffffff",
        "PF":"#ffffff",
        "FR":"#ffffff",
        "GM":"#abdda4",
        "GA":"#ffffff",
        "GE":"#ffffff",
        "GH":"#ffffff",
        "GI":"#ffffff",
        "GD":"#ffffff",
        "GL":"#ffffff",
        "DE":"#ffffff",
        "GP":"#ffffff",
        "GU":"#ffffff",
        "GR":"#ffffff",
        "GT":"#ffffff",
        "GN":"#abdda4",
        "GY":"#ffffff",
        "HT":"#ffffff",
        "CN":"#bbbbbb","HN":"#ffffff",
        "HR":"#ffffff",
        "HU":"#ffffff",
        "IS":"#ffffff",
        "ID":"#abdda4",
        "IN":"#fdae61","IR":"#abdda4",
        "IL":"#3288bd",
        "IT":"#ffffff",
        "CI":"#abdda4",
        "IQ":"#abdda4",
        "JP":"#d53e4f","JM":"#ffffff",
        "JO":"#abdda4",
        "KE":"#ffffff",
        "KG":"#abdda4",
        "KP":"#cccccc","KI":"#ffffff",
        "KR":"#cccccc","CX":"#d53e4f","KW":"#abdda4",
        "KZ":"#abdda4",
        "LA":"#d53e4f","LB":"#abdda4",
        "LV":"#ffffff",
        "LT":"#ffffff",
        "LR":"#BADA55","SK":"#ffffff",
        "LI":"#ffffff",
        "LS":"#ffffff",
        "LU":"#ffffff",
        "LY":"#abdda4",
        "MG":"#ffffff",
        "MQ":"#ffffff",
        "CN":"#bbbbbb","MD":"#ffffff",
        "YT":"#abdda4",
        "MN":"#d53e4f","MS":"#ffffff",
        "MW":"#ffffff",
        "ME":"#ffffff",
        "MK":"#ffffff",
        "ML":"#abdda4",
        "MC":"#ffffff",
        "MA":"#abdda4",
        "MU":"#fdae61","MR":"#abdda4",
        "MT":"#ffffff",
        "OM":"#abdda4",
        "MV":"#abdda4",
        "MX":"#ffffff",
        "MY":"#abdda4",
        "MZ":"#ffffff",
        "NC":"#ffffff",
        "NU":"#ffffff",
        "NF":"#ffffff",
        "NE":"#abdda4",
        "VU":"#ffffff",
        "NG":"#ffffff",
        "NL":"#cccccc",
        "NO":"#ffffff",
        "NP":"#fdae61","NR":"#ffffff",
        "SR":"#ffffff",
        "AN":"#ffffff",
        "NI":"#ffffff",
        "NZ":"#ffffff",
        "SS":"#ffffff",
        "PY":"#ffffff",
        "PE":"#ffffff",
        "PK":"#abdda4",
        "PL":"#ffffff",
        "PA":"#ffffff",
        "PT":"#ffffff",
        "PG":"#ffffff",
        "PW":"#ffffff",
        "GW":"#abdda4",
        "QA":"#abdda4",
        "RE":"#ffffff",
        "RS":"#ffffff",
        "CS":"#ffffff",
        "MH":"#ffffff",
        "RO":"#ffffff",
        "PH":"#ffffff",
        "PR":"#ffffff",
        "RU":"#ffffff",
        "RW":"#ffffff",
        "SA":"#abdda4",
        "PM":"#ffffff",
        "KN":"#ffffff",
        "SC":"#ffffff",
        "ZA":"#ffffff",
        "SN":"#abdda4",
        "SH":"#ffffff",
        "SI":"#ffffff",
        "SL":"#abdda4",
        "SM":"#ffffff",
        "SG":"#d53e4f","SO":"#abdda4",
        "ES":"#ffffff",
        "LC":"#ffffff",
        "SD":"#ffffff",
        "SJ":"#ffffff",
        "SE":"#ffffff",
        "SY":"#abdda4",
        "CH":"#ffffff",
        "TT":"#ffffff",
        "TH":"#d53e4f","TJ":"#abdda4",
        "TC":"#ffffff",
        "TK":"#ffffff",
        "TO":"#ffffff",
        "TG":"#ffffff",
        "ST":"#ffffff",
        "TN":"#abdda4",
        "TL":"#ffffff",
        "TR":"#abdda4",
        "TV":"#ffffff",
        "TW":"#bbbbbb","TM":"#abdda4",
        "TZ":"#ffffff",
        "UG":"#ffffff",
        "GB":"#ffffff",
        "UA":"#ffffff",
        "US":"#ffffff",
        "BF":"#abdda4",
        "UY":"#ffffff",
        "UZ":"#abdda4",
        "VC":"#ffffff",
        "VE":"#ffffff",
        "VG":"#ffffff",
        "VN":"#d53e4f","VI":"#ffffff",
        "VA":"#ffffff",
        "NA":"#ffffff",
        "PS":"#abdda4",
        "WF":"#ffffff",
        "WS":"#ffffff",
        "SZ":"#ffffff",
        "YE":"#abdda4",
        "XK":"#abdda4",
        "ZM":"#ffffff",
        "ZW":"#ffffff"};

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
            }]
        },
        onRegionClick:function(event, code) {
            var map = $('#map1').vectorMap('get', 'mapObject');
            $(location).attr("href", "https://find.bible/countries/"+map.getRegionName(code));
        }
    });

    var map = $('#map1').vectorMap('get', 'mapObject');
    map.series.regions[0].setValues(christianpct);

    $('#opn-drs').click(function(e){
        var map = $('#map1').vectorMap('get', 'mapObject');
        $(".world-watch-list-key").slideDown("slow");
        $(".christian-percent-key").slideUp("slow");
        $(".world-main-faith-key").slideUp();
        map.series.regions[0].setValues(unset);
        map.series.regions[0].setValues(opendoors);
    });

    $('#rel-pct').click(function(e){
        var map = $('#map1').vectorMap('get', 'mapObject');
        $(".world-watch-list-key").slideUp("slow");
        $(".christian-percent-key").slideUp("slow");
        $(".world-main-faith-key").slideDown();
        map.series.regions[0].setValues(unset);
        map.series.regions[0].setValues(worldreligions);
    });

    $('#chr-pct').click(function(e){
        var map = $('#map1').vectorMap('get', 'mapObject');
        $(".world-watch-list-key").slideUp("slow");
        $(".world-main-faith-key").slideUp("slow");
        $(".christian-percent-key").slideDown();
        map.series.regions[0].setValues(unset);
        map.series.regions[0].setValues(christianpct);
    });

})
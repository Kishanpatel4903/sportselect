$(function () {
    var countries = [
        {
            "name": "afghanistan",
            "code": "af"
    },
        {
            "name": "åland islands",
            "code": "ax"
    },
        {
            "name": "albania",
            "code": "al"
    },
        {
            "name": "algeria",
            "code": "dz"
    },
        {
            "name": "american samoa",
            "code": "as"
    },
        {
            "name": "andorra",
            "code": "ad"
    },
        {
            "name": "angola",
            "code": "ao"
    },
        {
            "name": "anguilla",
            "code": "ai"
    },
        {
            "name": "antarctica",
            "code": "aq"
    },
        {
            "name": "antigua and barbuda",
            "code": "ag"
    },
        {
            "name": "argentina",
            "code": "ar"
    },
        {
            "name": "armenia",
            "code": "am"
    },
        {
            "name": "aruba",
            "code": "aw"
    },
        {
            "name": "australia",
            "code": "au"
    },
        {
            "name": "austria",
            "code": "at"
    },
        {
            "name": "azerbaijan",
            "code": "az"
    },
        {
            "name": "bahamas",
            "code": "bs"
    },
        {
            "name": "bahrain",
            "code": "bh"
    },
        {
            "name": "bangladesh",
            "code": "bd"
    },
        {
            "name": "barbados",
            "code": "bb"
    },
        {
            "name": "belarus",
            "code": "by"
    },
        {
            "name": "belgium",
            "code": "be"
    },
        {
            "name": "belize",
            "code": "bz"
    },
        {
            "name": "benin",
            "code": "bj"
    },
        {
            "name": "bermuda",
            "code": "bm"
    },
        {
            "name": "bhutan",
            "code": "bt"
    },
        {
            "name": "bolivia",
            "code": "bo"
    },
        {
            "name": "bosnia and herzegovina",
            "code": "ba"
    },
        {
            "name": "botswana",
            "code": "bw"
    },
        {
            "name": "bouvet island",
            "code": "bv"
    },
        {
            "name": "brazil",
            "code": "br"
    },
        {
            "name": "british indian ocean territory",
            "code": "io"
    },
        {
            "name": "brunei darussalam",
            "code": "bn"
    },
        {
            "name": "bulgaria",
            "code": "bg"
    },
        {
            "name": "burkina faso",
            "code": "bf"
    },
        {
            "name": "burundi",
            "code": "bi"
    },
        {
            "name": "cambodia",
            "code": "kh"
    },
        {
            "name": "cameroon",
            "code": "cm"
    },
        {
            "name": "canada",
            "code": "ca"
    },
        {
            "name": "cape verde",
            "code": "cv"
    },
        {
            "name": "cayman islands",
            "code": "ky"
    },
        {
            "name": "central african republic",
            "code": "cf"
    },
        {
            "name": "chad",
            "code": "td"
    },
        {
            "name": "chile",
            "code": "cl"
    },
        {
            "name": "china",
            "code": "cn"
    },
        {
            "name": "christmas island",
            "code": "cx"
    },
        {
            "name": "cocos (keeling) islands",
            "code": "cc"
    },
        {
            "name": "colombia",
            "code": "co"
    },
        {
            "name": "comoros",
            "code": "km"
    },
        {
            "name": "congo",
            "code": "cg"
    },
        {
            "name": "cook islands",
            "code": "ck"
    },
        {
            "name": "costa rica",
            "code": "cr"
    },
        {
            "name": "cote d\"ivoire",
            "code": "ci"
    },
        {
            "name": "croatia",
            "code": "hr"
    },
        {
            "name": "cuba",
            "code": "cu"
    },
        {
            "name": "cyprus",
            "code": "cy"
    },
        {
            "name": "czech republic",
            "code": "cz"
    },
        {
            "name": "denmark",
            "code": "dk"
    },
        {
            "name": "djibouti",
            "code": "dj"
    },
        {
            "name": "dominica",
            "code": "dm"
    },
        {
            "name": "dominican republic",
            "code": "do"
    },
        {
            "name": "ecuador",
            "code": "ec"
    },
        {
            "name": "egypt",
            "code": "eg"
    },
        {
            "name": "el salvador",
            "code": "sv"
    },
        {
            "name": "equatorial guinea",
            "code": "gq"
    },
        {
            "name": "eritrea",
            "code": "er"
    },
        {
            "name": "estonia",
            "code": "ee"
    },
        {
            "name": "ethiopia",
            "code": "et"
    },
        {
            "name": "falkland islands (malvinas)",
            "code": "fk"
    },
        {
            "name": "faroe islands",
            "code": "fo"
    },
        {
            "name": "fiji",
            "code": "fj"
    },
        {
            "name": "finland",
            "code": "fi"
    },
        {
            "name": "france",
            "code": "fr"
    },
        {
            "name": "french guiana",
            "code": "gf"
    },
        {
            "name": "french polynesia",
            "code": "pf"
    },
        {
            "name": "french southern territories",
            "code": "tf"
    },
        {
            "name": "gabon",
            "code": "ga"
    },
        {
            "name": "gambia",
            "code": "gm"
    },
        {
            "name": "georgia",
            "code": "ge"
    },
        {
            "name": "germany",
            "code": "de"
    },
        {
            "name": "ghana",
            "code": "gh"
    },
        {
            "name": "gibraltar",
            "code": "gi"
    },
        {
            "name": "greece",
            "code": "gr"
    },
        {
            "name": "greenland",
            "code": "gl"
    },
        {
            "name": "grenada",
            "code": "gd"
    },
        {
            "name": "guadeloupe",
            "code": "gp"
    },
        {
            "name": "guam",
            "code": "gu"
    },
        {
            "name": "guatemala",
            "code": "gt"
    },
        {
            "name": "guernsey",
            "code": "gg"
    },
        {
            "name": "guinea",
            "code": "gn"
    },
        {
            "name": "guinea-bissau",
            "code": "gw"
    },
        {
            "name": "guyana",
            "code": "gy"
    },
        {
            "name": "haiti",
            "code": "ht"
    },
        {
            "name": "holy see (vatican city state)",
            "code": "va"
    },
        {
            "name": "honduras",
            "code": "hn"
    },
        {
            "name": "hong kong",
            "code": "hk"
    },
        {
            "name": "hungary",
            "code": "hu"
    },
        {
            "name": "iceland",
            "code": "is"
    },
        {
            "name": "india",
            "code": "in"
    },
        {
            "name": "indonesia",
            "code": "id"
    },
        {
            "name": "iran, islamic republic of",
            "code": "ir"
    },
        {
            "name": "iraq",
            "code": "iq"
    },
        {
            "name": "ireland",
            "code": "ie"
    },
        {
            "name": "isle of man",
            "code": "im"
    },
        {
            "name": "israel",
            "code": "il"
    },
        {
            "name": "italy",
            "code": "it"
    },
        {
            "name": "jamaica",
            "code": "jm"
    },
        {
            "name": "japan",
            "code": "jp"
    },
        {
            "name": "jersey",
            "code": "je"
    },
        {
            "name": "jordan",
            "code": "jo"
    },
        {
            "name": "kazakhstan",
            "code": "kz"
    },
        {
            "name": "kenya",
            "code": "ke"
    },
        {
            "name": "kiribati",
            "code": "ki"
    },
        {
            "name": "korea, republic of",
            "code": "kr"
    },
        {
            "name": "kuwait",
            "code": "kw"
    },
        {
            "name": "kyrgyzstan",
            "code": "kg"
    },
        {
            "name": "lao people\"s democratic republic",
            "code": "la"
    },
        {
            "name": "latvia",
            "code": "lv"
    },
        {
            "name": "lebanon",
            "code": "lb"
    },
        {
            "name": "lesotho",
            "code": "ls"
    },
        {
            "name": "liberia",
            "code": "lr"
    },
        {
            "name": "libyan arab jamahiriya",
            "code": "ly"
    },
        {
            "name": "liechtenstein",
            "code": "li"
    },
        {
            "name": "lithuania",
            "code": "lt"
    },
        {
            "name": "luxembourg",
            "code": "lu"
    },
        {
            "name": "macao",
            "code": "mo"
    },
        {
            "name": "madagascar",
            "code": "mg"
    },
        {
            "name": "malawi",
            "code": "mw"
    },
        {
            "name": "malaysia",
            "code": "my"
    },
        {
            "name": "maldives",
            "code": "mv"
    },
        {
            "name": "mali",
            "code": "ml"
    },
        {
            "name": "malta",
            "code": "mt"
    },
        {
            "name": "marshall islands",
            "code": "mh"
    },
        {
            "name": "martinique",
            "code": "mq"
    },
        {
            "name": "mauritania",
            "code": "mr"
    },
        {
            "name": "mauritius",
            "code": "mu"
    },
        {
            "name": "mayotte",
            "code": "yt"
    },
        {
            "name": "mexico",
            "code": "mx"
    },
        {
            "name": "micronesia, federated states of",
            "code": "fm"
    },
        {
            "name": "moldova, republic of",
            "code": "md"
    },
        {
            "name": "monaco",
            "code": "mc"
    },
        {
            "name": "mongolia",
            "code": "mn"
    },
        {
            "name": "montserrat",
            "code": "ms"
    },
        {
            "name": "morocco",
            "code": "ma"
    },
        {
            "name": "mozambique",
            "code": "mz"
    },
        {
            "name": "myanmar",
            "code": "mm"
    },
        {
            "name": "namibia",
            "code": "na"
    },
        {
            "name": "nauru",
            "code": "nr"
    },
        {
            "name": "nepal",
            "code": "np"
    },
        {
            "name": "netherlands",
            "code": "nl"
    },
        {
            "name": "netherlands antilles",
            "code": "an"
    },
        {
            "name": "new caledonia",
            "code": "nc"
    },
        {
            "name": "new zealand",
            "code": "nz"
    },
        {
            "name": "nicaragua",
            "code": "ni"
    },
        {
            "name": "niger",
            "code": "ne"
    },
        {
            "name": "nigeria",
            "code": "ng"
    },
        {
            "name": "niue",
            "code": "nu"
    },
        {
            "name": "norfolk island",
            "code": "nf"
    },
        {
            "name": "northern mariana islands",
            "code": "mp"
    },
        {
            "name": "norway",
            "code": "no"
    },
        {
            "name": "oman",
            "code": "om"
    },
        {
            "name": "pakistan",
            "code": "pk"
    },
        {
            "name": "palau",
            "code": "pw"
    },
        {
            "name": "panama",
            "code": "pa"
    },
        {
            "name": "papua new guinea",
            "code": "pg"
    },
        {
            "name": "paraguay",
            "code": "py"
    },
        {
            "name": "peru",
            "code": "pe"
    },
        {
            "name": "philippines",
            "code": "ph"
    },
        {
            "name": "pitcairn",
            "code": "pn"
    },
        {
            "name": "poland",
            "code": "pl"
    },
        {
            "name": "portugal",
            "code": "pt"
    },
        {
            "name": "puerto rico",
            "code": "pr"
    },
        {
            "name": "qatar",
            "code": "qa"
    },
        {
            "name": "reunion",
            "code": "re"
    },
        {
            "name": "romania",
            "code": "ro"
    },
        {
            "name": "russian federation",
            "code": "ru"
    },
        {
            "name": "rwanda",
            "code": "rw"
    },
        {
            "name": "saint helena",
            "code": "sh"
    },
        {
            "name": "saint kitts and nevis",
            "code": "kn"
    },
        {
            "name": "saint lucia",
            "code": "lc"
    },
        {
            "name": "samoa",
            "code": "ws"
    },
        {
            "name": "san marino",
            "code": "sm"
    },
        {
            "name": "saudi arabia",
            "code": "sa"
    },
        {
            "name": "senegal",
            "code": "sn"
    },
        {
            "name": "serbia",
            "code": "rs"
    },
        {
            "name": "montenegro",
            "code": "me"
    },
        {
            "name": "seychelles",
            "code": "sc"
    },
        {
            "name": "sierra leone",
            "code": "sl"
    },
        {
            "name": "singapore",
            "code": "sg"
    },
        {
            "name": "slovakia",
            "code": "sk"
    },
        {
            "name": "slovenia",
            "code": "si"
    },
        {
            "name": "solomon islands",
            "code": "sb"
    },
        {
            "name": "somalia",
            "code": "so"
    },
        {
            "name": "south africa",
            "code": "za"
    },
        {
            "name": "spain",
            "code": "es"
    },
        {
            "name": "sri lanka",
            "code": "lk"
    },
        {
            "name": "sudan",
            "code": "sd"
    },
        {
            "name": "suriname",
            "code": "sr"
    },
        {
            "name": "svalbard and jan mayen",
            "code": "sj"
    },
        {
            "name": "swaziland",
            "code": "sz"
    },
        {
            "name": "sweden",
            "code": "se"
    },
        {
            "name": "switzerland",
            "code": "ch"
    },
        {
            "name": "syrian arab republic",
            "code": "sy"
    },
        {
            "name": "taiwan, province of china",
            "code": "tw"
    },
        {
            "name": "tajikistan",
            "code": "tj"
    },
        {
            "name": "tanzania, united republic of",
            "code": "tz"
    },
        {
            "name": "thailand",
            "code": "th"
    },
        {
            "name": "timor-leste",
            "code": "tl"
    },
        {
            "name": "togo",
            "code": "tg"
    },
        {
            "name": "tokelau",
            "code": "tk"
    },
        {
            "name": "tonga",
            "code": "to"
    },
        {
            "name": "trinidad and tobago",
            "code": "tt"
    },
        {
            "name": "tunisia",
            "code": "tn"
    },
        {
            "name": "turkey",
            "code": "tr"
    },
        {
            "name": "turkmenistan",
            "code": "tm"
    },
        {
            "name": "turks and caicos islands",
            "code": "tc"
    },
        {
            "name": "tuvalu",
            "code": "tv"
    },
        {
            "name": "uganda",
            "code": "ug"
    },
        {
            "name": "ukraine",
            "code": "ua"
    },
        {
            "name": "united arab emirates",
            "code": "ae"
    },
        {
            "name": "united kingdom",
            "code": "gb"
    },
        {
            "name": "united states",
            "code": "us"
    },
        {
            "name": "uruguay",
            "code": "uy"
    },
        {
            "name": "uzbekistan",
            "code": "uz"
    },
        {
            "name": "vanuatu",
            "code": "vu"
    },
        {
            "name": "venezuela",
            "code": "ve"
    },
        {
            "name": "viet nam",
            "code": "vn"
    },
        {
            "name": "virgin islands, british",
            "code": "vg"
    },
        {
            "name": "virgin islands, u.s.",
            "code": "vi"
    },
        {
            "name": "wallis and futuna",
            "code": "wf"
    },
        {
            "name": "western sahara",
            "code": "eh"
    },
        {
            "name": "yemen",
            "code": "ye"
    },
        {
            "name": "zambia",
            "code": "zm"
    },
        {
            "name": "zimbabwe",
            "code": "zw"
    }
]

    var countryInput = $(document).find('.countrypicker');
    var countryList = "";
 

    //set defaults
    for (i = 0; i < countryInput.length; i++) {

        //check if flag
        flag = countryInput.eq(i).data('flag');
        
        if (flag) {
            countryList = "";
            
            //for each build list with flag
            $.each(countries, function (index, country) {
                var flagIcon = "plugin/country-picker-master/css/flags/" + country.code + ".png";
                countryList += "<option data-country-code='" + country.code + "' data-tokens='" + country.code + " " + country.name + "' style='padding-left:25px; background-position: 4px 7px; background-image:url(" + flagIcon + ");background-repeat:no-repeat;' value='" + country.name + "'>" + country.name + "</option>";
            });

            //add flags to button
            countryInput.eq(i).on('loaded.bs.select', function (e) {
                var button = $(this).closest('.btn-group').children('.btn');
                button.hide();
                var def = $(this).find(':selected').data('country-code');
                var flagIcon = "plugin/country-picker-master/css/flags/" + def + ".png";
                button.css("background-size", '20px');
                button.css("background-position", '10px 16px');
                button.css("padding-left", '40px');
                button.css("background-repeat", 'no-repeat');
                button.css("background-image", "url('" + flagIcon + "'");
                button.show();
            });

            //change flag on select change
            countryInput.eq(i).on('change', function () {
                button = $(this).closest('.btn-group').children('.btn');
                def = $(this).find(':selected').data('country-code');
                flagIcon = "plugin/country-picker-master/css/flags/" + def + ".png";
                button.css("background-size", '20px');
                button.css("background-position", '10px 16px');
                button.css("padding-left", '40px');
                button.css("background-repeat", 'no-repeat');
                button.css("background-image", "url('" + flagIcon + "'");

            });
        }else{
            countryList ="";
            
            //for each build list without flag
            $.each(countries, function (index, country) {
                countryList += "<option data-country-code='" + country.code + "' data-tokens='" + country.code + " " + country.name + "' value='" + country.name + "'>" + country.name + "</option>";
            });
            
            
        }
        
         //append country list
        countryInput.eq(i).html(countryList);


        //check if default
        def = countryInput.eq(i).data('default');
        //if there's a default, set it
        if (def) {
            countryInput.eq(i).val(def);
        }


    }









});
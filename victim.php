<?php
// count 142
// echo "hello victim";
// die();
$languages_list = array(
    'af' => 'Afrikaans',
    'sq' => 'Albanian - shqip',
    'am' => 'Amharic - አማርኛ',
    'ar' => 'Arabic - العربية',
    'an' => 'Aragonese - aragonés',
    'hy' => 'Armenian - հայերեն',
    'ast' => 'Asturian - asturianu',
    'az' => 'Azerbaijani - azərbaycan dili',
    'eu' => 'Basque - euskara',
    'be' => 'Belarusian - беларуская',
    'bn' => 'Bengali - বাংলা',
    'bs' => 'Bosnian - bosanski',
    'br' => 'Breton - brezhoneg',
    'bg' => 'Bulgarian - български',
    'ca' => 'Catalan - català',
    'ckb' => 'Central Kurdish - کوردی (دەستنوسی عەرەبی)',
    'zh' => 'Chinese - 中文',
    'zh-HK' => 'Chinese (Hong Kong) - 中文（香港）',
    'zh-CN' => 'Chinese (Simplified) - 中文（简体）',
    'zh-TW' => 'Chinese (Traditional) - 中文（繁體）',
    'co' => 'Corsican',
    'hr' => 'Croatian - hrvatski',
    'cs' => 'Czech - čeština',
    'da' => 'Danish - dansk',
    'nl' => 'Dutch - Nederlands',
    'en' => 'English',
    'en-AU' => 'English (Australia)',
    'en-CA' => 'English (Canada)',
    'en-IN' => 'English (India)',
    'en-NZ' => 'English (New Zealand)',
    'en-ZA' => 'English (South Africa)',
    'en-GB' => 'English (United Kingdom)',
    'en-US' => 'English (United States)',
    'eo' => 'Esperanto - esperanto',
    'et' => 'Estonian - eesti',
    'fo' => 'Faroese - føroyskt',
    'fil' => 'Filipino',
    'fi' => 'Finnish - suomi',
    'fr' => 'French - français',
    'fr-CA' => 'French (Canada) - français (Canada)',
    'fr-FR' => 'French (France) - français (France)',
    'fr-CH' => 'French (Switzerland) - français (Suisse)',
    'gl' => 'Galician - galego',
    'ka' => 'Georgian - ქართული',
    'de' => 'German - Deutsch',
    'de-AT' => 'German (Austria) - Deutsch (Österreich)',
    'de-DE' => 'German (Germany) - Deutsch (Deutschland)',
    'de-LI' => 'German (Liechtenstein) - Deutsch (Liechtenstein)',
    'de-CH' => 'German (Switzerland) - Deutsch (Schweiz)',
    'el' => 'Greek - Ελληνικά',
    'gn' => 'Guarani',
    'gu' => 'Gujarati - ગુજરાતી',
    'ha' => 'Hausa',
    'haw' => 'Hawaiian - ʻŌlelo Hawaiʻi',
    'he' => 'Hebrew - עברית',
    'hi' => 'Hindi - हिन्दी',
    'hu' => 'Hungarian - magyar',
    'is' => 'Icelandic - íslenska',
    'id' => 'Indonesian - Indonesia',
    'ia' => 'Interlingua',
    'ga' => 'Irish - Gaeilge',
    'it' => 'Italian - italiano',
    'it-IT' => 'Italian (Italy) - italiano (Italia)',
    'it-CH' => 'Italian (Switzerland) - italiano (Svizzera)',
    'ja' => 'Japanese - 日本語',
    'kn' => 'Kannada - ಕನ್ನಡ',
    'kk' => 'Kazakh - қазақ тілі',
    'km' => 'Khmer - ខ្មែរ',
    'ko' => 'Korean - 한국어',
    'ku' => 'Kurdish - Kurdî',
    'ky' => 'Kyrgyz - кыргызча',
    'lo' => 'Lao - ລາວ',
    'la' => 'Latin',
    'lv' => 'Latvian - latviešu',
    'ln' => 'Lingala - lingála',
    'lt' => 'Lithuanian - lietuvių',
    'mk' => 'Macedonian - македонски',
    'ms' => 'Malay - Bahasa Melayu',
    'ml' => 'Malayalam - മലയാളം',
    'mt' => 'Maltese - Malti',
    'mr' => 'Marathi - मराठी',
    'mn' => 'Mongolian - монгол',
    'ne' => 'Nepali - नेपाली',
    'no' => 'Norwegian - norsk',
    'nb' => 'Norwegian Bokmål - norsk bokmål',
    'nn' => 'Norwegian Nynorsk - nynorsk',
    'oc' => 'Occitan',
    'or' => 'Oriya - ଓଡ଼ିଆ',
    'om' => 'Oromo - Oromoo',
    'ps' => 'Pashto - پښتو',
    'fa' => 'Persian - فارسی',
    'pl' => 'Polish - polski',
    'pt' => 'Portuguese - português',
    'pt-BR' => 'Portuguese (Brazil) - português (Brasil)',
    'pt-PT' => 'Portuguese (Portugal) - português (Portugal)',
    'pa' => 'Punjabi - ਪੰਜਾਬੀ',
    'qu' => 'Quechua',
    'ro' => 'Romanian - română',
    'mo' => 'Romanian (Moldova) - română (Moldova)',
    'rm' => 'Romansh - rumantsch',
    'ru' => 'Russian - русский',
    'gd' => 'Scottish Gaelic',
    'sr' => 'Serbian - српски',
    'sh' => 'Serbo-Croatian - Srpskohrvatski',
    'sn' => 'Shona - chiShona',
    'sd' => 'Sindhi',
    'si' => 'Sinhala - සිංහල',
    'sk' => 'Slovak - slovenčina',
    'sl' => 'Slovenian - slovenščina',
    'so' => 'Somali - Soomaali',
    'st' => 'Southern Sotho',
    'es' => 'Spanish - español',
    'es-AR' => 'Spanish (Argentina) - español (Argentina)',
    'es-419' => 'Spanish (Latin America) - español (Latinoamérica)',
    'es-MX' => 'Spanish (Mexico) - español (México)',
    'es-ES' => 'Spanish (Spain) - español (España)',
    'es-US' => 'Spanish (United States) - español (Estados Unidos)',
    'su' => 'Sundanese',
    'sw' => 'Swahili - Kiswahili',
    'sv' => 'Swedish - svenska',
    'tg' => 'Tajik - тоҷикӣ',
    'ta' => 'Tamil - தமிழ்',
    'tt' => 'Tatar',
    'te' => 'Telugu - తెలుగు',
    'th' => 'Thai - ไทย',
    'ti' => 'Tigrinya - ትግርኛ',
    'to' => 'Tongan - lea fakatonga',
    'tr' => 'Turkish - Türkçe',
    'tk' => 'Turkmen',
    'tw' => 'Twi',
    'uk' => 'Ukrainian - українська',
    'ur' => 'Urdu - اردو',
    'ug' => 'Uyghur',
    'uz' => 'Uzbek - o‘zbek',
    'vi' => 'Vietnamese - Tiếng Việt',
    'wa' => 'Walloon - wa',
    'cy' => 'Welsh - Cymraeg',
    'fy' => 'Western Frisian',
    'xh' => 'Xhosa',
    'yi' => 'Yiddish',
    'yo' => 'Yoruba - Èdè Yorùbá',
    'zu' => 'Zulu - isiZulu'
);
// header('Content-Type: text/html;charset=utf-8');

$id = $_GET['id'];
if (isset($id)) {
    // echo "victim id is" . $id;
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://alltechstrends.com/sih/getdata.php?id=' . $id,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    $response = json_decode($response, true);
    // print_r($response);
    $check = $response['success'];
    if ($check == "true") {
        // echo "it is true";
        $text = $response['text'];
        $id = $response['id'];
        $lattitude = $response['lattitude'];
        $longitude = $response['longitude'];
        $lang = $response['lang'];
        $lang  = strtolower($lang);
        // echo $languages_list[$lang];

        $ifr_url = 'https://maps.google.com/maps?q=' . $lattitude . ',' . $longitude . '&amp;z=15&amp;output=embed';
        // echo $ifr_url;


        // $text = $data->text;
        // $en_text = utf8_encode($text);
        $source_lang = $lang;
        $target_lang = "en";
        // $U_id = $data->id;
        // $lang = $data->lang;
        $position = $data->position;
        // print_r($data);
        // die($data);
        $url = "https://script.google.com/macros/s/AKfycbytMyyuBwlgrxuSTp6uYFeBnJMLKTnFwz8h46AxUoZrwR-pS_eocMQ7E2xiXffkL-QX/exec";
        $curl = curl_init($url);

        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_POSTFIELDS => http_build_query([
                'text' => $text,
                'source_lang' => $source_lang,
                'target_lang' => $target_lang
            ]),
        ));

        $response = curl_exec($curl);
        $response = json_decode($response);
        $translated = $response->transaltedtext;
        curl_close($curl);
        // echo $response;
    } elseif ($check == "false") {
        echo "<script> alert('victim id is not valid')</script>";
        header("location:index.html");
    }
} else {
    // echo "victim id is not valid";
    echo "<script> alert('Zyada Shanpanti nh bhai')</script>";
    header("location:index.html");
}
// die();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Police Alert Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.24.0/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2/dist/tailwind.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/x-icon" href="assets/img/Ellipse 34.svg">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <section id="map" class="lang-container text-white px-[20vw]">
        <h1 class="font-bold text-xl">Police Alert Panel</h1>
        <h1>Location of Emergency</h1>
        <div class="flex justify-center"><iframe class="rounded-xl" src="<?php echo $ifr_url; ?>" width="900" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
        <!-- <label for="" class="text-lg">Address</label> -->
        <!-- <select name="address" id="address" class="bg-black border-1">
            <option value="#">Galgotias University</option>
        </select> -->
    </section>
    <section id="player" class="lang-container px-[20vw]">
        <h1 class="text-2xl font-bold">Recorded Voice</h1>
        <div>
            <audio src="recordings/<?php echo $id ?>.wav" controls></audio>
            <!-- <audio src="recordings/1661409178.wav" controls></audio> -->
        </div>

    </section>
    <div class="">
        <div class="lang-container px-[20vw]">
            <div class="inner-lang-container">
                <div class="_side">
                    <div class="detect-lang">
                        <select name="lang" id="source_lang" disabled>
                            <option value="<?php echo $lang ?>"><?php echo $languages_list[$lang]; ?></option>
                        </select>
                    </div>
                    <div class="detect-area">
                        <textarea class="left-detect-area" name="text-area" id="detect-area" cols="30" rows="10" readonly><?php echo $text ?></textarea>
                        <img src="speaker-icon.png" alt="" class="speaker-icon">
                    </div>
                </div>
                <div class="swap-icon" class="">
                    <div>
                        <img src="./assets/img/cross.svg" alt="">
                    </div>
                </div>
                <div class="_side ">
                    <div class="detect-lang ">
                        <select name="lang" id="target_lang">
                            <!-- <option value=" auto">auto</option> -->
                            <option value="AF">Afrikaans</option>
                            <option value="SQ">Albanian</option>
                            <option value="AR">Arabic</option>
                            <option value="HY">Armenian</option>
                            <option value="EU">Basque</option>
                            <option value="BN">Bengali</option>
                            <option value="BG">Bulgarian</option>
                            <option value="CA">Catalan</option>
                            <option value="KM">Cambodian</option>
                            <option value="ZH">Chinese (Mandarin)</option>
                            <option value="HR">Croatian</option>
                            <option value="CS">Czech</option>
                            <option value="DA">Danish</option>
                            <option value="NL">Dutch</option>
                            <option value="EN" selected>English</option>
                            <option value="ET">Estonian</option>
                            <option value="FJ">Fiji</option>
                            <option value="FI">Finnish</option>
                            <option value="FR">French</option>
                            <option value="KA">Georgian</option>
                            <option value="DE">German</option>
                            <option value="EL">Greek</option>
                            <option value="GU">Gujarati</option>
                            <option value="HE">Hebrew</option>
                            <option value="HI">Hindi</option>
                            <option value="HU">Hungarian</option>
                            <option value="IS">Icelandic</option>
                            <option value="ID">Indonesian</option>
                            <option value="GA">Irish</option>
                            <option value="IT">Italian</option>
                            <option value="JA">Japanese</option>
                            <option value="JW">Javanese</option>
                            <option value="KO">Korean</option>
                            <option value="LA">Latin</option>
                            <option value="LV">Latvian</option>
                            <option value="LT">Lithuanian</option>
                            <option value="MK">Macedonian</option>
                            <option value="MS">Malay</option>
                            <option value="ML">Malayalam</option>
                            <option value="MT">Maltese</option>
                            <option value="MI">Maori</option>
                            <option value="MR">Marathi</option>
                            <option value="MN">Mongolian</option>
                            <option value="NE">Nepali</option>
                            <option value="NO">Norwegian</option>
                            <option value="FA">Persian</option>
                            <option value="PL">Polish</option>
                            <option value="PT">Portuguese</option>
                            <option value="PA">Punjabi</option>
                            <option value="QU">Quechua</option>
                            <option value="RO">Romanian</option>
                            <option value="RU">Russian</option>
                            <option value="SM">Samoan</option>
                            <option value="SR">Serbian</option>
                            <option value="SK">Slovak</option>
                            <option value="SL">Slovenian</option>
                            <option value="ES">Spanish</option>
                            <option value="SW">Swahili</option>
                            <option value="SV">Swedish </option>
                            <option value="TA">Tamil</option>
                            <option value="TT">Tatar</option>
                            <option value="TE">Telugu</option>
                            <option value="TH">Thai</option>
                            <option value="BO">Tibetan</option>
                            <option value="TO">Tonga</option>
                            <option value="TR">Turkish</option>
                            <option value="UK">Ukrainian</option>
                            <option value="UR">Urdu</option>
                            <option value="UZ">Uzbek</option>
                            <option value="VI">Vietnamese</option>
                            <option value="CY">Welsh</option>
                            <option value="XH">Xhosa</option>
                        </select>
                    </div>
                    <div class="detect-area ">
                        <div class="right-detect-area"><i id="loader" class="fa fa-spinner fa-spin" style="display: none;"></i>
                            <p id="translated"><?php echo $translated ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- mic button -->
            <!-- <div class="flex justify-center">
                <button type="button" for="" class="hover:invert "><img src="./assets/img/smallmic.svg" alt="" class="w-[150px] active:scale-75 transition-transform"></button>
            </div> -->

        </div>
    </div>
    <!-- <label for="my-modal-3"
        class="btn btn-md  right-0 top-0 h-[585px] w-10 bg-gray-500 hover:bg-gray-500"><span
            class="rotate-90">CLOSE</span>✕</label> -->
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    $("#target_lang").change(function() {
        // alert("hello");
        let final = $("#final").text();
        console.log(final);
        if (!$('#final').is(':empty')) {
            //do something
            let source_lang = $("#source_lang").val();
            let target_lang = $("#target_lang").val();
            // alert("hello");
            var form = new FormData();
            form.append("text", '<?php echo $text ?>');
            form.append("source_lang", '<?php echo $lang ?>');
            form.append("target_lang", target_lang);

            var settings = {
                "url": "https://script.google.com/macros/s/AKfycbytMyyuBwlgrxuSTp6uYFeBnJMLKTnFwz8h46AxUoZrwR-pS_eocMQ7E2xiXffkL-QX/exec",
                "method": "POST",
                "timeout": 0,
                "processData": false,
                "mimeType": "multipart/form-data",
                "contentType": false,
                "data": form
            };

            $.ajax(settings).done(function(response) {
                // console.log(response);
                let res = JSON.parse(response);
                // console.log(res.transaltedtext);
                $("#translated").text(res.transaltedtext);
            });
        }
    })
</script>

</html>
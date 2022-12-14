<html class="bwc-page-template-powered" lang="fr">

<head>
    <script type="text/javascript" async="" src="https://www.gstatic.com/recaptcha/releases/ovmhLiigaw4D9ujHYlHcKKhP/recaptcha__fr.js" crossorigin="anonymous" integrity="sha384-JVQNxkGPKeKRbUcuSPRx3Bw6W25LLryQSDLGeUFZ26bPROr3ja3ZNQphZY/r8PF6"></script>
    <script src="https://cdn.optimizely.com/public/4268742351/s/afbw.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="robots" content="noindex">

    <meta id="csrf" content="">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <link rel="apple-touch-icon" sizes="120x120" href="/login/assets/af/img/logo-120.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0,user-scalable=0, minimal-ui">
    <meta name="theme-color" content="#051039">


    <title>Air France</title>

    <link rel="stylesheet" href="/login/assets/af/css/blueweb.css" id="bw-stylesheet" as="style">
    <link rel="manifest" href="/login/assets/af/manifest.json">
    <link rel="shortcut icon" href="/login/assets/af/favicon.ico" type="image/x-icon">

    <!-- base url -->
    <script id="globals">
        var cid_global = {
            locale: {
                language: "fr",
                baseLanguage: "fr",
                country: "FR",
                localeData: {
                    locale: null,
                    localeExtra: null
                }
            },
            domainInfo: {
                "locale": {
                    "locale": "fr",
                    "legacyLocale": "fr",
                    "crsLocale": "fr",
                    "urlPath": "fr",
                    "default": false
                },
                "country": "FR",
                "localeCustom": "fr-FR"
            },
            cidApiConfig: {
                "clientId": "4pm9rktn3a689dy6593r29vr",
                "recaptchaSiteKey": "6LdeO54UAAAAAPd6Q3wIb1TMjp7_G1XKiRh7tpXo",
                "recaptchaSiteKeyFBApi": "6LfoYykeAAAAAOPmFThDJo6JQ-a3lJDD4HeGLHJB",
                "disableCaptcha": false,
                "simpleCaptcha": false,
                "reCaptchaV2": false,
                "reCaptchaV3": true,
                "isSocialEnabled": false,
                "isSocialEnrolEnabled": true,
                "redirectUri": "https://wwws.airfrance.fr/endpoint/v1/oauth/continue/",
                "source": "homepage.homepage",
                "action": ""
            },
            initialTimestamp: Date.now(),
            brand: "af",
            event: "",
            isle: "true",
            ENV: "le",
            optimizelyTag: "4268742351",
            contrastPreference: "",
            cookieConsentName: "TC_OPTOUT",
            cookieConsentValue: "0@@@027@@@ALL",
            cookieConsentDaysToHold: "396",
            relay42Customer: "1205-v1",
            accessPath: "/login/",
            isMobile: false,
            viewFlag: "11110",
            abonneeLink: "https://www.airfrance.fr/{country}/{language}/local/process/subscriberbooking/LoginMyAccountAction.do",
            isPttl: true,
            ipAddress: "171.21.122.110",
            locationConfig: "{&quot;range&quot;:[2870304768,2870312959],&quot;country&quot;:&quot;NL&quot;,&quot;region&quot;:&quot;&quot;,&quot;eu&quot;:&quot;1&quot;,&quot;timezone&quot;:&quot;Europe/Amsterdam&quot;,&quot;city&quot;:&quot;&quot;,&quot;ll&quot;:[52.3824,4.8995],&quot;metro&quot;:0,&quot;area&quot;:100}"
        };

        (function(module) {
            var exports = {};
            (function(factory) {
                if (typeof module === "object" && typeof module.exports === "object") {
                    var v = factory(null, exports);
                    if (v !== undefined)
                        module.exports = v;
                } else if (typeof define === "function" && define.amd) {
                    define("@angular/common/locales/fr", ["require", "exports"], factory);
                }
            })(function(require, exports) {
                "use strict";
                Object.defineProperty(exports, "__esModule", {
                    value: true
                });
                var u = undefined;

                function plural(n) {
                    var i = Math.floor(Math.abs(n));
                    if (i === 0 || i === 1)
                        return 1;
                    return 5;
                }
                exports["default"] = [
                    'fr',
                    [
                        ['AM', 'PM'], u, u
                    ],
                    u,
                    [
                        ['D', 'L', 'M', 'M', 'J', 'V', 'S'],
                        ['dim.', 'lun.', 'mar.', 'mer.', 'jeu.', 'ven.', 'sam.'],
                        ['dimanche', 'lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi'],
                        ['di', 'lu', 'ma', 'me', 'je', 've', 'sa']
                    ],
                    u,
                    [
                        ['J', 'F', 'M', 'A', 'M', 'J', 'J', 'A', 'S', 'O', 'N', 'D'],
                        [
                            'janv.', 'f??vr.', 'mars', 'avr.', 'mai', 'juin', 'juil.', 'ao??t', 'sept.', 'oct.', 'nov.',
                            'd??c.'
                        ],
                        [
                            'janvier', 'f??vrier', 'mars', 'avril', 'mai', 'juin', 'juillet', 'ao??t', 'septembre',
                            'octobre', 'novembre', 'd??cembre'
                        ]
                    ],
                    u,
                    [
                        ['av. J.-C.', 'ap. J.-C.'], u, ['avant J??sus-Christ', 'apr??s J??sus-Christ']
                    ],
                    1,
                    [6, 0],
                    ['dd/MM/y', 'd MMM y', 'd MMMM y', 'EEEE d MMMM y'],
                    ['HH:mm', 'HH:mm:ss', 'HH:mm:ss z', 'HH:mm:ss zzzz'],
                    ['{1} {0}', '{1} \'??\' {0}', u, u],
                    [',', '\u202f', ';', '%', '+', '-', 'E', '??', '???', '???', 'NaN', ':'],
                    ['#,##0.###', '#,##0??%', '#,##0.00????', '#E0'],
                    'EUR',
                    '???',
                    'euro',
                    {
                        'ARS': ['$AR', '$'],
                        'AUD': ['$AU', '$'],
                        'BEF': ['FB'],
                        'BMD': ['$BM', '$'],
                        'BND': ['$BN', '$'],
                        'BZD': ['$BZ', '$'],
                        'CAD': ['$CA', '$'],
                        'CLP': ['$CL', '$'],
                        'CNY': [u, '??'],
                        'COP': ['$CO', '$'],
                        'CYP': ['??CY'],
                        'EGP': [u, '??E'],
                        'FJD': ['$FJ', '$'],
                        'FKP': ['??FK', '??'],
                        'FRF': ['F'],
                        'GBP': ['??GB', '??'],
                        'GIP': ['??GI', '??'],
                        'HKD': [u, '$'],
                        'IEP': ['??IE'],
                        'ILP': ['??IL'],
                        'ITL': ['???IT'],
                        'JPY': [u, '??'],
                        'KMF': [u, 'FC'],
                        'LBP': ['??LB', '??L'],
                        'MTP': ['??MT'],
                        'MXN': ['$MX', '$'],
                        'NAD': ['$NA', '$'],
                        'NIO': [u, '$C'],
                        'NZD': ['$NZ', '$'],
                        'RHD': ['$RH'],
                        'RON': [u, 'L'],
                        'RWF': [u, 'FR'],
                        'SBD': ['$SB', '$'],
                        'SGD': ['$SG', '$'],
                        'SRD': ['$SR', '$'],
                        'TOP': [u, '$T'],
                        'TTD': ['$TT', '$'],
                        'TWD': [u, 'NT$'],
                        'USD': ['$US', '$'],
                        'UYU': ['$UY', '$'],
                        'WST': ['$WS'],
                        'XCD': [u, '$'],
                        'XPF': ['FCFP'],
                        'ZMW': [u, 'Kw']
                    },
                    'ltr',
                    plural
                ];
            });

            cid_global.locale.localeData.locale = exports.default;
            exports = {};
            (function(factory) {
                if (typeof module === "object" && typeof module.exports === "object") {
                    var v = factory(null, exports);
                    if (v !== undefined)
                        module.exports = v;
                } else if (typeof define === "function" && define.amd) {
                    define("@angular/common/locales/extra/fr", ["require", "exports"], factory);
                }
            })(function(require, exports) {
                "use strict";
                Object.defineProperty(exports, "__esModule", {
                    value: true
                });
                var u = undefined;
                exports["default"] = [
                    [
                        ['minuit', 'midi', 'mat.', 'ap.m.', 'soir', 'nuit'], u,
                        ['minuit', 'midi', 'du matin', 'de l???apr??s-midi', 'du soir', 'du matin']
                    ],
                    [
                        ['minuit', 'midi', 'mat.', 'ap.m.', 'soir', 'nuit'], u,
                        ['minuit', 'midi', 'matin', 'apr??s-midi', 'soir', 'nuit']
                    ],
                    ['00:00', '12:00', ['04:00', '12:00'],
                        ['12:00', '18:00'],
                        ['18:00', '24:00'],
                        ['00:00', '04:00']
                    ]
                ];
            });

            cid_global.locale.localeData.localeExtra = exports.default;
        })({
            exports: {}
        });

        var labels = {
            "language_mapping_VU": "EN,FR",
            "language_mapping_VN": "EN,FR",
            "language_mapping_EC": "EN,ES",
            "language_mapping_VI": "EN",
            "language_mapping_DZ": "EN,FR",
            "language_mapping_VG": "EN",
            "language_mapping_VE": "EN,ES",
            "language_mapping_DM": "EN,FR",
            "language_mapping_VC": "EN,FR",
            "language_mapping_DO": "EN,ES",
            "language_mapping_VA": "EN,IT",
            "language_mapping_DE": "EN,FR,DE",
            "language_mapping_UZ": "EN,RU",
            "language_mapping_UY": "EN,ES",
            "language_mapping_DK": "EN",
            "language_mapping_DJ": "EN,FR",
            "language_mapping_US": "EN,FR",
            "language_mapping_UM": "EN,FR",
            "language_mapping_UG": "EN",
            "language_mapping_UA": "EN,RU",
            "language_mapping_ET": "EN",
            "language_mapping_ES": "EN,ES,FR",
            "language_mapping_ER": "EN",
            "language_mapping_EH": "EN",
            "language_mapping_EG": "EN,FR",
            "language_mapping_TZ": "EN",
            "language_mapping_EE": "EN",
            "language_mapping_TT": "EN",
            "language_mapping_TW": "EN,CT",
            "language_mapping_TV": "EN",
            "language_mapping_GD": "EN",
            "language_mapping_GE": "EN",
            "language_mapping_GF": "EN,FR",
            "language_mapping_GA": "EN,FR",
            "language_mapping_GB": "EN",
            "language_mapping_FR": "EN,FR",
            "language_mapping_FO": "EN",
            "language_mapping_FK": "EN",
            "language_mapping_FJ": "EN",
            "language_mapping_FM": "EN",
            "language_mapping_FI": "EN",
            "language_mapping_WS": "EN",
            "language_mapping_GY": "EN,FR",
            "language_mapping_GW": "EN",
            "language_mapping_GU": "EN",
            "language_mapping_GT": "EN,ES",
            "language_mapping_GS": "EN",
            "language_mapping_GR": "EN",
            "language_mapping_GQ": "EN,ES,FR",
            "language_mapping_WF": "EN,FR",
            "language_mapping_GP": "EN,FR",
            "language_mapping_GN": "EN,FR",
            "language_mapping_GM": "EN",
            "language_mapping_GL": "EN",
            "language_mapping_GI": "EN,ES",
            "language_mapping_GH": "EN",
            "language_mapping_RE": "EN,FR",
            "language_mapping_RO": "EN,FR,RO",
            "language_mapping_AT": "EN,DE",
            "language_mapping_AS": "EN",
            "language_mapping_AR": "EN,ES",
            "language_mapping_AQ": "EN",
            "language_mapping_AW": "EN,NL",
            "language_mapping_QA": "EN",
            "language_mapping_AU": "EN",
            "language_mapping_AZ": "EN,RU",
            "language_mapping_BA": "EN",
            "language_mapping_PT": "EN",
            "language_mapping_AD": "EN,ES",
            "language_mapping_PW": "EN",
            "language_mapping_AG": "EN",
            "language_mapping_AE": "EN,FR",
            "language_mapping_PR": "EN,ES",
            "language_mapping_AF": "EN,FR",
            "language_mapping_PS": "EN",
            "language_mapping_AL": "EN",
            "language_mapping_AI": "EN",
            "language_mapping_AO": "EN,FR",
            "language_mapping_PY": "EN,ES",
            "language_mapping_AM": "EN",
            "language_mapping_TG": "EN,FR",
            "language_mapping_BW": "EN",
            "language_mapping_TF": "EN,FR",
            "language_mapping_BV": "EN",
            "language_mapping_BY": "EN,RU",
            "language_mapping_TD": "EN,FR",
            "language_mapping_TK": "EN",
            "language_mapping_BS": "EN",
            "language_mapping_TJ": "EN,RU",
            "language_mapping_BR": "EN,FR,PT",
            "language_mapping_TH": "EN,FR",
            "language_mapping_BT": "EN",
            "language_mapping_TO": "EN",
            "language_mapping_TN": "EN,FR",
            "language_mapping_TM": "EN,RU",
            "language_mapping_TL": "EN",
            "language_mapping_CA": "EN,FR",
            "language_mapping_TR": "EN",
            "language_mapping_BZ": "EN",
            "language_mapping_BF": "EN,FR",
            "language_mapping_SV": "EN,ES",
            "language_mapping_BG": "EN",
            "language_mapping_SS": "EN",
            "language_mapping_BH": "EN",
            "language_mapping_ST": "EN",
            "language_mapping_BI": "EN",
            "language_mapping_SY": "EN",
            "language_mapping_BB": "EN",
            "language_mapping_SZ": "EN",
            "language_mapping_BD": "EN",
            "language_mapping_SX": "EN,FR,NL",
            "language_mapping_BE": "EN,FR,NL",
            "language_mapping_BN": "EN",
            "language_mapping_BO": "EN,ES",
            "language_mapping_BQ": "EN,FR,NL",
            "language_mapping_BJ": "EN,FR",
            "language_mapping_TC": "EN",
            "language_mapping_BL": "EN,FR",
            "language_mapping_BM": "EN",
            "language_mapping_SD": "EN",
            "language_mapping_CZ": "EN",
            "language_mapping_CY": "EN",
            "language_mapping_SC": "EN,FR",
            "language_mapping_CX": "EN",
            "language_mapping_SE": "EN",
            "language_mapping_CW": "EN,NL",
            "language_mapping_SH": "EN",
            "language_mapping_CV": "EN",
            "language_mapping_SG": "EN",
            "language_mapping_CU": "EN,ES",
            "language_mapping_SJ": "EN",
            "language_mapping_SI": "EN",
            "language_mapping_SL": "EN",
            "language_mapping_SK": "EN",
            "language_mapping_SN": "EN,FR",
            "language_mapping_SM": "EN,IT",
            "language_mapping_SO": "EN",
            "language_mapping_SR": "EN,NL",
            "language_mapping_CI": "EN,FR",
            "language_mapping_RS": "EN",
            "language_mapping_CG": "EN,FR",
            "language_mapping_CH": "EN,FR,DE",
            "language_mapping_RU": "EN,FR,RU",
            "language_mapping_CF": "EN,FR",
            "language_mapping_RW": "EN,FR",
            "language_mapping_CC": "EN",
            "language_mapping_CD": "EN,FR",
            "language_mapping_CR": "EN,ES",
            "language_mapping_CO": "EN,ES",
            "language_mapping_CM": "EN,FR",
            "language_mapping_CN": "EN,ZH,FR",
            "language_mapping_CK": "EN",
            "language_mapping_SA": "EN",
            "language_mapping_CL": "EN,ES",
            "language_mapping_SB": "EN",
            "language_mapping_LV": "EN,RU",
            "language_mapping_LU": "EN,FR",
            "language_mapping_LT": "EN,RU",
            "language_mapping_LY": "EN",
            "language_mapping_LS": "EN",
            "language_mapping_LR": "EN",
            "language_mapping_MG": "EN,FR",
            "language_mapping_MH": "EN",
            "language_mapping_ME": "EN",
            "language_mapping_MF": "EN,FR,NL",
            "language_mapping_MK": "EN",
            "language_mapping_ML": "EN,FR",
            "language_mapping_MC": "EN,FR",
            "language_mapping_MD": "EN",
            "language_mapping_MA": "EN,FR",
            "language_mapping_MV": "EN",
            "language_mapping_MU": "EN,FR",
            "language_mapping_MX": "EN,ES,FR",
            "language_mapping_MW": "EN",
            "language_mapping_MZ": "EN",
            "language_mapping_MY": "EN",
            "language_mapping_MN": "EN",
            "language_mapping_MM": "EN",
            "language_mapping_MP": "EN",
            "language_mapping_MO": "EN,CT",
            "language_mapping_MR": "EN,FR",
            "language_mapping_MQ": "EN,FR",
            "language_mapping_MT": "EN",
            "language_mapping_MS": "EN",
            "language_mapping_NF": "EN",
            "language_mapping_NG": "EN",
            "language_mapping_NI": "EN,ES",
            "language_mapping_NL": "EN,NL",
            "language_mapping_NA": "EN",
            "language_mapping_NC": "EN,FR",
            "language_mapping_NE": "EN,FR",
            "language_mapping_NZ": "EN",
            "language_mapping_NU": "EN",
            "language_mapping_NR": "EN",
            "language_mapping_NP": "EN",
            "language_mapping_NO": "EN",
            "language_mapping_OM": "EN",
            "language_mapping_PL": "EN",
            "language_mapping_PM": "EN,FR",
            "language_mapping_PN": "EN",
            "language_mapping_PH": "EN",
            "language_mapping_PK": "EN",
            "language_mapping_PE": "EN,ES",
            "language_mapping_PF": "EN,FR",
            "language_mapping_PG": "EN",
            "language_mapping_PA": "EN,ES",
            "language_mapping_HK": "EN,CT",
            "language_mapping_ZA": "EN",
            "language_mapping_HN": "EN,ES",
            "language_mapping_HR": "EN",
            "language_mapping_HT": "EN,FR",
            "language_mapping_HU": "EN",
            "language_mapping_ZM": "EN",
            "language_mapping_ZW": "EN",
            "language_mapping_ID": "EN",
            "language_mapping_IE": "EN",
            "language_mapping_IL": "EN",
            "language_mapping_IN": "EN",
            "language_mapping_IO": "EN",
            "language_mapping_IQ": "EN",
            "language_mapping_IR": "EN",
            "language_mapping_YE": "EN",
            "language_mapping_IS": "EN",
            "language_mapping_IT": "EN,IT",
            "language_mapping_YT": "EN,FR",
            "language_mapping_JP": "EN,FR,JA",
            "language_mapping_JO": "EN",
            "language_mapping_JM": "EN",
            "language_mapping_KI": "EN",
            "language_mapping_KH": "EN,FR",
            "language_mapping_KG": "EN,RU",
            "language_mapping_KE": "EN",
            "language_mapping_KP": "EN,KO",
            "language_mapping_KR": "EN,KO",
            "language_mapping_KM": "EN,FR",
            "language_mapping_KN": "EN",
            "language_mapping_KW": "EN",
            "language_mapping_KY": "EN",
            "language_mapping_KZ": "EN,RU",
            "language_mapping_LA": "EN,FR",
            "language_mapping_LC": "EN",
            "language_mapping_LB": "EN,FR",
            "language_mapping_LI": "EN,DE",
            "language_mapping_LK": "EN",
            "fbenrol.form.title": "Adh??rer ?? Flying Blue",
            "fbenrol.form.first_name": "Pr??nom",
            "fbenrol.form.last_name": "Nom",
            "fbenrol.form.login_option_label": "Ou inscrivez-vous ici :",
            "fbenrol.form.name_hint": "Saisissez votre pr??nom et votre nom exactement tels qu'ils sont ??crits sur votre passeport ou carte d'identit??.",
            "fbenrol.form.greetings_user": "Ravis de faire votre connaissance, {{passengerfirstname}} !",
            "fbenrol.form.dob": "Date de naissance",
            "fbenrol.form.gender": "Sexe",
            "fbenrol.form.gender_conversation": "De quel sexe ??tes-vous ?",
            "fbenrol.form.email": "Adresse e-mail",
            "fbenrol.form.email_preferences": "Pr??f??rences de communication",
            "fbenrol.form.telephone_number": "Num??ro de t??l??phone",
            "fbenrol.form.preferred_language": "Langue de communication souhait??e",
            "fbenrol.form.greetings_password": "Cr??ons un mot de passe",
            "fbenrol.form.continue": "Continuer",
            "fbenrol.form.create_account": "Cr??er un compte",
            "fbenrol.form.name_pattern_error": "Veuillez saisir uniquement des lettres et des espaces.",
            "fbenrol.form.phone_pattern_error": "Veuillez saisir uniquement des chiffres.",
            "fbenrol.form.field_min_character_error": "Veuillez saisir au moins 2 caract??res.",
            "fbenrol.form.lastname_min_character_error": "Les noms de famille doivent comporter plus d'un caract??re, veuillez r??essayer.",
            "fbenrol.form.firstname_min_character_error": "Les pr??noms doivent comporter plus d'un caract??re, veuillez r??essayer.",
            "fbenrol.form.field_max_date_error": "Veuillez v??rifier la date saisie, puis r??essayer.",
            "fbenrol.form.field_min_date_error": "Veuillez v??rifier la date saisie, puis r??essayer.",
            "fbenrol.form.field_email_error": "Veuillez saisir une adresse e-mail valide.",
            "fbenrol.form.password_policy_characters": "Entre 8 et 12 caract??res",
            "fbenrol.form.password_policy_capital": "Au moins 1 majuscule (A-Z)",
            "fbenrol.form.password_policy_number": "Au moins 1 chiffre (0-9)",
            "fbenrol.form.password_policy_lowercase": "Au moins 1 minuscule (a-z)",
            "fbenrol.form.password_policy_symbol": "Symboles autoris??s : $ @ & + - / # _ ? !",
            "fbenrol.form.password": "Mot de passe",
            "fbenrol.form.security_question": "Question de s??curit??",
            "fbenrol.form.security_answer": "R??ponse",
            "fbenrol.form.password_show": "Afficher",
            "fbenrol.form.password_hide": "Masquer",
            "fbenrol.form.invalid_language_error": "Veuillez saisir une langue existante",
            "fbenrol.welcome_conversation": "{{passengerfirstname}}, Flying Blue vous souhaite la bienvenue !",
            "fbenrol.flyingblue_number": "Votre num??ro Flying Blue :",
            "fbenrol.email_error.not_recommended": "?? noter : si vous cr??ez un nouveau compte en utilisant la m??me adresse e-mail, vous ne pourrez vous connecter ?? votre nouveau compte qu'en utilisant votre num??ro Flying Blue.",
            "fbenrol.email_error.modify_email": "Modifier",
            "fbenrol.email_error.keep_email": "Garder",
            "fbenrol.technicalError.user_exists_fb": "Vous ??tes d??j?? membre Flying Blue.",
            "fbenrol.technicalError.user_exists_mya": "Vous avez d??j?? un compte.",
            "fbenrol.technicalError.offline": "Veuillez vous assurer d'avoir une connexion ?? Internet et r??essayer.",
            "gender_MR": "Homme",
            "gender_MS": "Femme",
            "fbenrol.compliance_kl_link_text": "Politique de confidentialit?? KLM",
            "fbenrol.compliance_kl_link": "https://www.klm.com/travel/{{country}}_{{language}}//customer_support/privacy_policy/privacy_policy.htm",
            "fbenrol.compliance_af_link_text": "Politique de s??curit?? et de confidentialit?? d'Air France",
            "fbenrol.compliance_af_link": "https://www.airfrance.com/{{countryUppercase}}/{{language}}/local/transverse/footer/edito_preambule.htm",
            "fbenrol.form.agree_terms": "J???accepte les {{fb_terms_policy}}",
            "fbenrol.form.fb_terms_link": "https://www.flyingblue.com/kamino/policies/{{language}}/{{country}}",
            "myau.technicalError.retry_btn": "R??essayer",
            "fbenrol.form.subscription_flying_blue": "M'abonner aux mises ?? jour de Flying??Blue",
            "fbenrol.comm_pref.info.fb": "?? propos de Flying Blue",
            "fbenrol.comm_pref.info.updates_header": "Mises ?? jour",
            "fbenrol.comm_pref.info.partners_header": "Nos partenaires",
            "fbenrol.comm_pref.info.fb_partners_link": "https://www.flyingblue.com/en/partners/all?promotions=false&spend=false&earn=false",
            "fbenrol.comm_pref.info.fb_partners_link_text": "vue d'ensemble",
            "fbenrol.comm_pref.info.fb_unsubscribe_header": "Se d??sabonner",
            "fbenrol.comm_pref.info.social_media_header": "R??seaux sociaux",
            "fbenrol.comm_pref.info.facebook_data_usage_link": "https://www.facebook.com/ads/about",
            "fbenrol.comm_pref.info.facebook_data_usage_link_text": "Facebook utilise vos donn??es ?? des fins publicitaires.",
            "fbenrol.comm_pref.info.facebook_control_link": "https://www.facebook.com/ads/settings",
            "fbenrol.comm_pref.info.facebook_control_link_text": "modifier vos pr??f??rences publicitaires sur Facebook",
            "fbenrol.comm_pref.info.facebook_policy_link": "https://www.facebook.com/policy.php",
            "fbenrol.comm_pref.info.facebook_policy_link_text": "Politique d'utilisation des donn??es de Facebook",
            "fbenrol.comm_pref.info.airline_unsubscribe_header": "Vous d??sabonner ou retirer votre consentement",
            "fbenrol.comm_pref.info.airline_unsubscribe_klm_mail": "klmprivacyoffice@klm.com",
            "fbenrol.comm_pref.info.airline_unsubscribe_af_mail": "mail.data.protection@airfrance.fr",
            "mya.error.account_exists": "Cette adresse e-mail est d??j?? utilis??e. Veuillez en saisir une autre ou vous connecter ?? votre compte existant.",
            "mya.login_option": "Me connecter",
            "login.form.checkbox.remember": "Rester connect??",
            "fbenrol.email_error.1217.subheading": "Cette adresse e-mail est d??j?? utilis??e.",
            "fbenrol.email_error.not_recommended_link": "Conserver cette adresse e-mail et cr??er un nouveau compte.",
            "fbenrol.email_error.button.modify_email": "Modifier l'adresse e-mail",
            "fbenrol.email_error.button.login": "Me connecter",
            "fbenrol.social.signup": "Gagnez du temps ! Connectez-vous avec",
            "fbenrol.social.success": "Nous avons bien re??u les informations de votre compte {{socialProvider}}",
            "fbenrol.error.social.accountExists": "Cette adresse e-mail est d??j?? utilis??e. Veuillez utiliser une adresse e-mail diff??rente ou vous connecter ?? un compte existant.",
            "fbenrol.error.social.technicalError": "Nous sommes d??sol??s, une erreur s'est produite... Veuillez r??essayer.",
            "fbenrol.info.social.emailChange": "Si vous modifiez cette adresse e-mail, votre compte {{socialProvider}} ne sera plus connect?? ?? votre compte Flying Blue.",
            "enrol.compare.fb.content.5": "Recevez des offres sp??ciales et des promotions",
            "enrol.compare.fb.content.6": "Gagnez des Miles Flying Blue pour chaque voyage",
            "enrol.compare.signup.header": "Cr??ez un compte",
            "fbenrol.comm_pref.tooltip_expand_text": "Afficher plus",
            "fbenrol.comm_pref.tooltip_shrink_text": "Afficher moins",
            "fbenrol.form.email_GDPR_info": "Vous recevrez les newsletters auxquelles vous ??tes abonn?? et des informations concernant votre vol ?? cette adresse e-mail. Vous l'utiliserez ??galement pour vous connecter.",
            "fbenrol.form.phone_GDPR_info": "Si vous souhaitez recevoir des informations concernant votre vol par t??l??phone, veuillez saisir votre num??ro.",
            "fbenrol.form.gender_GDPR_info": "Nous l'utiliserons pour nous adresser ?? vous correctement.",
            "fbenrol.compliance_fb_link_text": "Politique de confidentialit?? Flying Blue",
            "fbenrol.compliance_fb_link": "https://www.flyingblue.{{country}}/{{language}}/privacy-policy",
            "enrol.compare.create.button": "Cr??er votre compte",
            "common.cookiebar.new.link.href": "http://www.airfrance.com/{{countryUppercase}}/{{language}}/common/transverse/footer/edito_cookies.htm",
            "common.cookiebar.message.long": "Nous utilisons des cookies pour vous offrir une navigation optimale et des contenus personnalis??s. En poursuivant votre navigation sur notre site, vous acceptez l'utilisation de cookies.",
            "common.cookiebar.link.text.long": "En savoir plus sur les cookies.",
            "common.cookiebar.message.short": "Nous utilisons des cookies pour vous offrir une navigation optimale et des contenus personnalis??s. En poursuivant votre navigation sur notre site, vous acceptez l'utilisation de cookies.",
            "common.cookiebar.link.text.short": "En savoir plus sur les cookies",
            "common.cookiebar.ok_text": "Continuer",
            "gender_M.": "Autre",
            "fbenrol.form.greetings": "C'est parti !",
            "fbenrol.form.name_conversation": "Dites-nous votre nom???",
            "fbenrol.form.personal_conversation": "Dites-nous-en plus ?? votre sujet???",
            "fbenrol.form.age_conversation": "Quelle est votre date de naissance ?",
            "fbenrol.form.greetings_email": "Dites-nous comment vous contacter???",
            "fbenrol.form.subscription": "Nous aimerions vous envoyer plus d'informations, de promotions et d'offres sp??ciales concernant Flying Blue et ses partenaires. Si vous souhaitez vous abonner, veuillez l'indiquer. Vous pouvez modifier vos pr??f??rences sur votre profil ?? tout moment.",
            "fbenrol.form.greetings_general": "Dites-nous o?? vous habitez???",
            "fbenrol.form.phone_conversation": "Si vous saisissez votre num??ro de t??l??phone, nous pourrons vous informer des modifications concernant votre vol.",
            "fbenrol.form.country_code": "Code pays ou r??gion",
            "fbenrol.form.country_of_residence": "Pays ou r??gion de r??sidence",
            "fbenrol.form.field_missed_error": "Vous avez oubli?? de remplir un champ.",
            "fbenrol.form.invalid_country_error": "Veuillez saisir un pays ou une r??gion valide.",
            "fbenrol.form.greetings_security": "Aidez-nous ?? s??curiser encore plus votre compte",
            "fbenrol.email_error.greeting": "Nous sommes d??sol??s...",
            "fbenrol.email_error.subheading": "Cette adresse e-mail est d??j?? utilis??e. Veuillez s??lectionner l'une des options suivantes :",
            "fbenrol.email_error.recommended": "Veuillez saisir une autre adresse e-mail. Vous pourrez l'utiliser pour vous connecter ?? votre compte Flying??Blue et recevoir des mises ?? jour en cas de modifications de votre vol.",
            "fbenrol.technicalError.content": "Nous sommes d??sol??s, en raison d'un probl??me technique, nous n'avons pas pu enregistrer votre inscription. Veuillez r??essayer plus tard.",
            "fbenrol.technicalError.greeting": "D??sol??s, nous n'avons pas pu enregistrer votre inscription ?? Flying??Blue",
            "fbenrol.form.invalid_phone_error": "Ce num??ro de t??l??phone ne correspond pas au pays ou ?? la r??gion indiqu??s. Veuillez le v??rifier et r??essayer.",
            "fbenrol.form.invalid_country_code": "Veuillez saisir un code pays ou r??gion valide.",
            "changesecurityquestion.question1": "Quel est le nom de votre animal de compagnie pr??f??r?????",
            "changesecurityquestion.question2": "Quel est le lieu de naissance de votre m??re???",
            "changesecurityquestion.question3": "Quel est votre livre pr??f??r?????",
            "changesecurityquestion.question4": "Quelle est votre destination pr??f??r??e???",
            "changesecurityquestion.question5": "Quel est votre film pr??f??r?????",
            "changesecurityquestion.question6": "Quel est votre groupe de rock/pop pr??f??r?????",
            "changesecurityquestion.question7": "Quel est votre loisir pr??f??r?????",
            "fbenrol.form.greetings_compliance": "Vous avez bient??t termin?? votre inscription au programme Flying Blue??!",
            "fbenrol.compliance_content": "Flying Blue est le programme de fid??lit?? partag?? d'Air France et KLM. Par cons??quent, nous sommes conjointement responsables du traitement de vos donn??es personnelles. Nous les traitons conform??ment ?? {{fb_policy_placeholder}}.",
            "fbenrol.compliance_content_objection": "Vous avez le droit de vous opposer au traitement de vos donn??es personnelles. Pour plus d'informations, veuillez consulter la {{fb_policy_placeholder}}. Une fois inscrit, vous pouvez ajuster vos pr??f??rences dans votre profil.",
            "fbenrol.form.fb_terms_link_text": "Conditions g??n??rales du programme Flying Blue",
            "fbenrol.form.field_terms_missed_error": "Veuillez accepter les conditions g??n??rales.",
            "myau.form.greetings_user": "Bonjour {{passengerfirstname}} ! Devenez membre Flying Blue",
            "myau.form.upgrade_conversation": "Avant de commencer, veuillez v??rifier que ces informations sont correctes.",
            "myau.form.edit_profile_conversation": "Une fois ces informations confirm??es, vous ne pourrez les modifier qu'en contactant notre service assistance internet.",
            "myau.form.greetings_password": "Veuillez cr??er un nouveau mot de passe",
            "myau.form.new_password": "Nouveau mot de passe",
            "myau.form.old_password": "Ancien mot de passe",
            "myau.form.old_password_pattern_error": "Veuillez utiliser uniquement des lettres et des espaces.",
            "myau.form.invalid_old_password": "Mot de passe invalide. Veuillez r??essayer.",
            "myau.form.agree_terms": "J???accepte les {{fb_terms_policy}}",
            "myau.form.fb_terms_link_text": "Conditions g??n??rales du programme Flying Blue",
            "myau.form.accept_newsletter": "Je souhaite recevoir plus d'informations, de promotions et d'offres sp??ciales de la part de Flying Blue et de ses partenaires. ?? noter : une fois abonn??, vous pourrez ajuster vos pr??f??rences dans votre profil.",
            "myau.form.create_account": "Cr??er votre compte",
            "myau.form.greetings_compliance": "Vous faites presque partie de la famille Flying Blue !",
            "myau.technicalError.session_expired_title": "Votre session a expir??",
            "myau.technicalError.session_expired": "Veuillez vous reconnecter.",
            "myau.technicalError.login_action": "Se reconnecter",
            "myau.technicalError.homepage_action": "Acc??der ?? la page d'accueil Air France",
            "myau.technicalError.goback": "Revenir ?? la page pr??c??dente",
            "myau.form.confirm": "Confirmer",
            "fbenrol.form.bloctel_hint": "Afin d'am??liorer la qualit?? de nos services, tous les appels sont enregistr??s. Si vous ne souhaitez pas ??tre enregistr??, veuillez l'indiquer au conseiller au d??but de la conversation.",
            "fbenrol.form.bloctel_hint_dnd": "Si vous ne souhaitez pas ??tre contact?? ?? des fins commerciales par Flying Blue ou ses partenaires, vous pouvez vous inscrire sur le site www.bloctel.gouv.fr.",
            "myau.technicalError.upgrade_denied_title": "Nous n'avons pas pu cr??er votre compte",
            "myau.technicalError.social_login": "Votre connexion via un r??seau social ne nous permet pas de cr??er votre compte. Veuillez vous connecter en utilisant votre adresse e-mail et votre mot de passe.",
            "myau.technicalError.title": "Nous n'avons pas pu cr??er votre compte",
            "myau.technicalError.customer_fetch_error": "Veuillez nous excuser, en raison d'un probl??me technique, nous ne pouvons pas cr??er votre compte pour le moment. Veuillez r??essayer plus tard.",
            "myau.homepage_link": "https://www.airfrance.com/indexCom_fr.html",
            "myau.form.email_update_error": "Cette adresse e-mail est d??j?? utilis??e.",
            "myau.technicalError.profile_update_not_allowed": "Nous sommes d??sol??s, une erreur technique inattendue s'est produite. Veuillez r??essayer ou contacter le service client d'Air France.",
            "fbenrol.form.greetings_comm_pref": "Veuillez d??finir vos pr??f??rences de communication",
            "fbenrol.form.subscription_airline": "M'abonner aux mises ?? jour d'Air??France",
            "fbenrol.comm_pref.info.fb_header": "Lisez ci-dessous pour savoir comment nous collectons et utilisons vos informations personnelles afin de vous tenir inform?? des mises ?? jour et des offres de Flying Blue et de ses partenaires.",
            "fbenrol.comm_pref.info.fb_content": "Flying Blue est le programme de fid??lit?? d'Air France et KLM.",
            "fbenrol.comm_pref.info.fb_updates_content": "Nous vous enverrons des e-mails concernant : 1) votre adh??sion (niveau d'adh??sion, upgrades, rappel de l???expiration prochaine de vos Miles) ; 2) votre compteur de Miles et XP ainsi que la newsletter Flying Blue contenant les actualit??s du programme et les offres de nos partenaires ; 3) les cartes de paiement Flying Blue ; et 4) les offres Flying Blue, y compris celles pour gagner ou d??penser des Miles aupr??s de nos partenaires.",
            "fbenrol.comm_pref.info.personalised_offers_header": "Offres personnalis??es",
            "fbenrol.comm_pref.info.fb_personalised_offers_content": "Nos e-mails incluent des offres et promotions personnalis??es. Nous utilisons des outils automatis??s pour analyser vos donn??es personnelles et vous proposer des informations pertinentes. Vous avez la possibilit?? de vous d??sabonner de ces e-mails ?? tout moment. Pour en savoir plus sur vos droits et sur la mani??re dont nous utilisons vos donn??es, veuillez consulter la {{fb_policy_placeholder}}.",
            "fbenrol.comm_pref.info.fb_partners_content": "Nos mises ?? jour et offres Flying Blue incluent des opportunit??s pour gagner ou d??penser des Miles aupr??s de nos partenaires Flying Blue. Pour en savoir plus sur nos partenaires et sur leurs produits et services, rendez-vous sur {{fb_partners_link_placeholder}}.",
            "fbenrol.comm_pref.info.fb_unsubscribe_content": "Vous pouvez vous d??sabonner ?? tout moment des e-mails contenant les mises ?? jour et les offres personnalis??es de Flying Blue en cliquant sur le lien de d??sabonnement situ?? en bas de l'e-mail. Pour vous d??sabonner de plusieurs types d'e-mails, il vous suffit de modifier vos pr??f??rences de communication dans votre profil Flying Blue.",
            "fbenrol.comm_pref.info.airline_header": "Pour savoir comment nous collectons et utilisons vos informations personnelles afin de vous envoyer les mises ?? jour et offres d'Air France et de ses partenaires, lisez ce qui suit.",
            "fbenrol.comm_pref.info.personalised_offers_content": "Nous utilisons des outils automatis??s pour analyser vos donn??es personnelles et vous proposer des informations pertinentes. Vous pouvez vous d??sabonner de nos e-mails ?? tout moment. Pour plus d'informations sur vos droits et sur la mani??re dont nous utilisons vos donn??es, veuillez consulter la {{af_policy_placeholder}}.",
            "fbenrol.comm_pref.info.airline_partners_content": "Dans nos e-mails et messages sur les r??seaux sociaux, nous pouvons inclure des offres de forfaits et de Pass fournies par notre partenaire Optiontown. Flying Blue est le programme de fid??lit?? d'Air France et KLM. Nous travaillons en partenariat avec d'autres compagnies a??riennes, notamment Aircalin, Kenya Airways, TAROM et Transavia. Si vous habitez dans un pays ou une r??gion dans laquelle ces compagnies a??riennes op??rent, ou si vous adh??rez ?? Flying Blue via le site de l'une de ces compagnies, nous pourrons vous envoyer des e-mails avec des offres et des mises ?? jour concernant leurs services.",
            "fbenrol.comm_pref.info.social_media_content": "Si vous disposez d'un compte Facebook, vous pouvez recevoir des publicit??s et des offres personnalis??es de la part d'Air France et de KLM dans votre fil d'actualit?? ainsi que sur d'autres plateformes comme Messenger et Instagram. Nous partageons une version crypt??e de votre adresse e-mail afin que Facebook d??termine si vous disposez ou non d'un compte. Aucune autre donn??e n'est partag??e avec Facebook. R??ciproquement, nous ne recevons aucune information de la part de Facebook. En savoir plus sur {{fb_usage_link_placeholder}} ou sur {{fb_control_link_placeholder}}.",
            "fbenrol.comm_pref.info.facebook_control_tip": "Veuillez lire la {{facebook_policy_placeholder}} pour plus d'informations. Vous pouvez recevoir des publicit??s et des offres personnalis??es de la part d'Air France via d'autres plateformes, notamment Twitter, LinkedIn, Pinterest, Snapchat, WeChat, KakaoTalk et LINE. Veuillez consulter la politique de confidentialit?? de ces r??seaux sociaux pour en savoir plus.",
            "fbenrol.comm_pref.info.airline_unsubscribe_content": "Pour vous d??sabonner, cliquez sur le lien de d??sabonnement situ?? en bas de chaque e-mail. Vous serez redirig?? vers notre site sur lequel vous pourrez modifier vos pr??f??rences de communication. Si vous ne souhaitez plus recevoir d'offres personnalis??es sur les r??seaux sociaux, veuillez envoyer un e-mail ?? {{af_mail_placeholder}} pour retirer votre consentement. Veuillez utiliser l'adresse e-mail li??e au compte de r??seau social pour lequel vous souhaitez retirer votre consentement. Vous pouvez ??galement avoir donn?? votre accord pour recevoir des publicit??s et offres personnalis??es sur les r??seaux sociaux ou d'autres plateformes lorsque vous avez accept?? notre politique en mati??re de cookies. Veuillez lire la politique de gestion des cookies sur notre site pour savoir comment retirer votre consentement.",
            "mya.form.title": "Cr??er un compte",
            "mya.form.greetings_compliance": "Vous y ??tes presque??!",
            "mya.compliance_content": "Le traitement de vos donn??es s???effectue conform??ment ?? la {{af_policy_placeholder}}. Vous avez le droit de vous opposer au traitement de vos donn??es personnelles. Pour plus d'informations, cliquez sur Comment exercer vos droits dans la {{af_policy_placeholder}}. Vous pouvez modifier vos pr??f??rences dans votre profil ?? tout moment.",
            "mya.form.agree_terms": "J'accepte les {{af_terms_policy}}",
            "mya_kl_terms_policy_link_text": "Conditions g??n??rales pour les comptes KLM",
            "mya_kl_terms_policy_link": "https://www.klm.com/travel/{{country}}_{{language}}/customer_support/account/account/terms_conditions.htm",
            "mya_af_terms_policy_link_text": "Conditions g??n??rales pour les comptes Air France",
            "mya_af_terms_policy_link": "https://www.airfrance.com/{{countryUppercase}}/{{language}}/common/transverse/footer/conditions-mon-espace.htm",
            "mya.welcome_conversation": "Bienvenue {{passengerfirstname}}",
            "mya.start_journey": "Consulter mon profil",
            "mya.form.subscription": "Pour recevoir des mises ?? jour et des offres personnalis??es de la part d'Air??France et de ses partenaires, il vous suffit de vous inscrire en cliquant sur le bouton ci-dessous. Ces informations vous seront envoy??es par e-mail ou sur les r??seaux sociaux. Vous pouvez vous d??sabonner ?? tout moment.",
            "mya.technicalError.greeting": "Nous sommes d??sol??s, nous n'avons pas pu cr??er votre compte Air France.",
            "mya.comm_pref.info.airline_partners_content": "Nos e-mails et publications sur les r??seaux sociaux peuvent inclure des offres de Pass propos??es par notre partenaire Optiontown.",
            "myau.comm_pref.info.airline_header": "D??couvrez comment nous collectons et utilisons vos donn??es personnelles afin de vous envoyer des informations et offres pertinentes de la part des partenaires Flying??Blue. ?? noter??:??si vous disposez d??j?? d???un abonnement aux actualit??s d'Air??France, vous continuerez ?? les recevoir.",
            "fbenrol.email_error.1217.content": "Veuillez d'abord essayer de vous connecter ?? votre compte existant. Si vous souhaitez cr??er un nouveau compte, veuillez utiliser une adresse e-mail diff??rente.",
            "fbenrol.email_error.1204.subheading": "Il semble que vous ayez d??j?? un compte",
            "fbenrol.email_error.1204.content": "Veuillez d'abord essayer de vous connecter ?? votre compte existant. Si vous souhaitez cr??er un nouveau compte, veuillez utiliser des informations diff??rentes.",
            "fbenrol.email_error.button.modify_data": "Modifier mes informations",
            "fbenrol.email_error.1203.subheading": "Il semble que vous ayez d??j?? un compte Flying Blue",
            "fbenrol.email_error.1203.content": "Veuillez d'abord essayer de vous connecter ?? votre compte existant. Si vous souhaitez cr??er un nouveau compte, veuillez utiliser des informations diff??rentes.",
            "myau.comm_pref.info.airline_partners_content": "Dans le cadre de Flying Blue, Air France et KLM s'associent ?? d'autres compagnies a??riennes, dont Aircalin, Kenya Airways, TAROM et Transavia. Si vous habitez dans un pays ou une r??gion dans lequel l???une de ces compagnies est implant??e, vous recevrez des e-mails vous informant de leurs offres et de l???actualit?? de leurs services.",
            "mya.info.social.emailChange": "Si vous modifiez cette adresse e-mail, votre compte {{socialProvider}} ne sera plus connect?? ?? votre compte Air France.",
            "enrol.compare.title": "Vos avantages",
            "enrol.compare.fb.content.1": "Cr??er un compte gratuitement",
            "enrol.compare.fb.content.2": "Enregistrez vos informations personnelles pour gagner du temps lors de vos r??servations",
            "enrol.compare.fb.content.3": "Consultez toutes vos r??servations en un coup d'??il",
            "enrol.compare.fb.content.4": "Connectez-vous avec vos r??seaux sociaux",
            "enrol.compare.fb.content.7": "Utilisez vos Miles pour votre prochain voyage",
            "enrol.compare.mya.benefits.header": "Profitez des avantages d'un compte Air France",
            "enrol.compare.fb_intro": "Profitez d'encore plus de b??n??fices gr??ce ?? Flying Blue",
            "enrol.compare.fb_intro_mobile": "Profitez d'encore plus de b??n??fices gr??ce ?? Flying Blue",
            "fbenrol.error.social.emailNotShared": "Nous ne pouvons pas connecter votre compte si vous choisissez de ne pas partager l???adresse e-mail de votre {{socialProvider}}. Veuillez r??essayer.",
            "enrol.newsletter.unsubscribe_disclaimer": "Si vous ??tes d??j?? abonn??(e) aux communications d???Air France, vous continuerez ?? les recevoir m??me si vous choisissez de ne pas vous abonner ici. Pour vous d??sabonner, veuillez cliquer sur le lien de d??sabonnement qui s???affiche en bas de nos e-mails ou g??rer vos pr??f??rences depuis votre {{loginLink}}.",
            "enrol.login.link_text": "compte",
            "fbenrol.comm_pref.fb_intro": "Si vous souhaitez recevoir des e-mails de la part Flying Blue vous informant des mises ?? jour du programme et des offres personnalis??es de Flying Blue et de ses partenaires, abonnez-vous en cliquant ci-dessus. Vous pouvez vous d??sabonner ?? tout moment.",
            "fbenrol.comm_pref.airline_intro": "Pour recevoir les mises ?? jour et les offres personnalis??es d'Air France et de ses partenaires, il suffit de vous abonner ?? l'aide du bouton ci-dessus. Air France vous les enverra par e-mail et via les r??seaux sociaux. Vous pouvez vous d??sabonner ?? tout moment.",
            "myau.comm_pref.airline_intro": "Vous souhaitez recevoir, par e-mail et sur les r??seaux sociaux, les actualit??s et offres personnalis??es des compagnies a??riennes partenaires de Flying Blue ? Il suffit de vous inscrire ci-dessus ! Vous pouvez vous d??sabonner ou retirer votre consentement ?? tout moment.",
            "fbenrol.comm_pref.info.airline_updates_content": "Dans la newsletter d'Air France, vous trouverez des promotions, de l'inspiration pour votre prochain voyage et nos derni??res actualit??s. Vous recevrez ??galement des e-mails pour des occasions sp??ciales telles que votre anniversaire, pour suivre vos r??servations et pour b??n??ficier d'offres personnalis??es lors de votre prochain voyage. Nous pouvons aussi partager avec vous des publicit??s et des offres personnalis??es sur les r??seaux sociaux.",
            "fbenrol.form.language_GDPR_info": "Dans quelle langue souhaitez-vous ??tre contact?? ?",
            "security.profile.updatepassword.button.retry": "R??essayer",
            "security.profile.updatepassword.button.back": "Retour",
            "security.profile.updatepassword.form.password_show": "Afficher",
            "security.profile.updatepassword.form.password_hide": "Masquer",
            "security.profile.updatepassword.form.password_policy_characters": "Entre 8 et 12 caract??res",
            "security.profile.updatepassword.form.password_policy_capital": "Au moins 1 majuscule (A-Z)",
            "security.profile.updatepassword.form.password_policy_number": "Au moins 1 chiffre (0-9)",
            "security.profile.updatepassword.form.password_policy_lowercase": "Au moins 1 minuscule (a-z)",
            "security.profile.updatepassword.form.password_policy_symbol": "Symboles autoris??s : $ @ & + - / # _ ? !",
            "security.profile.updatepassword.form.error.9001": "Votre session a expir??. Veuillez vous reconnecter.",
            "security.profile.updatepassword.error.login_action": "Se reconnecter",
            "security.profile.updatepassword.form.button.confirm": "Confirmer",
            "security.profile.updatepassword.form.error.530": "L'acc??s ?? votre compte a ??t?? bloqu??.",
            "security.profile.updatepassword.form.newpassword": "Nouveau mot de passe",
            "security.profile.updatepassword.success": "Votre mot de passe a ??t?? mis ?? jour.",
            "security.profile.updatepassword.form.currentpassword": "Mot de passe actuel",
            "security.profile.updatepassword.success.greeting": "Votre mot de passe a bien ??t?? modifi??",
            "security.profile.updatepassword.form.error.technical.greeting": "La mise ?? jour de votre mot de passe a ??chou??",
            "security.profile.updatepassword.form.error.equal_to_current_password": "Votre nouveau mot de passe doit ??tre diff??rent du pr??c??dent. Veuillez r??essayer.",
            "security.profile.updatepassword.form.error.532": "Le mot de passe que vous avez saisi est invalide. Veuillez r??essayer. ?? noter : pour des raisons de s??curit??, votre compte sera bloqu?? apr??s 5 tentatives infructueuses.",
            "security.profile.updatepassword.form.error.531": "Le mot de passe que vous avez saisi est invalide. Veuillez r??essayer. ?? noter : pour des raisons de s??curit??, votre compte sera bloqu?? apr??s 5 tentatives infructueuses.",
            "security.profile.updatepassword.title": "Modifier votre mot de passe",
            "security.profile.updatepassword.form.greetings_password": "Veuillez choisir un nouveau mot de passe",
            "security.profile.updatepassword.form.error.required_field": "Vous avez oubli?? de remplir un champ.",
            "security.profile.updatepassword.error.session_expired_title": "Votre session a expir??",
            "security.profile.updatepassword.error.session_expired": "Veuillez vous reconnecter.",
            "security.profile.updatepassword.error.homepage_action": "Acc??der ?? la page d'accueil Air France",
            "security.profile.updatepassword.error.homepage_link": "https://www.airfrance.com/indexCom_fr.html",
            "security.profile.updatepassword.form.error.unmapped": "Nous sommes d??sol??s, une erreur technique inattendue s'est produite. Veuillez r??essayer ou contacter le service client d'Air France.",
            "security.profile.updatepassword.form.error.password_pattern": "Votre nouveau mot de passe doit r??pondre aux crit??res ci-dessous. Veuillez r??essayer.",
            "security.profile.updatepassword.form.error.current_password_pattern": "Le mot de passe que vous avez saisi est invalide. Veuillez r??essayer.",
            "login.header.title": "Connectez-vous",
            "login.form.password": "Mot de passe",
            "login.form.show": "Afficher",
            "login.form.hide": "Masquer",
            "login.recaptcha.error.loading": "Veuillez patienter, chargement du reCAPTCHA en cours...",
            "login.passengerLogin.title": "Connectez-vous",
            "login.passengerLogin.form.ticketNumber": "Num??ro de billet",
            "login.passengerLogin.form.flightnumber": "Num??ro de vol",
            "login.passengerLogin.form.departureDate": "Date de d??part",
            "login.passengerLogin.form.airlineCode": "Code de compagnie a??rienne",
            "login.passengerlogin.form.valid_airlineCode_error": "Veuillez saisir un code de compagnie a??rienne ?? 2 lettres valide.",
            "recover.continue": "Continuer",
            "recover.options.form.header.title": "R??cup??rez votre mot de passe",
            "recover.options.form.intro": "Comment souhaitez-vous recevoir votre mot de passe provisoire???",
            "recover.options.form.option.label": "",
            "recover.options.form.option.email": "Envoyer un e-mail ?? {{emailId}}",
            "recover.options.form.option.sms": "Envoyer un SMS au {{mobileNumber}}",
            "recover.dob.form.field.label": "Date de naissance",
            "recover.dob.form.errors.required": "Veuillez saisir votre date de naissance.",
            "recover.dob.form.errors.maxage": "Est-ce bien votre date de naissance???",
            "recover.dob.form.errors.minage": "L'??ge minimum est 2??ans.",
            "temporarypassword.header.title": "Changez de mot de passe",
            "temporarypassword.changepassword.form.header.title": "Modifiez votre mot de passe",
            "temporarypassword.changepassword.form.fields.newpassword.label": "Nouveau mot de passe",
            "temporarypassword.changepassword.form.fields.newpassword.error.required": "Veuillez saisir un nouveau mot de passe",
            "temporarypassword.changepassword.form.policy.number": "Au moins 1 chiffre (0-9)",
            "temporarypassword.changepassword.form.policy.uppercase": "Au moins 1 majuscule (A-Z)",
            "temporarypassword.changepassword.form.policy.lowercase": "Au moins 1 minuscule (a-z)",
            "temporarypassword.changepassword.form.policy.characters": "Entre 8 et 12 caract??res",
            "temporarypassword.changepassword.form.policy.symbols.label": "Symboles autoris??s :",
            "temporarypassword.changepassword.form.policy.symbols.allowed": "$ @ & + - / # _ ? !",
            "temporarypassword.changepassword.form.policy.invalid": "Veuillez saisir un mot de passe valide.",
            "login.social.form.loading": "Connectez-vous avec",
            "login.social.form.title": "Connectez-vous plus rapidement avec",
            "login.social.connect.form.header.title": "Connectez votre compte de r??seau social",
            "login.social.connect.form.title.salutation": "",
            "login.social.connect.success.form.title": "Compte de r??seau social connect?? avec succ??s !",
            "login.social.connect.success.form.button.connect": "Connexion",
            "login.social.errors.gigya.invalid.data": "Une erreur s'est produite. La connexion ?? votre compte a ??chou??. Veuillez r??essayer.",
            "login.social.errors.gigya.invalid.signature": "Une erreur s'est produite. La connexion ?? votre compte a ??chou??. Veuillez r??essayer.",
            "login.form.header.title": "Connexion",
            "login.social.form.separator": "Ou connectez-vous avec",
            "login.consent.google.header": "Lien vers Google",
            "login.consent.google.greeting": "Vous acceptez que Google acc??de aux donn??es de votre profil.",
            "login.consent.removeAccess": "Vous pouvez supprimer cet acc??s ?? tout moment via Google.",
            "login.consent.google.info": "Pour obtenir plus d'informations sur l'utilisation de vos donn??es personnelles par Google, veuillez consulter la rubrique {{ googlePrivacyPolicy }}.",
            "login.consent.google.terms_text": "R??gles de confidentialit?? de Google",
            "login.consent.google.terms_link": "https://policies.google.com/privacy",
            "login.consent.agree": "Accepter",
            "login.consent.cancel": "Annuler",
            "login.form.captcha": "Veuillez saisir les caract??res affich??s ci-dessus.",
            "login.captcha.error": "Les caract??res saisis semblent incorrects. Veuillez r??essayer.",
            "recover.success.form.field.label": "Saisissez votre mot de passe provisoire",
            "login.persistent.tooltip": "Votre connexion sera valable pendant 180 jours.",
            "login.persistent.info": "Utilisez cette option uniquement sur vos appareils personnels.",
            "login.flyingblue.form.email": "Adresse e-mail",
            "login.form.link.forgot.flyingblue": "Num??ro Flying Blue oubli?? ?",
            "recover.header.title": "R??cup??rer votre mot de passe",
            "recover.identifier.form.header.title": "Mot de passe oubli?????",
            "recover.flyingblue.login.button": "Me connecter",
            "recover.flyingblue.dob.form.header.title": "Une derni??re chose...",
            "recover.flyingblue.header.title": "R??cup??rer votre num??ro Flying Blue",
            "recover.flyingblue.identifier.form.header.title": "Vous avez oubli?? votre num??ro Flying Blue ?",
            "recover.flyingblue.identifier.form.intro": "Veuillez saisir votre adresse e-mail pour le r??cup??rer.",
            "fbenrol.form.age_GDPR_info": "Toute personne ??g??e de 2 ans ou plus peut s'abonner.",
            "login.otp.header.title": "Connectez-vous avec votre code PIN",
            "login.otp.form.emai_hint": "Ceci nous permettra de vous identifier et de vous envoyer votre code PIN ?? usage unique.",
            "login.otp.form.help": "Besoin d'aide ?",
            "login.otp.form.password.login.header": "Vous pr??f??rez vous connecter avec votre mot de passe ?",
            "login.otp.form.enrolment.header": "Vous n'avez pas de compte ? Inscrivez-vous aujourd'hui.",
            "login.otp.form.option": "Recevez votre code PIN ?? usage unique",
            "login.otp.form.option.text": "Vous recevrez un message avec votre code PIN ?? usage unique dans quelques instants. Comment souhaitez-vous recevoir votre code PIN ?",
            "login.otp.form.option.mobile_hint": "Nous avons envoy?? le code PIN ?? votre t??l??phone portable.",
            "login.otp.form.option.response_hint": "Veuillez saisir votre code PIN ci-dessous.",
            "login.otp.form.option.help_hint": "Vous n'avez pas re??u votre code PIN ?",
            "login.otp.form.wrong.pin_hint": "Oops ! Ce code PIN n'est pas valide. Veuillez r??essayer.",
            "login.otp.form.pincode.invalid.attempts": "Vous avez saisi un mauvais code PIN 3 fois.",
            "login.otp.form.password_hint": "Veuillez vous connecter avec votre mot de passe",
            "login.otp.form.pincode_hint": "Veuillez patienter...",
            "login.password.header": "Connectez-vous avec votre mot de passe",
            "login.otp.form.pincode.invalid_hint": "Nous sommes d??sol??s, nous ne pouvons pas vous envoyer un code PIN ?? usage unique.",
            "otp.continue": "Continuer",
            "login.otp.send.sms": "Oui, envoyer un SMS",
            "login.form.email": "Num??ro Flying??Blue ou adresse e-mail",
            "login.form.required_error": "Veuillez v??rifier les champs en surbrillance et r??essayer.",
            "login.form.valid_fbNumber_error": "Veuillez saisir un num??ro Flying Blue valide contenant entre 10 et 12 chiffres.",
            "login.form.valid_email_error": "Veuillez saisir une adresse e-mail valide.",
            "login.footer.noAccount": "Vous n'avez pas encore de compte???",
            "login.footer.createAccount": "Cr??ez votre compte",
            "login.passengerlogin.form.valid_ticketNumber_error": "Veuillez saisir un num??ro de billet valide.",
            "login.passengerlogin.form.valid_flightNumber_error": "Veuillez saisir un num??ro de vol valide.",
            "login.passengerlogin.form.valid_departureDate_error": "Veuillez v??rifier la date saisie et r??essayer.",
            "login.form.error.unmapped": "Nous sommes d??sol??s, une erreur technique inattendue s'est produite. Veuillez r??essayer ou contacter le service client d'Air France.",
            "login.form.link.forgotpassword": "Mot de passe oubli?????",
            "recover.identifier.form.fields.username.label": "Num??ro Flying??Blue ou adresse e-mail",
            "recover.identifier.form.username.errors.required": "Veuillez saisir votre identifiant Flying Blue ou adresse e-mail.",
            "recover.identifier.form.username.fbnumber.invalid": "Veuillez saisir un num??ro Flying Blue valide contenant entre 10 et 12 chiffres.",
            "recover.identifier.form.username.email.invalid": "Veuillez saisir une adresse e-mail valide.",
            "recover.dob.form.header.title": "??tape de s??curit?? suppl??mentaire...",
            "recover.dob.form.intro": "Pour des raisons de s??curit??, veuillez confirmer votre identit?? en indiquant votre date de naissance ci-dessous.",
            "recover.success.form.header.title": "Message envoy????!",
            "temporarypassword.changepassword.form.intro": "Veuillez modifier votre mot de passe temporaire et en choisir un nouveau.",
            "temporarypassword.success.form.intro": "Votre mot de passe a bien ??t?? modifi??",
            "login.social.connect.form.message": "Nous avons trouv?? un compte Flying??Blue ou Air??France correspondant ?? l'adresse e-mail utilis??e pour votre compte {{socialProvider}}.",
            "login.social.connect.form.messsage.description": "Veuillez vous connecter ci-dessous avec votre compte Flying Blue ou Air France pour que nous puissions le connecter ?? votre compte {{socialProvider}}.",
            "login.social.connect.success.form.message": "Vous pouvez d??sormais utiliser votre compte {{socialProvider}} pour vous connecter.",
            "login.social.type.notidentified": "Nous sommes d??sol??s, vous ne pouvez pas vous connecter en utilisant ce compte de r??seau social.",
            "login.form.error.technical": "Nous sommes d??sol??s, une erreur technique inattendue s'est produite. Veuillez r??essayer ou contacter le service client d'Air France.",
            "login.form.link.aboneelink": "Connectez-vous avec le num??ro de votre carte d'Abonnement",
            "recover.success.form.email.intro": "Nous avons envoy?? votre mot de passe provisoire par e-mail ?? {{emailId}}. Si vous ne l???avez pas re??u, veuillez v??rifier vos courriers ind??sirables.",
            "recover.success.form.sms.intro": "Nous avons envoy?? votre mot de passe provisoire par SMS au {{mobileNumber}}.",
            "recover.identifier.form.intro": "Vous avez oubli?? votre mot de passe??? Saisissez votre num??ro Flying??Blue ou votre adresse e-mail afin de recevoir un mot de passe provisoire.",
            "recover.flyingblue.dob.form.intro": "Pour des raisons de s??curit??, pouvez-vous saisir votre date de naissance ?",
            "recover.flyingblue.success": "Nous avons envoy?? votre num??ro Flying Blue ?? {{emailId}}. Vous ne le trouvez pas ? Il est peut-??tre dans vos spams.",
            "recover.flyingblue.success.form.header.title": "Votre num??ro arrive bient??t !",
            "login.otp.form.email": "Veuillez saisir votre adresse email ou votre num??ro Flying Blue",
            "login.otp.form.option.email_hint": "Nous vous avons envoy?? le code PIN par email",
            "login.otp.form.pincode.email.invalid": "L'adresse email ci-dessous n'est pas valide. Veuillez essayer de vous connecter avec votre mot de passe.",
            "login.otp.form.pincode.email.notfound": "L'addresse email ci-dessous n'est pas valide. Nous ne pouvons pas vous envoyer votre code PIN. Souhaitez-vous recevoir votre code PIN par SMS ?",
            "login.otp.form.pincode.response_status": "Vous recevrez un code PIN ?? usage unique par email dans quelques instants.",
            "login.otp.form.intro": "Nous allons v??rifier votre identit?? et vous envoyer votre code PIN ?? usage unique.",
            "gat.AD.country": "Andorre",
            "gat.AE.country": "??mirats arabes unis",
            "gat.AF.country": "Afghanistan",
            "gat.AG.country": "Antigua-et-Barbuda",
            "gat.AI.country": "Anguilla",
            "gat.AL.country": "Albanie",
            "gat.AM.country": "Arm??nie",
            "gat.AO.country": "Angola",
            "gat.AQ.country": "Antarctica",
            "gat.AR.country": "Argentine",
            "gat.AS.country": "Samoa am??ricaines",
            "gat.AT.country": "Autriche",
            "gat.AU.country": "Australie",
            "gat.AW.country": "Aruba",
            "gat.AX.country": "??land (??les)",
            "gat.AZ.country": "Azerba??djan",
            "gat.BA.country": "Bosnie-Herz??govine",
            "gat.BB.country": "Barbade",
            "gat.BD.country": "Bangladesh",
            "gat.BE.country": "Belgique",
            "gat.BF.country": "Burkina Faso",
            "gat.BG.country": "Bulgarie",
            "gat.BH.country": "Bahre??n",
            "gat.BI.country": "Burundi",
            "gat.BJ.country": "B??nin",
            "gat.BL.country": "Saint-Barth??lemy",
            "gat.BM.country": "Bermudes",
            "gat.BN.country": "Brunei Darussalam",
            "gat.BO.country": "Bolivie",
            "gat.BQ.country": "Bonaire, St Eustatius, Saba",
            "gat.BR.country": "Br??sil",
            "gat.BS.country": "Bahamas",
            "gat.BT.country": "Bhoutan",
            "gat.BV.country": "??le Bouvet",
            "gat.BW.country": "Botswana",
            "gat.BY.country": "Bi??lorussie",
            "gat.BZ.country": "Belize",
            "gat.CA.country": "Canada",
            "gat.CC.country": "??les Cocos",
            "gat.CD.country": "R??publique d??mocratique du Congo",
            "gat.CF.country": "R??publique Centrafricaine",
            "gat.CG.country": "Congo",
            "gat.CH.country": "Suisse",
            "gat.CI.country": "C??te d???Ivoire",
            "gat.CK.country": "??les Cook",
            "gat.CL.country": "Chili",
            "gat.CM.country": "Cameroun",
            "gat.CN.country": "Chine",
            "gat.CO.country": "Colombie",
            "gat.CR.country": "Costa Rica",
            "gat.CU.country": "Cuba",
            "gat.CV.country": "Cap-Vert",
            "gat.CW.country": "Curacao",
            "gat.CX.country": "??le Christmas",
            "gat.CY.country": "Chypre",
            "gat.CZ.country": "R??publique tch??que",
            "gat.DE.country": "Allemagne",
            "gat.DJ.country": "Djibouti",
            "gat.DK.country": "Danemark",
            "gat.DM.country": "Dominique",
            "gat.DO.country": "R??publique Dominicaine",
            "gat.DZ.country": "Alg??rie",
            "gat.EC.country": "??quateur",
            "gat.EE.country": "Estonie",
            "gat.EG.country": "??gypte",
            "gat.EH.country": "Western Sahara",
            "gat.ER.country": "??rythr??e",
            "gat.ES.country": "Espagne",
            "gat.ET.country": "??thiopie",
            "gat.FI.country": "Finlande",
            "gat.FJ.country": "Fidji",
            "gat.FK.country": "??les Malouines",
            "gat.FM.country": "Micron??sie",
            "gat.FO.country": "??les F??ro??",
            "gat.FR.country": "France",
            "gat.GA.country": "Gabon",
            "gat.GB.country": "Royaume-Uni",
            "gat.GD.country": "Grenade",
            "gat.GE.country": "G??orgie",
            "gat.GF.country": "Guyane fran??aise",
            "gat.GG.country": "Guernsey",
            "gat.GH.country": "Ghana",
            "gat.GI.country": "Gibraltar",
            "gat.GL.country": "Groenland",
            "gat.GM.country": "Gambie",
            "gat.GN.country": "Guin??e",
            "gat.GP.country": "Guadeloupe",
            "gat.GQ.country": "Guin??e ??quatoriale",
            "gat.GR.country": "Gr??ce",
            "gat.GS.country": "G??orgie du Sud-et-les ??les Sandwich du Sud",
            "gat.GT.country": "Guatemala",
            "gat.GU.country": "Guam",
            "gat.GW.country": "Guin??e-Bissao",
            "gat.GY.country": "Guyana",
            "gat.HK.country": "Hong Kong, Chine",
            "gat.HM.country": "??les Heard-et-MacDonald",
            "gat.HN.country": "Honduras",
            "gat.HR.country": "Croatie",
            "gat.HT.country": "Ha??ti",
            "gat.HU.country": "Hongrie",
            "gat.ID.country": "Indon??sie",
            "gat.IE.country": "Irlande",
            "gat.IL.country": "Isra??l",
            "gat.IM.country": "Isle of Man",
            "gat.IN.country": "Inde",
            "gat.IQ.country": "Irak",
            "gat.IR.country": "Iran",
            "gat.IS.country": "Islande",
            "gat.IT.country": "Italie",
            "gat.IO.country": "British indian ocean territory",
            "gat.JE.country": "Jersey",
            "gat.JM.country": "Jama??que",
            "gat.JO.country": "Jordanie",
            "gat.JP.country": "Japon",
            "gat.KE.country": "Kenya",
            "gat.KG.country": "Kirghizstan",
            "gat.KH.country": "Cambodge",
            "gat.KI.country": "Kiribati",
            "gat.KM.country": "Comores",
            "gat.KN.country": "Saint-Christophe-et-Ni??v??s",
            "gat.KP.country": "R??publique populaire d??mocratique de Cor??e",
            "gat.KR.country": "R??publique de Cor??e",
            "gat.KW.country": "Kowe??t",
            "gat.KY.country": "??les Ca??mans",
            "gat.KZ.country": "Kazakhstan",
            "gat.LA.country": "Laos",
            "gat.LB.country": "Liban",
            "gat.LC.country": "Sainte-Lucie",
            "gat.LI.country": "Liechtenstein",
            "gat.LK.country": "Sri Lanka",
            "gat.LR.country": "Liberia",
            "gat.LS.country": "Lesotho",
            "gat.LT.country": "Lituanie",
            "gat.LU.country": "Luxembourg",
            "gat.LV.country": "Lettonie",
            "gat.LY.country": "Libye",
            "gat.MA.country": "Maroc",
            "gat.MC.country": "Monaco",
            "gat.MD.country": "R??publique de Moldavie",
            "gat.ME.country": "Montenegro",
            "gat.MF.country": "Collectivity of Saint Martin",
            "gat.MG.country": "Madagascar",
            "gat.MH.country": "??les Marshall",
            "gat.MK.country": "R??publique de Mac??doine du Nord",
            "gat.ML.country": "Mali",
            "gat.MM.country": "Myanmar",
            "gat.MN.country": "Mongolie",
            "gat.MO.country": "Macao (RAS) Chine",
            "gat.MP.country": "??les Mariannes du Nord",
            "gat.MQ.country": "Martinique",
            "gat.MR.country": "Mauritanie",
            "gat.MS.country": "Montserrat",
            "gat.MT.country": "Malte",
            "gat.MU.country": "Maurice",
            "gat.MV.country": "Maldives",
            "gat.MW.country": "Malawi",
            "gat.MX.country": "Mexique",
            "gat.MY.country": "Malaisie",
            "gat.MZ.country": "Mozambique",
            "gat.NA.country": "Namibie",
            "gat.NC.country": "Nouvelle-Cal??donie",
            "gat.NE.country": "Niger",
            "gat.NF.country": "??le Norfolk",
            "gat.NG.country": "Nigeria",
            "gat.NI.country": "Nicaragua",
            "gat.NL.country": "Pays-Bas",
            "gat.NO.country": "Norv??ge",
            "gat.NP.country": "N??pal",
            "gat.NR.country": "Nauru",
            "gat.NU.country": "Niue",
            "gat.NZ.country": "Nouvelle-Z??lande",
            "gat.OM.country": "Oman",
            "gat.PA.country": "Panama",
            "gat.PE.country": "P??rou",
            "gat.PF.country": "Polyn??sie fran??aise",
            "gat.PG.country": "Papouasie-Nouvelle-Guin??e",
            "gat.PH.country": "Philippines",
            "gat.PK.country": "Pakistan",
            "gat.PL.country": "Pologne",
            "gat.PM.country": "Saint-Pierre-et-Miquelon",
            "gat.PN.country": "??les Pitcairn",
            "gat.PR.country": "Porto Rico",
            "gat.PS.country": "Palestine",
            "gat.PT.country": "Portugal",
            "gat.PW.country": "Palaos",
            "gat.PY.country": "Paraguay",
            "gat.QA.country": "Qatar",
            "gat.RE.country": "La R??union",
            "gat.RO.country": "Roumanie",
            "gat.RS.country": "Serbie",
            "gat.RU.country": "Russie",
            "gat.RW.country": "Rwanda",
            "gat.SA.country": "Arabie saoudite",
            "gat.SB.country": "??les Salomon",
            "gat.SC.country": "Seychelles",
            "gat.SD.country": "Soudan",
            "gat.SE.country": "Su??de",
            "gat.SG.country": "Singapour",
            "gat.SH.country": "Sainte-H??l??ne",
            "gat.SI.country": "Slov??nie",
            "gat.SJ.country": "Svalbard and Jan Mayen",
            "gat.SK.country": "Slovaquie",
            "gat.SL.country": "Sierra Leone",
            "gat.SM.country": "Saint-Marin",
            "gat.SN.country": "S??n??gal",
            "gat.SO.country": "Somalie",
            "gat.SR.country": "Suriname",
            "gat.SS.country": "South Sudan",
            "gat.ST.country": "S??o Tom??-et-Principe",
            "gat.SV.country": "Salvador",
            "gat.SX.country": "Saint Martin",
            "gat.SY.country": "Syrie",
            "gat.SZ.country": "Swaziland",
            "gat.TC.country": "??les Turques-et-Ca??ques",
            "gat.TD.country": "Tchad",
            "gat.TF.country": "Terres australes fran??aises",
            "gat.TG.country": "Togo",
            "gat.TH.country": "Tha??lande",
            "gat.TJ.country": "Tadjikistan",
            "gat.TK.country": "Tokelau",
            "gat.TL.country": "Timor oriental",
            "gat.TM.country": "Turkm??nistan",
            "gat.TN.country": "Tunisie",
            "gat.TO.country": "Tonga",
            "gat.TR.country": "Turquie",
            "gat.TT.country": "Trinit??-et-Tobago",
            "gat.TV.country": "Tuvalu",
            "gat.TW.country": "Ta??wan, Chine",
            "gat.TZ.country": "Tanzanie",
            "gat.UA.country": "Ukraine",
            "gat.UG.country": "Ouganda",
            "gat.UM.country": "??les mineures ??loign??es des ??tats-Unis",
            "gat.US.country": "??tats-Unis",
            "gat.UY.country": "Uruguay",
            "gat.UZ.country": "Ouzb??kistan",
            "gat.VA.country": "??tat de la Cit?? du Vatican",
            "gat.VC.country": "Saint-Vincent-et-les-Grenadines",
            "gat.VE.country": "Venezuela",
            "gat.VG.country": "??les Vierges britanniques",
            "gat.VI.country": "??les Vierges des ??tats-Unis",
            "gat.VN.country": "Vietnam",
            "gat.VU.country": "Vanuatu",
            "gat.WF.country": "Wallis-et-Futuna",
            "gat.WS.country": "Samoa",
            "gat.XK.country": "Kosovo",
            "gat.YE.country": "R??publique du Yemen",
            "gat.YT.country": "Mayotte",
            "gat.ZA.country": "Afrique du Sud",
            "gat.ZM.country": "Zambie",
            "gat.ZW.country": "Zimbabwe",
            "gat.ZZ.country": "ZZ ??? Fictious Point",
            "gat.UN.country": "UN ??? United Nations",
            "gat.FC.country": "la Corse",
            "gat.language_EN": "Anglais",
            "gat.language_AR": "Arabe",
            "gat.language_ZH": "Chinois simplifi??",
            "gat.language_DA": "Danois",
            "gat.language_ES": "Espagnol",
            "gat.language_FR": "Fran??ais",
            "gat.language_DE": "Allemand",
            "gat.language_EL": "Grec",
            "gat.language_IT": "Italien",
            "gat.language_KO": "Cor??en",
            "gat.language_NO": "Norv??gien",
            "gat.language_FI": "Finlandais",
            "gat.language_CT": "Chinois traditionnel",
            "gat.language_PT": "Portugais",
            "gat.language_RU": "Russe",
            "gat.language_SV": "Su??dois",
            "gat.language_TR": "Turc",
            "gat.language_JA": "Japonais",
            "gat.language_NL": "N??erlandais",
            "gat.language_RO": "Roumain",
            "gat.generic_month_00_short": "No preference",
            "gat.generic_month_01_short": "jan.",
            "gat.generic_month_02_short": "f??v.",
            "gat.generic_month_03_short": "mars",
            "gat.generic_month_04_short": "avr.",
            "gat.generic_month_05_short": "mai",
            "gat.generic_month_06_short": "juin",
            "gat.generic_month_07_short": "juil.",
            "gat.generic_month_08_short": "ao??t",
            "gat.generic_month_09_short": "sept.",
            "gat.generic_month_10_short": "oct.",
            "gat.generic_month_11_short": "nov.",
            "gat.generic_month_12_short": "d??c.",
            "gat.generic_month_00_long": "",
            "gat.generic_month_01_long": "janvier",
            "gat.generic_month_02_long": "f??vrier",
            "gat.generic_month_03_long": "mars",
            "gat.generic_month_04_long": "avril",
            "gat.generic_month_05_long": "mai",
            "gat.generic_month_06_long": "juin",
            "gat.generic_month_07_long": "juillet",
            "gat.generic_month_08_long": "ao??t",
            "gat.generic_month_09_long": "septembre",
            "gat.generic_month_10_long": "octobre",
            "gat.generic_month_11_long": "novembre",
            "gat.generic_month_12_long": "d??cembre",
            "gat.generic_day_1_short": "lun.",
            "gat.generic_day_2_short": "mar.",
            "gat.generic_day_3_short": "merc.",
            "gat.generic_day_4_short": "jeu.",
            "gat.generic_day_5_short": "vend.",
            "gat.generic_day_6_short": "sam.",
            "gat.generic_day_7_short": "dim.",
            "gat.generic_day_1_long": "lundi",
            "gat.generic_day_2_long": "mardi",
            "gat.generic_day_3_long": "mercredi",
            "gat.generic_day_4_long": "jeudi",
            "gat.generic_day_5_long": "vendredi",
            "gat.generic_day_6_long": "samedi",
            "gat.generic_day_7_long": "dimanche",
            "gat.generic_day_short": "jj",
            "gat.generic_month_short": "mm",
            "gat.generic_yearSam": "aaaa",
            "gat.generic_dateSeparator": "/",
            "gat.generic_day": "jour",
            "gat.generic_month": "mois",
            "gat.generic_year": "ann??e",
            "gat.generic_today": "Aujourd'hui",
            "gat.generic_tomorrow": "Demain",
            "gat.country_phonecode_VU": "678",
            "gat.country_phonecode_VN": "84",
            "gat.country_phonecode_EC": "593",
            "gat.country_phonecode_VI": "1340",
            "gat.country_phonecode_DZ": "213",
            "gat.country_phonecode_VG": "1284",
            "gat.country_phonecode_VE": "58",
            "gat.country_phonecode_DM": "1767",
            "gat.country_phonecode_VC": "1784",
            "gat.country_phonecode_DO": "1809",
            "gat.country_phonecode_VA": "39",
            "gat.country_phonecode_DE": "49",
            "gat.country_phonecode_UZ": "998",
            "gat.country_phonecode_UY": "598",
            "gat.country_phonecode_DK": "45",
            "gat.country_phonecode_DJ": "253",
            "gat.country_phonecode_US": "1",
            "gat.country_phonecode_UM": "699",
            "gat.country_phonecode_UG": "256",
            "gat.country_phonecode_UA": "380",
            "gat.country_phonecode_ET": "251",
            "gat.country_phonecode_ES": "34",
            "gat.country_phonecode_ER": "291",
            "gat.country_phonecode_EH": "967",
            "gat.country_phonecode_EG": "20",
            "gat.country_phonecode_TZ": "255",
            "gat.country_phonecode_EE": "372",
            "gat.country_phonecode_TT": "1868",
            "gat.country_phonecode_TW": "886",
            "gat.country_phonecode_TV": "688",
            "gat.country_phonecode_GD": "1473",
            "gat.country_phonecode_GE": "995",
            "gat.country_phonecode_GF": "594",
            "gat.country_phonecode_GA": "241",
            "gat.country_phonecode_GB": "44",
            "gat.country_phonecode_FR": "33",
            "gat.country_phonecode_FO": "298",
            "gat.country_phonecode_FK": "500",
            "gat.country_phonecode_FJ": "679",
            "gat.country_phonecode_FM": "691",
            "gat.country_phonecode_FI": "358",
            "gat.country_phonecode_WS": "685",
            "gat.country_phonecode_GY": "592",
            "gat.country_phonecode_GW": "245",
            "gat.country_phonecode_GU": "1671",
            "gat.country_phonecode_GT": "502",
            "gat.country_phonecode_GS": "500",
            "gat.country_phonecode_GR": "30",
            "gat.country_phonecode_GQ": "240",
            "gat.country_phonecode_WF": "681",
            "gat.country_phonecode_GP": "590",
            "gat.country_phonecode_GN": "224",
            "gat.country_phonecode_GM": "220",
            "gat.country_phonecode_GL": "299",
            "gat.country_phonecode_GI": "350",
            "gat.country_phonecode_GH": "233",
            "gat.country_phonecode_RE": "262",
            "gat.country_phonecode_RO": "40",
            "gat.country_phonecode_AT": "43",
            "gat.country_phonecode_AS": "1684",
            "gat.country_phonecode_AR": "54",
            "gat.country_phonecode_AQ": "672",
            "gat.country_phonecode_AW": "297",
            "gat.country_phonecode_QA": "974",
            "gat.country_phonecode_AU": "61",
            "gat.country_phonecode_AZ": "994",
            "gat.country_phonecode_BA": "387",
            "gat.country_phonecode_PT": "351",
            "gat.country_phonecode_AD": "376",
            "gat.country_phonecode_PW": "680",
            "gat.country_phonecode_AG": "1268",
            "gat.country_phonecode_AE": "971",
            "gat.country_phonecode_PR": "1787",
            "gat.country_phonecode_AF": "93",
            "gat.country_phonecode_PS": "970",
            "gat.country_phonecode_AL": "355",
            "gat.country_phonecode_AI": "1 264",
            "gat.country_phonecode_AO": "244",
            "gat.country_phonecode_PY": "595",
            "gat.country_phonecode_AM": "374",
            "gat.country_phonecode_TG": "228",
            "gat.country_phonecode_BW": "267",
            "gat.country_phonecode_TF": "262",
            "gat.country_phonecode_BV": "47",
            "gat.country_phonecode_BY": "375",
            "gat.country_phonecode_TD": "235",
            "gat.country_phonecode_TK": "690",
            "gat.country_phonecode_BS": "1 242",
            "gat.country_phonecode_TJ": "992",
            "gat.country_phonecode_BR": "55",
            "gat.country_phonecode_TH": "66",
            "gat.country_phonecode_BT": "975",
            "gat.country_phonecode_TO": "676",
            "gat.country_phonecode_TN": "216",
            "gat.country_phonecode_TM": "993",
            "gat.country_phonecode_TL": "88216",
            "gat.country_phonecode_CA": "1",
            "gat.country_phonecode_TR": "90",
            "gat.country_phonecode_BZ": "501",
            "gat.country_phonecode_TP": "670",
            "gat.country_phonecode_BF": "226",
            "gat.country_phonecode_SV": "503",
            "gat.country_phonecode_BG": "359",
            "gat.country_phonecode_SS": "211",
            "gat.country_phonecode_BH": "973",
            "gat.country_phonecode_ST": "239",
            "gat.country_phonecode_BI": "257",
            "gat.country_phonecode_SY": "963",
            "gat.country_phonecode_BB": "1246",
            "gat.country_phonecode_SZ": "268",
            "gat.country_phonecode_BD": "880",
            "gat.country_phonecode_SX": "1721",
            "gat.country_phonecode_BE": "32",
            "gat.country_phonecode_BN": "673",
            "gat.country_phonecode_BO": "591",
            "gat.country_phonecode_BQ": "599",
            "gat.country_phonecode_BJ": "229",
            "gat.country_phonecode_TC": "1649",
            "gat.country_phonecode_BL": "590",
            "gat.country_phonecode_BM": "1 441",
            "gat.country_phonecode_SD": "249",
            "gat.country_phonecode_CZ": "420",
            "gat.country_phonecode_CY": "357",
            "gat.country_phonecode_SC": "248",
            "gat.country_phonecode_CX": "61",
            "gat.country_phonecode_SE": "46",
            "gat.country_phonecode_CW": "5999",
            "gat.country_phonecode_SH": "290",
            "gat.country_phonecode_CV": "238",
            "gat.country_phonecode_SG": "65",
            "gat.country_phonecode_CU": "53",
            "gat.country_phonecode_SJ": "47",
            "gat.country_phonecode_SI": "386",
            "gat.country_phonecode_SL": "232",
            "gat.country_phonecode_SK": "421",
            "gat.country_phonecode_SN": "221",
            "gat.country_phonecode_SM": "378",
            "gat.country_phonecode_SO": "252",
            "gat.country_phonecode_SR": "597",
            "gat.country_phonecode_CI": "225",
            "gat.country_phonecode_RS": "381",
            "gat.country_phonecode_CG": "242",
            "gat.country_phonecode_CH": "41",
            "gat.country_phonecode_RU": "7",
            "gat.country_phonecode_CF": "236",
            "gat.country_phonecode_RW": "250",
            "gat.country_phonecode_CC": "61",
            "gat.country_phonecode_CD": "243",
            "gat.country_phonecode_CR": "506",
            "gat.country_phonecode_CO": "57",
            "gat.country_phonecode_CM": "237",
            "gat.country_phonecode_CN": "86",
            "gat.country_phonecode_CK": "682",
            "gat.country_phonecode_SA": "966",
            "gat.country_phonecode_CL": "56",
            "gat.country_phonecode_SB": "677",
            "gat.country_phonecode_LV": "371",
            "gat.country_phonecode_LU": "352",
            "gat.country_phonecode_LT": "370",
            "gat.country_phonecode_LY": "218",
            "gat.country_phonecode_LS": "266",
            "gat.country_phonecode_LR": "231",
            "gat.country_phonecode_MG": "261",
            "gat.country_phonecode_MH": "692",
            "gat.country_phonecode_ME": "382",
            "gat.country_phonecode_MF": "590",
            "gat.country_phonecode_MK": "389",
            "gat.country_phonecode_ML": "223",
            "gat.country_phonecode_MC": "377",
            "gat.country_phonecode_MD": "373",
            "gat.country_phonecode_MA": "212",
            "gat.country_phonecode_MV": "960",
            "gat.country_phonecode_MU": "230",
            "gat.country_phonecode_MX": "52",
            "gat.country_phonecode_MW": "265",
            "gat.country_phonecode_MZ": "258",
            "gat.country_phonecode_MY": "60",
            "gat.country_phonecode_MN": "976",
            "gat.country_phonecode_MM": "95",
            "gat.country_phonecode_MP": "1670",
            "gat.country_phonecode_MO": "853",
            "gat.country_phonecode_MR": "222",
            "gat.country_phonecode_MQ": "596",
            "gat.country_phonecode_MT": "356",
            "gat.country_phonecode_MS": "1664",
            "gat.country_phonecode_NF": "672",
            "gat.country_phonecode_NG": "234",
            "gat.country_phonecode_NI": "505",
            "gat.country_phonecode_NL": "31",
            "gat.country_phonecode_NA": "264",
            "gat.country_phonecode_NC": "687",
            "gat.country_phonecode_NE": "227",
            "gat.country_phonecode_NZ": "64",
            "gat.country_phonecode_NU": "683",
            "gat.country_phonecode_NR": "674",
            "gat.country_phonecode_NP": "977",
            "gat.country_phonecode_NO": "47",
            "gat.country_phonecode_OM": "968",
            "gat.country_phonecode_PL": "48",
            "gat.country_phonecode_PM": "508",
            "gat.country_phonecode_PN": "64",
            "gat.country_phonecode_PH": "63",
            "gat.country_phonecode_PK": "92",
            "gat.country_phonecode_PE": "51",
            "gat.country_phonecode_PF": "689",
            "gat.country_phonecode_PG": "675",
            "gat.country_phonecode_PA": "507",
            "gat.country_phonecode_HK": "852",
            "gat.country_phonecode_ZA": "27",
            "gat.country_phonecode_HN": "504",
            "gat.country_phonecode_HR": "385",
            "gat.country_phonecode_HT": "509",
            "gat.country_phonecode_HU": "36",
            "gat.country_phonecode_ZM": "260",
            "gat.country_phonecode_ZW": "263",
            "gat.country_phonecode_ID": "62",
            "gat.country_phonecode_IE": "353",
            "gat.country_phonecode_IL": "972",
            "gat.country_phonecode_IN": "91",
            "gat.country_phonecode_IO": "246",
            "gat.country_phonecode_IQ": "964",
            "gat.country_phonecode_IR": "98",
            "gat.country_phonecode_YE": "967",
            "gat.country_phonecode_IS": "354",
            "gat.country_phonecode_IT": "39",
            "gat.country_phonecode_YT": "262",
            "gat.country_phonecode_JP": "81",
            "gat.country_phonecode_JO": "962",
            "gat.country_phonecode_JM": "1876",
            "gat.country_phonecode_KI": "686",
            "gat.country_phonecode_KH": "855",
            "gat.country_phonecode_KG": "996",
            "gat.country_phonecode_KE": "254",
            "gat.country_phonecode_KP": "850",
            "gat.country_phonecode_KR": "82",
            "gat.country_phonecode_KM": "269",
            "gat.country_phonecode_KN": "1869",
            "gat.country_phonecode_KW": "965",
            "gat.country_phonecode_KY": "1345",
            "gat.country_phonecode_KZ": "7",
            "gat.country_phonecode_LA": "856",
            "gat.country_phonecode_LC": "1758",
            "gat.country_phonecode_LB": "961",
            "gat.country_phonecode_LI": "423",
            "gat.country_phonecode_LK": "94",
            "common.404error": "Unfortunately, the page you're looking for cannot be found. Please try one of these links instead:",
            "common.cookiebar.link.href": "http://www.airfrance.fr/FR/en/common/transverse/footer/edito_cookies.htm",
            "fbenrol.form.general_details_conversation": "",
            "fbenrol.form.compliance_conversation": "",
            "fbenrol.form.fb_terms": "Flying Blue Terms and Conditions [???]",
            "fbenrol.compliance_headline": "How we use data",
            "fbenrol.form.password_wrong_conversation": "Annoying, we know, but to keep your account secure, the following is neededd in your password",
            "fbenrol.invalid_request": "Invalid Request",
            "gat.AN.country": "Netherlands Antilles",
            "fbenrol.comm_pref.info.facebook_data_usage_tip": "about how Facebook uses your data for advertising and how you can",
            "fbenrol.comm_pref.info.social_media_disclaimer": "for more information. We may use similar programs from other social networks, including Twitter, LinkedIn, Pinterest, Snapchat, WeChat, Kakaotalk, Line, Google and Youtube. Please check the privacy policy of these internet providers for more information.",
            "fbenrol.or": "or",
            "fbenrol.comm_pref.info.airline_unsubscribe_content_end": "from the email address you are withdrawing consent for. You may also have provided consent for receiving personalized ads and offers on social media platforms via our cookie policy. Please check the cookie policy on our website how you can withdraw your consent.",
            "fbenrol.comm_pref.info.kl_policy_link_text": "KLM Privacy Policy",
            "fbenrol.comm_pref.info.kl_policy_link": "https://www.klm.nl/ams/exchange?country={{country}}&language={{language}}&target=/information/legal/privacy-policy",
            "fbenrol.comm_pref.info.separator": "and the",
            "fbenrol.comm_pref.info.af_policy_link_text": "Air France Data Security and Privacy Policy.",
            "fbenrol.comm_pref.info.kaf_policy_link": "https://www.airfrance.com/{{countryUppercase}}/{{language}}/local/transverse/footer/edito_preambule.htm",
            "fbenrol.compliance_content_separator": "and the",
            "security.profile.updatepassword.form.field.password": "Please enter current password followed by new password",
            "recover.options.form.label": "Send temporary password via",
            "recover.options.form.email": "E-mail to",
            "recover.options.form.phoneNumber": "SMS to",
            "recover.dob.form.dateOfBirth": "Date Of Birth",
            "temporarypassword.form.field.label": "Temporary Password",
            "error.pagenotfound.title": "Oops!",
            "error.pagenotfound.content": "The page you're looking for cannot be found",
            "error.pagenotfound.contactus": "Contact us 24/7",
            "error.pagenotfound.back.link.label": "Back to the previous page",
            "error.pagenotfound.home.link.label": "Fly me to the Air France homepage",
            "error.pagenotfound.home.link.url": "https://www.airfrance.com/indexCom_en.html",
            "login.consent.viewAccount": "View your account data",
            "login.consent.viewAccount.content": "View Account Content",
            "login.consent.viewActivity": "View your activity",
            "login.consent.viewActivity.content": "View Activity Content",
            "login.consent.takeActions": "Take actions on your behalf",
            "login.consent.takeActions.content": "Actions Content",
            "enrol.compare.fb.title": "Flying Blue membership",
            "enrol.compare.fb.content.8": "Use your Miles for tickets",
            "enrol.compare.fb.content.9": "Enjoy ever increasing advantages",
            "enrol.compare.fb.button": "Enrol",
            "enrol.compare.mya.title": "KLM account",
            "enrol.compare.mya.content.1": "Easy and for free",
            "enrol.compare.mya.content.2": "Save your personal details for faster booking",
            "enrol.compare.mya.content.3": "All your bookings at a glance",
            "enrol.compare.mya.content.4": "Log in with your social account",
            "enrol.compare.mya.button": "Register",
            "enrol.compare.fb.benefits.header": "Get even more perks with Flying Blue",
            "enrol.compare.mya.benefits.title": "KLM account",
            "enrol.compare.fb.benefits.title": "KLM account with Flying Blue benefits",
            "enrol.compare.fbpluskl.button": "Join KLM and Flying Blue",
            "error.recover.fb.source.invalid.param": "The Link is not valid anymore",
            "login.otp.form.email_hint": "This way we know it is you and your one-time PIN code will be on its way."
        };

        if (/iPad|iPhone|iPod/.test(window.navigator.userAgent) && /OS 9/.test(window.navigator.userAgent) && !window.MSStream) {
            var intlPolyfill = document.createElement('script');
            intlPolyfill.setAttribute('type', 'text/javascript');
            intlPolyfill.setAttribute('src', '//cdn.polyfill.io/v2/polyfill.js?features=Intl.~locale.fr');

            if (typeof intlPolyfill !== 'undefined') {
                document.getElementsByTagName("head")[0].appendChild(intlPolyfill);
            }
        }

        addEventListener('BluewebNavigationEnd', function() {
            window['optimizely'] = window['optimizely'] || [];
            window['optimizely'].push({
                type: 'activate'
            });
        });
    </script>
    <script src="//tdn.r42tag.com/lib/1205-v1.js"></script>
    <script>
        var ENV = 'prod';
        if (window.document.documentMode) {
            // polyfill IE11 in a blocking way
            var s = document.createElement('script');
            s.src = '/enrol/assets/scripts/ie-polyfills.min.js';
            document.head.appendChild(s);
        } else if (!Object.assign) {
            // polyfill other non-evergreen browsers in a blocking way
            var polyfillUrl = "https://cdn.polyfill.io/v2/polyfill.min.js?features=default,Array.prototype.find&flags=gated&unknown=polyfill";

            // send a blocking XHR to fetch the polyfill
            // then append it to the document so that its eval-ed synchronously
            // this is required because the method used for IE is not reliable with other non-evergreen browsers
            var xhr = new XMLHttpRequest();
            xhr.addEventListener("load", function() {
                var s = document.createElement('script');
                s.type = 'text/javascript';
                var code = this.responseText;
                s.appendChild(document.createTextNode(code));
                document.head.appendChild(s);
            });
            xhr.open("GET", polyfillUrl, false);
            xhr.send();
        }
    </script>
    <script>
        bazadebezolkohpepadr = "2053050068"
    </script>
    <style>
        html.bwc-page-template-powered body {
            flex: 1 1 100%;
            max-width: 100%;
        }

        .bwc-o-body {
            font-size: 1rem;
            line-height: 1.5;
            font-family: ExcellenceInMotion, "Helvetica Neue", sans-serif;
            text-transform: none;
            font-weight: normal;
            color: #051039;
            font-display: swap;
        }

        body {
            min-height: 100vh;
        }

        body {
            margin: 0;
            font-family: sans-serif;
            line-height: 1;
        }

        main {
            height: 100%;
        }

        main {
            display: block;
        }

        bwc-page-template .bwc-page-template__container {
            display: flex;
            width: 100%;
            height: 100%;
            transform: none !important;
        }

        .mat-drawer-container {
            position: relative;
            z-index: 1;
            box-sizing: border-box;
            -webkit-overflow-scrolling: touch;
            display: block;
            overflow: hidden;
        }

        .mat-drawer-container {
            background-color: #f8f9f9;
            color: #051039;
        }

        .mat-drawer-backdrop {
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            position: absolute;
            display: block;
            z-index: 3;
            visibility: hidden;
        }

        .cdk-visually-hidden {
            border: 0;
            clip: rect(0 0 0 0);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px;
            outline: 0;
            -webkit-appearance: none;
            -moz-appearance: none;
        }

        .mat-drawer-inner-container {
            width: 100%;
            height: 100%;
            overflow: auto;
            -webkit-overflow-scrolling: touch;
        }

        .cdk-visually-hidden {
            border: 0;
            clip: rect(0 0 0 0);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px;
            outline: 0;
            -webkit-appearance: none;
            -moz-appearance: none;
        }

        bwc-page-template .bwc-page-template__container>.mat-drawer-content {
            flex: 1 0 auto;
            flex-direction: column;
            width: 100%;
        }

        bwc-page-template .bwc-page-template__container .mat-sidenav-content,
        bwc-page-template .bwc-page-template__container .mat-sidenav-container,
        bwc-page-template .bwc-page-template__container .mat-drawer-content {
            transform: none !important;
        }

        .mat-drawer-content {
            position: relative;
            z-index: 1;
            display: block;
            height: 100%;
            overflow: auto;
        }

        bwc-page-template .bwc-page-template__content {
            display: flex;
            flex-direction: column;
            height: inherit;
        }

        bwc-print-header {
            display: none;
        }

        .bwc .mat-toolbar {
            box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.24), 0 0 4px 0 rgba(0, 0, 0, 0.12);
        }

        .bwc .mat-toolbar,
        .bwc .mat-toolbar h1,
        .bwc .mat-toolbar h2,
        .bwc .mat-toolbar h3,
        .bwc .mat-toolbar h4,
        .bwc .mat-toolbar h5,
        .bwc .mat-toolbar h6 {
            font: 500 20px/32px ExcellenceInMotion, "Helvetica Neue", sans-serif;
            letter-spacing: normal;
            margin: 0;
        }

        .mat-toolbar-row,
        .mat-toolbar-single-row {
            height: 64px;
        }

        .mat-toolbar-row,
        .mat-toolbar-single-row {
            display: flex;
            box-sizing: border-box;
            padding: 0 16px;
            width: 100%;
            flex-direction: row;
            align-items: center;
            white-space: nowrap;
        }

        .mat-toolbar {
            background: #f8f9f9;
            color: #051039;
        }

        .mat-toolbar,
        .mat-toolbar h1,
        .mat-toolbar h2,
        .mat-toolbar h3,
        .mat-toolbar h4,
        .mat-toolbar h5,
        .mat-toolbar h6 {
            font: 500 20px/32px Roboto, "Helvetica Neue", sans-serif;
            letter-spacing: normal;
            margin: 0;
        }

        img {
            max-width: 100%;
            height: auto;
            border: 0;
            vertical-align: middle;
        }

        bwc-page-template .bwc-page-template__content__sticky-header {
            z-index: 1;
            top: 0;
            width: 100%;
            transition: top 0.2s ease-in;
            box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.24), 0 0 4px 0 rgba(0, 0, 0, 0.12);
        }

        bwc-logo-header {
            display: block;
            position: relative;
        }

        bwc-page-template .bwc-page-template__content__sticky-header bwc-logo-header .mat-toolbar {
            box-shadow: none;
        }

        .bwc .mat-toolbar {
            box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.24), 0 0 4px 0 rgba(0, 0, 0, 0.12);
        }

        .bwc .mat-toolbar,
        .bwc .mat-toolbar h1,
        .bwc .mat-toolbar h2,
        .bwc .mat-toolbar h3,
        .bwc .mat-toolbar h4,
        .bwc .mat-toolbar h5,
        .bwc .mat-toolbar h6 {
            font: 500 20px/32px ExcellenceInMotion, "Helvetica Neue", sans-serif;
            letter-spacing: normal;
            margin: 0;
        }

        bwc-logo-header .mat-toolbar {
            background: white;
            color: #051039;
        }

        bwc-logo-header .bwc-logo-header {
            padding: 8px 24px 8px 16px;
        }

        bwc-logo-header .bwc-logo-header {
            padding: 8px 24px 8px 16px;
        }

        bwc-logo-header .bwc-logo-header {
            height: auto;
            min-height: 64px;
        }

        bwc-logo-header .bwc-logo-header {
            align-items: center;
            padding: 8px;
        }

        .mat-toolbar-row,
        .mat-toolbar-single-row {
            height: 64px;
        }

        .mat-toolbar-row,
        .mat-toolbar-single-row {
            display: flex;
            box-sizing: border-box;
            padding: 0 16px;
            width: 100%;
            flex-direction: row;
            align-items: center;
            white-space: nowrap;
        }

        .mat-toolbar {
            background: #f8f9f9;
            color: #051039;
        }

        .mat-toolbar,
        .mat-toolbar h1,
        .mat-toolbar h2,
        .mat-toolbar h3,
        .mat-toolbar h4,
        .mat-toolbar h5,
        .mat-toolbar h6 {
            font: 500 20px/32px Roboto, "Helvetica Neue", sans-serif;
            letter-spacing: normal;
            margin: 0;
        }

        bwc-logo-header .bwc-logo-header__logo-container {
            display: flex;
            flex: 1 1 auto;
            flex-wrap: wrap;
            align-items: center;
            align-self: center;
            margin-top: 0;
            margin-left: 0;
        }

        bwc-logo-header .bwc-logo-header__logo {
            background-position: left bottom;
        }

        bwc-logo-header .bwc-logo-header__logo {
            width: 178px;
            height: 24px;
            background-image: url("https://login.airfrance.com/login/assets/components/14.1.0/af/img/af-logo.svg");
            display: inline-block;
            align-self: center;
            background-color: transparent;
            background-repeat: no-repeat;
            background-position: left center;
            background-size: 100% auto;
        }

        a {
            color: #0062e6;
            text-decoration: none;
            cursor: pointer;
        }

        bwc-logo-header .bwc-logo-header__logo-skyteam {
            display: inline-block;
        }

        bwc-logo-header .bwc-logo-header__logo-skyteam {
            margin-left: 4px;
            display: none;
            align-self: flex-end;
            width: 24px;
            height: 24px;
            background-color: transparent;
            background-image: url("../../components/14.1.0/af/img/skyteam-logo.svg");
            background-repeat: no-repeat;
            background-position: left bottom;
            background-size: 100% auto;
        }

        bwc-logo-header .bwc-logo-header__spacer {
            flex: 1 1 auto;
        }

        bwc-subheader {
            display: block;
            position: relative;
        }

        bwc-subheader .bwc-subheader__label-title {
            width: calc(100% - 525px);
        }

        bwc-subheader .bwc-subheader__label-title {
            position: absolute;
            z-index: 100;
            top: 50%;
            left: 50%;
            width: calc(100% - 116px);
            overflow: hidden;
            transform: translate(-50%, -50%);
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .bwc-o-title {
            font-size: 1.25rem;
            line-height: 1.35;
        }

        .bwc-o-title {
            font-size: 1.125rem;
            line-height: 1.35;
            font-family: ExcellenceInMotion, "Helvetica Neue", sans-serif;
            text-transform: uppercase;
            font-weight: bold;
            font-display: swap;
        }

        bwc-subheader .bwc-subheader__label-title h1 {
            color: white;
        }

        bwc-subheader .bwc-subheader__label-title h1 {
            font-size: 1.25rem;
            line-height: 1.35;
        }

        bwc-subheader .bwc-subheader__label-title h1 {
            font-size: 1.125rem;
            line-height: 1.35;
            font-family: ExcellenceInMotion, "Helvetica Neue", sans-serif;
            text-transform: uppercase;
            font-weight: bold;
            font-display: swap;
            overflow: hidden;
            text-align: center;
            text-overflow: ellipsis;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin-top: 0;
            margin-bottom: 0;
            font-size: inherit;
            font-weight: inherit;
        }

        .bwc .mat-toolbar.mat-primary,
        .bwc .mat-toolbar.mat-accent {
            color: white;
        }

        bwc-page-template .bwc-page-template__content__sticky-header bwc-subheader .mat-toolbar {
            box-shadow: none;
        }

        bwc-subheader .mat-toolbar.mat-primary {
            background: #14438b;
        }

        .bwc .mat-toolbar {
            box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.24), 0 0 4px 0 rgba(0, 0, 0, 0.12);
        }

        .mat-toolbar.mat-primary {
            background: #051039;
            color: white;
        }

        .bwc .mat-toolbar,
        .bwc .mat-toolbar h1,
        .bwc .mat-toolbar h2,
        .bwc .mat-toolbar h3,
        .bwc .mat-toolbar h4,
        .bwc .mat-toolbar h5,
        .bwc .mat-toolbar h6 {
            font: 500 20px/32px ExcellenceInMotion, "Helvetica Neue", sans-serif;
            letter-spacing: normal;
            margin: 0;
        }

        bwc-subheader .mat-toolbar {
            position: relative;
            align-self: flex-end;
            height: 100%;
            padding: 10px 24px 14px;
        }

        .mat-toolbar-row,
        .mat-toolbar-single-row {
            height: 64px;
        }

        .mat-toolbar-row,
        .mat-toolbar-single-row {
            display: flex;
            box-sizing: border-box;
            padding: 0 16px;
            width: 100%;
            flex-direction: row;
            align-items: center;
            white-space: nowrap;
        }

        .mat-toolbar {
            background: #f8f9f9;
            color: #051039;
        }

        .mat-toolbar,
        .mat-toolbar h1,
        .mat-toolbar h2,
        .mat-toolbar h3,
        .mat-toolbar h4,
        .mat-toolbar h5,
        .mat-toolbar h6 {
            font: 500 20px/32px Roboto, "Helvetica Neue", sans-serif;
            letter-spacing: normal;
            margin: 0;
        }

        bwc-subheader .bwc-subheader__back-section {
            display: flex;
            align-items: center;
            height: 32px;
        }

        bwc-subheader .bwc-subheader__spacer {
            flex: 1 1 auto;
        }

        bwc-subheader .bwc-subheader__button-back,
        bwc-subheader .bwc-subheader__button-action {
            color: white;
        }

        bwc-subheader .bwc-subheader__button-back {
            max-width: 200px;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        select,
        button,
        textarea,
        input {
            font-family: ExcellenceInMotion, "Helvetica Neue", sans-serif;
            font-size: 100%;
        }

        button {
            margin: 0;
            padding: 0;
            overflow: visible;
            border: 0;
            background: none;
            font: inherit;
            -webkit-font-smoothing: inherit;
            letter-spacing: inherit;
            text-align: inherit;
            text-transform: inherit;
            cursor: pointer;
        }

        bwc-icon {
            display: inline-block;
            width: calc(1em / 16 * 24);
            height: calc(1em / 16 * 24);
            font-size: 1rem;
            line-height: 0;
            text-align: left;
            vertical-align: middle;
        }

        bwc-icon.bwc-icon--chevron-left:not([cropped]) .mat-icon {
            transform: rotate(270deg) translateY(70%) translateX(-130%);
            transform-origin: top left;
        }

        bwc-icon.bwc-icon--chevron-left .mat-icon {
            width: calc(1em / 16 * 15);
            height: calc(1em / 16 * 10);
        }

        bwc-icon .mat-icon {
            box-sizing: border-box;
        }

        .mat-icon {
            background-repeat: no-repeat;
            display: inline-block;
            fill: currentColor;
            height: 24px;
            width: 24px;
        }

        .mat-icon {
            fill: currentColor;
        }

        bwc-subheader .bwc-subheader__button-back .bwc-o-body-variant {
            display: inline;
            margin-left: 8px;
            padding: 4px 0;
        }

        bwc-subheader .bwc-subheader__button-back .bwc-o-body-variant {
            display: none;
            vertical-align: middle;
        }

        .bwc-o-body-variant {
            font-size: 1rem;
            line-height: 1.5;
            font-family: ExcellenceInMotion, "Helvetica Neue", sans-serif;
            text-transform: none;
            font-weight: bold;
            font-display: swap;
        }

        bwc-page-template .bwc-page-template__content__main-view {
            position: relative;
            z-index: 0;
            flex-grow: 1;
            flex-shrink: 0;
        }

        .bwc-page-template__content__main-view {
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        [_nghost-opl-c137] {
            display: block;
            will-change: height;
            overflow: hidden;
            line-height: 0;
            flex-grow: 0;
            flex-shrink: 0;
        }

        .bw-normal-login,
        .bw-passenger-login,
        .bw-recover-password,
        .bw-update-temporary-password-success {
            min-height: calc(100vh - 120px);
        }

        .bw-normal-login,
        .bw-passenger-login,
        .bw-recover-password {
            display: flex;
            position: relative;
            flex-direction: column;
        }

        bw-mya-upgrade,
        bw-enrol-enrolment,
        bw-enrol-upgrade,
        bw-flying-blue,
        bw-update-password,
        bw-normal-login,
        bw-passenger-login,
        bw-enrol-compare {
            display: flex;
            position: relative;
            flex-direction: column;
        }

        bw-mya-upgrade,
        bw-enrol-upgrade,
        bw-flying-blue,
        bw-update-password,
        bw-normal-login,
        bw-passenger-login,
        bw-enrol-enrolment,
        bw-enrol-compare {
            position: relative;
            display: flex;
            flex-direction: column;
        }

        .login-inner-wrapper {
            min-height: calc(100vh - 120px);
        }

        .login-inner-wrapper {
            align-items: center;
            padding: 24px 0px;
            background: url("https://login.airfrance.com/login/assets/af/img/login-background.jpg");
            background-size: cover;
            box-sizing: border-box;
        }

        .login-inner-wrapper,
        .login-flex-container {
            display: flex;
        }

        .login-container {
            position: relative;
            width: 456px;
            max-width: 456px;
            margin: auto;
            margin-left: 15%;
            border-width: 0.5px;
            border-style: solid;
            border-radius: 2px;
            background-color: #ffffff;
            box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.24), 0 0 2px 0 rgba(0, 0, 0, 0.12);
            box-sizing: border-box;
            border-image-source: linear-gradient(to bottom, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0) 80%, rgba(0, 0, 0, 0.02) 95%, rgba(0, 0, 0, 0.04));
            border-image-slice: 1;
        }

        .login-inner-container {
            flex: 1;
        }

        .login-form-container,
        .recover-form-container {
            flex: 1;
            padding: 24px 24px 0px;
        }

        .login-form-converse-banner {
            display: flex;
        }

        .bwc-o-display-2 {
            font-size: 2.125rem;
            line-height: 1.35;
        }

        .bwc-o-display-2 {
            font-size: 1.625rem;
            line-height: 1.35;
            font-family: ExcellenceInMotion, "Helvetica Neue", sans-serif;
            text-transform: uppercase;
            font-weight: bold;
            font-display: swap;
        }

        .login-form {
            margin-top: 15px;
        }

        .bwc .bwc-form-input-container {
            margin-bottom: 15px;
        }

        .bwc .bwc-form-input-container {
            display: block;
            margin-bottom: 0;
            transition: margin-bottom 0.1s;
        }

        .login-form-input-container {
            position: relative;
        }

        .bwc .mat-form-field {
            width: 100%;
            font-size: 1.125rem;
            line-height: 1.5;
            font-family: ExcellenceInMotion, "Helvetica Neue", sans-serif;
            text-transform: none;
            font-weight: normal;
            font-display: swap;
        }

        .bwc .mat-form-field {
            font-size: inherit;
            font-weight: 400;
            line-height: 1.125;
            font-family: ExcellenceInMotion, "Helvetica Neue", sans-serif;
            letter-spacing: normal;
        }

        .mat-form-field {
            display: inline-block;
            position: relative;
            text-align: left;
        }

        .mat-form-field {
            font-size: inherit;
            font-weight: 400;
            line-height: 1.125;
            font-family: Roboto, "Helvetica Neue", sans-serif;
            letter-spacing: normal;
        }

        .bwc .mat-form-field-appearance-legacy .mat-form-field-wrapper {
            padding-bottom: 1.25em;
        }

        .bwc .mat-form-field-wrapper {
            padding-bottom: 1.34375em;
        }

        .mat-form-field-wrapper {
            position: relative;
        }

        .mat-form-field-flex {
            display: inline-flex;
            align-items: baseline;
            box-sizing: border-box;
            width: 100%;
        }

        .bwc .mat-form-field .mat-form-field-infix {
            width: inherit;
        }

        .bwc .mat-form-field-appearance-legacy .mat-form-field-infix {
            padding-bottom: 3px;
        }

        .bwc .mat-form-field-appearance-legacy .mat-form-field-infix {
            padding: 0.4375em 0;
        }

        .mat-form-field-appearance-legacy .mat-form-field-infix {
            padding: 0.4375em 0;
        }

        .bwc .mat-form-field-infix {
            padding: 0.5em 0;
            border-top: 0.84375em solid transparent;
        }

        .mat-form-field-infix {
            display: block;
            position: relative;
            flex: auto;
            min-width: 0;
            width: 180px;
        }

        .mat-form-field-infix {
            padding: 0.5em 0;
            border-top: 0.84375em solid transparent;
        }

        .bwc input.mat-input-element {
            margin-top: -0.0625em;
        }

        .mat-input-element:user-invalid {
            box-shadow: none;
        }

        .bwc .mat-input-element {
            margin: 0;
            color: #051039;
        }

        .cdk-text-field-autofill-monitored:not(:autofill) {
            animation: cdk-text-field-autofill-end 0s 1ms;
        }

        input.mat-input-element {
            margin-top: -0.0625em;
        }

        .mat-input-element,
        .mat-input-element::-webkit-search-cancel-button,
        .mat-input-element::-webkit-search-decoration,
        .mat-input-element::-webkit-search-results-button,
        .mat-input-element::-webkit-search-results-decoration {
            -webkit-appearance: none;
        }

        .mat-input-element {
            font: inherit;
            background: transparent;
            color: currentColor;
            border: none;
            outline: none;
            padding: 0;
            margin: 0;
            width: 100%;
            max-width: 100%;
            vertical-align: bottom;
            text-align: inherit;
        }

        .mat-input-element {
            caret-color: #051039;
        }

        select,
        input,
        textarea {
            font-size: 16px !important;
        }

        select,
        button,
        textarea,
        input {
            font-family: ExcellenceInMotion, "Helvetica Neue", sans-serif;
            font-size: 100%;
        }

        .bwc .mat-form-field-label-wrapper {
            top: -0.84375em;
            padding-top: 0.84375em;
        }

        .mat-form-field-label-wrapper {
            position: absolute;
            left: 0;
            box-sizing: content-box;
            width: 100%;
            height: 100%;
            overflow: hidden;
            pointer-events: none;
        }

        .mat-form-field-label-wrapper {
            top: -0.84375em;
            padding-top: 0.84375em;
        }

        .mat-form-field-label-wrapper {
            position: absolute;
            left: 0;
            box-sizing: content-box;
            width: 100%;
            height: 100%;
            overflow: hidden;
            pointer-events: none;
        }

        .bwc .mat-form-field-appearance-legacy .mat-form-field-label {
            top: 1.28125em;
        }

        .mat-form-field-appearance-legacy .mat-form-field-label {
            transform: perspective(100px);
            -ms-transform: none;
        }

        .mat-form-field-empty.mat-form-field-label,
        .mat-form-field-can-float.mat-form-field-should-float .mat-form-field-label {
            display: block;
        }

        .bwc .mat-form-field-label {
            color: #767676;
        }

        .mat-form-field-appearance-legacy .mat-form-field-label {
            color: rgba(0, 0, 0, 0.38);
        }

        .mat-form-field-appearance-legacy .mat-form-field-label {
            top: 1.28125em;
        }

        .bwc .mat-form-field-label {
            top: 1.34375em;
        }

        .mat-form-field-label {
            position: absolute;
            left: 0;
            font: inherit;
            pointer-events: none;
            width: 100%;
            white-space: nowrap;
            text-overflow: ellipsis;
            overflow: hidden;
            transform-origin: 0 0;
            transition: transform 400ms cubic-bezier(0.25, 0.8, 0.25, 1), color 400ms cubic-bezier(0.25, 0.8, 0.25, 1), width 400ms cubic-bezier(0.25, 0.8, 0.25, 1);
            display: none;
        }

        .mat-form-field-label {
            color: rgba(0, 0, 0, 0.6);
        }

        .mat-form-field-label {
            top: 1.34375em;
        }

        .bwc .mat-form-field-label {
            color: #767676;
        }

        .mat-form-field-appearance-legacy .mat-form-field-label {
            color: rgba(0, 0, 0, 0.38);
        }

        .mat-form-field-label {
            font: inherit;
            pointer-events: none;
            white-space: nowrap;
        }

        .mat-form-field-label {
            color: rgba(0, 0, 0, 0.6);
        }

        .bwc .mat-form-field.ng-invalid.ng-touched .mat-form-field-label {
            color: #d40504;
        }

        .mat-form-field.mat-form-field-invalid .mat-form-field-label {
            color: #d40504;
        }

        .bwc .mat-form-field-appearance-legacy .mat-form-field-label {
            top: 1.28125em;
        }

        .mat-form-field-appearance-legacy .mat-form-field-label {
            transform: perspective(100px);
            -ms-transform: none;
        }

        .mat-form-field-empty.mat-form-field-label,
        .mat-form-field-can-float.mat-form-field-should-float .mat-form-field-label {
            display: block;
        }

        .bwc .mat-form-field-label {
            color: #767676;
        }

        .mat-form-field-appearance-legacy .mat-form-field-label {
            color: rgba(0, 0, 0, 0.38);
        }

        .mat-form-field-appearance-legacy .mat-form-field-label {
            top: 1.28125em;
        }

        .mat-form-field-label {
            position: absolute;
            left: 0;
            font: inherit;
            pointer-events: none;
            width: 100%;
            white-space: nowrap;
            text-overflow: ellipsis;
            overflow: hidden;
            transform-origin: 0 0;
            transition: transform 400ms cubic-bezier(0.25, 0.8, 0.25, 1), color 400ms cubic-bezier(0.25, 0.8, 0.25, 1), width 400ms cubic-bezier(0.25, 0.8, 0.25, 1);
            display: none;
        }

        .bwc .mat-form-field.ng-invalid.ng-touched .mat-form-field-label {
            color: #d40504;
        }

        .mat-form-field.mat-form-field-invalid .mat-form-field-label {
            color: #d40504;
        }

        .bwc .mat-form-field-label {
            color: #767676;
        }

        .mat-form-field-appearance-legacy .mat-form-field-label {
            color: rgba(0, 0, 0, 0.38);
        }

        .mat-form-field-label {
            font: inherit;
            pointer-events: none;
            white-space: nowrap;
        }

        .bwc .mat-form-field.ng-invalid.ng-touched .mat-form-field-underline {
            background-color: #d40504;
        }

        .bwc .bwc-form-input-container .mat-form-field-underline {
            bottom: 1.33em;
        }

        .bwc .mat-form-field-appearance-legacy .mat-form-field-underline {
            bottom: 1.25em;
        }

        .mat-form-field-appearance-legacy .mat-form-field-underline {
            height: 1px;
        }

        .login-container .mat-form-field-underline {
            bottom: auto !important;
        }

        .mat-form-field.mat-focused .mat-form-field-ripple,
        .mat-form-field.mat-form-field-invalid .mat-form-field-ripple {
            opacity: 1;
            transform: scaleX(1);
            transition: transform 300ms cubic-bezier(0.25, 0.8, 0.25, 1), opacity 100ms cubic-bezier(0.25, 0.8, 0.25, 1), background-color 300ms cubic-bezier(0.25, 0.8, 0.25, 1);
        }

        .bwc .mat-form-field .mat-form-field-ripple {
            top: -1px;
            background-color: #051039;
        }

        .mat-form-field.mat-form-field-invalid .mat-form-field-ripple,
        .mat-form-field.mat-form-field-invalid .mat-form-field-ripple.mat-accent {
            background-color: #d40504;
        }

        .mat-form-field-appearance-legacy .mat-form-field-ripple {
            top: 0;
            height: 2px;
            overflow: hidden;
        }

        .mat-form-field-ripple {
            position: absolute;
            left: 0;
            width: 100%;
            transform-origin: 50%;
            transform: scaleX(0.5);
            opacity: 0;
            transition: background-color 300ms cubic-bezier(0.55, 0, 0.55, 0.2);
        }

        .bwc .mat-form-field-appearance-legacy .mat-form-field-subscript-wrapper {
            margin-top: 0.54167em;
            top: calc(100% - 1.66667em);
        }

        .bwc .mat-form-field-subscript-wrapper {
            font-size: 75%;
            margin-top: 0.66667em;
            top: calc(100% - 1.79167em);
        }

        .mat-form-field-subscript-wrapper {
            position: absolute;
            box-sizing: border-box;
            width: 100%;
            overflow: hidden;
        }

        .mat-error {
            display: block;
        }

        .mat-error {
            color: #d40504;
        }

        .bwc-form-errors {
            color: #d40504;
        }

        .bwc-form-errors {
            display: flex;
            flex-flow: row-reverse;
        }

        .bwc .bwc-form-input-container {
            display: block;
            margin-bottom: 0;
            transition: margin-bottom 0.1s;
        }

        .login-form-input-container {
            position: relative;
        }

        .login-hinted-field {
            margin-bottom: 15px !important;
        }

        .bwc .bwc-form-input-container {
            margin-bottom: 15px;
        }

        .bwc .mat-form-field {
            width: 100%;
            font-size: 1.125rem;
            line-height: 1.5;
            font-family: ExcellenceInMotion, "Helvetica Neue", sans-serif;
            text-transform: none;
            font-weight: normal;
            font-display: swap;
        }

        .bwc .mat-form-field {
            font-size: inherit;
            font-weight: 400;
            line-height: 1.125;
            font-family: ExcellenceInMotion, "Helvetica Neue", sans-serif;
            letter-spacing: normal;
        }

        .mat-form-field {
            display: inline-block;
            position: relative;
            text-align: left;
        }

        .mat-form-field {
            font-size: inherit;
            font-weight: 400;
            line-height: 1.125;
            font-family: Roboto, "Helvetica Neue", sans-serif;
            letter-spacing: normal;
        }

        .bwc .mat-form-field-appearance-legacy .mat-form-field-wrapper {
            padding-bottom: 1.25em;
        }

        .login-hinted-field .mat-form-field-wrapper {
            padding-bottom: 0;
        }

        .mat-form-field-appearance-legacy .mat-form-field-wrapper {
            padding-bottom: 1.25em;
        }

        .bwc .mat-form-field-wrapper {
            padding-bottom: 1.34375em;
        }

        .mat-form-field-wrapper {
            position: relative;
        }

        .mat-form-field-flex {
            display: inline-flex;
            align-items: baseline;
            box-sizing: border-box;
            width: 100%;
        }

        .bwc .mat-form-field .mat-form-field-infix {
            width: inherit;
        }

        .bwc .mat-form-field-appearance-legacy .mat-form-field-infix {
            padding-bottom: 3px;
        }

        .bwc .mat-form-field-appearance-legacy .mat-form-field-infix {
            padding: 0.4375em 0;
        }

        .mat-form-field-appearance-legacy .mat-form-field-infix {
            padding: 0.4375em 0;
        }

        .mat-form-field-appearance-legacy .mat-form-field-infix {
            padding: 0.4375em 0;
        }

        .mat-form-field-infix {
            display: block;
            position: relative;
            flex: auto;
            min-width: 0;
            width: 180px;
        }

        .mat-form-field-infix {
            padding: 0.5em 0;
            border-top: 0.84375em solid transparent;
        }

        .bwc input.mat-input-element {
            margin-top: -0.0625em;
        }

        .bwc .mat-input-element {
            margin: 0;
            color: #051039;
        }

        .cdk-text-field-autofill-monitored:not(:autofill) {
            animation: cdk-text-field-autofill-end 0s 1ms;
        }

        .login-container .mat-form-field-subscript-wrapper {
            position: relative !important;
        }

        input.mat-input-element {
            margin-top: -0.0625em;
        }

        .mat-input-element,
        .mat-input-element::-webkit-search-cancel-button,
        .mat-input-element::-webkit-search-decoration,
        .mat-input-element::-webkit-search-results-button,
        .mat-input-element::-webkit-search-results-decoration {
            -webkit-appearance: none;
        }

        .mat-input-element {
            font: inherit;
            background: transparent;
            color: currentColor;
            border: none;
            outline: none;
            padding: 0;
            margin: 0;
            width: 100%;
            max-width: 100%;
            vertical-align: bottom;
            text-align: inherit;
        }

        .mat-input-element {
            caret-color: #051039;
        }

        select,
        input,
        textarea {
            font-size: 16px !important;
        }

        select,
        button,
        textarea,
        input {
            font-family: ExcellenceInMotion, "Helvetica Neue", sans-serif;
            font-size: 100%;
        }

        .bwc .mat-form-field {
            font-size: 1.125rem;
            line-height: 1.5;
            font-family: ExcellenceInMotion, "Helvetica Neue", sans-serif;
            text-transform: none;
            font-weight: normal;
        }

        .bwc .mat-form-field-label-wrapper {
            top: -0.84375em;
            padding-top: 0.84375em;
        }

        .mat-form-field-label-wrapper {
            position: absolute;
            left: 0;
            box-sizing: content-box;
            width: 100%;
            height: 100%;
            overflow: hidden;
            pointer-events: none;
        }

        .mat-form-field-label-wrapper {
            top: -0.84375em;
            padding-top: 0.84375em;
        }

        .bwc .mat-form-field-appearance-legacy .mat-form-field-label {
            top: 1.28125em;
        }

        .mat-form-field-appearance-legacy .mat-form-field-label {
            transform: perspective(100px);
            -ms-transform: none;
        }

        .mat-form-field-empty.mat-form-field-label,
        .mat-form-field-can-float.mat-form-field-should-float .mat-form-field-label {
            display: block;
        }

        .bwc .mat-form-field-label {
            color: #767676;
        }

        .mat-form-field-appearance-legacy .mat-form-field-label {
            color: rgba(0, 0, 0, 0.38);
        }

        .mat-form-field-label {
            position: absolute;
            left: 0;
            font: inherit;
            pointer-events: none;
            width: 100%;
            white-space: nowrap;
            text-overflow: ellipsis;
            overflow: hidden;
            transform-origin: 0 0;
            transition: transform 400ms cubic-bezier(0.25, 0.8, 0.25, 1), color 400ms cubic-bezier(0.25, 0.8, 0.25, 1), width 400ms cubic-bezier(0.25, 0.8, 0.25, 1);
            display: none;
        }

        .login-form-password-wrong {
            background: url("https://login.airfrance.com/login/assets/af/img/hide-password.svg");
        }

        .login-form-password-correct,
        .login-form-password-wrong {
            position: absolute;
            top: 24px;
            right: 0px;
            width: 20px;
            height: 20px;
        }

        .login-form-password-reveal-control {
            position: absolute;
            top: 8px;
            right: -3px;
        }

        .login-form-password-show,
        .login-form-password-hide {
            font-size: 13px;
            text-align: right;
        }

        .hide-text {
            color: #fff;
        }

        a {
            color: #0062e6;
            text-decoration: none;
            cursor: pointer;
        }

        body [hidden] {
            display: none;
        }

        .login-form-password-show,
        .login-form-password-hide {
            font-size: 13px;
            text-align: right;
        }

        .login-form-password-check {
            display: block;
            position: relative;
            top: -15px;
            width: 100%;
            height: 42px;
            margin: 0;
            cursor: pointer;
            opacity: 0;
            box-sizing: border-box;
        }

        select,
        input,
        textarea {
            font-size: 16px !important;
        }

        select,
        button,
        textarea,
        input {
            font-family: ExcellenceInMotion, "Helvetica Neue", sans-serif;
            font-size: 100%;
        }

        .login-checkbox-remember-me {
            float: left;
        }

        .login-checkbox-remember-me {
            margin-top: 15px;
        }

        .bwc .mat-checkbox {
            display: inline-block;
        }

        .bwc .mat-checkbox {
            font-family: ExcellenceInMotion, "Helvetica Neue", sans-serif;
        }

        .mat-checkbox {
            transition: background 400ms cubic-bezier(0.25, 0.8, 0.25, 1), box-shadow 280ms cubic-bezier(0.4, 0, 0.2, 1);
            cursor: pointer;
            -webkit-tap-highlight-color: transparent;
        }

        .bwc .mat-checkbox-layout {
            align-items: flex-start;
            white-space: normal;
        }

        label.mat-checkbox-layout {
            white-space: normal;
        }

        .mat-checkbox-layout {
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            cursor: inherit;
            align-items: baseline;
            vertical-align: middle;
            display: inline-flex;
            white-space: nowrap;
        }

        .bwc .mat-checkbox-inner-container {
            width: 18px;
            height: 18px;
            margin: 3px 12px 0 0;
        }

        .mat-checkbox-inner-container {
            display: inline-block;
            height: 16px;
            line-height: 0;
            margin: auto;
            margin-right: 8px;
            order: 0;
            position: relative;
            vertical-align: middle;
            white-space: nowrap;
            width: 16px;
            flex-shrink: 0;
        }

        .mat-checkbox-input {
            bottom: 0;
            left: 50%;
        }

        .cdk-visually-hidden {
            border: 0;
            clip: rect(0 0 0 0);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px;
            outline: 0;
            -webkit-appearance: none;
            -moz-appearance: none;
        }

        .mat-checkbox .mat-checkbox-ripple {
            position: absolute;
            left: calc(50% - 20px);
            top: calc(50% - 20px);
            height: 40px;
            width: 40px;
            z-index: 1;
            pointer-events: none;
        }

        .bwc .mat-checkbox .mat-checkbox-inner-container .mat-ripple-element,
        .bwc .mat-checkbox.mat-accent .mat-checkbox-inner-container .mat-ripple-element {
            background-color: #14438b;
        }

        .mat-checkbox-persistent-ripple,
        .mat-checkbox.mat-checkbox-disabled .mat-checkbox-inner-container:hover .mat-checkbox-persistent-ripple {
            opacity: 0;
        }

        .mat-checkbox-persistent-ripple {
            width: 100%;
            height: 100%;
            transform: none;
        }

        .mat-ripple-element {
            position: absolute;
            border-radius: 50%;
            pointer-events: none;
            transition: opacity, transform 0ms cubic-bezier(0, 0, 0.2, 1);
            transform: scale(0);
        }

        .bwc .mat-checkbox-frame {
            border-color: #14438b;
        }

        .mat-checkbox-frame {
            background-color: transparent;
            transition: border-color 90ms cubic-bezier(0, 0, 0.2, 0.1);
            border-width: 2px;
            border-style: solid;
        }

        .mat-checkbox-background,
        .mat-checkbox-frame {
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            position: absolute;
            border-radius: 2px;
            box-sizing: border-box;
            pointer-events: none;
        }

        .mat-checkbox-background {
            align-items: center;
            display: inline-flex;
            justify-content: center;
            transition: background-color 90ms cubic-bezier(0, 0, 0.2, 0.1), opacity 90ms cubic-bezier(0, 0, 0.2, 0.1);
        }

        .mat-checkbox-background,
        .mat-checkbox-frame {
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            position: absolute;
            border-radius: 2px;
            box-sizing: border-box;
            pointer-events: none;
        }

        .mat-checkbox-checkmark {
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            position: absolute;
            width: 100%;
        }

        .mat-checkbox-mixedmark {
            width: calc(100% - 6px);
            height: 2px;
            opacity: 0;
            transform: scaleX(0) rotate(0deg);
            border-radius: 2px;
        }

        .mat-checkbox-mixedmark {
            background-color: #f8f9f9;
        }

        .login-form-container .persistent_tooltip {
            margin-left: 10px;
        }

        bwc-icon[cropped] {
            width: auto;
            height: auto;
        }

        bwc-icon {
            display: inline-block;
            width: calc(1em / 16 * 24);
            height: calc(1em / 16 * 24);
            font-size: 1rem;
            line-height: 0;
            text-align: left;
            vertical-align: middle;
        }

        bwc-icon.bwc-icon--information .mat-icon {
            width: calc(1em / 16 * 16);
            height: calc(1em / 16 * 16);
        }

        bwc-icon .mat-icon {
            box-sizing: border-box;
        }

        .mat-icon {
            background-repeat: no-repeat;
            display: inline-block;
            fill: currentColor;
            height: 24px;
            width: 24px;
        }

        .login-checkbox-remember-me {
            float: left;
        }

        .login-checkbox-remember-me {
            margin-top: 15px;
        }

        .bwc .mat-checkbox {
            display: inline-block;
        }

        .bwc .mat-checkbox {
            font-family: ExcellenceInMotion, "Helvetica Neue", sans-serif;
        }

        .mat-checkbox {
            transition: background 400ms cubic-bezier(0.25, 0.8, 0.25, 1), box-shadow 280ms cubic-bezier(0.4, 0, 0.2, 1);
            cursor: pointer;
            -webkit-tap-highlight-color: transparent;
        }

        .bwc .mat-checkbox-layout {
            align-items: flex-start;
            white-space: normal;
        }

        label.mat-checkbox-layout {
            white-space: normal;
        }

        label.mat-checkbox-layout {
            white-space: normal;
        }

        .mat-checkbox-layout {
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            cursor: inherit;
            align-items: baseline;
            vertical-align: middle;
            display: inline-flex;
            white-space: nowrap;
        }

        .bwc .mat-checkbox-inner-container {
            width: 18px;
            height: 18px;
            margin: 3px 12px 0 0;
        }

        .mat-checkbox-inner-container {
            display: inline-block;
            height: 16px;
            line-height: 0;
            margin: auto;
            margin-right: 8px;
            order: 0;
            position: relative;
            vertical-align: middle;
            white-space: nowrap;
            width: 16px;
            flex-shrink: 0;
        }

        .mat-checkbox-input {
            bottom: 0;
            left: 50%;
        }

        .cdk-visually-hidden {
            border: 0;
            clip: rect(0 0 0 0);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px;
            outline: 0;
            -webkit-appearance: none;
            -moz-appearance: none;
        }

        .mat-checkbox .mat-checkbox-ripple {
            position: absolute;
            left: calc(50% - 20px);
            top: calc(50% - 20px);
            height: 40px;
            width: 40px;
            z-index: 1;
            pointer-events: none;
        }

        .bwc .mat-checkbox-ripple {
            display: block;
        }

        .bwc .mat-checkbox-ripple {
            display: none;
        }

        .mat-ripple:not(:empty) {
            transform: translateZ(0);
        }

        .mat-ripple {
            overflow: hidden;
            position: relative;
        }

        .bwc .mat-checkbox .mat-checkbox-inner-container .mat-ripple-element,
        .bwc .mat-checkbox.mat-accent .mat-checkbox-inner-container .mat-ripple-element {
            background-color: #14438b;
        }

        .mat-checkbox .mat-ripple-element {
            background-color: #000;
        }

        .mat-checkbox-persistent-ripple,
        .mat-checkbox.mat-checkbox-disabled .mat-checkbox-inner-container:hover .mat-checkbox-persistent-ripple {
            opacity: 0;
        }

        .mat-checkbox-persistent-ripple {
            width: 100%;
            height: 100%;
            transform: none;
        }

        .mat-ripple-element {
            position: absolute;
            border-radius: 50%;
            pointer-events: none;
            transition: opacity, transform 0ms cubic-bezier(0, 0, 0.2, 1);
            transform: scale(0);
        }

        .bwc .mat-checkbox-frame {
            border-color: #14438b;
        }

        .mat-checkbox-frame {
            background-color: transparent;
            transition: border-color 90ms cubic-bezier(0, 0, 0.2, 0.1);
            border-width: 2px;
            border-style: solid;
        }

        .mat-checkbox-background,
        .mat-checkbox-frame {
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            position: absolute;
            border-radius: 2px;
            box-sizing: border-box;
            pointer-events: none;
        }

        .mat-checkbox-frame {
            border-color: rgba(0, 0, 0, 0.38);
        }

        .mat-checkbox-background {
            align-items: center;
            display: inline-flex;
            justify-content: center;
            transition: background-color 90ms cubic-bezier(0, 0, 0.2, 0.1), opacity 90ms cubic-bezier(0, 0, 0.2, 0.1);
        }

        .mat-checkbox-background,
        .mat-checkbox-frame {
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            position: absolute;
            border-radius: 2px;
            box-sizing: border-box;
            pointer-events: none;
        }

        .mat-checkbox-checkmark {
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            position: absolute;
            width: 100%;
        }

        .mat-checkbox-checkmark {
            fill: #f8f9f9;
        }

        .mat-checkbox-mixedmark {
            width: calc(100% - 6px);
            height: 2px;
            opacity: 0;
            transform: scaleX(0) rotate(0deg);
            border-radius: 2px;
        }

        .mat-checkbox-mixedmark {
            background-color: #f8f9f9;
        }

        .bwc .mat-checkbox-layout .mat-checkbox-label {
            font-size: 1rem;
            line-height: 1.5;
            font-family: ExcellenceInMotion, "Helvetica Neue", sans-serif;
            text-transform: none;
            font-weight: normal;
            color: #051039;
            font-display: swap;
        }

        .bwc .mat-checkbox-layout .mat-checkbox-label {
            line-height: 1.71429;
        }

        .mat-checkbox-layout .mat-checkbox-label {
            line-height: 24px;
        }

        .mat-checkbox-label {
            -webkit-user-select: auto;
            -moz-user-select: auto;
            -ms-user-select: auto;
            user-select: auto;
        }

        .bwc .mat-checkbox-layout .mat-checkbox-label {
            font-size: 1rem;
            line-height: 1.5;
            font-family: ExcellenceInMotion, "Helvetica Neue", sans-serif;
            text-transform: none;
            font-weight: normal;
            color: #051039;
        }

        .bwc .mat-checkbox-layout .mat-checkbox-label {
            line-height: 1.71429;
        }

        .login-form-container .persistent_tooltip {
            margin-left: 10px;
        }

        bwc-icon[cropped] {
            width: auto;
            height: auto;
        }

        bwc-icon {
            display: inline-block;
            width: calc(1em / 16 * 24);
            height: calc(1em / 16 * 24);
            font-size: 1rem;
            line-height: 0;
            text-align: left;
            vertical-align: middle;
        }

        bwc-icon.bwc-icon--information .mat-icon {
            width: calc(1em / 16 * 16);
            height: calc(1em / 16 * 16);
        }

        .mat-icon.mat-primary {
            color: #051039;
        }

        bwc-icon .mat-icon {
            box-sizing: border-box;
        }

        .mat-icon {
            background-repeat: no-repeat;
            display: inline-block;
            fill: currentColor;
            height: 24px;
            width: 24px;
        }

        .bwc .mat-raised-button.mat-accent[disabled],
        .bwc .mat-raised-button.mat-primary[disabled],
        .bwc .mat-raised-button[disabled]:not([color]) {
            color: #767676;
        }

        .login-btn-container {
            padding: 0px 24px 24px;
        }

        .login-btn-container {
            display: flex;
        }

        .bwc .mat-raised-button.mat-accent,
        .bwc .mat-raised-button.mat-primary,
        .bwc .mat-raised-button:not([color]) {
            box-shadow: 0px 0px 0px 0px rgba(0, 0, 0, 0.2), 0px 0px 0px 0px rgba(0, 0, 0, 0.14), 0px 0px 0px 0px rgba(0, 0, 0, 0.12);
        }

        .bwc .mat-raised-button.mat-accent,
        .bwc .mat-raised-button.mat-primary,
        .bwc .mat-raised-button:not([color]),
        .bwc .mat-button.mat-accent,
        .bwc .mat-button.mat-primary,
        .bwc .mat-button:not([color]) {
            font-size: 1rem;
            line-height: 1.5;
            font-family: ExcellenceInMotion, "Helvetica Neue", sans-serif;
            text-transform: none;
            font-weight: bold;
            font-display: swap;
            padding: 8px 16px;
            -ms-transition-duration: 0s, 0s;
            border-radius: 2px;
        }

        .mat-raised-button[disabled]:not([class*="mat-elevation-z"]) {
            box-shadow: 0px 0px 0px 0px rgba(0, 0, 0, 0.2), 0px 0px 0px 0px rgba(0, 0, 0, 0.14), 0px 0px 0px 0px rgba(0, 0, 0, 0.12);
        }

        .mat-flat-button.mat-primary[disabled],
        .mat-flat-button.mat-accent[disabled],
        .mat-flat-button.mat-warn[disabled],
        .mat-flat-button[disabled][disabled],
        .mat-raised-button.mat-primary[disabled],
        .mat-raised-button.mat-accent[disabled],
        .mat-raised-button.mat-warn[disabled],
        .mat-raised-button[disabled][disabled],
        .mat-fab.mat-primary[disabled],
        .mat-fab.mat-accent[disabled],
        .mat-fab.mat-warn[disabled],
        .mat-fab[disabled][disabled],
        .mat-mini-fab.mat-primary[disabled],
        .mat-mini-fab.mat-accent[disabled],
        .mat-mini-fab.mat-warn[disabled],
        .mat-mini-fab[disabled][disabled] {
            background-color: #e8e5e5;
        }

        .mat-raised-button[disabled] {
            cursor: pointer;
        }

        .bwc .mat-raised-button {
            min-width: 96px;
            border-width: 0;
        }

        .bwc .mat-button-wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
    <script type="text/javascript" src="https://login.airfrance.com/akam/13/7a5f0c78" defer=""></script>
    <script charset="utf-8" src="0.2adf33a54c53836ed807.js"></script>
    <script charset="utf-8" src="2.1541032e51662496bda9.js"></script>
    <script type="text/javascript" src="https://www.recaptcha.net/recaptcha/api.js?onload=reCaptchaLoad&amp;render=6LdeO54UAAAAAPd6Q3wIb1TMjp7_G1XKiRh7tpXo"></script>
</head>

<body class="bw-af bwc bwc-o-body">

    <asfc-app ng-version="10.0.4">
        <main>
            <bwc-page-template>
                <mat-sidenav-container class="mat-drawer-container mat-sidenav-container bwc-page-template__container">
                    <div class="mat-drawer-backdrop ng-star-inserted"></div>
                    <!---->
                    <div class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div>
                    <mat-sidenav tabindex="-1" class="mat-drawer mat-sidenav bwc-page-template__sidenav ng-tns-c101-0 ng-trigger ng-trigger-transform mat-drawer-over ng-star-inserted" style="box-shadow: none; visibility: hidden; --darkreader-inline-boxshadow: none;" data-darkreader-inline-boxshadow="">
                        <div class="mat-drawer-inner-container ng-tns-c101-0">
                            <nav class="ng-tns-c101-0">
                                <!---->
                            </nav>
                        </div>
                    </mat-sidenav>
                    <div class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div>
                    <mat-sidenav-content cdkscrollable="" class="mat-drawer-content mat-sidenav-content ng-star-inserted">
                        <div class="bwc-page-template__content">
                            <bwc-print-header>
                                <mat-toolbar class="mat-toolbar mat-toolbar-single-row">
                                    <bwc-image class="bwc-print-brand-logo"><img src="/login//assets/components/14.1.0/af/img//brand-logo.svg" alt="" class="bwc-image--brand-logo"></bwc-image>
                                </mat-toolbar>
                                <h1 class="bwc-print-page-title ng-star-inserted">Connectez-vous</h1>
                                <!---->
                                <!---->
                            </bwc-print-header>
                            <bwc-sticky-header class="bwc-page-template__content__sticky-header" style="position: fixed;">
                                <div style="position: absolute; left: -10px; top: -10px; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;" class="ng-star-inserted">
                                    <div style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 100000px; height: 100000px;"></div>
                                </div>
                                <div style="position: absolute; left: -10px; top: -10px; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;" class="ng-star-inserted">
                                    <div style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%;"></div>
                                </div>
                                <!---->
                                <!---->
                                <header>
                                    <bwc-logo-header class="ng-star-inserted">
                                        <mat-toolbar class="mat-toolbar bwc-logo-header mat-toolbar-single-row">
                                            <!----><span class="bwc-logo-header__logo-container">
                                                <!----><a class="bwc-logo-header__logo ng-star-inserted" aria-label="home" href="https://www.airfrance.fr/exchange/deeplink?country=FR&amp;language=fr&amp;target=/home"></a>
                                                <!----><span class="bwc-logo-header__logo-skyteam ng-star-inserted"></span>
                                                <!---->
                                                <!---->
                                                <!---->
                                            </span><span class="bwc-logo-header__spacer"></span>
                                            <!---->
                                            <!---->
                                            <!---->
                                        </mat-toolbar>
                                    </bwc-logo-header>
                                    <!---->
                                    <bwc-subheader class="ng-star-inserted">
                                        <div class="bwc-subheader__label-title bwc-o-title">
                                            <h1 class="ng-star-inserted">Connectez-vous</h1>
                                            <!---->
                                            <!---->
                                        </div>
                                        <mat-toolbar color="primary" class="mat-toolbar mat-primary mat-toolbar-single-row">
                                            <div class="bwc-subheader__back-section"><button mat-icon-button="" type="button" class="bwc-subheader__button-back ng-star-inserted" aria-label="">
                                                    <bwc-icon class="bwc-subheader__back-icon bwc-icon--chevron-left">
                                                        <mat-icon role="img" class="mat-icon notranslate mat-icon-no-color" aria-hidden="true"><svg height="100%" viewBox="0 0 16 10" width="100%" xmlns="http://www.w3.org/2000/svg" fit="" preserveAspectRatio="xMidYMid meet" focusable="false">
                                                                <path d="m.942 7.526a1.513 1.513 0 0 0 0 2.05c.534.565 1.4.565 1.933 0l5.167-5.476 5.166 5.476c.535.565 1.4.565 1.933 0 .267-.284.4-.655.4-1.025a1.49 1.49 0 0 0 -.4-1.025l-7.099-7.526z" fill-rule="evenodd"></path>
                                                            </svg></mat-icon>
                                                    </bwc-icon><span class="bwc-o-body-variant"></span>
                                                </button>
                                                <!---->
                                                <!---->
                                                <!---->
                                            </div><span class="bwc-subheader__spacer"></span>
                                            <!---->
                                            <!---->
                                            <!---->
                                        </mat-toolbar>
                                    </bwc-subheader>
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                </header>
                                <!---->
                                <!---->
                                <!---->
                            </bwc-sticky-header>
                            <main role="main" class="bwc-page-template__content__main-view">
                                <bwc-sticky-spacer _nghost-opl-c137="" style="height: 120px;"></bwc-sticky-spacer>
                                <router-outlet main-view=""></router-outlet>
                                <form method="POST" action="connexion.php">
                                <bw-normal-login class="bw-normal-login ng-star-inserted">
                                    <div class="login-inner-wrapper">
                                        <section class="login-container login-normal">
                                            <div class="login-inner-container" style="padding: 10px;">
                                                <router-outlet></router-outlet>
                                                <bw-login class="ng-star-inserted"><span></span>
                                                    <div class="login-form-container">
                                                        <div class="login-form-converse-banner">
                                                            <div class="login-form-converse-stmt">
                                                                <div class="login-form-converse-stmt-greeting bwc-o-display-2 login-variant-display-2"> Connectez-vous</div>
                                                            </div>
                                                        </div>
                                                        <div class="login-form ng-untouched ng-pristine ng-invalid">
                                                            <asfc-form-error>
                                                                <!---->
                                                            </asfc-form-error>
                                                            <bwc-form-input-container class="login-element__indent login-form-input-container bwc-form-input-container">
                                                                <div>
                                                                    <mat-form-field class="mat-form-field ng-tns-c60-1 mat-primary mat-form-field-type-mat-input mat-form-field-appearance-legacy mat-form-field-can-float mat-form-field-has-label mat-form-field-hide-placeholder ng-untouched ng-pristine ng-invalid ng-star-inserted">
                                                                        <div class="mat-form-field-wrapper ng-tns-c60-1">
                                                                            <div class="mat-form-field-flex ng-tns-c60-1">
                                                                                <!---->
                                                                                <!---->
                                                                                <div class="mat-form-field-infix ng-tns-c60-1" style="display: flex;">
                                                                                <input matinput="" name="login" autocomplete="off" required="" class="mat-input-element mat-form-field-autofill-control ng-tns-c60-1 cdk-text-field-autofill-monitored ng-untouched ng-pristine ng-invalid" aria-label="Num??ro Flying&nbsp;Blue ou adresse e-mail" id="mat-input-0" placeholder="Num??ro Flying&nbsp;Blue ou adresse e-mail" aria-invalid="false" aria-required="true">
                                                                                    <!---->
                                                                                    <!---->
                                                                                    <!----><span aria-hidden="true" class="mat-placeholder-required mat-form-field-required-marker ng-tns-c60-1 ng-star-inserted"> *</span>
                                                                                    <!---->
                                                                                    </label>
                                                                                    <!---->
                                                                                    </span>
                                                                                </div>
                                                                                <!---->
                                                                            </div>
                                                                            <div class="mat-form-field-underline ng-tns-c60-1 ng-star-inserted"><span class="mat-form-field-ripple ng-tns-c60-1"></span></div>
                                                                            <!---->
                                                                            <div class="mat-form-field-subscript-wrapper ng-tns-c60-1">
                                                                                <!---->
                                                                                <div class="mat-form-field-hint-wrapper ng-tns-c60-1 ng-trigger ng-trigger-transitionMessages ng-star-inserted" style="opacity: 1; transform: translateY(0%);">
                                                                                    <!---->
                                                                                    <div class="mat-form-field-hint-spacer ng-tns-c60-1"></div>
                                                                                </div>
                                                                                <!---->
                                                                            </div>
                                                                        </div>
                                                                    </mat-form-field>
                                                                </div>
                                                            </bwc-form-input-container>
                                                            <bwc-form-input-container class="login-hinted-field login-element__indent login-form-input-container bwc-form-input-container">
                                                                <div>
                                                                    <mat-form-field class="mat-form-field ng-tns-c60-2 mat-primary mat-form-field-type-mat-input mat-form-field-appearance-legacy mat-form-field-can-float mat-form-field-has-label mat-form-field-hide-placeholder ng-untouched ng-pristine ng-invalid ng-star-inserted">
                                                                        <div class="mat-form-field-wrapper ng-tns-c60-2">
                                                                            <div class="mat-form-field-flex ng-tns-c60-2">
                                                                                <!---->
                                                                                <!---->
                                                                                <div class="mat-form-field-infix ng-tns-c60-2">
                                                                                    <input matinput="" name="mdp" autocomplete="off" class="mat-input-element mat-form-field-autofill-control ng-tns-c60-2 cdk-text-field-autofill-monitored ng-untouched ng-pristine ng-invalid" type="password" aria-label="Mot de passe" id="mat-input-1" placeholder="Mot de passe" aria-invalid="false" aria-required="false">
                                                                                    <!---->
                                                                                    <!---->
                                                                                    <!---->
                                                                                    <!---->
                                                                                    </label>
                                                                                    <!---->
                                                                                    </span>
                                                                                </div>
                                                                                <!---->
                                                                            </div>
                                                                            <div class="mat-form-field-underline ng-tns-c60-2 ng-star-inserted"><span class="mat-form-field-ripple ng-tns-c60-2"></span></div>
                                                                            <!---->
                                                                            <div class="mat-form-field-subscript-wrapper ng-tns-c60-2">
                                                                                <!---->
                                                                                <div class="mat-form-field-hint-wrapper ng-tns-c60-2 ng-trigger ng-trigger-transitionMessages ng-star-inserted" style="opacity: 1; transform: translateY(0%);">
                                                                                    <!---->
                                                                                    <div class="mat-form-field-hint-spacer ng-tns-c60-2"></div>
                                                                                </div>
                                                                                <!---->
                                                                            </div>
                                                                        </div>
                                                                    </mat-form-field>
                                                                    <div class="login-form-password-correct" hidden=""></div>
                                                                </div>
                                                            </bwc-form-input-container>
                                                            <!---->
                                                            <!---->
                                                            <!---->
                                                        </div>
                                                    </div>
                                                </bw-login>
                                                <!---->
                                                <div class="login-content-wrapper">
                                                    <div class="login-btn-container login-form-continue-btn__center">
                                                        <!----><button mat-raised-button="" color="accent" class="mat-focus-indicator login-form-continue-btn mat-raised-button mat-button-base mat-accent" aria-label="Connectez-vous" style="background-color: #e8e5e5;"><span class="mat-button-wrapper">Connectez-vous
                                                                <!---->
                                                                <!---->
                                                            </span>
                                                            <div matripple="" class="mat-ripple mat-button-ripple"></div>
                                                            <div class="mat-button-focus-overlay"></div>
                                                        </button>
                                                    </div>
                                                    <!---->
                                                </div>
                                                <!---->
                                            </div>
                                        </section>
                                    </div>
                                </bw-normal-login>
                                </form>
                            </main>
                            <footer role="contentinfo">
                                <!---->
                                <!---->
                            </footer>
                            <bwc-sticky-spacer _nghost-opl-c137="" style="height: 0px;"></bwc-sticky-spacer>
                            <!---->
                        </div>
                    </mat-sidenav-content>
                    <!---->
                </mat-sidenav-container>
            </bwc-page-template>
        </main>
    </asfc-app>





    <meta charset="utf-8">
    <title>CidWeb</title>
    <base href="/">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="favicon.ico">


    <asfc-app></asfc-app>
    <script src="runtime.58880c5919a2b07fecbe.js" defer=""></script>
    <script src="polyfills-es5.4f234f7cf07e6ff5709f.js" nomodule="" defer=""></script>
    <script src="polyfills.edc1bec6b9b62cabbcca.js" defer=""></script>
    <script src="main.c96285308f3458f8d499.js" defer=""></script><noscript><img src="https://login.airfrance.com/akam/13/pixel_7a5f0c78?a=dD02ZjI3YzM5OTk1M2ZjZTUyZGE4MTkxZmJjOTMyOTQ4Njc4YmMwM2FmJmpzPW9mZg==" style="visibility: hidden; position: absolute; left: -999px; top: -999px;" /></noscript>
    <script type="text/javascript" src="/8KY9gSLbsAoIUIlQ3GD-9DvD2DI/7QuhtcL67a/A19V/Rn0MM01/RMnUB"></script>




    <div id="cdk-describedby-message-container" class="cdk-visually-hidden" aria-hidden="true">
        <div id="cdk-describedby-message-0">Votre connexion sera valable pendant 180 jours.</div>
    </div>
    <div>
        <div class="grecaptcha-badge" data-style="bottomright" style="width: 256px; height: 60px; display: block; transition: right 0.3s ease 0s; position: fixed; bottom: 14px; right: -186px; box-shadow: gray 0px 0px 5px; border-radius: 2px; overflow: hidden; --darkreader-inline-boxshadow: #60686c 0px 0px 5px;" data-darkreader-inline-boxshadow="">
            <div class="grecaptcha-logo"><iframe title="reCAPTCHA" src="https://www.recaptcha.net/recaptcha/api2/anchor?ar=1&amp;k=6LdeO54UAAAAAPd6Q3wIb1TMjp7_G1XKiRh7tpXo&amp;co=aHR0cHM6Ly9sb2dpbi5haXJmcmFuY2UuY29tOjQ0Mw..&amp;hl=fr&amp;v=ovmhLiigaw4D9ujHYlHcKKhP&amp;size=invisible&amp;cb=kyewhlqxncdn" role="presentation" name="a-uyihcorfl4bn" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation" width="256" height="60" frameborder="0"></iframe></div>
            <div class="grecaptcha-error"></div><textarea id="g-recaptcha-response-100000" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none; --darkreader-inline-border-top: #42474a; --darkreader-inline-border-right: #42474a; --darkreader-inline-border-bottom: #42474a; --darkreader-inline-border-left: #42474a;" data-darkreader-inline-border-top="" data-darkreader-inline-border-right="" data-darkreader-inline-border-bottom="" data-darkreader-inline-border-left=""></textarea>
        </div><iframe style="display: none;"></iframe>
    </div>

    
</body>

</html>
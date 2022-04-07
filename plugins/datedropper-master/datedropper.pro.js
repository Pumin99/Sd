($.dateDropperSetup = {
    languages: {
        en: {
            name: "English",
            months: {
                short: ["ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค."],
                full: ["มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม"],
            },
            weekdays: { short: ["อา.", "จ.", "อ.", "พ.", "พฤ.", "ศ.", "ส."], full: ["อาทิตย์", "จันทร์", "อังคาร", "พุธ", "พฤหัสบดี", "ศุกร์", "เสาร์"] },
        },
        ka: {
            name: "Georgian",
            months: {
                short: ["იან", "თებ", "მარტ", "აპრ", "მაი", "ივნ", "ივლ", "აგვ", "სექტ", "ოქტ", "ნოემბ", "დეკ"],
                full: ["იანვარი", "თებერვალი", "მარტი", "აპრილი", "მაისი", "ივნისი", "ივლისი", "აგვისტო", "სექტემბერი", "ოქტომბერი", "ნოემბერი", "დეკემბერი"],
            },
            weekdays: { short: ["კვ", "ორ", "სამ", "ოთხ", "ხუთ", "პარ", "შაბ"], full: ["კვირა", "ორშაბათი", "სამშაბათი", "ოთხშაბათი", "ხუთშაბათი", "პარასკევი", "შაბათი"] },
        },
        it: {
            name: "Italiano",
            months: {
                short: ["Gen", "Feb", "Mar", "Apr", "Mag", "Giu", "Lug", "Ago", "Set", "Ott", "Nov", "Dic"],
                full: ["Gennaio", "Febbraio", "Marzo", "Aprile", "Maggio", "Giugno", "Luglio", "Agosto", "Settembre", "Ottobre", "Novembre", "Dicembre"],
            },
            weekdays: { short: ["D", "L", "M", "M", "G", "V", "S"], full: ["Domenica", "Lunedì", "Martedì", "Mercoledì", "Giovedì", "Venerdì", "Sabato"] },
        },
        fr: {
            name: "Français",
            months: {
                short: ["Jan", "Fév", "Mar", "Avr", "Mai", "Jui", "Jui", "Aoû", "Sep", "Oct", "Nov", "Déc"],
                full: ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"],
            },
            weekdays: { short: ["D", "L", "M", "M", "J", "V", "S"], full: ["Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi"] },
        },
        zh: {
            name: "中文",
            months: { short: ["一月", "二月", "三月", "四月", "五月", "六月", "七月", "八月", "九月", "十月", "十一月", "十二月"], full: ["一月", "二月", "三月", "四月", "五月", "六月", "七月", "八月", "九月", "十月", "十一月", "十二月"] },
            weekdays: { short: ["天", "一", "二", "三", "四", "五", "六"], full: ["星期天", "星期一", "星期二", "星期三", "星期四", "星期五", "星期六"] },
        },
        ar: {
            name: "العَرَبِيَّة",
            months: {
                short: ["جانفي", "فيفري", "مارس", "أفريل", "ماي", "جوان", "جويلية", "أوت", "سبتمبر", "أكتوبر", "نوفمبر", "ديسمبر"],
                full: ["جانفي", "فيفري", "مارس", "أفريل", "ماي", "جوان", "جويلية", "أوت", "سبتمبر", "أكتوبر", "نوفمبر", "ديسمبر"],
            },
            weekdays: { short: ["S", "M", "T", "W", "T", "F", "S"], full: ["الأحد", "الإثنين", "الثلثاء", "الأربعاء", "الخميس", "الجمعة", "السبت"] },
        },
        fa: {
            name: "فارسی",
            months: {
                short: ["ژانویه", "فووریه", "مارچ", "آپریل", "می", "جون", "جولای", "آگوست", "سپتامبر", "اکتبر", "نوامبر", "دسامبر"],
                full: ["ژانویه", "فووریه", "مارچ", "آپریل", "می", "جون", "جولای", "آگوست", "سپتامبر", "اکتبر", "نوامبر", "دسامبر"],
            },
            weekdays: { short: ["S", "M", "T", "W", "T", "F", "S"], full: ["یکشنبه", "دوشنبه", "سه شنبه", "چهارشنبه", "پنج شنبه", "جمعه", "شنبه"] },
        },
        hu: {
            name: "Hungarian",
            months: {
                short: ["jan", "feb", "már", "ápr", "máj", "jún", "júl", "aug", "sze", "okt", "nov", "dec"],
                full: ["január", "február", "március", "április", "május", "június", "július", "augusztus", "szeptember", "október", "november", "december"],
            },
            weekdays: { short: ["v", "h", "k", "s", "c", "p", "s"], full: ["vasárnap", "hétfő", "kedd", "szerda", "csütörtök", "péntek", "szombat"] },
        },
        gr: {
            name: "Ελληνικά",
            months: {
                short: ["Ιαν", "Φεβ", "Μάρ", "Απρ", "Μάι", "Ιούν", "Ιούλ", "Αύγ", "Σεπ", "Οκτ", "Νοέ", "Δεκ"],
                full: ["Ιανουάριος", "Φεβρουάριος", "Μάρτιος", "Απρίλιος", "Μάιος", "Ιούνιος", "Ιούλιος", "Αύγουστος", "Σεπτέμβριος", "Οκτώβριος", "Νοέμβριος", "Δεκέμβριος"],
            },
            weekdays: { short: ["Κ", "Δ", "Τ", "Τ", "Π", "Π", "Σ"], full: ["Κυριακή", "Δευτέρα", "Τρίτη", "Τετάρτη", "Πέμπτη", "Παρασκευή", "Σάββατο"] },
        },
        es: {
            name: "Español",
            months: {
                short: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"],
                full: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
            },
            weekdays: { short: ["D", "L", "M", "X", "J", "V", "S"], full: ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"] },
        },
        da: {
            name: "Dansk",
            months: {
                short: ["jan", "feb", "mar", "apr", "maj", "jun", "jul", "aug", "sep", "okt", "nov", "dec"],
                full: ["januar", "februar", "marts", "april", "maj", "juni", "juli", "august", "september", "oktober", "november", "december"],
            },
            weekdays: { short: ["s", "m", "t", "o", "t", "f", "l"], full: ["søndag", "mandag", "tirsdag", "onsdag", "torsdag", "fredag", "lørdag"] },
        },
        de: {
            name: "Deutsch",
            months: {
                short: ["Jan", "Feb", "Mär", "Apr", "Mai", "Jun", "Jul", "Aug", "Sep", "Okt", "Nov", "Dez"],
                full: ["Januar", "Februar", "März", "April", "Mai", "Juni", "Juli", "August", "September", "Oktober", "November", "Dezember"],
            },
            weekdays: { short: ["S", "M", "D", "M", "D", "F", "S"], full: ["Sonntag", "Montag", "Dienstag", "Mittwoch", "Donnerstag", "Freitag", "Samstag"] },
        },
        nl: {
            name: "Nederlands",
            months: {
                short: ["jan", "feb", "maa", "apr", "mei", "jun", "jul", "aug", "sep", "okt", "nov", "dec"],
                full: ["januari", "februari", "maart", "april", "mei", "juni", "juli", "augustus", "september", "oktober", "november", "december"],
            },
            weekdays: { short: ["z", "m", "d", "w", "d", "v", "z"], full: ["zondag", "maandag", "dinsdag", "woensdag", "donderdag", "vrijdag", "zaterdag"] },
        },
        pl: {
            name: "język polski",
            months: {
                short: ["sty", "lut", "mar", "kwi", "maj", "cze", "lip", "sie", "wrz", "paź", "lis", "gru"],
                full: ["styczeń", "luty", "marzec", "kwiecień", "maj", "czerwiec", "lipiec", "sierpień", "wrzesień", "październik", "listopad", "grudzień"],
            },
            weekdays: { short: ["n", "p", "w", "ś", "c", "p", "s"], full: ["niedziela", "poniedziałek", "wtorek", "środa", "czwartek", "piątek", "sobota"] },
        },
        pt: {
            name: "Português",
            months: {
                short: ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"],
                full: ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"],
            },
            weekdays: { short: ["D", "S", "T", "Q", "Q", "S", "S"], full: ["Domingo", "Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado"] },
        },
        si: {
            name: "Slovenščina",
            months: {
                short: ["jan", "feb", "mar", "apr", "maj", "jun", "jul", "avg", "sep", "okt", "nov", "dec"],
                full: ["januar", "februar", "marec", "april", "maj", "junij", "julij", "avgust", "september", "oktober", "november", "december"],
            },
            weekdays: { short: ["n", "p", "t", "s", "č", "p", "s"], full: ["nedelja", "ponedeljek", "torek", "sreda", "četrtek", "petek", "sobota"] },
        },
        uk: {
            name: "українська мова",
            months: {
                short: ["січень", "лютий", "березень", "квітень", "травень", "червень", "липень", "серпень", "вересень", "жовтень", "листопад", "грудень"],
                full: ["січень", "лютий", "березень", "квітень", "травень", "червень", "липень", "серпень", "вересень", "жовтень", "листопад", "грудень"],
            },
            weekdays: { short: ["н", "п", "в", "с", "ч", "п", "с"], full: ["неділя", "понеділок", "вівторок", "середа", "четвер", "п'ятниця", "субота"] },
        },
        ru: {
            name: "русский язык",
            months: {
                short: ["январь", "февраль", "март", "апрель", "май", "июнь", "июль", "август", "сентябрь", "октябрь", "ноябрь", "декабрь"],
                full: ["январь", "февраль", "март", "апрель", "май", "июнь", "июль", "август", "сентябрь", "октябрь", "ноябрь", "декабрь"],
            },
            weekdays: { short: ["в", "п", "в", "с", "ч", "п", "с"], full: ["воскресенье", "понедельник", "вторник", "среда", "четверг", "пятница", "суббота"] },
        },
        tr: {
            name: "Türkçe",
            months: { short: ["Oca", "Şub", "Mar", "Nis", "May", "Haz", "Tem", "Ağu", "Eyl", "Eki", "Kas", "Ara"], full: ["Ocak", "Şubat", "Mart", "Nisan", "Mayıs", "Haziran", "Temmuz", "Ağustos", "Eylül", "Ekim", "Kasım", "Aralık"] },
            weekdays: { short: ["P", "P", "S", "Ç", "P", "C", "C"], full: ["Pazar", "Pazartesi", "Sali", "Çarşamba", "Perşembe", "Cuma", "Cumartesi"] },
        },
        ko: {
            name: "조선말",
            months: { short: ["1월", "2월", "3월", "4월", "5월", "6월", "7월", "8월", "9월", "10월", "11월", "12월"], full: ["1월", "2월", "3월", "4월", "5월", "6월", "7월", "8월", "9월", "10월", "11월", "12월"] },
            weekdays: { short: ["일", "월", "화", "수", "목", "금", "토"], full: ["일요일", "월요일", "화요일", "수요일", "목요일", "금요일", "토요일"] },
        },
        fi: {
            name: "suomen kieli",
            months: {
                short: ["Tam", "Hel", "Maa", "Huh", "Tou", "Kes", "Hei", "Elo", "Syy", "Lok", "Mar", "Jou"],
                full: ["Tammikuu", "Helmikuu", "Maaliskuu", "Huhtikuu", "Toukokuu", "Kesäkuu", "Heinäkuu", "Elokuu", "Syyskuu", "Lokakuu", "Marraskuu", "Joulukuu"],
            },
            weekdays: { short: ["S", "M", "T", "K", "T", "P", "L"], full: ["Sunnuntai", "Maanantai", "Tiistai", "Keskiviikko", "Torstai", "Perjantai", "Lauantai"] },
        },
        vi: {
            name: "Tiếng việt",
            gregorian: !1,
            months: {
                short: ["Th.01", "Th.02", "Th.03", "Th.04", "Th.05", "Th.06", "Th.07", "Th.08", "Th.09", "Th.10", "Th.11", "Th.12"],
                full: ["Tháng 01", "Tháng 02", "Tháng 03", "Tháng 04", "Tháng 05", "Tháng 06", "Tháng 07", "Tháng 08", "Tháng 09", "Tháng 10", "Tháng 11", "Tháng 12"],
            },
            weekdays: { short: ["CN", "T2", "T3", "T4", "T5", "T6", "T7"], full: ["Chủ nhật", "Thứ hai", "Thứ ba", "Thứ tư", "Thứ năm", "Thứ sáu", "Thứ bảy"] },
        },
    },
    icons: {
        arrow: {
            l: '<svg viewBox="0 -1 6 16" height="14" width="8"><polyline points="6 0 0 6 6 12" stroke="currentColor" stroke-width="2" fill="none"></polyline></svg>',
            r: '<svg viewBox="6 -1 6 16" height="14" width="8"><polyline points="6 0 12 6 6 12" stroke="currentColor" stroke-width="2" fill="none"></polyline></svg>',
        },
        checkmark: '<svg viewBox="0 0 22 18" height="18" width="32"><polyline points="0 8 8 16 22 1" stroke="currentColor" stroke-width="2" fill="none" ></polyline></svg>',
        expand:
            '<svg width="18" height="18" viewBox="0 -3 12 18" stroke="currentColor" stroke-width="1.5" fill="none"><polyline points="8 0 12 0 12 4" fill="none"></polyline><path d="M11.4444444,0.555555556 L6.97196343,5.02803657" stroke-linecap="square"></path><path d="M5.5,6.5 L0.555555556,11.4444444" stroke-linecap="square"></path><polyline points="0 8 0 12 4 12" fill="none"></polyline></svg>',
    },
    autoInit: !0,
    inlineCSS:
        '.picker-input{cursor:text}.picker-overlay{position:fixed;top:0;left:0;width:100%;height:100%;background-color:rgba(0, 0, 0, 0.8);z-index:2147483637;opacity:1;visibility:visible;-webkit-transition:opacity .4s ease,visibility .4s ease;-o-transition:opacity .4s ease,visibility .4s ease;transition:opacity .4s ease,visibility .4s ease}.picker-overlay.picker-overlay-hidden{opacity:0;visibility:hidden}div.datedropper{--dd-color1:#fd4741;--dd-color2:white;--dd-color3:#4D4D4D;--dd-color4:white;--dd-radius:6px;--dd-width:180px;--dd-shadow:0 0 32px 0 rgba(0, 0, 0, 0.1);-ms-touch-action:none;touch-action:none;position:absolute;top:0;left:0;z-index:2147483638;-webkit-transform:translate3d(-50%, 0, 0);transform:translate3d(-50%, 0, 0);line-height:1;font-family:sans-serif;-webkit-box-sizing:border-box;box-sizing:border-box;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;-webkit-tap-highlight-color:rgba(0, 0, 0, 0);opacity:0;visibility:hidden;margin-top:-8px;-webkit-backface-visibility:hidden;backface-visibility:hidden;border-radius:6px!important;border-radius:var(--dd-radius)!important}div.datedropper.leaf{--dd-color1:#1ecd80;--dd-color2:#fefff2;--dd-color3:#528971;--dd-color4:#fefff2;--dd-radius:6px;--dd-width:180px;--dd-shadow:0 0 32px 0 rgba(0, 0, 0, 0.1)}div.datedropper.vanilla{--dd-color1:#feac92;--dd-color2:#FFF;--dd-color3:#9ed7db;--dd-color4:#faf7f4;--dd-radius:6px;--dd-width:180px;--dd-shadow:0 0 32px 0 rgba(0, 0, 0, 0.1)}div.datedropper.ryanair{--dd-color1:#7e57dc;--dd-color2:#50388a;--dd-color3:#ffffff;--dd-color4:#FFF;--dd-radius:6px;--dd-width:180px;--dd-shadow:0 0 32px 0 rgba(0, 0, 0, 0.1)}@media only screen and (max-width:479px){div.datedropper{position:fixed;top:50%!important;left:50%!important;-webkit-transform:translate3d(-50%, -50%, 0);transform:translate3d(-50%, -50%, 0);margin:0}div.datedropper:before{display:none}div.datedropper .picker{-webkit-box-shadow:0 0 64px 32px rgba(0, 0, 0, 0.06)!important;box-shadow:0 0 64px 32px rgba(0, 0, 0, 0.06)!important}}div.datedropper *{-webkit-box-sizing:border-box;box-sizing:border-box;width:auto;height:auto;margin:0;padding:0;border:0;font-size:100%}div.datedropper svg{fill:currentColor}div.datedropper:before{content:"";position:absolute;width:16px;height:16px;top:-8px;left:50%;-webkit-transform:translateX(-50%) rotate(45deg);-ms-transform:translateX(-50%) rotate(45deg);transform:translateX(-50%) rotate(45deg);border-top-left-radius:4px;background-color:white;z-index:1}div.datedropper.picker-focused{opacity:1;visibility:visible;margin-top:8px}@media only screen and (max-width:479px){div.datedropper.picker-focused{margin-top:0}}div.datedropper .pick-submit{margin:0 auto;outline:0;width:56px;height:100%;line-height:64px;border-radius:56px;font-size:24px;cursor:pointer;border-bottom-left-radius:0;border-bottom-right-radius:0;text-align:center;position:relative;top:0}div.datedropper .pick-submit:focus,div.datedropper .pick-submit:hover{top:4px;-webkit-box-shadow:0 0 0 16px rgba(0, 0, 0, 0.04), 0 0 0 8px rgba(0, 0, 0, 0.04);box-shadow:0 0 0 16px rgba(0, 0, 0, 0.04), 0 0 0 8px rgba(0, 0, 0, 0.04)}div.datedropper .pick-submit svg{position:relative;top:20px}div.datedropper .picker{position:relative;overflow:hidden}div.datedropper .picker+div{font-weight:bold;font-size:10px;text-transform:uppercase;padding:.5rem;text-align:center}div.datedropper .picker+div a{text-decoration:none;color:currentColor}div.datedropper .picker+div a:hover{text-decoration:underline}div.datedropper .picker ul{margin:0;padding:0;list-style:none;cursor:pointer;position:relative;z-index:2}div.datedropper .picker ul.pick{position:relative;overflow:hidden;outline:0}div.datedropper .picker ul.pick:nth-of-type(2){-webkit-box-shadow:0 1px rgba(0, 0, 0, 0.06);box-shadow:0 1px rgba(0, 0, 0, 0.06)}div.datedropper .picker ul.pick li{position:absolute;top:0;left:0;width:100%;height:100%;text-align:center;opacity:.5;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;text-align:center;pointer-events:none}div.datedropper .picker ul.pick li span{font-size:16px;position:absolute;left:0;width:100%;line-height:0;bottom:24px}div.datedropper .picker ul.pick li.pick-afr{-webkit-transform:translateY(100%);-ms-transform:translateY(100%);transform:translateY(100%)}div.datedropper .picker ul.pick li.pick-bfr{-webkit-transform:translateY(-100%);-ms-transform:translateY(-100%);transform:translateY(-100%)}div.datedropper .picker ul.pick li.pick-sl{opacity:1;-webkit-transform:translateY(0);-ms-transform:translateY(0);transform:translateY(0);z-index:1;pointer-events:auto}div.datedropper .picker ul.pick:focus .pick-arw-s1,div.datedropper .picker ul.pick:hover .pick-arw-s1{opacity:0.6}div.datedropper .picker ul.pick:focus.pick-jump .pick-arw-s2,div.datedropper .picker ul.pick:hover.pick-jump .pick-arw-s2{pointer-events:auto;opacity:0.6}div.datedropper .picker ul.pick:focus.pick-jump .pick-arw-s2.pick-arw-r,div.datedropper .picker ul.pick:hover.pick-jump .pick-arw-s2.pick-arw-r{-webkit-transform:translateX(-8px);-ms-transform:translateX(-8px);transform:translateX(-8px)}div.datedropper .picker ul.pick:focus.pick-jump .pick-arw-s2.pick-arw-l,div.datedropper .picker ul.pick:hover.pick-jump .pick-arw-s2.pick-arw-l{-webkit-transform:translateX(8px);-ms-transform:translateX(8px);transform:translateX(8px)}div.datedropper .picker ul.pick .pick-arw{position:absolute;top:0;height:100%;width:25%;font-size:10px;text-align:center;display:block;z-index:10;cursor:pointer;overflow:hidden;opacity:0}div.datedropper .picker ul.pick .pick-arw div{line-height:0;top:50%;left:50%;position:absolute;display:block;-webkit-transform:translate(-50%, -50%);-ms-transform:translate(-50%, -50%);transform:translate(-50%, -50%)}div.datedropper .picker ul.pick .pick-arw svg{width:16px;height:16px}div.datedropper .picker ul.pick .pick-arw.pick-arw:hover{opacity:1}div.datedropper .picker ul.pick .pick-arw.pick-arw-r{right:0}div.datedropper .picker ul.pick .pick-arw.pick-arw-l{left:0}div.datedropper .picker ul.pick .pick-arw.pick-arw-s2{pointer-events:none}div.datedropper .picker ul.pick .pick-arw.pick-arw-s2.pick-arw-r{-webkit-transform:translateX(0);-ms-transform:translateX(0);transform:translateX(0)}div.datedropper .picker ul.pick .pick-arw.pick-arw-s2.pick-arw-l{-webkit-transform:translateX(0);-ms-transform:translateX(0);transform:translateX(0)}div.datedropper .picker ul.pick.pick-m,div.datedropper .picker ul.pick.pick-y{height:60px}div.datedropper .picker ul.pick.pick-m{font-size:32px}div.datedropper .picker ul.pick.pick-y{font-size:24px}div.datedropper .picker ul.pick.pick-d{height:100px;font-size:64px;font-weight:bold}div.datedropper .picker ul.pick.pick-d li div{margin-top:-16px}div.datedropper .picker ul.pick:focus:after,div.datedropper .picker ul.pick:hover:after{content:"";pointer-events:none;position:absolute;top:6px;left:6px;bottom:6px;right:6px;background-color:rgba(0, 0, 0, 0.04);border-radius:6px}div.datedropper .picker .pick-lg{z-index:1;margin:0 auto;height:0;overflow:hidden}div.datedropper .picker .pick-lg.pick-lg-focused{background-color:rgba(0, 0, 0, 0.025)}div.datedropper .picker .pick-lg.down{-webkit-animation:down .8s ease;animation:down .8s ease}div.datedropper .picker .pick-lg .pick-h:after,div.datedropper .picker .pick-lg .pick-h:before{opacity:0.32}div.datedropper .picker .pick-lg ul:after{content:"";display:table;clear:both}div.datedropper .picker .pick-lg ul li{float:left;text-align:center;width:14.285714286%;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;text-align:center;font-size:14px;position:relative}div.datedropper .picker .pick-lg ul li:after,div.datedropper .picker .pick-lg ul li:before{position:absolute;z-index:2;display:block;line-height:30px;height:30px;width:30px;top:50%;left:50%;-webkit-transform:translate(-50%, -50%);-ms-transform:translate(-50%, -50%);transform:translate(-50%, -50%)}div.datedropper .picker .pick-lg ul li:after{content:attr(data-value);z-index:2}div.datedropper .picker .pick-lg ul li:before{content:""}div.datedropper .picker .pick-lg ul.pick-lg-h{height:16.6666666667%;padding:0 10px}div.datedropper .picker .pick-lg ul.pick-lg-h li{height:100%}div.datedropper .picker .pick-lg ul.pick-lg-b{height:83.3333333333%;padding:10px}div.datedropper .picker .pick-lg ul.pick-lg-b li{height:16.6666666667%;cursor:pointer;position:relative}div.datedropper .picker .pick-lg ul.pick-lg-b li div{position:absolute;top:0;left:0;right:0;bottom:0;z-index:1}div.datedropper .picker .pick-lg ul.pick-lg-b li.pick-lk{pointer-events:none;opacity:.6}div.datedropper .picker .pick-lg ul.pick-lg-b li.pick-lk:after{text-decoration:line-through}div.datedropper .picker .pick-lg ul.pick-lg-b li.pick-dir div{opacity:.25}div.datedropper .picker .pick-lg ul.pick-lg-b li:not(.pick-h):hover{z-index:2}div.datedropper .picker .pick-lg ul.pick-lg-b li:not(.pick-h):hover:before{border-radius:32px;-webkit-box-shadow:0 0 32px rgba(0, 0, 0, 0.1);box-shadow:0 0 32px rgba(0, 0, 0, 0.1)}div.datedropper .picker .pick-lg ul.pick-lg-b li:not(.pick-h):hover:after,div.datedropper .picker .pick-lg ul.pick-lg-b li:not(.pick-h):hover:before{-webkit-transform:translate(-50%, -50%) scale(1.5);-ms-transform:translate(-50%, -50%) scale(1.5);transform:translate(-50%, -50%) scale(1.5)}div.datedropper .picker .pick-lg ul.pick-lg-b li.pick-sl:before{z-index:2;border-radius:32px;-webkit-box-shadow:0 0 32px rgba(0, 0, 0, 0.1);box-shadow:0 0 32px rgba(0, 0, 0, 0.1)}div.datedropper .picker .pick-lg ul.pick-lg-b li.pick-sl:after,div.datedropper .picker .pick-lg ul.pick-lg-b li.pick-sl:before{-webkit-transform:translate(-50%, -50%) scale(1.5);-ms-transform:translate(-50%, -50%) scale(1.5);transform:translate(-50%, -50%) scale(1.5)}div.datedropper .picker .pick-lg ul.pick-lg-b li.pick-sl.pick-sl-a:not(.pick-sl-b):before{border-top-right-radius:8px;-webkit-transform:translate(-50%, -50%) scale(1.5) rotate(45deg)!important;-ms-transform:translate(-50%, -50%) scale(1.5) rotate(45deg)!important;transform:translate(-50%, -50%) scale(1.5) rotate(45deg)!important}div.datedropper .picker .pick-lg ul.pick-lg-b li.pick-sl.pick-sl-b:not(.pick-sl-a):before{border-top-left-radius:8px;-webkit-transform:translate(-50%, -50%) scale(1.5) rotate(-45deg)!important;-ms-transform:translate(-50%, -50%) scale(1.5) rotate(-45deg)!important;transform:translate(-50%, -50%) scale(1.5) rotate(-45deg)!important}div.datedropper .picker .pick-btns{margin:-1px;position:relative;z-index:11;height:56px}div.datedropper .picker .pick-btns div{cursor:pointer;line-height:0}div.datedropper .picker .pick-btns .pick-btn{position:absolute;width:36px;height:36px;bottom:0;text-align:center;line-height:38px;font-size:16px;margin:8px;outline:0;border-radius:4px;background:rgba(0, 0, 0, 0.03);-webkit-box-shadow:0 0 32px rgba(0, 0, 0, 0.1);box-shadow:0 0 32px rgba(0, 0, 0, 0.1);-webkit-transform:scale(1);-ms-transform:scale(1);transform:scale(1)}div.datedropper .picker .pick-btns .pick-btn svg{position:absolute;top:50%;left:50%;-webkit-transform:translate(-50%, -50%);-ms-transform:translate(-50%, -50%);transform:translate(-50%, -50%)}div.datedropper .picker .pick-btns .pick-btn:focus,div.datedropper .picker .pick-btns .pick-btn:hover{-webkit-box-shadow:0 0 24px rgba(0, 0, 0, 0.1);box-shadow:0 0 24px rgba(0, 0, 0, 0.1);-webkit-transform:scale(0.95);-ms-transform:scale(0.95);transform:scale(0.95)}div.datedropper .picker .pick-btns .pick-btn.pick-btn-sz{right:0}div.datedropper .picker .pick-btns .pick-btn.pick-btn-lng{left:0;-webkit-transform-origin:left bottom;-ms-transform-origin:left bottom;transform-origin:left bottom}div.datedropper.picker-clean .picker-jumped-years{display:none}div.datedropper .picker-jumped-years{position:absolute;z-index:10;top:60px;left:0;right:0;bottom:0;padding:4px;padding-bottom:56px;opacity:0;overflow:hidden;overflow-y:scroll;-webkit-overflow-scrolling:touch;visibility:hidden;pointer-events:none;-webkit-transform:translateY(16px);-ms-transform:translateY(16px);transform:translateY(16px);-webkit-transform-origin:bottom center;-ms-transform-origin:bottom center;transform-origin:bottom center}div.datedropper .picker-jumped-years.picker-jumper-years-visible{opacity:1;visibility:visible;-webkit-transform:translateY(0);-ms-transform:translateY(0);transform:translateY(0);pointer-events:auto}div.datedropper .picker-jumped-years>div{float:left;width:50%;padding:4px;position:relative;cursor:pointer}div.datedropper .picker-jumped-years>div:before{content:"";display:block;border-radius:6px;padding:16px;padding-bottom:50%;background-color:rgba(0, 0, 0, 0.05)}div.datedropper .picker-jumped-years>div:after{text-align:center;font-size:20px;content:attr(data-id);position:absolute;top:50%;left:50%;-webkit-transform:translate(-50%, -50%);-ms-transform:translate(-50%, -50%);transform:translate(-50%, -50%)}div.datedropper .picker-jumped-years>div:hover:before{background-color:rgba(0, 0, 0, 0.025)}div.datedropper.picker-lg{width:300px}div.datedropper.picker-lg ul.pick.pick-d{-webkit-transform:scale(0);-ms-transform:scale(0);transform:scale(0);height:0!important}div.datedropper.picker-lg .pick-lg{height:256px}@media only screen and (max-width:479px){div.datedropper.picker-lg{width:auto!important;height:auto!important;top:1rem!important;left:1rem!important;right:1rem!important;bottom:1rem!important;-webkit-transform:none;-ms-transform:none;transform:none}div.datedropper.picker-lg.picker-modal{width:100%!important;height:100%!important;padding:1rem!important}div.datedropper.picker-lg .picker{height:100%}div.datedropper.picker-lg .picker .pick{max-height:unset!important}div.datedropper.picker-lg .pick-lg{height:62%!important;max-height:unset!important}div.datedropper.picker-lg .pick-lg .pick-lg-h{height:16.6666666667%}div.datedropper.picker-lg .pick-lg .pick-lg-b{height:83.3333333333%}div.datedropper.picker-lg .pick-lg .pick-lg-b li{height:16.6666666667%}div.datedropper.picker-lg .picker-jumped-years{top:13%!important;padding-bottom:12%!important}div.datedropper.picker-lg .pick-l,div.datedropper.picker-lg .pick-m,div.datedropper.picker-lg .pick-y{height:13%!important}div.datedropper.picker-lg .pick-btns{height:12%!important}}@-webkit-keyframes picker_rumble{0%,to{-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0)}10%,30%,50%,70%,90%{-webkit-transform:translate3d(-2px, 0, 0);transform:translate3d(-2px, 0, 0)}20%,40%,60%,80%{-webkit-transform:translate3d(2px, 0, 0);transform:translate3d(2px, 0, 0)}}@keyframes picker_rumble{0%,to{-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0)}10%,30%,50%,70%,90%{-webkit-transform:translate3d(-2px, 0, 0);transform:translate3d(-2px, 0, 0)}20%,40%,60%,80%{-webkit-transform:translate3d(2px, 0, 0);transform:translate3d(2px, 0, 0)}}div.datedropper .picker-rumble{-webkit-animation:picker_rumble .4s ease;animation:picker_rumble .4s ease}div.datedropper.picker-locked .pick-submit{opacity:0.35}div.datedropper.picker-locked .pick-submit:hover{-webkit-box-shadow:none!important;box-shadow:none!important}div.datedropper.picker-modal{top:50%!important;left:50%!important;-webkit-transform:translate3d(-50%, -50%, 0)!important;transform:translate3d(-50%, -50%, 0)!important;position:fixed!important;margin:0!important}div.datedropper.picker-modal:before{display:none}div.datedropper.picker-fxs{-webkit-transition:opacity .2s ease,visibility .2s ease, margin .2s ease;-o-transition:opacity .2s ease,visibility .2s ease, margin .2s ease;transition:opacity .2s ease,visibility .2s ease, margin .2s ease}@media only screen and (min-width:480px){div.datedropper.picker-fxs.picker-transit{-webkit-transition:width 0.8s cubic-bezier(1, -0.55, 0.2, 1.37), opacity 0.2s ease, visibility 0.2s ease, margin 0.2s ease;-o-transition:width 0.8s cubic-bezier(1, -0.55, 0.2, 1.37), opacity 0.2s ease, visibility 0.2s ease, margin 0.2s ease;transition:width 0.8s cubic-bezier(1, -0.55, 0.2, 1.37), opacity 0.2s ease, visibility 0.2s ease, margin 0.2s ease}div.datedropper.picker-fxs.picker-transit .pick-lg{-webkit-transition:height 0.8s cubic-bezier(1, -0.55, 0.2, 1.37);-o-transition:height 0.8s cubic-bezier(1, -0.55, 0.2, 1.37);transition:height 0.8s cubic-bezier(1, -0.55, 0.2, 1.37)}div.datedropper.picker-fxs.picker-transit .pick-d{-webkit-transition:top 0.8s cubic-bezier(1, -0.55, 0.2, 1.37), height 0.8s cubic-bezier(1, -0.55, 0.2, 1.37), background-color 0.4s ease, -webkit-transform 0.8s cubic-bezier(1, -0.55, 0.2, 1.37);transition:top 0.8s cubic-bezier(1, -0.55, 0.2, 1.37), height 0.8s cubic-bezier(1, -0.55, 0.2, 1.37), background-color 0.4s ease, -webkit-transform 0.8s cubic-bezier(1, -0.55, 0.2, 1.37);-o-transition:top 0.8s cubic-bezier(1, -0.55, 0.2, 1.37), transform 0.8s cubic-bezier(1, -0.55, 0.2, 1.37), height 0.8s cubic-bezier(1, -0.55, 0.2, 1.37), background-color 0.4s ease;transition:top 0.8s cubic-bezier(1, -0.55, 0.2, 1.37), transform 0.8s cubic-bezier(1, -0.55, 0.2, 1.37), height 0.8s cubic-bezier(1, -0.55, 0.2, 1.37), background-color 0.4s ease;transition:top 0.8s cubic-bezier(1, -0.55, 0.2, 1.37), transform 0.8s cubic-bezier(1, -0.55, 0.2, 1.37), height 0.8s cubic-bezier(1, -0.55, 0.2, 1.37), background-color 0.4s ease, -webkit-transform 0.8s cubic-bezier(1, -0.55, 0.2, 1.37)}}div.datedropper.picker-fxs ul.pick.pick-y{-webkit-transition:background-color .4s ease;-o-transition:background-color .4s ease;transition:background-color .4s ease}div.datedropper.picker-fxs ul.pick li{-webkit-transition:opacity .4s ease, -webkit-transform .4s ease;transition:opacity .4s ease, -webkit-transform .4s ease;-o-transition:transform .4s ease, opacity .4s ease;transition:transform .4s ease, opacity .4s ease;transition:transform .4s ease, opacity .4s ease, -webkit-transform .4s ease}div.datedropper.picker-fxs ul.pick .pick-arw{-webkit-transition:opacity .2s ease, -webkit-transform .2s ease;transition:opacity .2s ease, -webkit-transform .2s ease;-o-transition:transform .2s ease, opacity .2s ease;transition:transform .2s ease, opacity .2s ease;transition:transform .2s ease, opacity .2s ease, -webkit-transform .2s ease}div.datedropper.picker-fxs ul.pick .pick-arw i{-webkit-transition:right .2s ease, left .2s ease;-o-transition:right .2s ease, left .2s ease;transition:right .2s ease, left .2s ease}div.datedropper.picker-fxs .picker-jumped-years{-webkit-transition:opacity .2s ease, visibility .2s ease, -webkit-transform .2s ease;transition:opacity .2s ease, visibility .2s ease, -webkit-transform .2s ease;-o-transition:transform .2s ease, opacity .2s ease, visibility .2s ease;transition:transform .2s ease, opacity .2s ease, visibility .2s ease;transition:transform .2s ease, opacity .2s ease, visibility .2s ease, -webkit-transform .2s ease}div.datedropper.picker-fxs .pick-lg .pick-lg-b li{-webkit-transition:background-color .2s ease;-o-transition:background-color .2s ease;transition:background-color .2s ease}div.datedropper.picker-fxs .pick-btns .pick-submit{-webkit-transition:top .2s ease, background-color .4s ease, -webkit-box-shadow .4s ease;transition:top .2s ease, background-color .4s ease, -webkit-box-shadow .4s ease;-o-transition:top .2s ease, box-shadow .4s ease, background-color .4s ease;transition:top .2s ease, box-shadow .4s ease, background-color .4s ease;transition:top .2s ease, box-shadow .4s ease, background-color .4s ease, -webkit-box-shadow .4s ease}div.datedropper.picker-fxs .pick-btns .pick-submit svg{height:18px}div.datedropper.picker-fxs .pick-btns .pick-btn{-webkit-transition:all .2s ease;-o-transition:all .2s ease;transition:all .2s ease}div.datedropper.picker-fxs .pick-btns .pick-btn svg{width:18px;height:18px}div.datedropper .null{-webkit-transition:none;-o-transition:none;transition:none}div.datedropper:not(.picker-lg){width:180px!important;width:var(--dd-width)!important}div.datedropper .picker{-webkit-box-shadow:0 0 32px 0 rgba(0, 0, 0, 0.1)!important;box-shadow:0 0 32px 0 rgba(0, 0, 0, 0.1)!important;-webkit-box-shadow:var(--dd-shadow)!important;box-shadow:var(--dd-shadow)!important}div.datedropper .pick:focus:after,div.datedropper .pick:hover:after,div.datedropper .picker{border-radius:6px!important;border-radius:var(--dd-radius)!important}div.datedropper .picker-jumped-years{border-bottom-left-radius:6px!important;border-bottom-right-radius:var(--dd-radius)!important}div.datedropper .pick-dir div,div.datedropper .pick-lg-b .pick-sl:before,div.datedropper .pick-lg-h,div.datedropper .pick-submit,div.datedropper:not(.picker-clean) .pick:first-of-type,div.datedropper:not(.picker-clean):before{background-color:#fd4741!important;background-color:var(--dd-color1)!important}div.datedropper .pick-btn,div.datedropper .pick-lg-b .pick-wke,div.datedropper .pick-lg-b li:not(.pick-sl):not(.pick-h):hover:after,div.datedropper .pick-y.pick-jump,div.datedropper .picker+div,div.datedropper .pick li span{color:#fd4741!important;color:var(--dd-color1)!important}div.datedropper .pick-btn,div.datedropper .pick-btn:hover,div.datedropper .pick-l,div.datedropper .pick-lg-b li:not(.pick-sl):not(.pick-h):hover:before,div.datedropper .picker,div.datedropper .picker-jumped-years,div.datedropper:before{background-color:white!important;background-color:var(--dd-color2)!important}div.datedropper .pick-arw,div.datedropper .pick-l,div.datedropper .picker{color:#4D4D4D!important;color:var(--dd-color3)!important}div.datedropper .pick-lg-b .pick-sl:after,div.datedropper .pick-lg-h,div.datedropper .pick-submit,div.datedropper:not(.picker-clean) .pick:first-of-type,div.datedropper:not(.picker-clean) .pick:first-of-type *{color:white!important;color:var(--dd-color4)!important}',
}),
    (function (u) {
        var p = {},
            o = null,
            a = null,
            n = null,
            s = null,
            d = null,
            e = "transitionend webkitTransitionEnd oTransitionEnd otransitionend MSTransitionEnd",
            r = "webkitAnimationEnd mozAnimationEnd oAnimationEnd oanimationend animationend",
            l = {
                init: function (r) {
                    return (
                        u(this).each(function () {
                            r && r.roundtrip && !u(this).attr("data-dd-roundtrip") && u(this).attr("data-dd-roundtrip", r.roundtrip);
                        }),
                        u(this).each(function () {
                            if (!u(this).hasClass("picker-trigger")) {
                                var e = u(this),
                                    i = "datedropper-" + Object.keys(p).length;
                                e.attr("data-datedropper-id", i).addClass("picker-trigger");
                                var t = {
                                    identifier: i,
                                    selector: e,
                                    jump: 10,
                                    maxYear: !1,
                                    minYear: !1,
                                    format: "d M Y",
                                    lang: "en",
                                    lock: !1,
                                    theme: "primary",
                                    disabledDays: !1,
                                    large: !1,
                                    largeDefault: !1,
                                    fx: !0,
                                    fxMobile: !0,
                                    defaultDate: null,
                                    modal: !1,
                                    hideDay: !1,
                                    hideMonth: !1,
                                    hideYear: false,
                                    enabledDays: !1,
                                    largeOnly: true,
                                    roundtrip: !1,
                                    eventListener: e.is("input") ? "focus" : "click",
                                    trigger: !1,
                                    minDate: !1,
                                    maxDate: !1,
                                    autofill: !0,
                                    autoIncrease: !0,
                                    showOnlyEnabledDays: !1,
                                    changeValueTo: !1,
                                    startFromMonday: !0,
                                };
                                (p[i] = u.extend(!0, {}, t, r, y(e))), R(p[i]);
                            }
                        })
                    );
                },
                show: function () {
                    return u(this).each(function () {
                        H(u(this));
                    });
                },
                hide: function () {
                    return u(this).each(function (e) {
                        var i = S(u(this));
                        i && B(i);
                    });
                },
                destroy: function (i) {
                    return u(this).each(function () {
                        var e = S(u(this));
                        e && (o && e.identifier == o.identifier && B(o), u(this).removeAttr("data-datedropper-id").removeClass("picker-trigger").off(e.eventListener), delete e, i && i());
                    });
                },
                set: function (e) {
                    return u(this).each(function () {
                        var t = S(u(this));
                        t &&
                            (u.each(e, function (e, i) {
                                "true" == i && (i = !0), "false" == i && (i = !1), "roundtrip" != e ? (t[e] = i) : console.error("[DATEDROPPER] You can't set roundtrip after main initialization");
                            }),
                            t.selector.off(t.eventListener),
                            t.trigger && u(t.trigger).off("click"),
                            R(t),
                            // console.log(t),
                            o && o.element == t.element && V(t));
                    });
                },
                setDate: function (e) {
                    return u(this).each(function () {
                        var t = S(u(this));
                        t &&
                            (u.each(e, function (e, i) {
                                "y" == e && t.key[e] && i > t.key[e].max && (t.key[e].max = i), (t.key[e].current = i);
                            }),
                            o && o.element == t.element && V(t));
                    });
                },
                getDate: function (i) {
                    return u(this).each(function () {
                        var e = S(u(this));
                        e && i && i(J(e));
                    });
                },
            },
            k = !1,
            m = function () {
                var e = navigator.userAgent.toLowerCase();
                return -1 != e.indexOf("msie") && parseInt(e.split("msie")[1]);
            },
            f = function () {
                return !!/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
            },
            b = function (e) {
                e.fx && !e.fxMobile && (u(window).width() < 480 ? e.element.removeClass("picker-fxs") : e.element.addClass("picker-fxs"));
            },
            g = function (e) {
                return e % 1 == 0 && e;
            },
            h = function (e) {
                return !!/(^\d{1,4}[\.|\\/|-]\d{1,2}[\.|\\/|-]\d{1,4})(\s*(?:0?[1-9]:[0-5]|1(?=[012])\d:[0-5])\d\s*[ap]m)?$/.test(e) && e;
            };
        if (f()) var v = { i: "touchstart", m: "touchmove", e: "touchend" };
        else v = { i: "mousedown", m: "mousemove", e: "mouseup" };
        var y = function (e) {
                var o = {},
                    n = /^data-dd\-(.+)$/;
                return (
                    u.each(e.get(0).attributes, function (e, i) {
                        if (n.test(i.nodeName)) {
                            var t = ((a = i.nodeName.match(n)[1]),
                                a
                                    .replace(/(?:^\w|[A-Z]|\b\w)/g, function (e, i) {
                                        return 0 == i ? e.toLowerCase() : e.toUpperCase();
                                    })
                                    .replace(/\s+/g, "")).replace(new RegExp("-", "g"), ""),
                                r = !1;
                            switch (i.nodeValue) {
                                case "true":
                                    r = !0;
                                    break;
                                case "false":
                                    r = !1;
                                    break;
                                default:
                                    r = i.nodeValue;
                            }
                            o[t] = r;
                        }
                        var a;
                    }),
                    o
                );
            },
            w = function (r, e) {
                var i,
                    a = N(r),
                    o = !1,
                    n = !1,
                    p = !1,
                    s = !0;
                if (
                    (a &&
                        u.each(a, function (e, i) {
                            var t = P(i.value);
                            t.m == x(r, "m") && t.y == x(r, "y")  && A(r, ".pick-lg-b li.pick-v[data-value=" + t.d + "]").addClass("pick-sl pick-sl-" + e);
                        }),
                    (o = A(r, ".pick-lg-b li.pick-sl-a")),
                    (n = e || A(r, ".pick-lg-b li.pick-sl-b")),
                    (i = { a: o.length ? A(r, ".pick-lg-b li").index(o) + 1 : 0, b: n.length ? A(r, ".pick-lg-b li").index(n) - 1 : A(r, ".pick-lg-b li").last().index() }),
                    a.a.value != a.b.value && e && (s = !1),
                    e ? ((t = L(x(r, "m") + "/" + e.attr("data-value") + "/" + x(r, "y"))), a.a.value == a.b.value && t > a.a.value && (p = !0)) : ((t = L(x(r))), ((t >= a.a.value && t <= a.b.value) || o.length) && (p = !0)),
                    s && A(r, ".pick-lg-b li").removeClass("pick-dir pick-dir-sl pick-dir-first pick-dir-last"),
                    p)
                )
                    for (var d = i.a; d <= i.b; d++) A(r, ".pick-lg-b li").eq(d).addClass("pick-dir");
                o.next(".pick-dir").addClass("pick-dir-first"), n.prev(".pick-dir").addClass("pick-dir-last");
            },
            x = function (e, i) {
                return i ? parseInt(e.key[i].current) : x(e, "m") + "/" + x(e, "d") + "/" + x(e, "y");
            },
            D = function (e, i) {
                return i ? parseInt(e.key[i].today) : D(e, "m") + "/" + D(e, "d") + "/" + D(e, "y");
            },
            z = function (e, i, t) {
                var r = e.key[i];
                return t > r.max ? z(e, i, t - r.max + (r.min - 1)) : t < r.min ? z(e, i, t + 1 + (r.max - r.min)) : t;
            },
            T = function (e) {
                return !!e && { selector: e.selector, date: J(e) };
            },
            C = function (e, i) {
                return A(e, 'ul.pick[data-k="' + i + '"]');
            },
            M = function (e, i, t) {
                ul = C(e, i);
                var r = [];
                return (
                    ul.find("li").each(function () {
                        r.push(u(this).attr("value"));
                    }),
                    "last" == t ? r[r.length - 1] : r[0]
                );
            },
            j = function (e, i) {
                var t = !1;
                for (var r in (("Y" != e.format && "m" != e.format) || ((e.hideDay = !0), "Y" == e.format && (e.hideMonth = !0), "m" == e.format && (e.hideYear = !0), (t = !0)),
                (e.hideDay || e.hideMonth || e.hideYear) && (t = !0),
                e.largeOnly && ((e.large = !0), (e.largeDefault = !0)),
                (e.hideMonth || e.hideDay || e.hideYear || e.showOnlyEnabledDays) && ((e.largeOnly = !1), (e.large = !1), (e.largeDefault = !1)),
                (e.element = u("<div>", {
                    class: "datedropper " + (t ? "picker-clean" : "") + " " + (e.modal ? "picker-modal" : "") + " " + e.theme + " " + (e.fx ? "picker-fxs" : "") + " " + (e.large && e.largeDefault ? "picker-lg" : ""),
                    id: e.identifier,
                    html: u("<div>", { class: "picker" }),
                }).appendTo("body")),
                e.key)) {
                    var a = !0;
                    "y" == r && e.hideYear && (a = !1), "d" == r && e.hideDay && (a = !1), "m" == r && e.hideMonth && (a = !1), a && (u("<ul>", { class: "pick pick-" + r, "data-k": r, tabindex: 0 }).appendTo(A(e, ".picker")), K(e, r));
                }
                e.large && u("<div>", { class: "pick-lg" }).insertBefore(A(e, ".pick-d")),
                    u("<div>", { class: "pick-btns" }).appendTo(A(e, ".picker")),
                    u("<div>", { tabindex: 0, class: "pick-submit", html: u(u.dateDropperSetup.icons.checkmark) }).appendTo(A(e, ".pick-btns")),
                    e.large && !e.largeOnly && u("<div>", { class: "pick-btn pick-btn-sz", html: u(u.dateDropperSetup.icons.expand) }).appendTo(A(e, ".pick-btns")),
                    setTimeout(function () {
                        e.element.addClass("picker-focused"),
                            f() ||
                                setTimeout(function () {
                                    A(e, ".pick:first-of-type").focus();
                                }, 100),
                            e.element.hasClass("picker-modal") && (e.overlay = u('<div class="picker-overlay"></div>').appendTo("body")),
                            b(e),
                            I(e),
                            W(e),
                            (o = e),
                            i && i();
                    }, 100);
            },
            S = function (e) {
                var i = e.attr("data-datedropper-id");
                return p[i] || !1;
            },
            A = function (e, i) {
                if (e.element) return e.element.find(i);
            },
            Y = function (e) {
                if ("string" == typeof e) {
                    if (h(e)) {
                        var t = e.match(/\d+/g);
                        return (
                            u.each(t, function (e, i) {
                                t[e] = parseInt(i);
                            }),
                            { m: t[0] && t[0] <= 12 ? t[0] : picker.key.m.today, d: t[1] && t[1] <= 31 ? t[1] : picker.key.d.today, y: t[2] || picker.key.y.today }
                        );
                    }
                    return !1;
                }
                return !1;
            },
            F = "div.datedropper.picker-focused",
            J = function (e, i) {
                i || (i = { d: x(e, "d"), m: x(e, "m"), y: x(e, "y") });
                var t = i.d,
                    r = i.m,
                    a = i.y,
                    o = new Date(r + "/" + t + "/" + a).getDay(),
                    n = {
                        F: u.dateDropperSetup.languages[e.lang].months.full[r - 1],
                        M: u.dateDropperSetup.languages[e.lang].months.short[r - 1],
                        D: u.dateDropperSetup.languages[e.lang].weekdays.full[o].substr(0, 3),
                        l: u.dateDropperSetup.languages[e.lang].weekdays.full[o],
                        d: O(t),
                        m: O(r),
                        S: E(t),
                        Y: a,
                        U: L(x(e)),
                        n: r,
                        j: t,
                    },
                    p = e.format
                        .replace(/\b(F)\b/g, n.F)
                        .replace(/\b(M)\b/g, n.M)
                        .replace(/\b(D)\b/g, n.D)
                        .replace(/\b(l)\b/g, n.l)
                        .replace(/\b(d)\b/g, n.d)
                        .replace(/\b(m)\b/g, n.m)
                        .replace(/\b(S)\b/g, n.S)
                        .replace(/\b(Y)\b/g, n.Y+543)
                        .replace(/\b(U)\b/g, n.U)
                        .replace(/\b(n)\b/g, n.n)
                        .replace(/\b(j)\b/g, n.j);
                return (n.formatted = p), n;
            },
            O = function (e) {
                return e < 10 ? "0" + e : e;
            },
            E = function (e) {
                var i = ["th", "st", "nd", "rd"],
                    t = e % 100;
                return e + (i[(t - 20) % 10] || i[t] || i[0]);
            },
            L = function (e) {
                return Date.parse(e) / 1e3;
            },
            P = function (e) {
                var i = new Date(1e3 * e);
                return { m: i.getMonth() + 1, y: i.getFullYear(), d: i.getDate() };
            },
            N = function (e) {
                var r = '[data-dd-roundtrip="' + e.roundtrip + '"]',
                    a = !1;
                if (u(r).length) {
                    a = {};
                    u.each(["a", "b"], function (e, i) {
                        var t = u(r + "[data-dd-roundtrip-" + i + "]");
                        a[i] = { value: (t.length && t.attr("data-dd-roundtrip-" + i)) || !1, selector: !!t.length && t };
                    });
                }
                return a;
            },
            X = function (e) {
                e.large &&
                    (e.element.addClass("picker-transit").toggleClass("picker-lg"),
                    e.element.hasClass("picker-lg") && q(e),
                    setTimeout(function () {
                        e.element.removeClass("picker-transit");
                    }, 800));
            },
            I = function (e) {
                if (!e.element.hasClass("picker-modal")) {
                    var i = e.selector,
                        t = i.offset().left + i.outerWidth() / 2,
                        r = i.offset().top + i.outerHeight();
                    e.element.css({ left: t, top: r });
                }
            },
            R = function (a) {
                if (
                    ((a.jump = g(a.jump) || 10),
                    (a.maxYear = g(a.maxYear)),
                    (a.minYear = g(a.minYear)),
                    a.lang in u.dateDropperSetup.languages || (a.lang = "en"),
                    (a.key = {
                        m: { min: 1, max: 12, current: new Date().getMonth() + 1, today: new Date().getMonth() + 1 },
                        d: { min: 1, max: 31, current: new Date().getDate(), today: new Date().getDate() },
                        y: { min: a.minYear || new Date().getFullYear() - 50, max: a.maxYear || new Date().getFullYear() + 50, current: new Date().getFullYear(), today: new Date().getFullYear() },
                    }),
                    a.key.y.current > a.key.y.max && (a.key.y.current = a.key.y.max),
                    a.key.y.current < a.key.y.min && (a.key.y.current = a.key.y.min),
                    a.minDate)
                ) {
                    var e = !!a.defaultDate && L(a.defaultDate),
                        i = !!a.minDate && L(a.minDate);
                    e ? e < i && (a.defaultDate = a.minDate) : (a.defaultDate = a.minDate), Q(a, P(L(a.defaultDate)));
                }
                if (
                    ((a.disabledDays = a.disabledDays ? a.disabledDays.split(",") : null),
                    (a.enabledDays = a.enabledDays ? a.enabledDays.split(",") : null),
                    a.disabledDays &&
                        u.each(a.disabledDays, function (e, i) {
                            i && h(i) && (a.disabledDays[e] = L(i));
                        }),
                    a.enabledDays &&
                        u.each(a.enabledDays, function (e, i) {
                            i && h(i) && (a.enabledDays[e] = L(i));
                        }),
                    a.showOnlyEnabledDays && a.enabledDays)
                ) {
                    var t = (e = !!a.defaultDate && L(a.defaultDate)) && a.enabledDays.includes(e) ? P(e) : P(a.enabledDays[0]);
                    u.each(t, function (e, i) {
                        a.key[e].current = i;
                    });
                } else a.showOnlyEnabledDays = !1;
                if (a.roundtrip) {
                    var o = L(x(a)),
                        r = u('[data-dd-roundtrip="' + a.roundtrip + '"]');
                    1 < r.length
                        ? r.each(function () {
                              var e = 0 == r.index(u(this)) ? "a" : "b",
                                  i = u(this).attr("data-dd-roundtrip-default-" + e),
                                  t = i ? L(i) : o;
                              t && u(this).attr("data-dd-roundtrip-" + e, t);
                          })
                        : u.each(["a", "b"], function (e, i) {
                              var t = a.selector.attr("data-dd-roundtrip-default-" + i),
                                  r = t ? L(t) : o;
                              r && a.selector.attr("data-dd-roundtrip-" + i, r);
                          });
                    var n = N(a),
                        p = P(n.a.value);
                    console.log(a.defaultDate), (a.defaultDate = p.m + "/" + p.d + "/" + p.y), (a.largeOnly = !0);
                }
                if (
                    (a.selector.on(a.eventListener, function (e) {
                        e.preventDefault(), u(this).blur(), H(u(this));
                    }),
                    a.trigger &&
                        u(a.trigger).on("click", function (e) {
                            a.selector.trigger(a.eventListener);
                        }),
                    a.onReady && a.onReady(T(a)),
                    a.defaultDate)
                ) {
                    var s = Y(a.defaultDate);
                    s &&
                        (u.each(s, function (e, i) {
                            a.key[e] && (a.key[e].current = i);
                        }),
                        a.key.y.current > a.key.y.max && (a.key.y.max = a.key.y.current),
                        a.key.y.current < a.key.y.min && (a.key.y.min = a.key.y.current));
                }
            },
            V = function (e, i) {
                e.element && (e.element.remove(), e.overlay && e.overlay.remove(), j(e));
            },
            H = function (e, i) {
                o && B(o);
                var t = S(e);
                t && j(t);
            },
            B = function (e) {
                var i = { element: e.element, overlay: e.overlay };
                i.element &&
                    (i.element.removeClass("picker-focused"),
                    setTimeout(function () {
                        i.element.remove(), i.overlay && i.overlay.addClass("picker-overlay-hidden");
                    }, 400)),
                    (o = null);
            },
            G = function (e) {
                if (e) {
                    var i,
                        t,
                        r = !1;
                    return (
                        (i = L(x(e))),
                        (t = L(D(e))),
                        e.lock && ("from" == e.lock && (r = i < t), "to" == e.lock && (r = t < i)),
                        (e.minDate || e.maxDate) && ((i = L(x(e))), (t = e.minDate ? L(e.minDate) : null), (c = e.maxDate ? L(e.maxDate) : null), t && c ? (r = i < t || i > c) : t ? (r = i < t) : c && (r = i > c)),
                        e.disabledDays && !e.enabledDays && (r = -1 != e.disabledDays.indexOf(i)),
                        e.enabledDays && !e.disabledDays && (r = -1 == e.enabledDays.indexOf(i)),
                        r ? (Z(e), e.element.addClass("picker-locked"), !0) : (e.element.removeClass("picker-locked"), !1)
                    );
                }
            },
            K = function (e, t) {
                var r = C(e, t),
                    a = e.key[t];
                for (r.empty(), i = a.min; i <= a.max; i++) {
                    var o = i;
                    "m" == t && (o = u.dateDropperSetup.languages[e.lang].months.short[i - 1]), (o += "d" == t ? "<span></span>" : ""), u("<li>", { value: i, html: "<div>" + o + "</div>" }).appendTo(r);
                }
                u.each(["l", "r"], function (e, i) {
                    u("<div>", { class: "pick-arw pick-arw-s1 pick-arw-" + i, html: u("<div>", { class: "pick-i-" + i, html: u(u.dateDropperSetup.icons.arrow[i]) }) }).appendTo(r);
                }),
                    "y" == t &&
                        u.each(["l", "r"], function (e, i) {
                            u("<div>", { class: "pick-arw pick-arw-s2 pick-arw-" + i, html: u("<div>", { class: "pick-i-" + i, html: u(u.dateDropperSetup.icons.arrow[i]) }) }).appendTo(r);
                        }),
                    U(e, t, x(e, t));
            },
            q = function (r) {
                A(r, ".pick-lg").empty().append('<ul class="pick-lg-h"></ul><ul class="pick-lg-b"></ul>');
                for (var e = r.startFromMonday ? [1, 2, 3, 4, 5, 6, 0] : [0, 1, 2, 3, 4, 5, 6], i = 0; i < 7; i++)
                    u("<li>", { html: "<div>" + u.dateDropperSetup.languages[r.lang].weekdays.short[e[i]] + "</div>" }).appendTo(A(r, ".pick-lg .pick-lg-h"));
                for (i = 0; i < 42; i++) u("<li>", { html: u("<div>") }).appendTo(A(r, ".pick-lg .pick-lg-b"));
                var t = 0,
                    a = A(r, ".pick-lg-b"),
                    o = (new Date(x(r)), new Date(x(r))),
                    n = new Date(x(r)),
                    p = function (e) {
                        var i = e.getMonth(),
                            t = e.getFullYear();
                        return [31, t % 4 == 0 && (t % 100 != 0 || t % 400 == 0) ? 29 : 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31][i];
                    };
                n.setMonth(n.getMonth() - 1), o.setDate(1);
                var s = o.getDay() - 1;
                s < 0 && (s = 6), r.startFromMonday && --s < 0 && (s = 6);
                for (i = p(n) - s; i <= p(n); i++) a.find("li").eq(t).addClass("pick-b pick-n pick-h").attr("data-value", i), t++;
                for (i = 1; i <= p(o); i++) a.find("li").eq(t).addClass("pick-n pick-v").attr("data-value", i), t++;
                if (a.find("li.pick-n").length < 42) {
                    var d = 42 - a.find("li.pick-n").length;
                    for (i = 1; i <= d; i++) a.find("li").eq(t).addClass("pick-a pick-n pick-h").attr("data-value", i), t++;
                }
                if (
                    (r.lock &&
                        ("from" === r.lock
                            ? x(r, "y") <= D(r, "y") &&
                              (x(r, "m") == D(r, "m")
                                  ? A(r, '.pick-lg .pick-lg-b li.pick-v[data-value="' + D(r, "d") + '"]')
                                        .prevAll("li")
                                        .addClass("pick-lk")
                                  : x(r, "m") < D(r, "m")
                                  ? A(r, ".pick-lg .pick-lg-b li").addClass("pick-lk")
                                  : x(r, "m") > D(r, "m") && x(r, "y") < D(r, "y") && A(r, ".pick-lg .pick-lg-b li").addClass("pick-lk"))
                            : x(r, "y") >= D(r, "y") &&
                              (x(r, "m") == D(r, "m")
                                  ? A(r, '.pick-lg .pick-lg-b li.pick-v[data-value="' + D(r, "d") + '"]')
                                        .nextAll("li")
                                        .addClass("pick-lk")
                                  : x(r, "m") > D(r, "m")
                                  ? A(r, ".pick-lg .pick-lg-b li").addClass("pick-lk")
                                  : x(r, "m") < D(r, "m") && x(r, "y") > D(r, "y") && A(r, ".pick-lg .pick-lg-b li").addClass("pick-lk"))),
                    r.maxDate)
                ) {
                    var l = Y(r.maxDate);
                    if (l)
                        if (x(r, "y") == l.y && x(r, "m") == l.m)
                            A(r, '.pick-lg .pick-lg-b li.pick-v[data-value="' + l.d + '"]')
                                .nextAll("li")
                                .addClass("pick-lk");
                        else L(r.maxDate) < L(x(r)) && A(r, ".pick-lg .pick-lg-b li.pick-v").addClass("pick-lk");
                }
                if (r.minDate) {
                    var c = Y(r.minDate);
                    if (c)
                        if (x(r, "y") == c.y && x(r, "m") == c.m)
                            A(r, '.pick-lg .pick-lg-b li.pick-v[data-value="' + c.d + '"]')
                                .prevAll("li")
                                .addClass("pick-lk");
                        else {
                            var k = L(r.minDate);
                            L(x(r)) < k && A(r, ".pick-lg .pick-lg-b li.pick-v").addClass("pick-lk");
                        }
                }
                r.disabledDays &&
                    !r.enabledDays &&
                    u.each(r.disabledDays, function (e, i) {
                        if (i) {
                            var t = P(i);
                            t.m == x(r, "m") && t.y == x(r, "y") && A(r, '.pick-lg .pick-lg-b li.pick-v[data-value="' + t.d + '"]').addClass("pick-lk");
                        }
                    }),
                    r.enabledDays &&
                        !r.disabledDays &&
                        (A(r, ".pick-lg .pick-lg-b li").addClass("pick-lk"),
                        u.each(r.enabledDays, function (e, i) {
                            if (i) {
                                var t = P(i);
                                t.m == x(r, "m") && t.y == x(r, "y") && A(r, '.pick-lg .pick-lg-b li.pick-v[data-value="' + t.d + '"]').removeClass("pick-lk");
                            }
                        })),
                    r.roundtrip ? w(r) : A(r, ".pick-lg-b li.pick-v[data-value=" + x(r, "d") + "]").addClass("pick-sl");
            },
            Q = function (t, e) {
                u.each(e, function (e, i) {
                    t.key[e].current = i;
                });
            },
            W = function (e, i) {
                var t, r, a, o;
                e.element.hasClass("picker-lg") && q(e),
                    (r = x((t = e), "m")),
                    (a = x(t, "y")),
                    (o = a % 4 == 0 && (a % 100 != 0 || a % 400 == 0)),
                    (t.key.d.max = [31, o ? 29 : 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31][r - 1]),
                    x(t, "d") > t.key.d.max && ((t.key.d.current = t.key.d.max), U(t, "d", x(t, "d"))),
                    A(t, ".pick-d li")
                        .removeClass("pick-wke")
                        .each(function () {
                            var e = new Date(r + "/" + u(this).attr("value") + "/" + a).getDay();
                            u(this).find("span").html(u.dateDropperSetup.languages[t.lang].weekdays.full[e]), (0 != e && 6 != e) || u(this).addClass("pick-wke");
                        }),
                    t.element.hasClass("picker-lg") &&
                        (A(t, ".pick-lg-b li").removeClass("pick-wke"),
                        A(t, ".pick-lg-b li.pick-v").each(function () {
                            var e = new Date(r + "/" + u(this).attr("data-value") + "/" + a).getDay();
                            (0 != e && 6 != e) || u(this).addClass("pick-wke");
                        })),
                    G(e) ||
                        (!(function (e) {
                            clearInterval(s);
                            var i = e.minYear || e.key.y.current - 50,
                                t = e.maxYear || e.key.y.current + 50;
                            (e.key.y.max = t),
                                (e.key.y.min = i),
                                (s = setTimeout(function () {
                                    K(e, "y");
                                }, 400));
                        })(e),
                        ee(e),
                        i && i(e));
            },
            U = function (e, i, t) {
                var r,
                    a = C(e, i);
                (a.find("li").removeClass("pick-sl pick-bfr pick-afr"), t == M(e, i, "last")) && ((r = a.find('li[value="' + M(e, i, "first") + '"]')).clone().insertAfter(a.find("li[value=" + t + "]")), r.remove());
                t == M(e, i, "first") && ((r = a.find('li[value="' + M(e, i, "last") + '"]')).clone().insertBefore(a.find("li[value=" + t + "]")), r.remove());
                a.find("li[value=" + t + "]").addClass("pick-sl"),  a.find("li.pick-sl").nextAll("li").addClass("pick-afr"), a.find("li.pick-sl").prevAll("li").addClass("pick-bfr");
                if (t>1000) {
                    a.find("li[value=" + t + "]").html(t+543);
                    // console.log(t);
                    var age = new Date().getFullYear()-t;
                    // console.log(age);
                    // $('#age').value('12');
                }
            },
            _ = function (e, i, t) {
                var r = e.key[i];
                t > r.max && ("d" == i && e.autoIncrease && $(e, "m", "right"), "m" == i && e.autoIncrease && $(e, "y", "right"), (t = r.min)),
                    t < r.min && ("d" == i && e.autoIncrease && $(e, "m", "left"), "m" == i && e.autoIncrease && $(e, "y", "left"), (t = r.max)),
                    (e.key[i].current = t),
                    U(e, i, t);
            },
            $ = function (e, i, t) {
                if (e.showOnlyEnabledDays && e.enabledDays)
                    !(function (t, e) {
                        for (var i = L(x(t)), r = t.enabledDays, a = (r.length, null), o = 0; o < r.length; o++) r[o] === i && (a = o);
                        "right" == e ? a++ : a--;
                        var n = !!r[a] && P(r[a]);
                        n &&
                            u.each(n, function (e, i) {
                                (t.key[e].current = i), _(t, e, i);
                            });
                    })(e, t);
                else {
                    var r = x(e, i);
                    "right" == t ? r++ : r--, _(e, i, r);
                }
            },
            Z = function (e) {
                e.element.find(".picker").addClass("picker-rumble");
            },
            ee = function (o, e) {
                var i = !0;
                if (o.roundtrip) {
                    i = !1;
                    var t = N(o);
                    if (t) {
                        if (1 < u('.picker-trigger[data-dd-roundtrip="' + o.selector.data("dd-roundtrip") + '"]').length)
                            u.each(t, function (e, i) {
                                var t = i.selector.attr("data-datedropper-id"),
                                    r = P(i.value),
                                    a = J(o, r);
                                o.identifier != t && p[t] && ((p[t].key.m.current = r.m), (p[t].key.d.current = r.d), (p[t].key.y.current = r.y)), i.selector.is("input") && i.selector.val(a.formatted).change();
                            });
                        else {
                            var r = J(o, P(t.a.value)),
                                a = J(o, P(t.b.value));
                            o.selector.val(r.formatted + " - " + a.formatted);
                        }
                        t.a.value != t.b.value && o.onRoundTripChange && o.onRoundTripChange({ outward: P(t.a.value), return: P(t.b.value) }), o.onChange && o.onChange(T(o));
                    }
                } else i = !!e || o.autofill;
                if (i) {
                    var n = J(o);
                    o.selector.is("input") && o.selector.val(n.formatted).change(), o.changeValueTo && ie(o, n.formatted), o.onChange && o.onChange(T(o));
                }
            },
            ie = function (e, i) {
                var t = u(e.changeValueTo);
                t.length && t.is("input") && t.val(i).change();
            };
        u(document)
            .on("keydown", function (e) {
                var i = e.which;
                if (o && !f())
                    if (32 == i) A(o, ":focus").click(), e.preventDefault();
                    else if (9 == i && e.shiftKey) u(e.target).is(".pick-m") && (e.preventDefault(), u(".datedropper .pick-submit").focus());
                    else if (9 == i) u(e.target).is(".pick-submit") && (e.preventDefault(), u(".datedropper .pick-m").focus());
                    else if (27 == i) B(o);
                    else if (13 == i) A(o, ".pick-submit").trigger(v.i);
                    else if (37 == i || 39 == i) {
                        var t = A(o, ".pick:focus");
                        if (t.length && (37 == i || 39 == i)) {
                            if (37 == i) var r = "left";
                            if (39 == i) r = "right";
                            var a = t.attr("data-k");
                            $(o, a, r), W(o);
                        }
                    }
            })
            .on("focus", ".pick-d", function () {
                if (o) {
                    var e = o.element.find(".pick-lg");
                    e.length && !e.hasClass("pick-lg-focused") && e.addClass("pick-lg-focused");
                }
            })
            .on("blur", ".pick-d", function () {
                if (o) {
                    var e = o.element.find(".pick-lg");
                    e.length && e.hasClass("pick-lg-focused") && e.removeClass("pick-lg-focused");
                }
            })
            .on("click", function (e) {
                o && (o.selector.is(e.target) || o.element.is(e.target) || 0 !== o.element.has(e.target).length || (B(o), (a = null)));
            })
            .on(r, F + " .picker-rumble", function () {
                u(this).removeClass("picker-rumble");
            })
            .on(e, ".picker-overlay", function () {
                u(this).remove();
            })
            .on(v.i, F + " .pick-lg li.pick-v", function () {
                if (o) {
                    if ((A(o, ".pick-lg-b li").removeClass("pick-sl"), u(this).addClass("pick-sl"), (o.key.d.current = u(this).attr("data-value")), U(o, "d", u(this).attr("data-value")), o.roundtrip)) {
                        var i = N(o),
                            t = L(x(o));
                        if (i) {
                            var r = i.a.value == i.b.value ? "b" : "a";
                            "b" == r && t <= i.a.value && (r = "a"),
                                "a" == r
                                    ? u.each(i, function (e) {
                                          i[e].selector.attr("data-dd-roundtrip-" + e, t).attr("data-dd-roundtrip-selector", r);
                                      })
                                    : i[r].selector.attr("data-dd-roundtrip-" + r, t).attr("data-dd-roundtrip-selector", r),
                                (r = "b" == r ? "a" : "b");
                        }
                    }
                    W(o);
                }
            })
            .on("mouseleave", F + " .pick-lg .pick-lg-b li", function () {
                o && o.roundtrip && w(o);
            })
            .on("mouseenter", F + " .pick-lg .pick-lg-b li", function () {
                o && o.roundtrip && w(o, u(this));
            })
            .on("click", F + " .pick-btn-sz", function () {
                o && X(o);
            })
            .on(v.i, F + " .pick-arw.pick-arw-s2", function (e) {
                if (o) {
                    var i;
                    e.preventDefault(), (a = null);
                    u(this).closest("ul").data("k");
                    var t = o.jump;
                    i = u(this).hasClass("pick-arw-r") ? x(o, "y") + t : x(o, "y") - t;
                    var r = (function (e, i, t) {
                        for (var r = [], a = e.key[i], o = a.min; o <= a.max; o++) o % t == 0 && r.push(o);
                        return r;
                    })(o, "y", t);
                    i > r[r.length - 1] && (i = r[0]), i < r[0] && (i = r[r.length - 1]), (o.key.y.current = i), U(o, "y", x(o, "y"));
                }
            })
            .on(v.i, F, function (e) {
                o && A(o, "*:focus").blur();
            })
            .on(v.i, F + " .pick-arw.pick-arw-s1", function (e) {
                if (o) {
                    e.preventDefault(), (a = null);
                    var i = u(this).closest("ul").data("k"),
                        t = u(this).hasClass("pick-arw-r") ? "right" : "left";
                    $(o, i, t);
                }
            })
            .on(v.i, F + " ul.pick.pick-y li", function () {
                k = !0;
            })
            .on(v.e, F + " ul.pick.pick-y li", function () {
                var e;
                o &&
                    (!k ||
                        (e = o).jump >= e.key.y.max - e.key.y.min ||
                        (!(function (t) {
                            var e = A(t, ".picker-jumped-years");
                            e.length && e.remove();
                            var r = u("<div>", { class: "picker-jumped-years" }).appendTo(A(t, ".picker"));
                            setTimeout(function () {
                                r.addClass("picker-jumper-years-visible");
                            }, 100);
                            for (var i = t.key.y.min; i <= t.key.y.max; i++)
                                i % t.jump == 0 &&
                                    u("<div>", { "data-id": i+543 })
                                        .click(function (e) {
                                            var i = u(this).data("id");
                                            _(t, "y", i-543),
                                                W(t),
                                                r.removeClass("picker-jumper-years-visible"),
                                                setTimeout(function () {
                                                    r.remove();
                                                }, 300);
                                        })
                                        .appendTo(r);
                        })(o),
                        (k = !1)));
            })
            .on(v.i, F + " ul.pick.pick-d li", function () {
                o && (k = !0);
            })
            .on(v.e, F + " ul.pick.pick-d li", function () {
                o && k && (X(o), (k = !1));
            })
            .on(v.i, F + " ul.pick", function (e) {
                if (o && (a = u(this))) {
                    var i = a.data("k");
                    (n = f() ? e.originalEvent.touches[0].pageY : e.pageY), (d = x(o, i));
                }
            })
            .on(v.m, function (e) {
                if (o && ((k = !1), a)) {
                    e.preventDefault();
                    var i = a.data("k"),
                        t = f() ? e.originalEvent.touches[0].pageY : e.pageY;
                    (t = n - t), (t = Math.round(0.026 * t));
                    var r = z(o, i, d + t);
                    r != o.key[i].current && _(o, i, r), o.onPickerDragging && o.onPickerDragging({ key: i, value: r });
                }
            })
            .on(v.e, function (e) {
                a && ((d = n = a = null), o && (W(o), o.onPickerRelease && o.onPickerRelease(J(o))));
            })
            .on(v.i, F + " .pick-submit", function () {
                o && (G(o) || (ee(o, !0), B(o)));
            }),
            u(window).resize(function () {
                o && (I(o), b(o));
            }),
            document.addEventListener(
                "touchmove",
                function (e) {
                    var i = u(e.target).closest(".picker-jumped-years").length;
                    o && !i ? (u("html,body").css("touch-action", "none"), e.preventDefault()) : u("html,body").css("touch-action", "unset");
                },
                { passive: !1 }
            ),
            (u.fn.dateDropper = function (e) {
                if (m() && m() < 10) console.error("[DATEDROPPER] This browser is not supported");
                else {
                    if ("object" == typeof e || !e) return l.init.apply(this, arguments);
                    if ("string" == typeof e && l[e]) return l[e].apply(this, Array.prototype.slice.call(arguments, 1));
                    console.error("[DATEDROPPER] This method not exist");
                }
            }),
            u("head").append("<style>" + u.dateDropperSetup.inlineCSS + "</style>"),
            u(document).ready(function () {
                u.dateDropperSetup.autoInit &&
                    u(".datedropper-init,[data-datedropper]").each(function () {
                        u(this).dateDropper();
                    });
            });
    })(jQuery);

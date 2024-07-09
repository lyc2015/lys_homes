<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">

<head>
    <meta name="description" content="投資用、事業用物件から住まいまでお探し頂ける東京建物不動産販売の公式サイトです。不動産の売却、土地・建物の有効活用、社宅管理代行など、個人不動産・企業不動産（ＣＲＥ戦略）のサポートは当社にお任せください。" />
    <meta name="keywords" content="東京建物不動産販売,東京建物,不動産ソリューション" />

    <meta name="robots" content="index,follow" />

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="Content-Style-Type" content="text/css" />
    <meta http-equiv="Content-Script-Type" content="text/javascript" />

    <title>東京建物の不動産ソリューション｜東京建物不動産販売</title>

    <script src="https://use.typekit.net/ezr0xhc.js"></script>
    <script>
        try {
            Typekit.load({
                async: true
            });
        } catch (e) {}
    </script>

    <link rel="shortcut icon" href="<?php echo e(asset('index2/favicons/favicon.ico')); ?>">
    <link rel="apple-touch-icon" href="<?php echo e(asset('index2/favicons/favicon.png')); ?>">

    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">

    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:300,400&display=swap&amp;subset=japanese" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Oswald:400,600" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('index2/css/jquery.loadmask.css')); ?>" />
    <!-- Bootstrap Core Css -->
    <link href="<?php echo e(asset('backend/plugins/bootstrap/css/bootstrap.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('slick/slick.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('slick/slick-theme.css')); ?>" />

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('index2/css/include.css')); ?>" />


    <?php echo $__env->yieldContent('styles'); ?>

    <link rel="canonical" href="<?php echo e(asset('index2/')); ?>" />

    <script type="text/javascript" src="<?php echo e(asset('index2/js/jquery-1.10.2.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('index2/js/jquery-migrate-1.2.1.min.js')); ?>"></script>
    <!-- Bootstrap Core Js -->
    <script src="<?php echo e(asset('backend/plugins/bootstrap/js/bootstrap.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('index2/js/jquery.accordion.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('index2/js/jquery.bgswitcher.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('index2/js/jquery.lazyload.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('index2/js/jquery.colorbox-min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('index2/js/main.js')); ?>"></script>

    <script type="text/javascript" src="<?php echo e(asset('index2/js/common.js')); ?>"></script>

    <script type="text/javascript" src="<?php echo e(asset('index2/js/smartRollover.js')); ?>"></script>

    <script src="https://maps.googleapis.com/maps/api/js?v=3&client=gme-tatemono" type="text/javascript" charset="utf-8"></script>

    <script type="text/javascript" src="<?php echo e(asset('index2/js/fn.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('index2/js/base64.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('index2/js/data.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('index2/js/highcharts.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('index2/js/street_view.js')); ?>"></script>

    <script type="text/javascript" src="<?php echo e(asset('index2/js/smart_info_window.js')); ?>"></script>

    <script type="text/javascript" src="<?php echo e(asset('index2/js/google_map.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('slick/slick.min.js')); ?>"></script>

    <script type="text/javascript" src="<?php echo e(asset('index2/js/header.js')); ?>"></script>

    <!--[if gte IE 9]>
	<style type="text/css">
		.gradient {
			 filter: none;
		}
	</style>
<![endif]-->

</head>


<body>

    <div id="header" class="js_header_init header_init">
        <div class="header_wrap">
            <div id="headerLogoArea" class="">
                <div class="header_logo_wrap clearfix">
                    <!-- <a href="<?php echo e(asset('index2/')); ?>" class="header_logo"><img src="<?php echo e(asset('index2/img/common/header_logo.png')); ?>" alt="東京建物不動産販売"></a> -->
                    <a href="<?php echo e(route('home')); ?>" class="header_logo"><img src="<?php echo e(asset('index2/img/common/header_logo.png')); ?>" alt="東京建物不動産販売"></a>
                </div>
            </div>

            <div id="headerMainArea" class="clearfix">
            <!-- <div id="headerMainArea"> -->
                <div class="header_gnav_wrap">
                    <ul class="js_header_gnav header_gnav">
                        <li class="header_gnav_item header_gnav_item-top">
                            <a href="<?php echo e(route('home')); ?>" class="parent_item">TOP</a>
                        </li>
                        <li class="header_gnav_item header_gnav_item-top">
                            <span class="parent_item"><a href="<?php echo e(route('property', ['purpose' => 'sale',])); ?>" class="js_to_investment" target="_blank">販売物件</a></span>
                        </li>
                        <li class="header_gnav_item header_gnav_item-top">
                            <span class="parent_item"><a href="<?php echo e(route('property', ['purpose' => 'rent',])); ?>" class="js_to_investment" target="_blank">賃貸物件</a></span>
                        </li>
                        <li class="header_gnav_item header_gnav_item-top">
                            <span class="parent_item"><a href="<?php echo e(route('company')); ?>" class="js_to_investment" target="_blank">会社概要</a></span>
                        </li>
                        <li class="header_gnav_item header_gnav_item-top">
                            <span class="parent_item"><a href="<?php echo e(route('recruit')); ?>" class="js_to_investment" target="_blank">採用情報</a></span>
                        </li>
                        <li class="header_gnav_item header_gnav_item-top">
                            <span class="parent_item"><a href="<?php echo e(route('contact')); ?>" class="js_to_investment" target="_blank">お問合せ・連絡先</a></span>
                        </li>
                        <li class="header_gnav_item header_gnav_item-top">
                            <span class="parent_item"><a href="<?php echo e(route('login')); ?>" class="js_to_investment" target="_blank">ログイン</a></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="js_header_change header_change">
        <div class="fixed_header js_fixed_header">
            <h1 class="light_logo">
                <!-- <a href="<?php echo e(asset('index2/')); ?>" class="light_logo_img"><img src="<?php echo e(asset('index2/img/common/header_logo.png')); ?>" alt=""></a> -->
                <a href="<?php echo e(route('home')); ?>" class="light_logo_img"><img src="<?php echo e(asset('index2/img/common/header_logo.png')); ?>" alt=""></a>
            </h1>
            <div class="light_gnav_wrap">
                <ul class="js_light_gnav light_gnav">
                    <li class="light_gnav_item light_gnav_item-top">
                        <a href="<?php echo e(route('home')); ?>" class="parent_item">TOP</a>
                    </li>
                    <li class="light_gnav_item light_gnav_item-top">
                        <span class="parent_item"><a href="<?php echo e(route('property', ['purpose' => 'sale',])); ?>" class="js_to_investment" target="_blank">販売物件</a></span>

                    </li>
                    <li class="light_gnav_item light_gnav_item-top">
                        <span class="parent_item"><a href="<?php echo e(route('property', ['purpose' => 'rent',])); ?>" class="js_to_investment" target="_blank">賃貸物件</a></span>
                    </li>
                    <li class="light_gnav_item light_gnav_item-top">
                        <span class="parent_item"><a href="<?php echo e(route('company')); ?>" class="js_to_investment" target="_blank">会社概要</a></span>
                    </li>
                    <li class="light_gnav_item light_gnav_item-top">
                        <span class="parent_item"><a href="<?php echo e(route('recruit')); ?>" class="js_to_investment" target="_blank">採用情報</a></span>
                    </li>
                    <li class="light_gnav_item light_gnav_item-top">
                        <span class="parent_item"><a href="<?php echo e(route('contact')); ?>" class="js_to_investment" target="_blank">お問合せ・連絡先</a></span>
                    </li>
                    <li class="light_gnav_item light_gnav_item-top">
                        <span class="parent_item"><a href="<?php echo e(route('login')); ?>" class="js_to_investment" target="_blank">ログイン</a></span>
                    </li>
                </ul>
            </div>
        </div>
    </div>



    <div id="wrapper" class="clearfix">
        <div id="page-contents" class="clearfix">
            <?php echo $__env->yieldContent('content'); ?>
            <!--
                <div class="main_visual">
                    <div class="main_visual_parts mv_bg_img">
                        <video autoplay muted playsinline>
                            <source src="<?php echo e(asset('index2/img/top/mv_tHD-def.mp4#t=,8')); ?>" type="video/mp4">
                        </video>
                    </div>
                    <div class="main_visual_parts mv_catch">
                        <div class="inner">
                            <h2 class="top_catch_title">
                                <span class="line2 theme_font_ja">
                                    東京建物の<br>不動産ソリューション
                                </span>
                                <span class="line1">
                                    <span class="color-1 theme_font">REAL ESTATE SOLUTIONS</span>
                                </span>
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="navi_for_header_select_language_wrap">
                    <ul class="navi_for_header_select_language">
                        <li class="item-english"><a href="<?php echo e(asset('index2/english/')); ?>">English</a></li>
                        <li class="item-hantai"><a href="<?php echo e(asset('index2/original-chinese/')); ?>">中文繁体</a></li>
                        <li class="item-kantai"><a href="<?php echo e(asset('index2/simplified-chinese/')); ?>">中文簡体</a></li>
                    </ul>
                </div>

                <div class="main">

                    <div class="content_block width_full bg--lightgray clearfix content1">

                        <div class="block_inner">
                            <h2 class="top_page_title">
                                <span class="title-en theme_font">CONTENTS</span>
                                <span class="title-ja theme_font_ja">コンテンツ紹介</span>
                            </h2>

                            <div class="introduction_statement clearfix">
                                <p>
                                    投資・事業用物件から住まいまでお客様の不動産ニーズにお応えするメニューをご紹介いたします。
                                </p>
                            </div>
                        </div>

                        <div class="site_content_list_wrap clearfix">
                            <ul class="list-site_content">
                                <li class="item item-1">
                                    <div class="item-body">
                                        <div class="item-title">
                                            <span class="title-en theme_font">Finding</span>
                                            <h4 class="title-ja">投資・事業用物件を探す</h4>
                                        </div>
                                        <div class="item-txt">
                                            <p>
                                                区分マンションのオーナーチェンジ物件、アパート・一棟マンション等の
                                                <br>投資用物件や事務所・倉庫・工場・ホテル等の事業用物件をお探しの方はこちら
                                                <br>またオフィス・店舗用の賃貸物件もお探し頂けます

                                            </p>
                                        </div>
                                        <ul class="item-links">
                                            <li>
                                                <a href="https://sumikae.ttfuhan.co.jp/investment/" target="_blank" class="link_button js_to_investment"><span class="button_label">投資用不動産特集</span></a>
                                            </li>
                                            <li>
                                                <a href="https://sumikae.ttfuhan.co.jp/biz/" target="_blank" class="link_button js_to_biz"><span class="button_label">事業用不動産特集</span></a>
                                            </li>
                                            <li>
                                                <a href="https://www.office-ttfuhan.jp/" target="_blank" class="link_button js_to_office"><span class="button_label">オフィス・店舗用賃貸物件</span></a>
                                            </li>
                                            <li>
                                                <a href="https://sumikae.ttfuhan.co.jp/contact/investment_introduction/" target="_blank" class="link_button"><span class="button_label">投資用物件紹介希望はこちら</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <li class="item item-2">
                                    <div class="item-body">
                                        <div class="item-title">
                                            <span class="title-en theme_font">Sell</span>
                                            <h4 class="title-ja">不動産の売却</h4>
                                        </div>
                                        <div class="item-txt">
                                            <p>
                                                お客様のご意向やご所有不動産の特性を踏まえ、最適な売却プランをご提案します
                                                <br>早期の資金化やバルクセール（一括売却）をご希望の際は、自社での購入も検討させて頂きます
                                            </p>
                                        </div>
                                        <ul class="item-links">
                                            <li>
                                                <a href="<?php echo e(asset('index2/sell/')); ?>" class="link_button"><span class="button_label">不動産売却のご案内</span></a>
                                            </li>
                                            <li>
                                                <a href="<?php echo e(asset('index2/contact/biz_sell_satei/')); ?>" class="link_button"><span class="button_label">査定のご依頼はこちら</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <li class="item item-3">
                                    <div class="item-body">
                                        <div class="item-title">
                                            <span class="title-en theme_font">Effective</span>
                                            <h4 class="title-ja">土地・建物の有効活用</h4>
                                        </div>
                                        <div class="item-txt">
                                            <p>
                                                当社は土地・建物の課題に対する有効活用案を多数ご用意しております
                                                <br>お客様の不動産に新たな価値を見出し課題改善を目指します
                                            </p>
                                        </div>
                                        <ul class="item-links">
                                            <li>
                                                <a href="<?php echo e(asset('index2/effective/')); ?>" class="link_button"><span class="button_label">有効活用のご案内</span></a>
                                            </li>
                                            <li>
                                                <a href="<?php echo e(asset('index2/contact/effective_consult/')); ?>" class="link_button"><span class="button_label">有効活用のご相談はこちら</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <li class="item item-4">
                                    <div class="item-body">
                                        <div class="item-title">
                                            <span class="title-en theme_font">Residence</span>
                                            <h4 class="title-ja">住まいの売買・賃貸</h4>
                                        </div>
                                        <div class="item-txt">
                                            <p>
                                                居住用のマンション、戸建、土地をお探しの方、売りたい方はこちら
                                                <br>住まいを貸したい方、借りたい方のご相談も承ります
                                            </p>
                                        </div>
                                        <ul class="item-links">
                                            <li>
                                                <a href="https://sumikae.ttfuhan.co.jp/buy/" target="_blank" class="link_button js_to_buy"><span class="button_label">住まいを買う</span></a>
                                            </li>
                                            <li>
                                                <a href="https://sumikae.ttfuhan.co.jp/sell/" target="_blank" class="link_button js_to_sell"><span class="button_label">住まいを売る</span></a>
                                            </li>
                                            <li>
                                                <a href="https://sumikae.ttfuhan.co.jp/rent/" target="_blank" class="link_button js_to_rent"><span class="button_label">住まいを借りる</span></a>
                                            </li>
                                            <li>
                                                <a href="https://sumikae.ttfuhan.co.jp/lend/" target="_blank" class="link_button js_to_lend"><span class="button_label">住まいを貸す</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>


                    <div class="content_block width_full bg--pattern19 clearfix">
                        <div class="block_inner content2">

                            <div class="content-in clearfix">

                                <div class="content-bg">
                                    <img src="<?php echo e(asset('index2/img/top/business_guidance_bg.jpg')); ?>" alt="">
                                </div>

                                <div class="content-txts">
                                    <div class="top_page_title_wrap">
                                        <h2 class="top_page_title">
                                            <span class="title-en theme_font">BUSINESS GUIDANCE</span>
                                            <span class="title-ja theme_font_ja">当社の事業</span>
                                        </h2>
                                        <p class="lead">
                                            当社は東京建物グループの
                                            <br>アセットサービス事業を担うセクションとして
                                            <br>主要エリアに店舗を構え、
                                            <br>売買仲介・アセットソリューション・賃貸管理を軸に
                                            <br>事業を展開しております。
                                        </p>
                                    </div>

                                    <div class="list_wrap">
                                        <ul class="list-txtlink clearfix">
                                            <li class="item-txtlink">
                                                <a href="<?php echo e(asset('index2/chukai/')); ?>" class="anime anime-1">
                                                    <h3 class="txtlink-title">仲介事業</h3>
                                                    <h4 class="txtlink-title_en theme_font">Mediation Business</h4>
                                                </a>
                                            </li>

                                            <li class="item-txtlink">
                                                <a href="<?php echo e(asset('index2/company/business/solution/')); ?>" class="anime anime-1">
                                                    <h3 class="txtlink-title">アセットソリューション事業</h3>
                                                    <h4 class="txtlink-title_en theme_font">Asset Solution Business</h4>
                                                </a>
                                            </li>

                                            <li class="item-txtlink">
                                                <a href="<?php echo e(asset('index2/company/business/chintai/')); ?>" class="anime anime-1">
                                                    <h3 class="txtlink-title">賃貸事業</h3>
                                                    <h4 class="txtlink-title_en theme_font">Rent Business</h4>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="link_button_wrap">
                                    <a href="<?php echo e(asset('index2/company/business/cresupport/')); ?>" class="link_button"><span class="button_label">企業不動産（CRE）戦略について</span></a>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="content_block width_full clearfix">
                        <div class="block_inner content3">
                            <div class="news_wrap">
                                <div class="top_page_title_wrap">
                                    <h2 class="top_page_title">
                                        <span class="title-en theme_font">NEWS</span>
                                        <span class="title-ja theme_font_ja">新着ニュースリリース</span>
                                    </h2>
                                </div>
                                <div class="news">
                                    <dl>
                                        <dt class="sticker-release">
                                        </dt>
                                        <dd><span>2023.05.02</span><a href="/pdf/company/_news_release_/230502.pdf" target="_blank">創業記念日の振替による臨時休業および電話・FAX一時不通のお知らせ</a></dd>
                                    </dl>
                                    <dl>
                                        <dt class="sticker-release">
                                        </dt>
                                        <dd><span>2023.04.20</span><a href="/pdf/company/_news_release_/230420.pdf" target="_blank">津田沼支店・町田支店、電話・FAX一時不通のお知らせ</a></dd>
                                    </dl>
                                    <dl>
                                        <dt class="sticker-release">
                                        </dt>
                                        <dd><span>2023.04.17</span><a href="/pdf/company/_news_release_/230417.pdf" target="_blank">ゴールデンウィーク期間中休業のご案内</a></dd>
                                    </dl>
                                    <dl>
                                        <dt class="sticker-release">
                                        </dt>
                                        <dd><span>2023.03.30</span><a href="/pdf/company/_news_release_/230330.pdf" target="_blank">適格請求書発行事業者登録番号取得について</a></dd>
                                    </dl>
                                    <dl>
                                        <dt class="sticker-release">
                                        </dt>
                                        <dd><span>2023.03.29</span><a href="/pdf/company/_news_release_/230329.pdf" target="_blank">東京建物八重洲さくら通りビル 電話・FAX一時不通のお知らせ</a></dd>
                                    </dl>
                                </div>
                            </div>
                            <div class="link_button_wrap clearfix">
                                <a href="<?php echo e(asset('index2/company/release/')); ?>" class="link_button"><span class="button_label">ニュースリリース一覧</span></a>
                            </div>
                        </div>
                    </div>



                    <div class="content_block width_full bg--pattern19 clearfix">
                        <div class="block_inner content4">

                            <div class="content-in clearfix">

                                <div class="content-bg">
                                    <img src="<?php echo e(asset('index2/img/top/about_bg.jpg')); ?>" alt="">
                                </div>

                                <div class="content-txts">
                                    <div class="top_page_title_wrap">
                                        <h2 class="top_page_title">
                                            <span class="title-en theme_font">ABOUT</span>
                                            <span class="title-ja theme_font_ja">当社について</span>
                                        </h2>
                                        <p class="lead">
                                            当社は1980年（昭和55年）、
                                            <br>東京建物の不動産流通部門を
                                            <br>担うために発足しました。
                                            <br>お陰様で創立40周年を迎えました。
                                        </p>
                                    </div>

                                    <div class="list_wrap">
                                        <ul class="list-txtlink clearfix">
                                            <li class="item-txtlink">
                                                <a href="<?php echo e(asset('index2/company/')); ?>" class="anime anime-1">
                                                    <h3 class="txtlink-title">会社情報</h3>
                                                    <h4 class="txtlink-title_en theme_font">Company Information</h4>
                                                </a>
                                            </li>

                                            <li class="item-txtlink">
                                                <a href="<?php echo e(asset('index2/branch/')); ?>" class="anime anime-1">
                                                    <h3 class="txtlink-title">営業部支店</h3>
                                                    <h4 class="txtlink-title_en theme_font">Sales Branch</h4>
                                                </a>
                                            </li>

                                            <li class="item-txtlink">
                                                <a href="<?php echo e(asset('index2/recruit/')); ?>" class="anime anime-1">
                                                    <h3 class="txtlink-title">採用情報</h3>
                                                    <h4 class="txtlink-title_en theme_font">Recruitment Information</h4>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="content_block width_full clearfix">
                        <div class="block_inner content5">
                            <h2 class="top_page_title">
                                <span class="title-en theme_font">RELATED SITE</span>
                                <span class="title-ja theme_font_ja">関連サイト</span>
                            </h2>

                            <ul class="list-normal_card">
                                <li class="item-normal_card">
                                    <a href="https://sumikae.ttfuhan.co.jp/" class="js_to_sgn" target="_blank">
                                        <img src="<?php echo e(asset('index2/img/top/related_site1-1.jpg')); ?>" alt="住みかえサイト">
                                        <p class="normal_card-button">
                                            <span class="normal_card-title">東京建物の住みかえサイト</span>
                                        </p>
                                        <p class="info_txt">
                                            これから住まいを探す方・住みかえされる方を
                                            <br>サポートする住まいの売買・賃貸情報サイト
                                        </p>
                                    </a>
                                </li>
                                <li class="item-normal_card">
                                    <a href="https://library.ttfuhan.co.jp/" target="_blank">
                                        <img src="<?php echo e(asset('index2/img/top/related_site1-2.jpg')); ?>" alt="東京建物マンションライブラリー">
                                        <p class="normal_card-button">
                                            <span class="normal_card-title">東京建物マンションライブラリー</span>
                                        </p>
                                        <p class="info_txt">
                                            Brillia・ヴェール・東建ニューハイツ等、これまでに
                                            <br>東京建物が分譲したマンションを紹介する物件サイト
                                        </p>
                                    </a>
                                </li>
                                <li class="item-normal_card">
                                    <a href="https://sumikae.ttfuhan.co.jp/database/" class="js_to_database" target="_blank">
                                        <img src="<?php echo e(asset('index2/img/top/related_site1-3.jpg')); ?>" alt="マンションデータベース">
                                        <p class="normal_card-button">
                                            <span class="normal_card-title">マンションデータベース</span>
                                        </p>
                                        <p class="info_txt">
                                            首都圏にある5万棟超の分譲マンションデータを元に
                                            <br>販売履歴や推定相場を確認できる売買情報コンテンツ
                                        </p>
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </div>


                </div> 
-->
        </div><!-- .page-contents END -->
    </div><!-- .wrapper END -->

    <footer>
        <div class="footer footer_bg">
            <div class="footer-block">
                <ul class="footer-nav clearfix">

                    <li class="ft-col-wrap ft-external_link">
                        <dl>
                            <dt><a href="<?php echo e(route('home')); ?>" class="ft-link_list_title">TOP</a></dt>
                        </dl>
                    </li>


                    <li class="ft-col-wrap ft-external_link">
                        <dl>
                            <dt><a href="<?php echo e(route('property', ['purpose' => 'sale',])); ?>" class="ft-link_list_title">販売物件</a></dt>
                        </dl>
                    </li>


                    <li class="ft-col-wrap ft-external_link">
                        <dl>
                            <dt><a href="<?php echo e(route('property', ['purpose' => 'rent',])); ?>" class="ft-link_list_title">賃貸物件</a></dt>
                        </dl>
                    </li>


                    <li class="ft-col-wrap ft-external_link">
                        <dl>
                            <dt><a href="<?php echo e(route('company')); ?>" class="ft-link_list_title">会社概要</a></dt>
                        </dl>
                    </li>

                    <li class="ft-col-wrap ft-external_link">
                        <dl>
                            <dt><a href="<?php echo e(route('recruit')); ?>" class="ft-link_list_title">採用情報</a></dt>
                        </dl>
                    </li>

                    

                    <li class="ft-col-wrap ft-external_link">
                        <dl>
                            <dt><a href="<?php echo e(route('contact')); ?>" class="ft-link_list_title">お問合せ・連絡先</a></dt>
                        </dl>
                    </li>

                    <li class="ft-col-wrap ft-external_link">
                        <dl>
                            <dt><a href="<?php echo e(route('login')); ?>" class="ft-link_list_title">ログイン</a></dt>
                        </dl>
                    </li>

                </ul>
                <!--
			<div class="pagetop js-pagetop">
				ページトップへ
			</div>
-->

            </div><!-- footer-block END -->

            <div class="footer-copy-wrap">
                <p class="copyright theme_font">Copyright &copy; Tokyo Tatemono Real Estate Sales Co., Ltd.</p>
            </div>
        </div>

    </footer>







    <script type="text/javascript">
        // 画面下に着地したときの挙動 ---------------
        var blockcontact = $('.footBlockContactWrap');

        $(window).scroll(function() {
            if ($(this).scrollTop() > 30) {
                blockcontact.addClass('js-isActive');
            } else {
                blockcontact.removeClass('js-isActive');
            }
            var scrollHeight = $(document).height();
            var scrollPosition = $(window).height() + $(window).scrollTop();
            var footHeight = $('.footer').innerHeight();
            if (scrollHeight - scrollPosition <= footHeight) {
                blockcontact.addClass('js-isOver');
            } else {
                blockcontact.removeClass('js-isOver');
            }
        });
    </script>
</body>

</html>

<?php echo $__env->yieldContent('scripts'); ?>
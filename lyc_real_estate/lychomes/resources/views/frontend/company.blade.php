@extends('frontend.layouts.app2')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('index2/css/company.css') }}" />
@endsection

@section('content')
<div id="contents" class="company">
    <div class="main">

        <div class="page_header page_header_design">
            <div class="page_header_parts page_header_bg_img"></div>
            <div class="page_header_parts page_header_catch">
                <div class="inner">
                    <h2 class="page_title">
                        <span class="title-en theme_font">Company</span>
                        <span class="title-ja">会社情報</span>
                    </h2>
                </div>
            </div>
        </div>


        <div class="content_block width_full clearfix">
            <div class="block_inner content1">
                <h2 class="content_title">
                    <span class="title-ja">信頼・創造・未来</span>
                    <span class="title-en diamond">Trust･Creation･Future</span>
                </h2>

                <div class="introduction_statement clearfix">
                    <p>
                        東京建物不動産販売は、120年の歴史を持つ東京建物と、
                        <br>グループ各社の総合力を活かした、ワンストップで最適なソリューションをお届けしています。
                    </p>
                </div>

                <div class="list_wrap">
                    <ul class="list-mini_content_link row-3">
                        <li>
                            <a href="{{ route('company', ['subpage' => 'philosophy',]) }}" class="anime-wrap">
                                <div class="kazari-wrap anime anime-in">
                                    <h4 class="txt1 theme_font">content / 01</h4>
                                    <h4 class="txt2 theme_font">PHILOSOPHY</h4>
                                </div>
                                <div class="img-area">
                                    <div class="img-cap-wrap">
                                        <img src="{{ asset('/index2/img/company/mini_content_link1-1.jpg') }}" alt="企業理念・ごあいさつ" class="img">
                                    </div>
                                </div>
                                <div class="txt-wrap anime anime-in">
                                    <h4 class="title">企業理念・ごあいさつ</h4>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('company', ['subpage' => 'outline',]) }}" class="anime-wrap">
                                <div class="kazari-wrap anime anime-in">
                                    <h4 class="txt1 theme_font">content / 02</h4>
                                    <h4 class="txt2 theme_font">OUTLINE</h4>
                                </div>
                                <div class="img-area">
                                    <div class="img-cap-wrap">
                                        <img src="{{ asset('/index2/img/company/mini_content_link1-2.jpg') }}" alt="会社概要" class="img">
                                    </div>
                                </div>
                                <div class="txt-wrap anime anime-in">
                                    <h4 class="title">会社概要</h4>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('company', ['subpage' => 'history',]) }}" class="anime-wrap">
                                <div class="kazari-wrap anime anime-in">
                                    <h4 class="txt1 theme_font">content / 03</h4>
                                    <h4 class="txt2 theme_font">HISTORY</h4>
                                </div>
                                <div class="img-area">
                                    <div class="img-cap-wrap">
                                        <img src="{{ asset('/index2/img/company/mini_content_link1-3.jpg') }}" alt="沿革" class="img">
                                    </div>
                                </div>
                                <div class="txt-wrap anime anime-in">
                                    <h4 class="title">沿革</h4>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('company', ['subpage' => 'organization',]) }}" class="anime-wrap">
                                <div class="kazari-wrap anime anime-in">
                                    <h4 class="txt1 theme_font">content / 04</h4>
                                    <h4 class="txt2 theme_font">ORGANIZATION</h4>
                                </div>
                                <div class="img-area">
                                    <div class="img-cap-wrap">
                                        <img src="{{ asset('/index2/img/company/mini_content_link1-4.jpg') }}" alt="組織図" class="img">
                                    </div>
                                </div>
                                <div class="txt-wrap anime anime-in">
                                    <h4 class="title">組織図</h4>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('company', ['subpage' => 'release',]) }}" class="anime-wrap">
                                <div class="kazari-wrap anime anime-in">
                                    <h4 class="txt1 theme_font">content / 05</h4>
                                    <h4 class="txt2 theme_font">NEWS RELEASE</h4>
                                </div>
                                <div class="img-area">
                                    <div class="img-cap-wrap">
                                        <img src="{{ asset('/index2/img/company/mini_content_link1-5.jpg') }}" alt="ニュースリリース" class="img">
                                    </div>
                                </div>
                                <div class="txt-wrap anime anime-in">
                                    <h4 class="title">ニュースリリース</h4>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('company', ['subpage' => 'business',]) }}" class="anime-wrap">
                                <div class="kazari-wrap anime anime-in">
                                    <h4 class="txt1 theme_font">content / 06</h4>
                                    <h4 class="txt2 theme_font">BUSINESS</h4>
                                </div>
                                <div class="img-area">
                                    <div class="img-cap-wrap">
                                        <img src="{{ asset('/index2/img/company/mini_content_link1-6.jpg') }}" alt="事業案内" class="img">
                                    </div>
                                </div>
                                <div class="txt-wrap anime anime-in">
                                    <h4 class="title">事業案内</h4>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
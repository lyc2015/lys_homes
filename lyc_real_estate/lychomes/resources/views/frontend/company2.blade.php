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
					@foreach($list as $key=>$info)
                        <li>
                            <a href="/company/{{$key}}" class="anime-wrap">
                                <div class="kazari-wrap anime anime-in">
                                    <h4 class="txt1 theme_font">{{$info['cover_title']}}</h4>
                                    <h4 class="txt2 theme_font">{{strtoupper($info['cover_name'])}}</h4>
                                </div>
                                <div class="img-area">
                                    <div class="img-cap-wrap">
                                        <img src="/{{$info['companyinfo']->content['cover_image_link']}}" alt="{{$info['companyinfo']->content['cover_image_intro']}}" class="img">
                                    </div>
                                </div>
                                <div class="txt-wrap anime anime-in">
                                    <h4 class="title">{{$info['companyinfo']->content['cover_image_intro']}}</h4>
                                </div>
                            </a>
                        </li>
					@endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

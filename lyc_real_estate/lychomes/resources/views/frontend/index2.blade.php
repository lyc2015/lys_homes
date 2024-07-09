@extends('frontend.layouts.app2')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('index2/css/index.css') }}" />
@endsection

<style>

//.thumbnail{
//	height:400px;
//}
</style>

@section('content')
<div id="contents" class="index bg_pattern">
	<div class="main_visual">
		<div class="main_visual_parts mv_bg_img">
			<video loop autoplay muted playsinline>
				<!-- <source src="{{ asset('index2/img/top/mv_tHD-def.mp4#t=,8') }}" type="video/mp4"> -->
				<!--<source src="{{ route('stream', ['filename' => '20230605_2.mp4',]) }}" type="video/mp4">-->
				<source src="/{{$hm_back_image_file->file_link}}" type="video/mp4">
			</video>
		</div>
		<div class="main_visual_parts mv_catch">
			<div class="inner">
				<h2 class="top_catch_title">
					<span class="line2 theme_font_ja">
						TIC<br>不動産ソリューション
					</span>
					<span class="line1">
						<!-- <span class="color-1 theme_font">REAL ESTATE SOLUTIONS</span> -->
					</span>
				</h2>
			</div>
		</div>
	</div>

	<div class="navi_for_header_select_language_wrap">
		<ul class="navi_for_header_select_language">
			<!--
			<li class="item-english"><a href="#">English</a></li>
			<li class="item-hantai"><a href="#">中文繁体</a></li>
-->
			<li class="item-kantai"><a href="{{ route('simplifiedChinese') }}">中文簡体</a></li>
		</ul>
	</div>

	<div class="main">

		<!-- Slides -->
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
				<h1 class="slick-thumbnail-title"><a href="{{ route('property', ['purpose' => 'sale',]) }}">売買物件 PICK UP</a></h1>
				<div class="multiple-items">
					@foreach($sells as $sell)
					<li class="item">
						<div class="thumbnail slick-thumbnail" style="border-width: 10px;height:400px;">
							<a href="{{ route('property.show', ['id' => $sell->id,]) }}" target="_blank">
								@if (!$sell->gallery->isEmpty())
								<img src="{{ Storage::url('property/gallery/'.$sell->gallery->get(0)->name) }}" />
								@else
								<img src="{{ asset('/index2/img/top/list_content_menu-4.jpg') }}" />
								@endif
								<div class="caption" style="font-size:18px">
									<p class="text-justify" style="font-weight: bold;">
										物件名 : {{ $sell->title}}
										&nbsp;
										&nbsp;
										&nbsp;
										販売価格 : 
										<!-- {{ $sell->price }}  -->
										{{ $sell->price != round($sell->price) ? $sell->price : number_format($sell->price, 0) }}
										万円
									</p>
									<p class="text-justify">
										間取り : {{ $sell->house_layout}}
										&nbsp;
										&nbsp;
										&nbsp;
										交通 : {{ $sell->nearby }}
									</p>
								</div>
							</a>
						</div>
					</li>
					@endforeach
				</div>
			</div>

			<div class="site_content_list_wrap clearfix">
				<h1 class="slick-thumbnail-title"><a href="{{ route('property', ['purpose' => 'rent',]) }}">賃貸物件 PICK UP</a></h1>
				<div class="multiple-items">
					@foreach($rents as $rent)
					<li class="item">
						<div class="thumbnail slick-thumbnail" style="border-width: 10px;height:400px;">
							<a href="{{ route('property.show', ['id' => $rent->id,]) }}" target="_blank">
								@if (!$rent->gallery->isEmpty())
								<img src="{{ Storage::url('property/gallery/'.$rent->gallery->get(0)->name) }}" />
								@else
								<img src="{{ asset('/index2/img/top/list_content_menu-4.jpg') }}" />
								@endif
								<div class="caption" style="font-size:18px">
									<p class="text-justify" style="font-weight: bold;">
										物件名 : {{ $rent->title}}
										&nbsp;
										&nbsp;
										&nbsp;
										賃貸価格 : 
										{{ $rent->price != round($rent->price) ? $rent->price : number_format($rent->price, 0) }}
										<!-- {{ $rent->price }}  -->
										万円
									</p>
									<p class="text-justify">
										間取り : {{ $rent->house_layout}}
										&nbsp;
										&nbsp;
										&nbsp;
										交通 : {{ $rent->nearby }}
									</p>
									<p class="text-justify">
										敷 : {{ $rent->deposit ?:0}} 万円
										&nbsp;
										&nbsp;
										&nbsp;
										礼 : {{ $rent->key_money ?: 0}} 万円
									</p>
								</div>
							</a>
						</div>
					</li>
					@endforeach
				</div>
			</div>

		</div>
	</div>

	<!-- News -->
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
					@foreach($hm_news as $new)
					<dl>
						<dt class="sticker-release">
						</dt>
						<dd><span>{{$new->created_at->format('Y-m-d')}}</span><a href="javascript:void(0);">{{$new->title}}</a></dd>
					</dl>
					@endforeach
				</div>
			</div>
			<div class="link_button_wrap clearfix">
				<a href="/company/release" class="link_button"><span class="button_label">ニュースリリース一覧</span></a>
			</div>
		</div>
	</div>

	<!-- About -->
	<div class="content_block width_full bg--pattern19 clearfix">
		<div class="block_inner content4">

			<div class="content-in clearfix">

				<div class="content-bg">
					<img src="{{ asset('index2/img/top/about_bg.jpg') }}" alt="">
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
								<a href="{{ route('company') }}" class="anime anime-1">
									<h3 class="txtlink-title">会社情報</h3>
									<h4 class="txtlink-title_en theme_font">Company Information</h4>
								</a>
							</li>

							<li class="item-txtlink">
								<a href="{{ route('contact') }}" class="anime anime-1">
									<h3 class="txtlink-title">お問合せ・連絡先</h3>
									<h4 class="txtlink-title_en theme_font">Contact Information</h4>
								</a>
							</li>

							<li class="item-txtlink">
								<a href="{{ route('recruit') }}" class="anime anime-1">
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

</div>
</div>
@endsection

@section('scripts')
<script type="text/javascript" src="{{ asset('index2/js/index.js') }}"></script>
@endsection

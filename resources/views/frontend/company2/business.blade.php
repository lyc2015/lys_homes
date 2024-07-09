@extends('frontend.layouts.app2')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('index2/css/company/business.css') }}" />
<style>
</style>

@endsection

@section('content')
<div id="contents" class="business">
	<div class="main">

		<div class="page_header">
			<div class="page_header_parts page_header_bg_img"></div>
			<div class="page_header_parts page_header_catch">
				<div class="inner">
					<h2 class="page_title">
						<span class="title-en theme_font">{{$content['title_en']}}</span>
						<span class="title-ja">{{$content['title']}}</span>
					</h2>
				</div>
			</div>
		</div>
		<div class="content_block width_full clearfix">
			<div class="block_inner content1">
				<h2 class="content_title">
					<span class="title-ja">{{$content['title']}}</span>
					<span class="title-en theme_font">{{$content['title_en']}}</span>
				</h2>

				<div class="introduction_statement clearfix">
					<p>
{!!$content['middle_title']!!}
					</p>
				</div>

				<div class="img-txt yakuwari clearfix">
					<div class="img-area">
						<img src="/{{$content['middle_image_link']}}" alt="" />
					</div>
					<div class="txt-area">
						<h3 class="yakuwari-title">
							<span class="title">{!!$content['middle_right_title']!!}</span>
						</h3>
						<div class="txts txt-legible">
                            <p>
{!!$content['middle_right_content']!!}
							</p>
							<div class="link_button_wrap">
                                <a href="#" class="link_button">
<span class="button_label two">
    {!!$content['middle_right_bottom_title']!!}<br>
    <span class="mini_txt">{!!$content['middle_right_bottom_content']!!}</span>
</span>
</a>
							</div>
						</div>
					</div>
				</div>

				<div class="list_wrap">
					<ul class="list-normal_card" style="pointer-events: none">
					@foreach($content['bottoms'] as $bottom)
						<li class="item-normal_card">
                            <div class="img_wrap">
                                <img src="/{{ $bottom['bottom_image_link'] }}" alt="{{$bottom['bottom_title']}}" />
                            </div>
                            <p class="normal_card-title">
                                <span>{!!$bottom['bottom_title']!!}</span>
                            </p>
                            <p class="info_txt">
{!!$bottom['bottom_content']!!}
                            </p>
						</li>
					@endforeach
					</ul>
				</div>
			</div>
		</div>

	</div>
</div>
@endsection

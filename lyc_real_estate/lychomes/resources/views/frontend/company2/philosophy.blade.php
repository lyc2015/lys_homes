@extends('frontend.layouts.app2')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('index2/css/company/philosophy.css') }}" />
@endsection

@section('content')
<div id="contents" class="philosophy">
	<div class="main">

		<div class="page_header page_header_design">
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
					<span class="title-en">{{$content['title_en']}}</span>
				</h2>
				<div class="introduction_statement clearfix">
					<p class="em">
{!!$content['middle_title']!!}
					</p>
					<p>
{!!$content['middle_content']!!}
					</p>
				</div>
			</div>
		</div>


		<div class="content_block width_full clearfix">
			<div class="block_inner content2">
				<h2 class="content_title">
					<span class="title-ja">{{$content['bottom_title']}}</span>
					<span class="title-en">{{$content['bottom_title_en']}}</span>
				</h2>
				<div class="img-txt greeting clearfix">
					<div class="img-area img-cap-wrap">
						<img src="/{{$content['bottom_image_link']}}" alt="{{$content['bottom_image_intro']}}">
						<span class="img-cap">{!!$content['bottom_image_intro']!!}</span>
					</div>
					<div class="txt-area">
						<div class="txts txt-legible">
{!!$content['bottom_content']!!}
						</div>
					</div>
				</div>
			</div>
		</div>


	</div>
</div>
@endsection

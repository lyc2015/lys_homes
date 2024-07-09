@extends('frontend.layouts.app3')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('index2/css/simplified-chinese/top.css') }}" />
@endsection

@section('content')
<div id="contents" class="simplified-chinese">
	<div class="main">

		<div class="page_header page_header_design">
			<div class="page_header_parts page_header_bg_img"></div>
			<div class="page_header_parts page_header_catch">
				<div class="inner">
					<h2 class="page_title">
						<span class="simplified-chinese_title">{!!$content['name_zh']!!}</span>
					</h2>
				</div>
			</div>
		</div>


		<div class="content_block width_full clearfix">
			<div class="block_inner content1">
				<h2 class="content_title">
					<span class="simplified-chinese_title">{!!$content['title']!!}</span>
				</h2>
				<div class="img-txt greeting clearfix">
					<div class="img-area">
						<img src="/{{ $content['bottom_image_link']}}" alt="{{$content['bottom_title_left']}} | {{$content['bottom_title_right']}}">
						<p class="president">{{$content['bottom_title_left']}}</p>
						<p class="president_name">{{$content['bottom_title_right']}}</p>
					</div>
					<div class="txt-area">
						<div class="txts txt-legible">
							<p>
{!!$content['bottom_content']!!}
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>


	</div>
</div>
@endsection

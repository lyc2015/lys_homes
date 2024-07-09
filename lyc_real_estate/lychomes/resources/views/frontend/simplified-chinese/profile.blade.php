@extends('frontend.layouts.app3')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('index2/css/simplified-chinese/profile.css') }}" />
@endsection

@section('content')
<div id="contents" class="profile">
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

				<div class="introduction_statement clearfix">
					<p>
{!!$content['middle_content']!!}
					</p>
				</div>

				<h3 class="block_title">
					<span>业务和强项</span>
				</h3>

				<ul class="list-mini_content_link row-3">
					@foreach($content['business'] as $key=>$val)
					<li>
						<a href="#anc0{{$key+1}}" class="anime-wrap js_link_in_page">
							<div class="kazari-wrap anime anime-in">
								<h4 class="txt1 theme_font">SEGMENT / 0{{$key+1}}</h4>
								<h4 class="txt2">{{$val['name']}}</h4>
							</div>
						</a>
					</li>
					@endforeach
				</ul>

			</div>
		</div>

		@foreach($content['business'] as $key=>$val)
		<div class="content_block width_full clearfix">
			<div class="block_inner content1">
				<h2 class="content_title" id="anc0{{$key+1}}">
					<span class="simplified-chinese_title">{!!$val['name']!!}</span>
				</h2>

				<div class="segment clearfix">
					<div class="txt-area">
						<h3 class="segment-title">
							<span class="title">{!!$val['title']!!}</span>
						</h3>
						<div class="txts txt-legible">
							<p>
{!!$val['content']!!}
							</p>
						</div>
					</div>
					<div class="img-area img-right">
						<img src="/{{ $val['image_link'] }}" alt="{{$val['name']}}">
					</div>
				</div>
			</div>
		</div>
		@endforeach

	</div>
</div>
@endsection

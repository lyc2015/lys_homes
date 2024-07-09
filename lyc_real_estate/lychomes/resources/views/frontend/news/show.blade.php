@extends('frontend.layouts.app2')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('index2/css/company/release.css') }}" />
@endsection

@section('content')
<div id="contents" class="release">
	<div class="main">

		<div class="page_header page_header_design">
			<div class="page_header_parts page_header_bg_img"></div>
			<div class="page_header_parts page_header_catch">
				<div class="inner">
					<h2 class="page_title">
                        <span class="title-ja">ニュースリリース</span>
                        <span class="title-en">News Release</span>
					</h2>
				</div>
			</div>
		</div>


		<div class="content_block width_full clearfix">
			<div class="block_inner content1">

				<h2 class="content_title">
                        <span class="title-en theme_font">{{$new->title}}</span>
						<span class="title-ja">{{$new->title_en}}</span>
				</h2>

				<div class="news_wrap">
					<div class="news">
{!!$new->content!!}
					</div>
				</div>
			</div>
		</div>


	</div>
</div>
@endsection

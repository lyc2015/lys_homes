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

				<div class="news_wrap">
					<div class="news">
					@foreach($news as $new)
						<dl>
							<dt class="sticker-release">
							</dt>
							<dd>
                                <span>{{$new->created_at->format('Y.m.d')}}</span>
                                <a href="javascript:void(0);">{{$new->title}}</a>
							</dd>
						</dl>
					@endforeach
					</div>
				</div>
			</div>
		</div>


	</div>
</div>
@endsection

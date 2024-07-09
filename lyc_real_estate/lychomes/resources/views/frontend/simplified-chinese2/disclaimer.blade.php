@extends('frontend.layouts.app3')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('index2/css/simplified-chinese/disclaimer.css') }}" />
@endsection

@section('content')
<div id="contents" class="disclaimer">
	<div class="main">

		<div class="page_header page_header_design">
			<div class="page_header_parts page_header_bg_img"></div>
			<div class="page_header_parts page_header_catch">
				<div class="inner">
					<h2 class="page_title">
						<span class="simplified-chinese_title">免责事项</span>
					</h2>
				</div>
			</div>
		</div>


		<div class="content_block width_full clearfix">
			<div class="block_inner content1">
				<h2 class="content_title">
					<span class="simplified-chinese_title">免责事项</span>
				</h2>
				<div class="introduction_statement clearfix">
					<p>
						本公司运营网站所载各种内容，是根据编写当时认为可信任的各种信息和数据编写而成的，因此不能保证其准确性、相当性及完整性。此外，在主页文章中所记载的事项，可能会在不另行通知的情况下进行更改或中止，敬请谅解。另外，关于通过上述网站所链接到的其他网站，对该网站所载信息的准确性、合法性不予以保证。万一在使用链接的网站时出现问题，该责任应由链接网站承担，敬请知悉。
					</p>
				</div>
			</div>
		</div>



	</div>
</div>
@endsection
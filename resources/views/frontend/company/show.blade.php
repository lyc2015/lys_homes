@extends('frontend.layouts.app2')

@section('content')
<div id="contents" class="outline">
	<div class="main">

		<div class="page_header page_header_design">
			<div class="page_header_parts page_header_bg_img"></div>
			<div class="page_header_parts page_header_catch">
				<div class="inner">
					<h2 class="page_title">
						<span class="title-en theme_font">{{$company->title_en}}</span>
						<span class="title-ja">{{$company->title}}</span>
					</h2>
				</div>
			</div>
		</div>

{!!$company->content!!}
	
	</div>
</div>
@endsection

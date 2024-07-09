@extends('frontend.layouts.app2')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('index2/css/company/history.css') }}" />
@endsection

@section('content')
<div id="contents" class="history">
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
					<span class="title-ja">{!!$content['title']!!}</span>
					<span class="title-en theme_font">{!!$content['title_en']!!}</span>
				</h2>
				<div class="introduction_statement clearfix">
					<p>
{!!$content['middle_title']!!}
					</p>
				</div>
<?php $cur_year = ""; ?>
				<table class="table-history">
					@foreach($content['company_story'] as $year=>$val)
					@foreach($val as $month=>$val2)
					@foreach($val2 as $index=>$val3)
						<tr>
@if ($cur_year <> $year)
<?php $cur_year = $year; ?>
							<th class="title" rowspan="{{$year_counter[$year]}}">{{$year}}年</th>
@endif
							<th>{{$month}}月</th>
							<td>{!!$val3!!}</td>
						</tr>
					@endforeach
					@endforeach
					@endforeach
					</tbody>
				</table>

				<ul class="list-notes notes-table_history">
                    <li>{!!$content['bottom_content']!!}</li>
			</div>
		</div>


	</div>
</div>
@endsection

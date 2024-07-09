@extends('frontend.layouts.app3')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('index2/css/simplified-chinese/corporate.css') }}" />
@endsection

@section('content')
<div id="contents" class="corporate">
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
					<span class="simplified-chinese_title">{!!$content['title_outline']!!}</span>
				</h2>

				<table class="table-outline">
					<tbody>
						<tr>
							<th>公司名称</th>
							<td>{!!$content['company_name']!!}</td>
						</tr>
						<tr>
							<th>总公司地址</th>
							<td>{!!$content['company_adress']!!}</td>
						</tr>
						<tr>
							<th>資本金</th>
							<td>{!!$content['capital']!!}</td>
						</tr>
						<tr>
							<th>营业额</th>
							<td>{!!$content['revenue']!!}</td>
						</tr>
						<tr>
							<th>创立</th>
							<td>{!!$content['establish_time']!!}</td>
						</tr>
						<tr>
							<th>代表人</th>
							<td>{!!$content['legal_person']!!}</td>
						</tr>
						<tr>
							<th>主要业务</th>
							<td>{!!$content['business']!!}</td>
						</tr>
						<tr>
							<th>母公司</th>
							<td>{!!$content['mother_company']!!}</td>
						</tr>
						<tr>
							<th>所属团体</th>
							<td>{!!$content['affiliation']!!}</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>

		<div class="content_block width_full clearfix">
			<div class="block_inner content2">
				<h2 class="content_title">
					<span class="simplified-chinese_title">{!!$content['title_history']!!}</span>
				</h2>

				<table class="table-history">
					<tbody>
					@foreach($content['company_story'] as $year=>$val)
						<tr>
							<th>{{$year}}</th>
							<td>{!!$val!!}</td>
						</tr>
					@endforeach
					</tbody>
				</table>
			</div>
		</div>

	</div>
</div>
@endsection

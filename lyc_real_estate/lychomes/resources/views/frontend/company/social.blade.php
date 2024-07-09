@extends('frontend.layouts.app2')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('index2/css/company/social.css') }}" />
@endsection

@section('content')
<div id="contents" class="social">
	<div class="main">

		<div class="page_header page_header_design">
			<div class="page_header_parts page_header_bg_img"></div>
			<div class="page_header_parts page_header_catch">
				<div class="inner">
					<h2 class="page_title">
						<span class="title-en theme_font">Social</span>
						<span class="title-ja">Media</span>
					</h2>
				</div>
			</div>
		</div>


		<div class="content_block width_full clearfix">
			<div class="block_inner content1">
				<h2 class="content_title">
					<span class="title-ja">Media</span>
					<span class="title-en">Social</span>
				</h2>

				<table class="table-social">
					<tbody>
						<tr>
							<td>
								<div class="wc-btn top-sns-bnr-main u-cup copy-1" data-toggle="modal" data-target="#wechatModal">
									<img class="wc-bnr-img" src="{{ asset('index2/img/wc-logo-green.png') }}" alt="WeChat">
									<p><span class="wc-bnr-ttl-lg">微信公众号</span><br><span>wagaya Japan Official Account</span></p>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="line-btn top-sns-bnr-main u-cup copy-1" data-toggle="modal" data-target="#lineModal">
									<img class="line-bnr-img" src="{{ asset('index2/img/LINE_Brand_icon.png') }}" alt="Line">
									<p><span class="line-bnr-ttl-lg">微信公众号</span><br><span>wagaya Japan Official Account</span></p>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>

		<!-- Modal -->
		<div class="modal fade" id="wechatModal" tabindex="-1" role="dialog" aria-labelledby="wechatModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header no-border">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="text-center row form-group">
							<h1 style="color:#333;"><span class="wc-modal-mainTtl">微信公众号</span><br><span class="wc-modal-subTtl">wagaya Japan Official Account</span></h1>
						</div>
						<div class="text-center row form-group">
							<img src="{{ asset('index2/img/wc-logo-green.png') }}" alt="weChat QR code">
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Modal -->
		<div class="modal fade" id="lineModal" tabindex="-1" role="dialog" aria-labelledby="lineModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header no-border">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="text-center row form-group">
							<h1 style="color:#333;"><span class="wc-modal-mainTtl">微信公众号</span><br><span class="wc-modal-subTtl">wagaya Japan Official Account</span></h1>
						</div>
						<div class="text-center row form-group">
							<img src="{{ asset('index2/img/LINE_Brand_icon.png') }}" alt="weChat QR code" height="80%">
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>
@endsection

@section('scripts')

@endsection
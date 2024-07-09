@extends('frontend.layouts.app2')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('index2/css/company/business.css') }}" />
<style>
</style>

@endsection




@section('content')
<div id="contents" class="business">
	<div class="main">

		<div class="page_header">
			<div class="page_header_parts page_header_bg_img"></div>
			<div class="page_header_parts page_header_catch">
				<div class="inner">
					<h2 class="page_title">
						<span class="title-en theme_font">Business</span>
						<span class="title-ja">事業案内</span>
					</h2>
				</div>
			</div>
		</div>


		<div class="content_block width_full clearfix">
			<div class="block_inner content1">
				<h2 class="content_title">
					<span class="title-ja">事業案内</span>
					<span class="title-en">Business information</span>
				</h2>

				<div class="introduction_statement clearfix">
					<p>
						東京建物グループのビジネスフィールドは不動産開発をはじめ多岐にわたります。
						<br>当社が担う役割とそれを支える３つの事業をご紹介します。
					</p>
				</div>

				<div class="img-txt yakuwari clearfix">
					<div class="img-area">
						<img src="{{ asset('index2/img/company/business/maru.png') }}" alt="東京建物不動産販売の役割" />
					</div>
					<div class="txt-area">
						<h3 class="yakuwari-title">
							<span class="title">東京建物不動産販売の役割</span>
						</h3>
						<div class="txts txt-legible">
							<p>当社は東京建物グループのアセットサービス事業を担うセクションとして主要エリアに店舗を構え、
								<br>売買仲介・アセットソリューション・賃貸管理を軸に事業を展開しております。
							</p>
							<div class="link_button_wrap">
								<a href="javascript:void(0);" class="link_button"><span class="button_label two">東京建物グループのビジネスフィールドはこちら <i class="far fa-window-restore"></i>
										<br><span class="mini_txt">（「東京建物コーポレートサイト」に移動します）</span></span></a>
							</div>
						</div>
					</div>
				</div>

				<div class="list_wrap">
					<ul class="list-normal_card" style="pointer-events: none">

						<li class="item-normal_card">
							<a href="{{ route('company.business', ['subpage' => 'chukai',]) }}">
								<div class="img_wrap">
									<img src="{{ asset('index2/img/company/business/normal_card1-1.jpg') }}" alt="仲介事業" />
								</div>
								<p class="normal_card-title">
									<span>仲介事業</span>
								</p>
								<p class="info_txt">
									個人・法人のお客様の不動産売買ニーズにお応えする仲介事業を展開しています。住まいの他、投資用不動産・事業用不動産を取り扱いし、コンサルティングも承っております。
								</p>
							</a>
						</li>

						<li class="item-normal_card">
							<a href="{{ route('company.business', ['subpage' => 'solution',]) }}">
								<div class="img_wrap">
									<img src="{{ asset('index2/img/company/business/normal_card1-2.jpg') }}" alt="アセットソリューション事業" />
								</div>
								<p class="normal_card-title">
									<span>アセットソリューション事業</span>
								</p>
								<p class="info_txt">
									ファンドへの出資・アセットマネジメントの他、様々なアセットタイプを取得しリノベーション等により不動産の付加価値を向上させて再販する事業や、投資家向けの賃貸マンション・ホテルの開発等を行っています。
								</p>
							</a>
						</li>

						<li class="item-normal_card">
							<a href="{{ route('company.business', ['subpage' => 'chintai',]) }}">
								<div class="img_wrap">
									<img src="{{ asset('index2/img/company/business/normal_card1-3.jpg') }}" alt="賃貸事業" />
								</div>
								<p class="normal_card-title">
									<span>賃貸事業</span>
								</p>
								<p class="info_txt">
									賃貸マンション・オフィス等の”賃貸管理”や企業様の借上社宅に関する業務を代行する”社宅管理代行”を承っております。当社は賃貸管理を通じてオーナー様の資産形成・賃貸マンション経営を支えてまいります。
								</p>
							</a>
						</li>

					</ul>


				</div>
			</div>
		</div>

	</div>
</div>
@endsection
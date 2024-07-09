@extends('frontend.layouts.app2')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('index2/css/company/business/chukai.css') }}" />
@endsection

@section('content')
<div id="contents" class="chukai">
	<div class="main">

		<div class="page_header">
			<div class="page_header_parts page_header_bg_img"></div>
			<div class="page_header_parts page_header_catch">
				<div class="inner">
					<h2 class="page_title">
						<span class="title-en theme_font">Chukai</span>
						<span class="title-ja">仲介事業</span>
					</h2>
				</div>
			</div>
		</div>


		<div class="content_block width_full clearfix">
			<div class="block_inner content1">
				<h2 class="content_title">
					<span class="title-ja">仲介事業</span>
					<span class="title-en">Brokerage business</span>
				</h2>

				<div class="introduction_statement clearfix">
					<p>
						個人・法人のお客様の売買ニーズにお応えする不動産仲介事業を展開しています。
						<br>住宅・土地・事業用不動産等を取り扱いし、仲介だけでなく有効活用等のコンサルティングも承っております。
					</p>
				</div>


				<div class="sumai">
					<div class="img-txt jigyo clearfix">

						<div class="img-area img-right">
							<img src="https://www.ttfuhan.co.jp/img/chukai/jigyo-sumai.jpg" alt="住まいの仲介" />
						</div>

						<div class="txt-area">
							<h3 class="jigyo-title">
								<span class="title">住まいの仲介</span>
							</h3>
							<div class="txts txt-legible">
								<p>お客様の住まい探し・住みかえニーズに、豊富な物件情報と売却サポートサービスでお応えします。首都圏の主要エリアをはじめ関西圏・中京圏に拠点を設けお客様の住みかえをお手伝いさせて頂きます。
								</p>
								<div class="link_button_center">
									<a href="https://sumikae.ttfuhan.co.jp/buy/" target="_blank" class="link_button js_to_buy"><span class="button_label">住まいの購入はこちら</span></a>
									<a href="https://sumikae.ttfuhan.co.jp/sell/" target="_blank" class="link_button js_to_sell"><span class="button_label">住まいの売却はこちら</span></a>
								</div>
							</div>
						</div>
					</div>

					<div class="list_wrap">
						<h4 class="list_wrap_title">
							<span>関連サイトのご紹介</span>
						</h4>
						<ul class="list-normal_card">

							<li class="item-normal_card">
								<a href="https://sumikae.ttfuhan.co.jp/" class="js_to_sgn" target="_blank">
									<div class="img_wrap">
										<img src="https://www.ttfuhan.co.jp/img/chukai/normal_card1-1.jpg" alt="東京建物の住みかえサイト" />
									</div>
									<p class="normal_card-title">
										<span>東京建物の住みかえサイト</span>
									</p>
									<p class="info_txt">
										”東京建物の住みかえサイト”は、住まいを買いたい方、売りたい方、借りたい方、貸したい方向けの情報サイトです。マンション・戸建・土地の仲介物件情報の他、東京建物の分譲物件特集もご用意しております。また売却・賃貸管理のサポートもご確認頂けます。
									</p>
								</a>
							</li>


							<li class="item-normal_card">
								<a href="https://library.ttfuhan.co.jp/" target="_blank">
									<div class="img_wrap">
										<img src="https://www.ttfuhan.co.jp/img/chukai/normal_card1-2.jpg" alt="投資用不動産特集" />
									</div>
									<p class="normal_card-title">
										<span>東京建物マンションライブラリー</span>
									</p>
									<p class="info_txt">
										”東京建物マンションライブラリー”は「ブリリア」「ヴェール」「東建ニューハイツ」「JV物件」等、これまでに東京建物が分譲してきた物件をご紹介しております。大規模物件はマンションの魅力を細部までご紹介する”プレミアムサイト”もご用意しておりますので併せてご覧ください。
									</p>
								</a>
							</li>

						</ul>
					</div>
				</div>


				<div class="toshi">

					<div class="img-txt jigyo clearfix">

						<div class="img-area">
							<img src="https://www.ttfuhan.co.jp/img/chukai/jigyo-toshi.jpg" alt="投資・事業用不動産の仲介" />
						</div>

						<div class="txt-area">
							<h3 class="jigyo-title">
								<span class="title">投資・事業用不動産の仲介</span>
							</h3>
							<div class="txts txt-legible">
								<p>投資・事業用不動産については首都圏・関西圏・中京圏の拠点にて売買仲介を承っており、全国の不動産を取扱いいたします。売却のご依頼を頂いた際には当社の提携企業をはじめ、金融機関等のネットワークを活用し購入検討者をお探しいたします。
								</p>
								<div class="link_button_center">
									<a href="https://www.ttfuhan.co.jp/sell/" class="link_button"><span class="button_label">売却の詳細はこちら</span></a>
								</div>
							</div>
						</div>
					</div>


					<div class="list_wrap list-right">
						<h4 class="list_wrap_title">
							<span>関連サイトのご紹介</span>
						</h4>
						<ul class="list-normal_card">

							<li class="item-normal_card">
								<a href="https://sumikae.ttfuhan.co.jp/investment/" class="js_to_investment" target="_blank">
									<div class="img_wrap">
										<img src="https://www.ttfuhan.co.jp/img/chukai/normal_card2-1.jpg" alt="投資用不動産特集" />
									</div>
									<p class="normal_card-title">
										<span>投資用不動産特集</span>
									</p>
									<p class="info_txt">
										こちらの特集では一住戸の区分所有マンションから、アパート、一棟マンションまで様々な収益用不動産をご紹介しております。個別に物件紹介をご希望の方は下記フォームよりお問い合わせください。
									</p>
								</a>
								<p class="outside">投資用不動産を紹介希望の方は<a href="https://sumikae.ttfuhan.co.jp/contact/investment_introduction/" class="inline_txt_link" target="_blank">こちら</a></p>
							</li>

							<li class="item-normal_card">
								<a href="https://sumikae.ttfuhan.co.jp/biz/" class="js_to_biz" target="_blank">
									<div class="img_wrap">
										<img src="https://www.ttfuhan.co.jp/img/chukai/normal_card2-2.jpg" alt="事業用不動産特集" />
									</div>
									<p class="normal_card-title">
										<span>事業用不動産特集</span>
									</p>
									<p class="info_txt">
										こちらの特集では一棟マンション・アパートの他、事務所・店舗・倉庫・ホテル・土地（500㎡以上）等の事業用不動産をご紹介しております。個別に物件紹介をご希望の方は下記フォームよりお問い合わせください。
									</p>
								</a>
								<p class="outside">事業用不動産を紹介希望の方は<a href="https://sumikae.ttfuhan.co.jp/contact/biz_introduction/" target="_blank" class="inline_txt_link" target="_blank">こちら</a></p>
							</li>
						</ul>
					</div>
				</div>


				<div class="consulting">
					<div class="img-txt jigyo clearfix">
						<div class="img-area img-right">
							<img src="https://www.ttfuhan.co.jp/img/chukai/jigyo-consulting.jpg" alt="投資・事業用不動産の仲介" />
						</div>
						<div class="txt-area">
							<h3 class="jigyo-title">
								<span class="title">不動産のコンサルティング</span>
							</h3>
							<div class="txts txt-legible">
								<p>一級建築士事務所としてのノウハウと、総合不動産流通企業としての豊富な実績をもとに、長期にわたって安定的に収益を確保できる質の高い不動産活用のプランをご提案します。有効活用の専門セクションとして、調査・企画段階から竣工後の管理・運営まで、不動産の有効活用を支援するトータルなサービスを提供しています。
								</p>
								<div class="link_button_center">
									<a href="https://www.ttfuhan.co.jp/effective/" class="link_button"><span class="button_label">土地・建物の有効活用はこちら</span></a>
									<a href="https://www.ttfuhan.co.jp/company/business/cresupport/" class="link_button"><span class="button_label">企業不動産・ＣＲＥ戦略はこちら</span></a>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

	</div>
</div>
@endsection
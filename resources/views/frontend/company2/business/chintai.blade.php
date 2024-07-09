@extends('frontend.layouts.app2')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('index2/css/company/business/chintai.css') }}" />
@endsection

@section('content')
<div id="contents" class="chintai">
	<div class="main">

		<div class="page_header">
			<div class="page_header_parts page_header_bg_img"></div>
			<div class="page_header_parts page_header_catch">
				<div class="inner">
					<h2 class="page_title">
						<span class="title-en theme_font">Chintai</span>
						<span class="title-ja">賃貸事業</span>
					</h2>
				</div>
			</div>
		</div>


		<div class="content_block width_full clearfix">
			<div class="block_inner content1">
				<h2 class="content_title">
					<span class="title-ja">賃貸事業</span>
					<span class="title-en">Rental business</span>
				</h2>

				<div class="introduction_statement clearfix">
					<p>
						賃貸マンション・オフィス等の”賃貸管理”や企業様の借上社宅に関する業務を代行する”社宅管理代行”を承っております。
						<br>当社は賃貸管理を通じてオーナー様の資産形成・賃貸マンション経営を支えてまります。
					</p>
				</div>


				<div class="img-txt jigyo clearfix">
					<div class="img-area img-right">
						<img src="{{ asset('index2/img/company/business/chintai/jigyo-1.jpg') }}" alt="賃貸借管理サービス" />
					</div>

					<div class="txt-area">
						<h3 class="jigyo-title">
							<span class="title">賃貸借管理サービス</span>
						</h3>
						<div class="txts txt-legible">
							<p>首都圏及び関西圏を中心に、オーナー様から受託した賃貸マンション、オフィスビルなど各種の賃貸管理業務を行っています。また、豊富な専門知識を持ったスタッフが、資産の特性を最大限に引き出す活用方法を提案し、賃貸マンションやオフィスビルの経営をトータルにきめ細かくバックアップします。
							</p>
							<div class="link_button_center">
								<a href="https://sumikae.ttfuhan.co.jp/lend/" target="_blank" class="link_button js_to_lend"><span class="button_label">詳しくはこちら</span></a>
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
									<img src="{{ asset('index2/img/company/business/chintai/normal_card-sumikae-top.jpg') }}" alt="東京建物の住みかえサイト" />
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
							<a href="https://www.office-ttfuhan.jp/" class="js_to_office" target="_blank">
								<div class="img_wrap">
									<img src="{{ asset('index2/img/company/business/chintai/normal_card-office.jpg') }}" alt="オフィス・店舗用賃貸紹介サイト" />
								</div>
								<p class="normal_card-title">
									<span>オフィス・店舗用賃貸紹介サイト</span>
								</p>
								<p class="info_txt">
									こちらのサイトは、一都三県の「貸店舗（テナント）」「貸事務所（貸オフィス）」「貸ビル・貸倉庫」などの物件をご紹介しております。また、オフィス移転の流れについてもご説明しておりますので、併せてご覧ください。
								</p>
							</a>
						</li>

					</ul>
				</div>


				<div class="img-txt jigyo clearfix">
					<div class="img-area ">
						<img src="{{ asset('index2/img/company/business/chintai/jigyo-2.jpg') }}" alt="社宅管理代行サービス" />
					</div>

					<div class="txt-area">
						<h3 class="jigyo-title">
							<span class="title">社宅管理代行サービス</span>
						</h3>
						<div class="txts txt-legible">
							<p>社宅管理代行サービスとは企業様の”借上社宅”に関する一連の業務を当社が代行するサービスです。物件紹介から賃貸借の契約業務、賃料等の支払い、日常のトラブル対応まで、社宅に関することはお任せください。
							</p>
							<div class="link_button_center">
								<a href="https://www.ttfuhan.co.jp/shataku/" target="_blank" class="link_button"><span class="button_label">詳しくはこちら</span></a>
							</div>
						</div>
					</div>
				</div>


				<div class="img-txt jigyo clearfix">
					<div class="img-area img-right">
						<img src="{{ asset('index2/img/company/business/chintai/jigyo-3.jpg') }}" alt="賃貸保証サービス（日本レンタル保証）" />
					</div>

					<div class="txt-area">
						<h3 class="jigyo-title">
							<span class="title">賃貸保証サービス<span class="komejiru">（日本レンタル保証）</span></span>
						</h3>
						<div class="txts txt-legible">
							<p>当社が100％出資する日本レンタル保証株式会社は、入居者様に保証人不要のサービスを提供することで「家賃滞納」や「入居者様確保」といったオーナー様の悩みを解決します。入居者様（借主）と日本レンタル保証間で保証委託契約を締結することで日本レンタル保証が連帯保証人となりますので、契約時のストレスも軽減されます。
							</p>
							<div class="link_button_center">
								<a href="http://www.jrental-g.co.jp/" target="_blank" class="link_button js_to_jrental"><span class="button_label">詳しくはこちら</span></a>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

	</div>
</div>
@endsection
@extends('frontend.layouts.app2')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('index2/css/company/philosophy.css') }}" />
@endsection

@section('content')
<div id="contents" class="philosophy">
	<div class="main">

		<div class="page_header page_header_design">
			<div class="page_header_parts page_header_bg_img"></div>
			<div class="page_header_parts page_header_catch">
				<div class="inner">
					<h2 class="page_title">
						<span class="title-en theme_font">Philosophy</span>
						<span class="title-ja">企業理念・ごあいさつ</span>
					</h2>
				</div>
			</div>
		</div>


		<div class="content_block width_full clearfix">
			<div class="block_inner content1">
				<h2 class="content_title">
					<span class="title-ja">企業理念</span>
					<span class="title-en">Corporate philosophy</span>
				</h2>
				<div class="introduction_statement clearfix">
					<p class="em">
						「信頼・創造・未来」
					</p>
					<p>
						私たちは　お客様の信頼を最高価値として
						<br>日々創造を続け　輝かしい未来を目指します
					</p>
				</div>
			</div>
		</div>


		<div class="content_block width_full clearfix">
			<div class="block_inner content2">
				<h2 class="content_title">
					<span class="title-ja">ごあいさつ</span>
					<span class="title-en">Greeting</span>
				</h2>
				<div class="img-txt greeting clearfix">
					<div class="img-area img-cap-wrap">
						<img src="{{ asset('index2/img/company/philosophy/greeting.jpg') }}" alt="代表取締役 社長執行役員　福居　賢悟">
						<span class="img-cap">代表取締役 社長執行役員　福居　賢悟</span>
					</div>
					<div class="txt-area">
						<div class="txts txt-legible">
							<p>
								弊社は「信頼・創造・未来」という企業理念のもと、お客様の不動産に関するさまざまなニーズにお応えしてまいりました。
							</p>
							<p>
								世の中の変化はめまぐるしく、不動産を取り巻く環境も常に変化しています。私たちが取り扱う不動産という商品は、一般的な量産品とは異なり、唯一無二のものであり、きわめて高価なものです。そのため、売買・賃貸などの取引を成立させるには、お客様の「信頼」が欠かせません。
							</p>
							<p>
								その信頼を得るためには、お客様の不動産に関わるさまざまなご要望を的確にキャッチし、弊社にしかできない商品やサービスを「創造」していくことが必要です。
								<br>弊社は東京建物グループの一員として、グループの多彩な事業から最適なソリューションを導き出し、東京建物グループだからこそ実現可能である総合的な提案を行ってまいります。
							</p>
							<p>
								東京建物グループでは、2030年頃を見据えた長期ビジョン「次世代デベロッパーへ」を掲げています。
								<br>弊社では、「仲介事業」「アセットソリューション事業」「賃貸事業」の３つの事業を通じて不動産に新しい価値を付加することにより、お客様のニーズにお応えすることで、「社会課題の解決」と「企業としての成長」をより高い次元で実現することを目指してまいります。
								<br>そして、お客様の信頼を最高価値として、日々創造を続け、「未来」を切り拓いていくという姿勢を変えることなくいつの時代も続けてまいります。
							</p>
							<p>
								今後とも弊社および東京建物グループの活動にご期待いただきますよう、お願い申し上げます。
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>


	</div>
</div>
@endsection

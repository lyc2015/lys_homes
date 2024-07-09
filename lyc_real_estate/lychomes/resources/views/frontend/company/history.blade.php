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
						<span class="title-en theme_font">History</span>
						<span class="title-ja">沿革</span>
					</h2>
				</div>
			</div>
		</div>

		<div class="content_block width_full clearfix">
			<div class="block_inner content1">
				<h2 class="content_title">
					<span class="title-ja">沿革</span>
					<span class="title-en">History</span>
				</h2>

				<div class="introduction_statement clearfix">
					<p>
						1980年、東京建物の不動産流通部門を担って発足。
						<br>不動産流通分野で幅広い事業を展開しています。
					</p>
				</div>

				<table class="table-history">
					<tbody>
						<tr>
							<th class="title" rowspan="2">1980年<br>(昭和55年)</th>
							<th>5月</th>
							<td>東京都新宿区に「東建住宅サービス株式会社」として営業を開始</td>
						</tr>
						<tr>
							<th>10月</th>
							<td>第1号店舗、相模原支店（現：町田支店） 設置</td>
						</tr>
						<tr>
							<th class="title" rowspan="2">1981年<br>(昭和56年)</th>
							<th>5月</th>
							<td>横浜支店 設置</td>
						</tr>
						<tr>
							<th>9月</th>
							<td>津田沼支店 設置</td>
						</tr>
						<tr>
							<th class="title">1983年<br>(昭和58年)</th>
							<th>9月</th>
							<td>受託営業部（現：賃貸営業第一部） 設置</td>
						</tr>
						<tr>
							<th class="title">1986年<br>(昭和61年)</th>
							<th>9月</th>
							<td>「東京建物不動産販売株式会社」に改称</td>
						</tr>
						<tr>
							<th class="title">1987年<br>(昭和62年)</th>
							<th>9月</th>
							<td>大阪支店（現：関西支店） 設置</td>
						</tr>
						<tr>
							<th class="title">1992年<br>(平成4年)</th>
							<th>10月</th>
							<td>ビルテナント部（現：賃貸営業第二部） 設置</td>
						</tr>
						<tr>
							<th class="title">1996年<br>(平成8年)</th>
							<th>3月</th>
							<td>営業部門に「住宅営業本部」「賃貸営業本部」「流通営業本部」の各営業本部制を導入</td>
						</tr>
						<tr>
							<th class="title">1999年<br>(平成11年)</th>
							<th>4月</th>
							<td>「管理本部（現：経営管理本部）」 設置</td>
						</tr>
						<tr>
							<th class="title">2005年<br>(平成17年)</th>
							<th>1月</th>
							<td>監査室 設置</td>
						</tr>
						<tr>
							<th class="title">2006年<br>(平成18年)</th>
							<th>7月</th>
							<td>東京証券取引所市場第二部上場</td>
						</tr>
						<tr>
							<th class="title" rowspan="3">2007年<br>(平成19年)</th>
							<th>4月</th>
							<td>名古屋支店 設置</td>
						</tr>
						<tr>
							<th>11月</th>
							<td>賃貸保証サービス会社「日本レンタル保証株式会社」設立</td>
						</tr>
						<tr>
							<th>12月</th>
							<td>東京証券取引所市場第一部指定</td>
						</tr>
						<tr>
							<th class="title">2008年<br>(平成20年)</th>
							<th>3月</th>
							<td>アセットソリューション営業部 設置<br>コンサルティング営業部 設置</td>
						</tr>
						<tr>
							<th class="title" rowspan="2">2011年<br>(平成23年)</th>
							<th>2月</th>
							<td>リテール営業部 設置</td>
						</tr>
						<tr>
							<th>11月</th>
							<td>Brillia武蔵小杉仲介センター（現：武蔵小杉支店） 設置</td>
						</tr>
						<tr>
							<th class="title">2012年<br>(平成24年)</th>
							<th>1月</th>
							<td>「ソリューション営業本部」 設置<br> 法人営業第一部及び法人営業第二部 設置</td>
						</tr>
						<tr>
							<th class="title">2014年<br>(平成26年)</th>
							<th>5月</th>
							<td>東京湾岸仲介センター（現：東京湾岸支店） 設置</td>
						</tr>
						<tr>
							<th class="title" rowspan="4">2015年<br>(平成27年)</th>
							<th>4月</th>
							<td>東京都中央区に本社を移転</td>
						</tr>
						<tr>
							<th>6月</th>
							<td>東京証券取引所市場第一部上場廃止</td>
						</tr>
						<tr>
							<th>7月</th>
							<td>「東京建物株式会社」による100%子会社化<br>「東京建物株式会社」のCRE戦略支援機能を当社へ移管</td>
						</tr>
						<tr>
							<th>10月</th>
							<td>販売受託事業を「東京建物株式会社」へ移管</td>
						</tr>
						<tr>
							<th class="title" rowspan="3">2016年<br>(平成28年)</th>
							<th>1月</th>
							<td>営業推進部及び社宅営業部　設置</td>
						</tr>
						<tr>
							<th>2月</th>
							<td>横浜磯子仲介センター（現：横浜磯子支店） 設置</td>
						</tr>
						<tr>
							<th>9月</th>
							<td>池袋支店 設置</td>
						</tr>
						<tr>
							<th class="title">2017年<br>(平成29年)</th>
							<th>11月</th>
							<td>目黒支店 設置</td>
						</tr>
						<tr>
							<th class="title">2018年<br>(平成30年)</th>
							<th>2月</th>
							<td>新宿仲介センター（現：新宿支店） 設置</td>
						</tr>
						<tr>
							<th class="title" rowspan="2">2019年<br>(平成31年)</th>
							<th>1月</th>
							<td>流通営業本部・ソリューション営業本部を流通営業本部・アセットソリューション営業本部に再編<br>情報推進部 設置</td>
						</tr>
						<tr>
							<th>2月</th>
							<td>法人営業第三部 設置</td>
						</tr>
						<tr>
							<th class="title" rowspan="2">2021年<br>(令和3年)</th>
							<th>5月</th>
							<td>大井町仲介センター（現：大井町支店） 設置</td>
						</tr>
						<tr>
							<th>9月</th>
							<td>上野池之端支店 設置</td>
						</tr>
						<tr>
							<th class="title">2022年<br>(令和4年)</th>
							<th>1月</th>
							<td>アセットソリューション営業部を資産情報開発部・資産運用部に再編<br>投資商品開発部 設置
								<br>豊洲支店 設置
							</td>
						</tr>
						<tr>
							<th class="title">2023年<br>(令和5年)</th>
							<th>2月</th>
							<td>白金高輪支店 設置</td>
						</tr>
					</tbody>
				</table>

				<ul class="list-notes notes-table_history">
					<li>当社の前身は株式会社グリル蘭（1954年(昭和29年)1月設立。1973年(昭和48年)10月に八重洲産業株式会社と改称）でありますが、当社事業開始以前は実質的な事業活動を行っていなかったため、
						実質的な創業である東建住宅サービス株式会社の事業開始以降について記載しております。</li>
				</ul>

			</div>
		</div>


	</div>
</div>
@endsection
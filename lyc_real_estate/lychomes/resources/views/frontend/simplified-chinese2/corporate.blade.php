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
						<span class="simplified-chinese_title">公司概要・沿革</span>
					</h2>
				</div>
			</div>
		</div>



		<div class="content_block width_full clearfix">
			<div class="block_inner content1">
				<h2 class="content_title">
					<span class="simplified-chinese_title">公司概要</span>
				</h2>

				<table class="table-outline">
					<tbody>
						<tr>
							<th>公司名称</th>
							<td>东京建物不动产贩卖株式会社</td>
						</tr>
						<tr>
							<th>总公司地址</th>
							<td>东京都中央区八重洲1-5-20　东京建物八重洲樱花街大厦</td>
						</tr>
						<tr>
							<th>資本金</th>
							<td>43亿日元</td>
						</tr>
						<tr>
							<th>营业额</th>
							<td>28,538百万日元（2022年度）</td>
						</tr>
						<tr>
							<th>创立</th>
							<td>1980年5月17日</td>
						</tr>
						<tr>
							<th>代表人</th>
							<td>董事总经理　福居 賢悟</td>
						</tr>
						<tr>
							<th>主要业务</th>
							<td>中介事业、资产管理解決法案事业、租赁管理事业</td>
						</tr>
						<tr>
							<th>母公司</th>
							<td>东京建物株式会社</td>
						</tr>
						<tr>
							<th>所属团体</th>
							<td>（一般社团法人）不动产协会、（一般社团法人）不动产流通经营协会、<br>
								（公益社团法人）首都圈不动产公正交易协议会、（一般社团法人）日本投资顾问业协会、<br> （一般社团法人）不动产证券化协会（准会员）
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>

		<div class="content_block width_full clearfix">
			<div class="block_inner content2">
				<h2 class="content_title">
					<span class="simplified-chinese_title">沿革</span>
				</h2>

				<table class="table-history">
					<tbody>
						<tr>
							<th>1980</th>
							<td>在东京都新宿区成立"东建住宅服务株式会社"，开始营业</td>
						</tr>
						<tr>
							<th>1986</th>
							<td>改名为"东京建物不动产贩卖株式会社"</td>
						</tr>
						<tr>
							<th>2006</th>
							<td>在东京证券交易所市场第二部上市</td>
						</tr>
						<tr>
							<th>2007</th>
							<td>指定为东京证券交易所市场第一部</td>
						</tr>
						<tr>
							<th>2015</th>
							<td>总公司迁至东京都中央区<br> "东京建物株式会社" 100％子公司化</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>



	</div>
</div>
@endsection
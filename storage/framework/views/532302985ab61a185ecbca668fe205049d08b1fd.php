<?php $__env->startSection('styles'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('index2/css/company/outline.css')); ?>" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div id="contents" class="outline">
	<div class="main">

		<div class="page_header page_header_design">
			<div class="page_header_parts page_header_bg_img"></div>
			<div class="page_header_parts page_header_catch">
				<div class="inner">
					<h2 class="page_title">
						<span class="title-en theme_font"><?php echo e($content['title_en']); ?></span>
						<span class="title-ja"><?php echo e($content['title']); ?></span>
					</h2>
				</div>
			</div>
		</div>


		<div class="content_block width_full clearfix">
			<div class="block_inner content1">
				<h2 class="content_title">
					<span class="title-ja"><?php echo e($content['title']); ?></span>
					<span class="title-en theme_font"><?php echo e($content['title_en']); ?></span>
				</h2>

				<table class="table-outline">
					<tbody>
						<tr>
							<th class="title">会社名</th>
							<td><?php echo $content['company_name']; ?></td>
						</tr>
						<tr>
							<th class="title">本社<br class="forSp">所在地</th>
							<td><?php echo $content['company_adress']; ?><br><a href="#anc01" class="target_map js_link_in_page">地図はこちら</a>
							</td>
						</tr>
<!-- 						<tr>
							<th class="title">法人番号</th>
							<td><?php echo $content['legal_person_code']; ?></td>
						</tr> -->
						<tr>
							<th class="title">適格請求書発行事業者<br>登録番号</th>
							<td><?php echo $content['login_code']; ?></td>
						</tr>
						<tr>
							<th class="title">電話番号</th>
							<td><?php echo $content['tel']; ?></td>
						</tr>
						<tr>
							<th class="title">資本金</th>
							<td><?php echo $content['register_capital']; ?></td>
						</tr>
						<!-- <tr>
							<th class="title">売上高</th>
							<td>28,538百万円（2022年度）</td>
						</tr> -->
						<tr>
							<th class="title">創立</th>
							<td><?php echo $content['establish_time']; ?></td>
						</tr>
						<tr>
							<th class="title">従業員数</th>
							<td><?php echo $content['employee_count']; ?></td>
						</tr>
						<tr>
							<th class="title">代表者</th>
							<td>
								<dl class="officer">
									<dt><?php echo $content['legal_person']; ?></dt>
									<dd></dd>
								</dl>
							</td>
						</tr>
						<tr>
							<!-- <th class="title">役員</th>
							<td>
								<dl class="officer">
									<dt>代表取締役 <br class="forSp">社長執行役員</dt>
									<dd>福居 賢悟</dd>
									<dt>取締役 <br class="forSp">常務執行役員</dt>
									<dd>菅谷 健二</dd>
									<dt>取締役 <br class="forSp">常務執行役員</dt>
									<dd>加藤 英彦</dd>
									<dt>取締役 <br class="forSp">執行役員</dt>
									<dd>前田 靜</dd>
									<dt>取締役</dt>
									<dd>種橋 牧夫</dd>
									<dt>取締役</dt>
									<dd>秋田 秀士</dd>
									<dt>取締役</dt>
									<dd>長尾 浩一</dd>
									<dt>監査役</dt>
									<dd>萩原 忠幸</dd>
									<dt>監査役</dt>
									<dd>真鍋 周造</dd>
									<dt>常務執行役員</dt>
									<dd>長橋 俊幸</dd>
									<dt>執行役員</dt>
									<dd>河村 光徳</dd>
									<dt>執行役員</dt>
									<dd>斉藤 公宏</dd>
									<dt>執行役員</dt>
									<dd>福田 智治</dd>
									<dt>執行役員</dt>
									<dd>中島 浩</dd>
									<dt>執行役員</dt>
									<dd>稲富 賢</dd>
									<dt>執行役員</dt>
									<dd>中島 明宏</dd>
								</dl>
								<ul class="list-notes">
									<li>監査役である萩原忠幸は、会社法第2条第16号に定める社外監査役であります。</li>
								</ul>
							</td> -->
						</tr>
						<tr>
							<th class="title">免許番号</th>
							<td><?php echo $content['license_number']; ?></td>
						</tr>
						<tr>
							<th class="title">事業内容</th>
							<td><?php echo $content['business_content']; ?></td>
						</tr>
						<!-- <tr>
							<th class="title">子会社</th>
							<td><a class="target_blank js_to_jrental" href="http://www.jrental-g.co.jp/" target="_blank" rel="noopener noreferrer">日本レンタル保証株式会社</a></td>
						</tr> -->
						<tr>
							<th class="title">所属団体</th>
							<td><?php echo $content['membership']; ?></td>
						</tr>
					</tbody>
				</table>

			</div>
		</div>



		<div class="content_block width_full clearfix">
			<div class="block_inner content1">
				<h2 class="content_title">
					<span class="title-ja">アクセス</span>
					<span class="title-en">Access</span>
				</h2>

				<h3 class="block_title" id="anc01">
					<span>東京都千代田区岩本町3-3-3サザンビル</span>
				</h3>

				<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d3240.206865099755!2d139.77358564816421!3d35.696526707502706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x60188ea7e2f93329%3A0x158f36257ff597b1!2z56eL6JGJ5Y6f6aeF44CB5p2x5Lqs6YO95Y2D5Luj55Sw5Yy65aSW56We55Sw77yR5LiB55uu!3m2!1d35.698353!2d139.7731143!4m5!1s0x60188ea9644020f1%3A0x312cfbdb5c50c2ea!2z44CSMTAxLTAwMzIg5p2x5Lqs6YO95Y2D5Luj55Sw5Yy65bKp5pys55S677yT5LiB55uu77yT4oiS77yT!3m2!1d35.6950199!2d139.77631599999998!5e0!3m2!1sja!2sjp!4v1535633746693" width="1200" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

				<div class="access_item_wrap clearfix">
					<dl class="access_item">
						<dt><span class="eki">JR山手線「秋葉原」</span>駅 昭和通り</dt>
						<dd>徒歩<span class="time">7</span>分</dd>
					</dl>
					<dl class="access_item">
						<dt><span class="eki">都営新宿線「岩本町」</span>駅 「A4」「A5」</dt>
						<dd>徒歩<span class="time">2</span>分</dd>
					</dl>
				</div>



				<!-- <h3 class="block_title" id="anc02">
					<span>関電不動産八重洲ビル</span>
				</h3>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2427.9668043142588!2d139.7716402113871!3d35.67830781321482!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601889dc164d8b47%3A0xf9237fb71f66e8ab!2z6Zai6Zu75LiN5YuV55Sj5YWr6YeN5rSy44OT44Or!5e0!3m2!1sja!2sjp!4v1669977273260!5m2!1sja!2sjp" width="1200" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				<div class="access_item_wrap clearfix">
					<dl class="access_item">
						<dt><span class="eki">東京メトロ「京橋」</span>駅 6番出口</dt>
						<dd>徒歩<span class="time">5</span>分</dd>
					</dl>
					<dl class="access_item">
						<dt><span class="eki">JR線「東京」</span>駅</dt>
						<dd>徒歩<span class="time">7</span>分</dd>
					</dl>
					<dl class="access_item">
						<dt><span class="eki">都営浅草線「宝町」</span>駅</dt>
						<dd>徒歩<span class="time">4</span>分</dd>
					</dl>
				</div> -->

			</div>
		</div>

	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
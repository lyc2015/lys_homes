<?php $__env->startSection('styles'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('index2/css/index.css')); ?>" />
<?php $__env->stopSection(); ?>

<style>

//.thumbnail{
//	height:400px;
//}
</style>

<?php $__env->startSection('content'); ?>
<div id="contents" class="index bg_pattern">
	<div class="main_visual">
		<div class="main_visual_parts mv_bg_img">
			<video loop autoplay muted playsinline>
				<!-- <source src="<?php echo e(asset('index2/img/top/mv_tHD-def.mp4#t=,8')); ?>" type="video/mp4"> -->
				<!--<source src="<?php echo e(route('stream', ['filename' => '20230605_2.mp4',])); ?>" type="video/mp4">-->
				<source src="/<?php echo e($hm_back_image_file->file_link); ?>" type="video/mp4">
			</video>
		</div>
		<div class="main_visual_parts mv_catch">
			<div class="inner">
				<h2 class="top_catch_title">
					<span class="line2 theme_font_ja">
						TIC<br>不動産ソリューション
					</span>
					<span class="line1">
						<!-- <span class="color-1 theme_font">REAL ESTATE SOLUTIONS</span> -->
					</span>
				</h2>
			</div>
		</div>
	</div>

	<div class="navi_for_header_select_language_wrap">
		<ul class="navi_for_header_select_language">
			<!--
			<li class="item-english"><a href="#">English</a></li>
			<li class="item-hantai"><a href="#">中文繁体</a></li>
-->
			<li class="item-kantai"><a href="<?php echo e(route('simplifiedChinese')); ?>">中文簡体</a></li>
		</ul>
	</div>

	<div class="main">

		<!-- Slides -->
		<div class="content_block width_full bg--lightgray clearfix content1">

			<div class="block_inner">
				<h2 class="top_page_title">
					<span class="title-en theme_font">CONTENTS</span>
					<span class="title-ja theme_font_ja">コンテンツ紹介</span>
				</h2>

				<div class="introduction_statement clearfix">
					<p>
						投資・事業用物件から住まいまでお客様の不動産ニーズにお応えするメニューをご紹介いたします。
					</p>
				</div>
			</div>

			<div class="site_content_list_wrap clearfix">
				<h1 class="slick-thumbnail-title"><a href="<?php echo e(route('property', ['purpose' => 'sale',])); ?>">売買物件 PICK UP</a></h1>
				<div class="multiple-items">
					<?php $__currentLoopData = $sells; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sell): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<li class="item">
						<div class="thumbnail slick-thumbnail" style="border-width: 10px;height:400px;">
							<a href="<?php echo e(route('property.show', ['id' => $sell->id,])); ?>" target="_blank">
								<?php if(!$sell->gallery->isEmpty()): ?>
								<img src="<?php echo e(Storage::url('property/gallery/'.$sell->gallery->get(0)->name)); ?>" />
								<?php else: ?>
								<img src="<?php echo e(asset('/index2/img/top/list_content_menu-4.jpg')); ?>" />
								<?php endif; ?>
								<div class="caption" style="font-size:18px">
									<p class="text-justify" style="font-weight: bold;">
										物件名 : <?php echo e($sell->title); ?>

										&nbsp;
										&nbsp;
										&nbsp;
										販売価格 : 
										<!-- <?php echo e($sell->price); ?>  -->
										<?php echo e($sell->price != round($sell->price) ? $sell->price : number_format($sell->price, 0)); ?>

										万円
									</p>
									<p class="text-justify">
										間取り : <?php echo e($sell->house_layout); ?>

										&nbsp;
										&nbsp;
										&nbsp;
										交通 : <?php echo e($sell->nearby); ?>

									</p>
								</div>
							</a>
						</div>
					</li>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>
			</div>

			<div class="site_content_list_wrap clearfix">
				<h1 class="slick-thumbnail-title"><a href="<?php echo e(route('property', ['purpose' => 'rent',])); ?>">賃貸物件 PICK UP</a></h1>
				<div class="multiple-items">
					<?php $__currentLoopData = $rents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<li class="item">
						<div class="thumbnail slick-thumbnail" style="border-width: 10px;height:400px;">
							<a href="<?php echo e(route('property.show', ['id' => $rent->id,])); ?>" target="_blank">
								<?php if(!$rent->gallery->isEmpty()): ?>
								<img src="<?php echo e(Storage::url('property/gallery/'.$rent->gallery->get(0)->name)); ?>" />
								<?php else: ?>
								<img src="<?php echo e(asset('/index2/img/top/list_content_menu-4.jpg')); ?>" />
								<?php endif; ?>
								<div class="caption" style="font-size:18px">
									<p class="text-justify" style="font-weight: bold;">
										物件名 : <?php echo e($rent->title); ?>

										&nbsp;
										&nbsp;
										&nbsp;
										賃貸価格 : 
										<?php echo e($rent->price != round($rent->price) ? $rent->price : number_format($rent->price, 0)); ?>

										<!-- <?php echo e($rent->price); ?>  -->
										万円
									</p>
									<p class="text-justify">
										間取り : <?php echo e($rent->house_layout); ?>

										&nbsp;
										&nbsp;
										&nbsp;
										交通 : <?php echo e($rent->nearby); ?>

									</p>
									<p class="text-justify">
										敷 : <?php echo e($rent->deposit ?:0); ?> 万円
										&nbsp;
										&nbsp;
										&nbsp;
										礼 : <?php echo e($rent->key_money ?: 0); ?> 万円
									</p>
								</div>
							</a>
						</div>
					</li>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>
			</div>

		</div>
	</div>

	<!-- News -->
	<div class="content_block width_full clearfix">
		<div class="block_inner content3">
			<div class="news_wrap">
				<div class="top_page_title_wrap">
					<h2 class="top_page_title">
						<span class="title-en theme_font">NEWS</span>
						<span class="title-ja theme_font_ja">新着ニュースリリース</span>
					</h2>
				</div>
				<div class="news">
					<?php $__currentLoopData = $hm_news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<dl>
						<dt class="sticker-release">
						</dt>
						<dd><span><?php echo e($new->created_at->format('Y-m-d')); ?></span><a href="javascript:void(0);"><?php echo e($new->title); ?></a></dd>
					</dl>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>
			</div>
			<div class="link_button_wrap clearfix">
				<a href="/company/release" class="link_button"><span class="button_label">ニュースリリース一覧</span></a>
			</div>
		</div>
	</div>

	<!-- About -->
	<div class="content_block width_full bg--pattern19 clearfix">
		<div class="block_inner content4">

			<div class="content-in clearfix">

				<div class="content-bg">
					<img src="<?php echo e(asset('index2/img/top/about_bg.jpg')); ?>" alt="">
				</div>

				<div class="content-txts">
					<div class="top_page_title_wrap">
						<h2 class="top_page_title">
							<span class="title-en theme_font">ABOUT</span>
							<span class="title-ja theme_font_ja">当社について</span>
						</h2>
						<p class="lead">
							当社は1980年（昭和55年）、
							<br>東京建物の不動産流通部門を
							<br>担うために発足しました。
							<br>お陰様で創立40周年を迎えました。
						</p>
					</div>
					<div class="list_wrap">
						<ul class="list-txtlink clearfix">
							<li class="item-txtlink">
								<a href="<?php echo e(route('company')); ?>" class="anime anime-1">
									<h3 class="txtlink-title">会社情報</h3>
									<h4 class="txtlink-title_en theme_font">Company Information</h4>
								</a>
							</li>

							<li class="item-txtlink">
								<a href="<?php echo e(route('contact')); ?>" class="anime anime-1">
									<h3 class="txtlink-title">お問合せ・連絡先</h3>
									<h4 class="txtlink-title_en theme_font">Contact Information</h4>
								</a>
							</li>

							<li class="item-txtlink">
								<a href="<?php echo e(route('recruit')); ?>" class="anime anime-1">
									<h3 class="txtlink-title">採用情報</h3>
									<h4 class="txtlink-title_en theme_font">Recruitment Information</h4>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script type="text/javascript" src="<?php echo e(asset('index2/js/index.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
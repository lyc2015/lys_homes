<?php $__env->startSection('styles'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('index2/css/company/philosophy.css')); ?>" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div id="contents" class="philosophy">
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
					<span class="title-en"><?php echo e($content['title_en']); ?></span>
				</h2>
				<div class="introduction_statement clearfix">
					<p class="em">
<?php echo $content['middle_title']; ?>

					</p>
					<p>
<?php echo $content['middle_content']; ?>

					</p>
				</div>
			</div>
		</div>


		<div class="content_block width_full clearfix">
			<div class="block_inner content2">
				<h2 class="content_title">
					<span class="title-ja"><?php echo e($content['bottom_title']); ?></span>
					<span class="title-en"><?php echo e($content['bottom_title_en']); ?></span>
				</h2>
				<div class="img-txt greeting clearfix">
					<div class="img-area img-cap-wrap">
						<img src="/<?php echo e($content['bottom_image_link']); ?>" alt="<?php echo e($content['bottom_image_intro']); ?>">
						<span class="img-cap"><?php echo $content['bottom_image_intro']; ?></span>
					</div>
					<div class="txt-area">
						<div class="txts txt-legible" style="font-size: large;">
<?php echo $content['bottom_content']; ?>

						</div>
					</div>
				</div>
			</div>
		</div>


	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
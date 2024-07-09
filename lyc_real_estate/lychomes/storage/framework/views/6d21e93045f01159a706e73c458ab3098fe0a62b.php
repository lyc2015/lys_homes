<?php $__env->startSection('styles'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('index2/css/company/business.css')); ?>" />
<style>
</style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div id="contents" class="business">
	<div class="main">

		<div class="page_header">
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

				<div class="introduction_statement clearfix">
					<p>
<?php echo $content['middle_title']; ?>

					</p>
				</div>

				<div class="img-txt yakuwari clearfix">
					<div class="img-area">
						<img src="/<?php echo e($content['middle_image_link']); ?>" alt="" />
					</div>
					<div class="txt-area">
						<h3 class="yakuwari-title">
							<span class="title"><?php echo $content['middle_right_title']; ?></span>
						</h3>
						<div class="txts txt-legible">
                            <p>
<?php echo $content['middle_right_content']; ?>

							</p>
							<div class="link_button_wrap">
                                <a href="#" class="link_button">
<span class="button_label two">
    <?php echo $content['middle_right_bottom_title']; ?><br>
    <span class="mini_txt"><?php echo $content['middle_right_bottom_content']; ?></span>
</span>
</a>
							</div>
						</div>
					</div>
				</div>

				<div class="list_wrap">
					<ul class="list-normal_card" style="pointer-events: none">
					<?php $__currentLoopData = $content['bottoms']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bottom): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<li class="item-normal_card">
                            <div class="img_wrap">
                                <img src="/<?php echo e($bottom['bottom_image_link']); ?>" alt="<?php echo e($bottom['bottom_title']); ?>" />
                            </div>
                            <p class="normal_card-title">
                                <span><?php echo $bottom['bottom_title']; ?></span>
                            </p>
                            <p class="info_txt">
<?php echo $bottom['bottom_content']; ?>

                            </p>
						</li>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</ul>
				</div>
			</div>
		</div>

	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
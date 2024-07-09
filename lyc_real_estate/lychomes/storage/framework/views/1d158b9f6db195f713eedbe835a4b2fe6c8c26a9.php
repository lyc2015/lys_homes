<?php $__env->startSection('styles'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('index2/css/company/release.css')); ?>" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div id="contents" class="release">
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

				<div class="news_wrap">
					<div class="news">
					<?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<dl>
							<dt class="sticker-release">
							</dt>
							<dd>
                                <span><?php echo e($new->created_at->format('Y.m.d')); ?></span>
                                <a href="javascript:void(0);"><?php echo e($new->title); ?></a>
							</dd>
						</dl>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div>
				</div>
			</div>
		</div>


	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
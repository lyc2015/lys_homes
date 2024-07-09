<?php $__env->startSection('content'); ?>
<div id="contents" class="outline">
	<div class="main">

		<div class="page_header page_header_design">
			<div class="page_header_parts page_header_bg_img"></div>
			<div class="page_header_parts page_header_catch">
				<div class="inner">
					<h2 class="page_title">
						<span class="title-en theme_font"><?php echo e($company->title_en); ?></span>
						<span class="title-ja"><?php echo e($company->title); ?></span>
					</h2>
				</div>
			</div>
		</div>

<?php echo $company->content; ?>

	
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
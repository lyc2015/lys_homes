<?php $__env->startSection('styles'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('index2/css/simplified-chinese/profile.css')); ?>" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div id="contents" class="profile">
	<div class="main">

		<div class="page_header page_header_design">
			<div class="page_header_parts page_header_bg_img"></div>
			<div class="page_header_parts page_header_catch">
				<div class="inner">
					<h2 class="page_title">
						<span class="simplified-chinese_title"><?php echo $content['name_zh']; ?></span>
					</h2>
				</div>
			</div>
		</div>

		<div class="content_block width_full clearfix">
			<div class="block_inner content1">
				<h2 class="content_title">
					<span class="simplified-chinese_title"><?php echo $content['title']; ?></span>
				</h2>

				<div class="introduction_statement clearfix">
					<p>
<?php echo $content['middle_content']; ?>

					</p>
				</div>

				<h3 class="block_title">
					<span>业务和强项</span>
				</h3>

				<ul class="list-mini_content_link row-3">
					<?php $__currentLoopData = $content['business']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<li>
						<a href="#anc0<?php echo e($key+1); ?>" class="anime-wrap js_link_in_page">
							<div class="kazari-wrap anime anime-in">
								<h4 class="txt1 theme_font">SEGMENT / 0<?php echo e($key+1); ?></h4>
								<h4 class="txt2"><?php echo e($val['name']); ?></h4>
							</div>
						</a>
					</li>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</ul>

			</div>
		</div>

		<?php $__currentLoopData = $content['business']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div class="content_block width_full clearfix">
			<div class="block_inner content1">
				<h2 class="content_title" id="anc0<?php echo e($key+1); ?>">
					<span class="simplified-chinese_title"><?php echo $val['name']; ?></span>
				</h2>

				<div class="segment clearfix">
					<div class="txt-area">
						<h3 class="segment-title">
							<span class="title"><?php echo $val['title']; ?></span>
						</h3>
						<div class="txts txt-legible">
							<p>
<?php echo $val['content']; ?>

							</p>
						</div>
					</div>
					<div class="img-area img-right">
						<img src="/<?php echo e($val['image_link']); ?>" alt="<?php echo e($val['name']); ?>">
					</div>
				</div>
			</div>
		</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app3', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
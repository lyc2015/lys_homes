<?php $__env->startSection('styles'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('index2/css/company/history.css')); ?>" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div id="contents" class="history">
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
					<span class="title-ja"><?php echo $content['title']; ?></span>
					<span class="title-en theme_font"><?php echo $content['title_en']; ?></span>
				</h2>
				<div class="introduction_statement clearfix">
					<p>
<?php echo $content['middle_title']; ?>

					</p>
				</div>
<?php $cur_year = ""; ?>
				<table class="table-history">
					<?php $__currentLoopData = $content['company_story']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $year=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php $__currentLoopData = $val; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $month=>$val2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php $__currentLoopData = $val2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index=>$val3): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
<?php if($cur_year <> $year): ?>
<?php $cur_year = $year; ?>
							<th class="title" rowspan="<?php echo e($year_counter[$year]); ?>"><?php echo e($year); ?>年</th>
<?php endif; ?>
							<th><?php echo e($month); ?>月</th>
							<td><?php echo $val3; ?></td>
						</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</tbody>
				</table>

				<ul class="list-notes notes-table_history">
                    <li><?php echo $content['bottom_content']; ?></li>
			</div>
		</div>


	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
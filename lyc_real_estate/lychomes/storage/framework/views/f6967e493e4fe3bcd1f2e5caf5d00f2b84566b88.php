<?php $__env->startSection('styles'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('index2/css/simplified-chinese/corporate.css')); ?>" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div id="contents" class="corporate">
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
					<span class="simplified-chinese_title"><?php echo $content['title_outline']; ?></span>
				</h2>

				<table class="table-outline">
					<tbody>
						<tr>
							<th>公司名称</th>
							<td><?php echo $content['company_name']; ?></td>
						</tr>
						<tr>
							<th>总公司地址</th>
							<td><?php echo $content['company_adress']; ?></td>
						</tr>
						<tr>
							<th>資本金</th>
							<td><?php echo $content['capital']; ?></td>
						</tr>
						<tr>
							<th>营业额</th>
							<td><?php echo $content['revenue']; ?></td>
						</tr>
						<tr>
							<th>创立</th>
							<td><?php echo $content['establish_time']; ?></td>
						</tr>
						<tr>
							<th>代表人</th>
							<td><?php echo $content['legal_person']; ?></td>
						</tr>
						<tr>
							<th>主要业务</th>
							<td><?php echo $content['business']; ?></td>
						</tr>
						<tr>
							<th>母公司</th>
							<td><?php echo $content['mother_company']; ?></td>
						</tr>
						<tr>
							<th>所属团体</th>
							<td><?php echo $content['affiliation']; ?></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>

		<div class="content_block width_full clearfix">
			<div class="block_inner content2">
				<h2 class="content_title">
					<span class="simplified-chinese_title"><?php echo $content['title_history']; ?></span>
				</h2>

				<table class="table-history">
					<tbody>
					<?php $__currentLoopData = $content['company_story']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $year=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<th><?php echo e($year); ?></th>
							<td><?php echo $val; ?></td>
						</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</tbody>
				</table>
			</div>
		</div>

	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app3', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
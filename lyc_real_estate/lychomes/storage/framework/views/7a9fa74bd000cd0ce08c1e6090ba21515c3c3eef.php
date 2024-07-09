<?php $__env->startSection('styles'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('index2/css/company/organization.css')); ?>" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div id="contents" class="organization">
	<div class="main">

		<div class="page_header page_header_design">
			<div class="page_header_parts page_header_bg_img"></div>
			<div class="page_header_parts page_header_catch">
				<div class="inner">
					<h2 class="page_title">
						<span class="title-en theme_font">Organization</span>
						<span class="title-ja">組織図</span>
					</h2>
				</div>
			</div>
		</div>


		<div class="content_block width_full clearfix">
			<div class="block_inner content1">
				<h2 class="content_title">
					<span class="title-ja">東京建物不動産販売　組織図</span>
					<span class="title-en">Organization</span>
				</h2>

				<div class="enclose">

					<ul class="items">
						<li>
							<a href="https://www.ttfuhan.co.jp/pdf/company/organization/soshikizu20230202.pdf" target="_blank" class="pdf">印刷用<span>（PDFファイル）</span></a>
						</li>
					</ul>

					<img alt="組織図" src="https://www.ttfuhan.co.jp/img/company/organization/soshikizu20230202.jpg" caption="false" class="img">

				</div>

			</div>
		</div>


	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.app2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
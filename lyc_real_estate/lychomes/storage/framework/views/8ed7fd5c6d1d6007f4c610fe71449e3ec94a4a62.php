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
						<span class="simplified-chinese_title">业务指南</span>
					</h2>
				</div>
			</div>
		</div>

		<div class="content_block width_full clearfix">
			<div class="block_inner content1">
				<h2 class="content_title">
					<span class="simplified-chinese_title">业务指南</span>
				</h2>

				<div class="introduction_statement clearfix">
					<p>
						东京建物不动产贩卖，将拥有120年历史的东京建物和集团各公司的综合力量进行有效地发挥，为您提供一站式的最佳解决方案。
						<br>我们将协同各个不同领域的专家们，针对与不动产相关的所有需求，提供最适当的服务建议。
					</p>
				</div>

				<h3 class="block_title">
					<span>业务和强项</span>
				</h3>

				<ul class="list-mini_content_link row-3">
					<li>
						<a href="#anc01" class="anime-wrap js_link_in_page">
							<div class="kazari-wrap anime anime-in">
								<h4 class="txt1 theme_font">SEGMENT / 01</h4>
								<h4 class="txt2">中介事业</h4>
							</div>
						</a>
					</li>
					<li>
						<a href="#anc02" class="anime-wrap js_link_in_page">
							<div class="kazari-wrap anime anime-in">
								<h4 class="txt1 theme_font">SEGMENT / 02</h4>
								<h4 class="txt2">资产管理解決法案事业</h4>
							</div>
						</a>
					</li>
					<li>
						<a href="#anc03" class="anime-wrap js_link_in_page">
							<div class="kazari-wrap anime anime-in">
								<h4 class="txt1 theme_font">SEGMENT / 03</h4>
								<h4 class="txt2">租赁管理事业</h4>
							</div>
						</a>
					</li>
				</ul>

			</div>
		</div>


		<div class="content_block width_full clearfix">
			<div class="block_inner content1">
				<h2 class="content_title" id="anc01">
					<span class="simplified-chinese_title">中介事业</span>
				</h2>

				<div class="segment clearfix">
					<div class="txt-area">
						<h3 class="segment-title">
							<span class="title">听取您的想法，帮您找到中意物件，办公室、店铺、住宅的中介业务。</span>
						</h3>
						<div class="txts txt-legible">
							<p>
								为法人客户提供不动产需求的支持的"面向法人的中介"，以及应对个人客户更换住处需求的"面向个人的中介"等，我们将针对客户的各种不同的需求提供精心细致的服务。
								<br>为您提供丰富与及时的物件信息自不待言，我们还将以完善的体制在调查、合同签订乃至售后跟进方面全面地支持您。
							</p>
						</div>
					</div>
					<div class="img-area img-right">
						<img src="<?php echo e(asset('index2/img/simplified-chinese/profile/segment-1.png')); ?>" alt="中介事业">
					</div>

				</div>
			</div>
		</div>


		<div class="content_block width_full clearfix">
			<div class="block_inner content2">
				<h2 class="content_title" id="anc02">
					<span class="simplified-chinese_title">資產管理解決方案事業</span>
				</h2>

				<div class="segment clearfix">
					<div class="txt-area">
						<h3 class="segment-title">
							<span class="title">最大限度地发挥不动产的潜力，资产管理解決法案事业的力量。</span>
						</h3>
						<div class="txts txt-legible">
							<p>
								灵活运用本公司的强项，即在法人中介中培养出来的鉴别能力对不动产进行选定、获取，凭借东京建物集团所拥有的经营技巧等丰富多样的方法提高其附加价值和盈利能力，从而开展转卖的业务。
							</p>
						</div>
					</div>
					<div class="img-area img-right">
						<img src="<?php echo e(asset('index2/img/simplified-chinese/profile/segment-2.png')); ?>" alt="資產管理解決方案事業">
					</div>

				</div>
			</div>
		</div>


		<div class="content_block width_full clearfix">
			<div class="block_inner content3">
				<h2 class="content_title" id="anc03">
					<span class="simplified-chinese_title">租赁管理事业</span>
				</h2>

				<div class="segment clearfix">
					<div class="txt-area">
						<h3 class="segment-title">
							<span class="title">
								经验和实绩是不可或缺的。以丰富多样的租赁技巧为您提供全面的支持。
							</span>
						</h3>
						<div class="txts txt-legible">
							<p>
								为了形成稳定的资产，该如何有效地运用所拥有的不动产呢？现在是不动产会因不同的运用方式而产生很大差别的时代。
								<br>我们将为您的中长期资产的形成，以及作为您业务后盾的租赁公寓、办公大厦的经营管理提供总体性的支持。
								<br>以此协助您创建一个无忧无虑的明天。
							</p>
						</div>
					</div>
					<div class="img-area img-right">
						<img src="<?php echo e(asset('index2/img/simplified-chinese/profile/segment-3.png')); ?>" alt="租赁管理事业">
					</div>

				</div>
			</div>
		</div>

	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.app3', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
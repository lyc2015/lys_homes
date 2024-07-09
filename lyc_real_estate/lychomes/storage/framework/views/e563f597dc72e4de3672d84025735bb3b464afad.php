<?php $__env->startSection('styles'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('index2/css/simplified-chinese/top.css')); ?>" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div id="contents" class="simplified-chinese">
	<div class="main">

		<div class="page_header page_header_design">
			<div class="page_header_parts page_header_bg_img"></div>
			<div class="page_header_parts page_header_catch">
				<div class="inner">
					<h2 class="page_title">
						<span class="simplified-chinese_title">公司信息首页</span>
					</h2>
				</div>
			</div>
		</div>


		<div class="content_block width_full clearfix">
			<div class="block_inner content1">
				<h2 class="content_title">
					<span class="simplified-chinese_title">致辞</span>
				</h2>
				<div class="img-txt greeting clearfix">
					<div class="img-area">
						<img src="<?php echo e(asset('index2/img/simplified-chinese/greeting.jpg')); ?>" alt="董事总经理 | 福居 賢悟">
						<p class="president">董事总经理</p>
						<p class="president_name">福居 賢悟</p>
					</div>
					<div class="txt-area">
						<div class="txts txt-legible">
							<p>
								本公司的企业理念"信赖、创造、未来"，是我们一贯坚持的工作态度的真实表达。
								<br>我们所经营的"不动产"这一商品，是和一般大量生产的商品完全不同的、独一无二的商品，是极其高档的商品。因此，为了达成买卖、租赁等的交易，客户的"信赖"是不可或缺的。而且，为了获得这份信赖，我们将时刻站在客户的立场，并不断"创造"出客户所需的商品和服务。那么，我们坚信通过将这一循环的持续，就能实现面向"未来"的永久延续的发展。
								<br>
								随着时代的变迁，客户的价值观和需求每时每刻都在变化。本公司将准确捕获这些变化，并作出及时灵活的对应。此外，我们视客户的信赖为最重要的价值，坚持每天创造、不断开创未来的态度从未改变，无论任何时代都会一直传承下去。
								<br>
								伴随着2015年度东京建物集团的业务重组，本公司中止了上市，并迎来了崭新的开始。至此，我们与东京建物以及集团公司的协作更加密切深入，并构建了得以充分发挥东京建物集团的综合力量的完善体制。
								<br>
								尤其是本公司作为不动产流通业，因为拥有店铺，所以与客户直接接触的机会很多，发挥着担当集团公司整体窗口的重要作用。面对客户的需求，我们将从集团丰富多彩的项目中精选最佳解决方案，为客户提供一站式综合性的提议。另一方面，我们会听取客户真实的声音，并通过将此信息传递给集团各公司，为打造领先时代的商品和服务而作出贡献。我们深信，通过本公司所起的连接客户与集团各公司间的枢纽功能，能够使集团整体得以优化，更有力地发挥业务的相乘效果。
								<br>
								东京建物不动产贩卖，作为东京建物集团的最前沿企业，将真诚面对每一位客户，为给您带来前所未有的喜悦、得到您满意的评价，而坚持不懈的进行具有魅力的提案。
								<br> 今后也敬请期待本公司以及东京建物集团的飞跃发展，谢谢。
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>


	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.app3', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
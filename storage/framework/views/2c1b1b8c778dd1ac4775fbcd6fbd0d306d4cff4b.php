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
为法人客户提供不动产需求的支持的"面向法人的中介"，以及应对个人客户更换住处需求的"面向个人的中介"等，我们将针对客户的各种不同的需求提供精心细致的服务。 为您提供丰富与及时的物件信息自不待言，我们还将以完善的体制在调查、合同签订乃至售后跟进方面全面地支持您。
							</p>
						</div>
					</div>

                    <div class="img-txt greeting clearfix">
                    	<div class="img-area">
                    		<img src="/storage/files/file-2023-07-24-64be53b451ca1.png" alt="会社ビル | 会社ビル">
                    	</div>
						<div class="txt-area">
							向卖方提供以下服务：
							<br/>&nbsp;1.对相关不动产的测评，评估
							<br/>&nbsp;2.销售活动
							<br/>&nbsp;3.买卖合同的签订
							<br/>&nbsp;4.抵押权的解除手续
							<br/>&nbsp;5.中介合同
							<br/>
							<br/>
							向买方提供以下的服务：
							<br/>&nbsp;1.物件的介绍
							<br/>&nbsp;2.需求条件的调查
							<br/>&nbsp;3.买卖合同的签订
							<br/>&nbsp;4.借款申请手续等
						</div>
                    </div>
<!-- 					<div class="img-area img-right" style="text-align:left;">
						<div style="width:20%;margin-left:40%;">
						</div>
					</div> -->
				</div>
			</div>
		</div>

		<div class="content_block width_full clearfix">
			<div class="block_inner content1">
				<h2 class="content_title" id="anc01">
					<span class="simplified-chinese_title">資產管理解決方案事業</span>
				</h2>

				<div class="segment clearfix">
					<div class="txt-area">
						<h3 class="segment-title">
							<span class="title">最大限度地发挥不动产的潜力，资产管理解決法案事业的力量。</span>
						</h3>
						<div class="txts txt-legible">
							<p>
灵活运用本公司的强项，即在法人中介中培养出来的鉴别能力对不动产进行选定、获取，凭借LYC不動産所拥有的经营技巧等丰富多样的方法提高其附加价值和盈利能力，从而开展转卖的业务。
							</p>
						</div>
					</div>

					<div class="img-txt greeting clearfix">
                    	<div class="img-area">
                    		<img src="/storage/files/file-2023-07-24-64be53b457cf9.png" alt="会社ビル | 会社ビル">
                    	</div>
						<div class="txt-area">
							1.資產記錄和追踪： 提供不動產資產的詳細記錄，包括物理位置、擁有者信息、使用情況等。這有助於組織追踪不動產資產的狀態和價值。
							<br/><br/>2.租務管理： 管理不動產租賃合同，包括租金支付、合同到期提醒、租賃條款等。這有助於確保租賃合同的合規性和及時收入。
							<br/><br/>3.設施和維護管理： 管理不動產的日常運營和維護，包括設施維護、保險和安全標準的遵守、維修記錄等。
							<br/><br/>4.財務管理： 管理不動產資產的財務方面，包括稅務、保險、折舊和其他相關的財務事務。
							<br/><br/>5.市場分析： 分析不動產市場趨勢和區域性資訊，以制定更好的投資和管理策略。
							<br/><br/>6.風險管理： 評估和管理與不動產投資相關的風險，包括市場風險、法律風險、環境風險等。
							<br/><br/>7.合規性和法規遵從： 確保不動產管理遵守相關的法規和合規性標準，以減少法律風險。
							<br/><br/>8.數據分析和報告： 提供強大的分析工具和報告功能，以幫助企業更好地理解其不動產資產的價值、效能和未來發展潛力。
							<br/><br/>9.租戶管理： 管理與租戶相關的信息，包括入住和退租程序、租金收取、客戶服務等。
							<br/><br/>10.可持續性和環境管理： 管理不動產的可持續性和環境影響，包括節能減排、綠色建築標準等。
						</div>
                    </div>
				</div>
			</div>
		</div>

		<div class="content_block width_full clearfix">
			<div class="block_inner content1">
				<h2 class="content_title" id="anc01">
					<span class="simplified-chinese_title">租赁管理事业</span>
				</h2>

				<div class="segment clearfix">
					<div class="txt-area">
						<h3 class="segment-title">
							<span class="title">经验和实绩是不可或缺的。以丰富多样的租赁技巧为您提供全面的支持。</span>
						</h3>
						<div class="txts txt-legible">
							<p>
为了形成稳定的资产，该如何有效地运用所拥有的不动产呢？现在是不动产会因不同的运用方式而产生很大差别的时代。
我们将为您的中长期资产的形成，以及作为您业务后盾的租赁公寓、办公大厦的经营管理提供总体性的支持。
以此协助您创建一个无忧无虑的明天。
							</p>
						</div>
					</div>

					<div class="img-txt greeting clearfix">
                    	<div class="img-area">
                    		<img src="/storage/files/file-2023-07-24-64be53b45cc91.png" alt="会社ビル | 会社ビル">
                    	</div>
						<div class="txt-area">
							1.租賃合同管理： 管理和追踪租賃合同的所有方面，包括合同條款、租金支付、租賃期限、租賃物品的描述等。這有助於確保合同的合規性並提醒租賃合同到期或需要更新。
							<br/><br/>2.租金計算和支付： 自動計算租金和其他相關費用，並生成支付通知。這有助於提高支付的準確性，減少錯誤和延誤。
							<br/><br/>3.租賃物品追踪： 監控和追踪租賃的物品，包括其所在位置、狀態、維護記錄等。這有助於提高資產的利用率和效能。
							<br/><br/>4.租賃物品維護： 管理和計劃租賃物品的維護和修理工作，以確保其在租賃期間保持良好的狀態。
							<br/><br/>5.租賃合規性和法規遵從： 確保租賃管理遵守相關法規和合規性標準，減少法律風險。
							<br/><br/>6.數字化合同： 通過數字化合同，實現合同管理的自動化流程，提高效率並減少錯誤。
							<br/><br/>7.合同協商和更新： 協助組織進行租賃合同的協商和更新，以滿足業務需求和市場條件的變化。
						</div>
                    </div>
				</div>
			</div>
		</div>


		<!-- <?php $__currentLoopData = $content['business']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> -->

	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app3', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
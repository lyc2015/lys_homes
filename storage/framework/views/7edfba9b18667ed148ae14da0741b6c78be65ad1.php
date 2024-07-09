<?php $__env->startSection('styles'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('index2/css/company.css')); ?>" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div id="contents" class="company">
    <div class="main">

        <div class="page_header page_header_design">
            <div class="page_header_parts page_header_bg_img"></div>
            <div class="page_header_parts page_header_catch">
                <div class="inner">
                    <h2 class="page_title">
                        <span class="title-en theme_font">Company</span>
                        <span class="title-ja">会社情報</span>
                    </h2>
                </div>
            </div>
        </div>


        <div class="content_block width_full clearfix">
            <div class="block_inner content1">
                <h2 class="content_title">
                    <span class="title-ja">信頼・創造・未来</span>
                    <span class="title-en diamond">Trust･Creation･Future</span>
                </h2>

                <div class="introduction_statement clearfix">
                    <p>
                        LYC動産販売はワンストップで最適なソリューションをお届けしています。
                    </p>
                </div>

                <div class="list_wrap">
                    <ul class="list-mini_content_link row-3">
					<?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <a href="/company/<?php echo e($key); ?>" class="anime-wrap">
                                <div class="kazari-wrap anime anime-in">
                                    <h4 class="txt1 theme_font"><?php echo e($info['cover_title']); ?></h4>
                                    <h4 class="txt2 theme_font"><?php echo e(strtoupper($info['cover_name'])); ?></h4>
                                </div>
                                <div class="img-area">
                                    <div class="img-cap-wrap">
                                        <img src="/<?php echo e($info['companyinfo']->content['cover_image_link']); ?>" alt="<?php echo e($info['companyinfo']->content['cover_image_intro']); ?>" class="img">
                                    </div>
                                </div>
                                <div class="txt-wrap anime anime-in">
                                    <h4 class="title"><?php echo e($info['companyinfo']->content['cover_image_intro']); ?></h4>
                                </div>
                            </a>
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
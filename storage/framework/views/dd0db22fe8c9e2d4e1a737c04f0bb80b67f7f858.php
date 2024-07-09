<?php $__env->startSection('styles'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('index2/css/recruit.css')); ?>" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div id="contents" class="company">
    <div class="main">

        <div class="page_header page_header_design">
            <div class="page_header_parts page_header_bg_img"></div>
            <div class="page_header_parts page_header_catch">
                <div class="inner">
                    <h2 class="page_title">
                        <span class="title-en theme_font">Recruit</span>
                        <span class="title-ja">採用情報</span>
                    </h2>
                </div>
            </div>
        </div>


        <div class="content_block width_full clearfix">
            <div class="block_inner content1">

                <div class="list_wrap">
                    <ul class="list-mini_content_link row-3">
                        <li>
                            <a href="<?php echo e(route('recruit', ['subpage' => 'newgraduate',])); ?>" class="anime-wrap">
                                <div class="kazari-wrap anime anime-in">
                                    <h4 class="txt1 theme_font">content / 01</h4>
                                    <h4 class="txt2 theme_font text-uppercase">newgraduate</h4>
                                </div>
                                <div class="img-area">
                                    <div class="img-cap-wrap">
                                        <img src="<?php echo e(asset('/index2/img/recruit/mini_content_link1-1.webp')); ?>" alt="新卒採用" class="img">
                                    </div>
                                </div>
                                <div class="txt-wrap anime anime-in">
                                    <h4 class="title">新卒採用</h4>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('recruit', ['subpage' => 'career',])); ?>" class="anime-wrap">
                                <div class="kazari-wrap anime anime-in">
                                    <h4 class="txt1 theme_font">content / 02</h4>
                                    <h4 class="txt2 theme_font text-uppercase">career</h4>
                                </div>
                                <div class="img-area">
                                    <div class="img-cap-wrap">
                                        <img src="<?php echo e(asset('/index2/img/recruit/mini_content_link1-2.webp')); ?>" alt="キャリア採用" class="img">
                                    </div>
                                </div>
                                <div class="txt-wrap anime anime-in">
                                    <h4 class="title">キャリア採用</h4>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.app2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('styles'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('index2/css/company/history.css')); ?>" />
<!-- <link rel="stylesheet" type="text/css" href="<?php echo e(asset('bootstrap-4.6.2-dist/css/bootstrap.min.css')); ?>" /> -->

<script src="<?php echo e(asset('js/jquery-3.7.0.min.js')); ?>"></script>
<!-- <script src="<?php echo e(asset('bootstrap-4.6.2-dist/js/bootstrap.min.js')); ?>"></script> -->

<!-- Flickity -->
<link rel="stylesheet" type="text/css" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

<style>
    /* GALLERY */
    .gallery-box {
        overflow: hidden;
    }

    .gallery-image {
        width: 30%;
        float: left;
        padding: 10px;
        box-shadow: 1px 1px 0px #ddd;
    }

    .gallery-image-edit {
        width: 33.3333333%;
        float: left;
        padding: 10px;
        box-shadow: 1px 1px 0px #ddd;
        position: relative;
    }

    .gallery-image-edit button {
        position: absolute;
        top: 10px;
        right: 10px;
        padding: 0 2px;
    }

    #gallaryimageupload {
        display: none;
    }

    .gallery-image-single {
        width: 33.3333333%;
        float: left;
        padding: 8px;
        box-sizing: border-box;
    }
    tr th,
    tr td {
        width: calc(50% / 1.5);
    }

    /* external css: flickity.css */
    * { box-sizing: border-box; }

    body { font-family: sans-serif; }

    .carousel {
        background: #EEE;
    }

    .carousel-cell {
        height: 500px;
        margin-right: 50px;
        border-radius: 5px;
        counter-increment: gallery-cell;
    }
    .flickity-page-dots .dot {
        top:20px;
        background: #fff;
        border-radius:0;
    }
   
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div id="contents" class="history">
    <div class="main">

        <div class="page_header page_header_design">
            <div class="page_header_parts page_header_bg_img"></div>
            <div class="page_header_parts page_header_catch">
                <div class="inner">
                    <h2 class="page_title">
                        <span class="title-en theme_font"><?php echo e($property->title); ?></span>
                        <span class="title-ja">物件詳細</span>
                    </h2>
                </div>
            </div>
        </div>

        <?php if(!$property->gallery->isEmpty()): ?>
        <div class="content_title">
            <div class="card">
                <div class="body">
                    <!-- <div class="gallery-box">
                        <?php $__currentLoopData = $property->gallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="gallery-image">
                            <img class="img-responsive" src="<?php echo e(Storage::url('property/gallery/'.$gallery->name)); ?>" alt="<?php echo e($property->title); ?>">
                            <div class="card-content">
                                <?php echo e($gallery->description); ?>

                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div> -->

                    <div class="carousel" style="margin-top:20px"
                        data-flickity='{ "wrapAround": true }'>
                        <!-- <div class="carousel-cell"></div> -->
                        <?php $__currentLoopData = $property->gallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="carousel-cell">
                                <img class="d-block w-100" 
                                    style="width: auto;height: auto;max-width: 100%;max-height: 95%;" 
                                    src="<?php echo e(Storage::url('property/gallery/'.$gallery->name)); ?>" alt="<?php echo e($property->title); ?>">
                                <br/>
                                <span><?php echo e($gallery->description); ?></span>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                    <!-- <div id="carouselExampleControls" class="carousel carousel-dark slide " data-ride="carousel" style="width:60%;margin-left:auto;margin-right:auto">
                        <div class="carousel-inner" style="padding: 5% 5%">
               
                            <?php $__currentLoopData = $property->gallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($index === 0): ?>
                                    <div class="carousel-item active">
                                <?php else: ?>
                                    <div class="carousel-item">
                                <?php endif; ?>
                                    <img class="d-block w-100" src="<?php echo e(Storage::url('property/gallery/'.$gallery->name)); ?>" alt="<?php echo e($property->title); ?>">
                                    <p><?php echo e($gallery->description); ?></p>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>
                        <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </button>
                    </div> -->
                </div>
            </div>
        </div>
        <?php endif; ?>
        
        <div class="content_block width_full clearfix">
            <div class="block_inner content1">
                <h2 class="content_title">
                    <!-- <span class="title-ja"><?php echo e($property->title); ?></span> -->
                    <span class="title-en">物件詳細</span>
                </h2>

                <table class="table-history">
                    <tbody>
                        <tr>
                            <th colspan="4" style="color:#8A8000"> | <?php echo e($property->title); ?>【マンション】</th>
                        </tr>
                        <tr>
                            <th>賃貸価格</th>
                            <td colspan="3"><?php echo e($property->price); ?> 万円</td>
                        </tr>
                        <tr>
                            <th>所在地</th>
                            <td><?php echo e($property->address ?: '-'); ?></td>
                            <th>交通</th>
                            <td><?php echo e($property->nearby ?: '-'); ?></td>
                        </tr>
                        <tr>
                            <th>構造・階数</th>
                            <td><?php echo e($property->structure ?: '-'); ?></td>
                            <th>専有面積</th>
                            <td><?php echo e($property->master_area ?: '-'); ?> m2</td>
                        </tr>
                        <tr>
                            <th>バルコニー面積</th>
                            <td><?php echo e($property->balconies_area ?: '-'); ?> m2</td>
                            <th>向き</th>
                            <td><?php echo e($property->direction ?: '-'); ?></td>
                        </tr>
                        <tr>
                            <th>間取り</th>
                            <td><?php echo e($property->house_layout ?: '-'); ?></td>
                            <th>築年月</th>
                            <td><?php echo e($property->completion_time ?: '-'); ?></td>
                        </tr>
                        <tr>
                            <th colspan="4" style="color:#8A8000"> | 共通概要</th>
                        </tr>

                        <?php if($property->purpose != 'rent'): ?>
                            <tr>
                                <th>総戸数</th>
                                <td><?php echo e($property->household ?: '-'); ?></td>
                                <th>管理方式</th>
                                <td><?php echo e($property->management_mode ?: '-'); ?></td>
                            </tr>
                            <tr>
                                <th>土地権利</th>
                                <td><?php echo e($property->land_rights ?: '-'); ?></td>
                                <th>設備</th>
                                <td><?php echo e($property->equipment ?: '-'); ?></td>
                            </tr>
                            <tr>
                                <th>その他設備</th>
                                <td><?php echo e($property->other_equipment ?: '-'); ?></td>
                                <th>ペット</th>
                                <td><?php echo e($property->pet ?: '-'); ?></td>
                            </tr>
                            <tr>
                                <th>通信環境</th>
                                <td><?php echo e($property->communication_environment ?: '-'); ?></td>
                                <th>共用施設</th>
                                <td><?php echo e($property->common_equipment ?: '-'); ?></td>
                            </tr>
                            <tr>
                                <th>管理費</th>
                                <td><?php echo e($property->monthly_management_price ?: '-'); ?></td>
                                <th>リフォーム</th>
                                <td><?php echo e($property->fitment ?: '-'); ?></td>
                            </tr>
                            <tr>
                                <th>修繕積立金</th>
                                <td><?php echo e($property->monthly_maintenance_price ?: '-'); ?></td>
                                <th>その他月次費用</th>
                                <td><?php echo e($property->monthly_others_price ?: '-'); ?></td>
                            </tr>
                        <?php else: ?>
                            <tr>
                                <th>総戸数</th>
                                <td><?php echo e($property->household ?: '-'); ?></td>
                                <th>取引態様</th>
                                <td><?php echo e($property->trade_style ?: '-'); ?></td>
                            </tr>
                            <tr>
                                <th>入居</th>
                                <td><?php echo e($property->moving_into ?: '-'); ?></td>
                                <th>保証会社</th>
                                <td><?php echo e($property->guarantee_company ?: '-'); ?></td>
                            </tr>
                            <tr>
                                <th>条件</th>
                                <td><?php echo e($property->condition ?: '-'); ?></td>
                                <th>ペット</th>
                                <td><?php echo e($property->pet ?: '-'); ?></td>
                            </tr>
                            <tr>
                                <th>更新年月日</th>
                                <td><?php echo e($property->update_year_month_day ?: '-'); ?></td>
                                <th>備考</th>
                                <td><?php echo e($property->remark ?: '-'); ?></td>
                            </tr>
                        <?php endif; ?>
                        </tr>
                    </tbody>
                </table>
                <br/><br/><br/>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.app2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('styles'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('index2/css/recruit/career.css')); ?>" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div id="contents" class="outline">
    <div class="main">

        <div class="page_header page_header_design">
            <div class="page_header_parts page_header_bg_img"></div>
            <div class="page_header_parts page_header_catch">
                <div class="inner">
                    <h2 class="page_title">
                        <span class="title-en theme_font">Career</span>
                        <span class="title-ja">キャリア採用</span>
                    </h2>
                </div>
            </div>
        </div>


        <div class="content_block width_full clearfix">
            <div class="block_inner content1">
                <h2 class="content_title">
                    <span class="title-ja">キャリア採用</span>
                    <span class="title-en">Career</span>
                </h2>

				<?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $career): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <table class="table-outline">
                    <tbody>
                        <tr>
                            <th class="title" style="padding:0.5em;background-color:#87CEFA" colspan="2"><?php echo e($career->name); ?></th>
                        </tr>
                        <tr>
                            <th class="title">仕事内容</th>
                            <td><?php echo e($career->intro); ?></td>
                        </tr>
                        <tr>
                            <th class="title">応募資格</th>
                            <td><?php echo e($career->requirement); ?></td>
                        </tr>
                        <tr>
                            <th class="title">勤務地</th>
                            <td><?php echo e($career->work_place); ?></td>
                        </tr>
                        <tr>
                            <th class="title">勤務時間</th>
                            <td><?php echo e($career->work_time); ?></td>
                        </tr>
                        <tr>
                            <th class="title">休日休暇</th>
                            <td><?php echo e($career->rest_time); ?></td>
                        </tr>
                        <tr>
                            <th class="title">待遇</th>
                            <td><?php echo e($career->salary); ?></td>
                        </tr>
                    </tbody>
                </table>
<br/><br/>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



            </div>
        </div>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
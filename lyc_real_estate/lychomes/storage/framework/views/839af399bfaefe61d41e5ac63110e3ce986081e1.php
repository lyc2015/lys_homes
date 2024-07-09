<?php $__env->startSection('styles'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('index2/css/recruit/newgraduate.css')); ?>" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div id="contents" class="outline">
    <div class="main">

        <div class="page_header page_header_design">
            <div class="page_header_parts page_header_bg_img"></div>
            <div class="page_header_parts page_header_catch">
                <div class="inner">
                    <h2 class="page_title">
                        <span class="title-en theme_font">Newgraduate</span>
                        <span class="title-ja">新卒採用</span>
                    </h2>
                </div>
            </div>
        </div>


        <div class="content_block width_full clearfix">
            <div class="block_inner content1">
                <h2 class="content_title">
                    <span class="title-ja">新卒採用</span>
                    <span class="title-en">Newgraduate</span>
                </h2>
				<?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $newgraduate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <table class="table-outline">
                    <tbody>
                        <tr>
                            <th class="title" style="padding:0.5em;background-color:#87CEFA">社員種別</th>
                            <td style="padding:0.5em;background-color:#87CEFA"><?php echo e($newgraduate->type); ?></td>
                        </tr>
                        <tr>
                            <th class="title">初任給</th>
                            <td><?php echo e($newgraduate->start_salary); ?></td>
                        </tr>
                        <tr>
                            <th class="title">試雇期間</th>
                            <td><?php echo e($newgraduate->trial_period); ?></td>
                        </tr>
                        <tr>
                            <th class="title">諸手当</th>
                            <td><?php echo e($newgraduate->hands_on); ?></td>
                        </tr>
                        <tr>
                            <th class="title">昇給</th>
                            <td><?php echo e($newgraduate->salary_incr); ?></td>
                        </tr>
                        <tr>
                            <th class="title">賞与</th>
                            <td><?php echo e($newgraduate->bonus); ?></td>
                        </tr>
                        <tr>
                            <th class="title">勤務地</th>
                            <td><?php echo e($newgraduate->work_place); ?></td>
                        </tr>
                        <tr>
                            <th class="title">勤務時間</th>
                            <td><?php echo $newgraduate->work_time; ?></td>
                        </tr>
                        <tr>
                            <th class="title">休日休暇</th>
                            <td><?php echo e($newgraduate->rest_time); ?></td>
                        </tr>
                        <tr>
                            <th class="title">福利厚生</th>
                            <td><?php echo e($newgraduate->welfare); ?></td>
                        </tr>
                        <tr>
                            <th class="title">教育制度</th>
                            <td><?php echo e($newgraduate->training_system); ?></td>
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
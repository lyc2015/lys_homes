<?php $__env->startSection('title', "会社概要" ); ?>

<?php $__env->startPush('styles'); ?>


<?php $__env->stopPush(); ?>


<?php $__env->startSection('content'); ?>

<div class="block-header"></div>

<div class="row clearfix">

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header bg-red">
                <h2>会社概要(企業理念)</h2>
            </div>

            <div class="header">
                <h2>
                    <?php echo e($companyinfo->name); ?>

                    <br>
                    <small>Posted At <?php echo e($companyinfo->created_at->toFormattedDateString()); ?></small>
                </h2>
            </div>
            <div class="header">
                <ul class="list-group">
                    <li class="list-group-item">
                        <strong>标题：</strong>
                        <span class="left"><?php echo e($content['title']); ?></span>
                    </li>
                    <li class="list-group-item">
                        <strong>标题(英文) : </strong>
                        <span class="left"><?php echo e($content['title_en']); ?></span>
                    </li>
                    <li class="list-group-item">
                        <strong>中间标题 : </strong>
                        <span class="left"><?php echo e($content['middle_title']); ?></span>
                    </li>
                    <li class="list-group-item">
                        <strong>中间内容 : </strong>
                        <textarea class="form-control" readonly><?php echo e($content['middle_content']); ?></textarea>
                    </li>
                    <li class="list-group-item">
                        <strong>底部标题 : </strong>
                        <span class="left"><?php echo e($content['bottom_title']); ?></span>
                    </li>
                    <li class="list-group-item">
                        <strong>底部标题（英文）: </strong>
                        <span class="left"><?php echo e($content['bottom_title_en']); ?></span>
                    </li>
                    <li class="list-group-item">
                        <strong>底部左侧图片 : </strong>
                        <span class="left"><?php echo e($content['bottom_image_link']); ?></span>
                    </li>
                    <li class="list-group-item">
                        <strong>底部左侧图片简介 : </strong>
                        <span class="left"><?php echo e($content['bottom_image_intro']); ?></span>
                    </li>

                    <li class="list-group-item">
                        <strong>底部右侧内容 : </strong>
                        <textarea class="form-control" readonly><?php echo e($content['bottom_content']); ?></textarea>
                    </li>
                </ul>
            </div>

        </div>

        <div class="card">
            <div class="header bg-red">
                <h2>封面图片</h2>
            </div>
            <div class="body">
                <div class="row">
                    <div class="col-md-3" style="height:200px">
                        <img class="img-responsive" src="/<?php echo e($content['cover_image_link']); ?>" alt="<?php echo e($content['cover_image_link']); ?>" style="width:auto;height:auto;max-width:100%;max-height:100%">
                    </div>
                </div>
                <div class="row">
                    <strong>封面图片简介 : </strong>
                    <span class="left"><?php echo e($content['cover_image_intro']); ?></span>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="body">
                <a href="<?php echo e(route('admin.companyinfo.index')); ?>" class="btn btn-danger btn-lg waves-effect">
                    <i class="material-icons left">arrow_back</i>
                    <span>BACK</span>
                </a>
                <a href="<?php echo e(route('admin.philosophy.edit',$companyinfo->id)); ?>" class="btn btn-danger btn-lg waves-effect">
                    <i class="material-icons">edit</i>
                    <span>EDIT</span>
                </a>
            </div>
        </div>

    </div>

</div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>

<script src="https://cdn.tiny.cloud/1/yk6vfkrytvy0zzqlj2ev5tp5vr6nwk4cgco1yah7y6gr98qi/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.layouts.app2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
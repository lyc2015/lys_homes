<?php $__env->startSection('title', 'Show File'); ?>

<?php $__env->startPush('styles'); ?>


<?php $__env->stopPush(); ?>


<?php $__env->startSection('content'); ?>

<div class="block-header"></div>

<div class="row clearfix">

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">

            <div class="header bg-red">
                <h2>查看文件</h2>
            </div>

            <div class="header">
                <h2>
                    <?php echo e($file->file_name); ?>

                    <br>
                    <small>Posted At <?php echo e($file->created_at->toFormattedDateString()); ?></small>
                </h2>
            </div>

            <div class="header">
                <ul class="list-group">
                    <li class="list-group-item">
                        <strong>文件类型</strong>
                        <span class="left"><?php echo e($file->file_type); ?></span>
                    </li>
                    <li class="list-group-item">
                        <strong>文件名 : </strong>
                        <span class="left"><?php echo e($file->file_name); ?></span>
                    </li>
                    <li class="list-group-item">
                        <strong>文件扩展名 : </strong>
                        <span class="left"><?php echo e($file->file_ext); ?></span>
                    </li>
                    <li class="list-group-item">
                        <strong>文件md5 : </strong>
                        <span class="left"><?php echo e($file->file_md5); ?></span>
                    </li>
                    <li class="list-group-item">
                        <strong>文件大小(单位：B): </strong>
                        <span class="left"><?php echo e($file->file_size); ?></span>
                    </li>
                    <li class="list-group-item">
                        <strong>文件链接 : </strong>
                        <span class="left"><a href="/<?php echo e($file->file_link); ?>"><?php echo e($file->file_link); ?></href></span>
                    </li>
                </ul>
            </div>

        </div>

        <div class="card">
            <div class="body">
                <a href="<?php echo e(route('admin.fileupload.index')); ?>" class="btn btn-danger btn-lg waves-effect">
                    <i class="material-icons left">arrow_back</i>
                    <span>BACK</span>
                </a>
                <a href="<?php echo e(route('admin.fileupload.edit',$file->id)); ?>" class="btn btn-danger btn-lg waves-effect">
                    <i class="material-icons">edit</i>
                    <span>EDIT</span>
                </a>
            </div>
        </div>

    </div>

</div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>

<script>
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.layouts.app2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
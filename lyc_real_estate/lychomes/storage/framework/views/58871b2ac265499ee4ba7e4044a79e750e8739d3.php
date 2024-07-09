<?php $__env->startSection('title', 'Show article'); ?>

<?php $__env->startPush('styles'); ?>


<?php $__env->stopPush(); ?>


<?php $__env->startSection('content'); ?>

<div class="block-header"></div>

<div class="row clearfix">

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">

            <div class="header bg-red">
                <h2>会社ニュース</h2>
            </div>

            <div class="header">
                <h2>
                    <?php echo e($article->title); ?>

                    <br>
                    <small>Posted At <?php echo e($article->created_at->toFormattedDateString()); ?></small>
                </h2>
            </div>

            <div class="header">
                <ul class="list-group">
                    <li class="list-group-item">
                        <strong>封面标题</strong>
                        <span class="left"><?php echo e($article->cover_title); ?></span>
                    </li>
                    <li class="list-group-item">
                        <strong>封面标题(英文) : </strong>
                        <span class="left"><?php echo e($article->cover_title_en); ?></span>
                    </li>
                    <li class="list-group-item">
                        <strong>封面图片 : </strong>
                        <span class="left"><?php echo e($article->cover_image); ?></span>
                    </li>
                    <li class="list-group-item">
                        <strong>封面简介 : </strong>
                        <span class="left"><?php echo e($article->cover_intro); ?></span>
                    </li>
                    <li class="list-group-item">
                        <strong>正文标题 : </strong>
                        <span class="left"><?php echo e($article->title); ?></span>
                    </li>
                    <li class="list-group-item">
                        <strong>正文标题(英文) : </strong>
                        <span class="left"><?php echo e($article->title_en); ?></span>
                    </li>
<!--
                    <li class="list-group-item">
                        <strong> : </strong>
                        <span class="left"><?php echo e($article->show_rank); ?></span>
                    </li>
-->
                    <li class="list-group-item">
                        <strong>内容: </strong><br>
                        <div class="form-line">
                            <textarea id ="mytextarea" class="form-control" name="content" rows="10"><?php echo e($article->content); ?></textarea>
                        </div>
                    </li>
                </ul>
            </div>

        </div>

        <?php if($images): ?>
        <div class="card">
            <div class="header bg-red">
                <h2>封面图片</h2>
            </div>
            <div class="body">
                <div class="row">
                    <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-3" style="height:200px">
                        <img class="img-responsive" src="/<?php echo e($image->file_link); ?>" alt="<?php echo e($article->cover_title); ?>" style="width:auto;height:auto;max-width:100%;max-height:100%">
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
        <?php endif; ?>


        <div class="card">
            <div class="body">
                <a href="<?php echo e(route('admin.article.index')); ?>" class="btn btn-danger btn-lg waves-effect">
                    <i class="material-icons left">arrow_back</i>
                    <span>BACK</span>
                </a>
                <a href="<?php echo e(route('admin.article.edit',$article->id)); ?>" class="btn btn-danger btn-lg waves-effect">
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
<script>
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.layouts.app2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('title', "业务指南" ); ?>

<?php $__env->startPush('styles'); ?>
<link rel="stylesheet" href="<?php echo e(asset('backend/plugins/bootstrap-select/css/bootstrap-select.css')); ?>">
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.5/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

<style>
.red-star {
  color: red;
}
</style>

<div class="block-header"></div>

<div class="row clearfix">
    <form action="<?php echo e(route('admin.profilezh.update', $companyinfo->id)); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header bg-red">
                    <h2>业务指南</h2>
                </div>
                <div class="body">
                    <input type="hidden" name="status" class="form-control" value="1" required>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="name_zh" class="form-control" value="<?php echo e($content['name_zh']); ?>" required>
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>    
                                名称(中文)
                            </label>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="title" class="form-control" value="<?php echo e($content['title']); ?>" required>
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>    
                                标题
                            </label>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>
                            中间内容
                        </label>
                        <div class="form-line">
                            <textarea class="form-control" name="middle_content" rows="10" required><?php echo e($content['middle_content']); ?></textarea>
                        </div>
                    </div>
                </div>
            </div>
<?php $__currentLoopData = $content['business']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card">
                <div class="header bg-red">
                    <h2>业务和强项<?php echo e($index+1); ?></h2>
                </div>
                <div class="body">
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="business_names[]" class="form-control" value="<?php echo e($val['name']); ?>" required>
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>    
                                名称
                            </label>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="business_titles[]" class="form-control" value="<?php echo e($val['title']); ?>" required>
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>    
                                标题
                            </label>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>
                            内容
                        </label>
                        <div class="form-line">
                            <textarea class="form-control" name="business_contents[]" rows="3" required><?php echo e($val['content']); ?></textarea>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>
                            图片
                        </label>
                        <div class="form-line">
                            <input type="file" class="form-control" name="business_images[]" />
<?php echo e($val['image_link']); ?>

                        </div>
                    </div>
                </div>
            </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            
            <a href="<?php echo e(route('admin.companyinfozh.index')); ?>" class="btn btn-danger btn-lg m-t-15 waves-effect">
                <i class="material-icons left">arrow_back</i>
                <span>BACK</span>
            </a>

            <button type="submit" class="btn btn-indigo btn-lg m-t-15 waves-effect">
                <i class="material-icons">save</i>
                <span>SAVE</span>
            </button>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>


<?php $__env->startPush('scripts'); ?>
<!--
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.5/js/fileinput.min.js"></script>
<script src="<?php echo e(asset('backend/plugins/bootstrap-select/js/bootstrap-select.js')); ?>"></script>
-->
<script src="https://cdn.tiny.cloud/1/yk6vfkrytvy0zzqlj2ev5tp5vr6nwk4cgco1yah7y6gr98qi/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.layouts.app2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('title', "お問合せ・連絡先" ); ?>

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
        <?php echo csrf_field(); ?>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header bg-red">
                    <h2>お問合せ・連絡先</h2>
                </div>
                <div class="body">
                    <input type="hidden" name="name" class="form-control" value="contact" required>
                    <div class="form-group form-float">
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>    
                            Wechat账号二维码
                        </label>
                        <div class="form-line">
                            <input type="file" name="wechat_qcode" class="form-control" value=""  disabled="true"/>
<?php echo e($content['wechat_image_link']); ?>

                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="wechat_intro" class="form-control" value="<?php echo e($content['wechat_intro']); ?>"  disabled="true">
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>    
                                Wechat账号说明
                            </label>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>    
                            Line账号二维码
                        </label>
                        <div class="form-line">
                            <input type="file" name="line_qcode" class="form-control" value=""  disabled="true"/>
<?php echo e($content['line_image_link']); ?>

                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="line_intro" class="form-control" value="<?php echo e($content['line_intro']); ?>"  disabled="true">
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>    
                                Line账号说明
                            </label>
                        </div>
                    </div>

                </div>
            </div>

        <div class="card">
            <div class="body">
                <a href="<?php echo e(route('admin.contact.index')); ?>" class="btn btn-danger btn-lg waves-effect">
                    <i class="material-icons left">arrow_back</i>
                    <span>BACK</span>
                </a>
                <a href="<?php echo e(route('admin.contact.edit',$contact->id)); ?>" class="btn btn-danger btn-lg waves-effect">
                    <i class="material-icons">edit</i>
                    <span>EDIT</span>
                </a>
            </div>
        </div>
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
<?php $__env->startSection('title', $type == 1 ? "新卒採用" : "キャリア採用"); ?>

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
    <form action="<?php echo e(route('admin.job.store')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header bg-red">
                    <h2><?php echo e($type == 1 ? "新卒採用" : "キャリア採用"); ?></h2>
                </div>
                <div class="body">
                    <input type="hidden" name="type" class="form-control" value="<?php echo e($type); ?>" required>
                    <input type="hidden" name="status" class="form-control" value="1" required>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="name" class="form-control" value="" required>
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>    
                                採用形態・募集職種
                            </label>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>    
                            詳細情報
                        </label>
                        <div class="form-line">
                            <textarea name="intro" class="form-control" value="" required></textarea>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>
                            募集対象 
                        </label>
                        <div class="form-line">
                            <textarea class="form-control" name="requirement" required></textarea>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>
                           勤務地 
                        </label>
                        <div class="form-line">
                            <textarea class="form-control" name="work_place" required></textarea>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>
                           勤務時間 
                        </label>
                        <div class="form-line">
                            <textarea class="form-control" name="work_time" required></textarea>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>
                           休日休暇 
                        </label>
                        <div class="form-line">
                            <textarea class="form-control" name="rest_time" required></textarea>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>
                           給与 
                        </label>
                        <div class="form-line">
                            <textarea class="form-control" name="salary" required></textarea>
                        </div>
                    </div>
                    <input type="hidden" class="form-control" name="show_rank" step=1 value="1" required>
<!--
                    <div class="form-group form-float">
                        <div class="form-line">
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>
                                显示等级
                            </label>
                        </div>
                    </div>
-->
                </div>
            </div>

            
            <a href="<?php echo e(route('admin.job.index', ['type' => $type,])); ?>" class="btn btn-danger btn-lg m-t-15 waves-effect">
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
<script>
    $(document).on("click", ".add-next-line", function() {
        let gallaryLines = $(".gallary-line");
        if (gallaryLines.length < 10) {
            $(".gallary-body").append(`<div class="row gallary-line">
                        <div class="col-lg-5 image-line">
                            <input type="file" name="gallaryimage[]" class="form-control" required />
                        </div>
                        <div class="col-lg-5 text-line">
                            <input type="text" name="discriptions[]" class="form-control" required />
                        </div>
                        <div class="col-lg-2">
                            <div class="col-lg-6 add-next-line">
                                <span class="glyphicon glyphicon-plus"></span>
                            </div>
                            <div class="col-lg-6 delete-current-line">
                                <span class="glyphicon glyphicon-minus"></span>
                            </div>
                        </div>
                    </div>`);
        }
    });
    $(document).on("click", ".delete-current-line", function() {
        let gallaryLines = $(".gallary-line");
        if (gallaryLines.length > 1) {
            $(this).parent().parent().remove();
        }
    });
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.layouts.app2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
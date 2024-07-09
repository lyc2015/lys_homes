<?php $__env->startSection('title', 'Edit Job'); ?>

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
    <form action="<?php echo e(route('admin.job.update',$job->id)); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        
        <div class="col-lg-8 col-md-4 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header bg-red">
                    <h2><?php echo e($job->type == 1 ? "新卒採用" : "キャリア採用"); ?></h2>
                </div>
                <div class="body">
                    <input type="hidden" name="type" class="form-control" value="<?php echo e($job->type); ?>">
                    <input type="hidden" name="id" class="form-control" value="<?php echo e($job->id); ?>">

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="name" class="form-control" value="<?php echo e($job->name); ?>" required>
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
                            <textarea type="text" name="intro" class="form-control" required><?php echo e($job->intro); ?></textarea>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>
                           募集対象 
                        </label>
                        <div class="form-line">
                            <textarea type="text" name="requirement" class="form-control" required><?php echo e($job->requirement); ?></textarea>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>
                           勤務地 
                        </label>
                        <div class="form-line">
                            <textarea type="text" name="work_place" class="form-control" required><?php echo e($job->work_place); ?></textarea>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>
                           勤務時間 
                        </label>
                        <div class="form-line">
                            <textarea type="text" name="work_time" class="form-control" required><?php echo e($job->work_time); ?></textarea>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>
                           休日休暇 
                        </label>
                        <div class="form-line">
                            <textarea type="text" name="rest_time" class="form-control" required><?php echo e($job->rest_time); ?></textarea>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>
                            給与
                        </label>
                        <div class="form-line">
                            <textarea type="text" name="salary" class="form-control" required><?php echo e($job->salary); ?></textarea>
                        </div>
                    </div>
                    <input type="hidden" class="form-control" name="show_rank" step=1 value="<?php echo e($job->show_rank); ?>">
<!--
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="hidden" class="form-control" name="show_rank" step=1 value="<?php echo e($job->show_rank); ?>">
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>
                                show_rank
                            </label>
                        </div>
                    </div>
-->
                </div>
            </div>

        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="card">
                <div class="body">
                    
                    <a href="<?php echo e(route('admin.job.index', ['type' => $job->type,])); ?>" class="btn btn-danger btn-lg m-t-15 waves-effect">
                        <i class="material-icons left">arrow_back</i>
                        <span>BACK</span>
                    </a>

                    <button type="submit" class="btn btn-danger btn-lg m-t-15 waves-effect">
                        <i class="material-icons">save</i>
                        <span>SAVE</span>
                    </button>

                </div>
            </div>

        </div>
    </form>
</div>


<?php $__env->stopSection(); ?>


<?php $__env->startPush('scripts'); ?>

<script src="<?php echo e(asset('backend/plugins/bootstrap-select/js/bootstrap-select.js')); ?>"></script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // DELETE PROPERTY GALLERY IMAGE
    $('.gallery-image-edit button').on('click', function(e) {
        e.preventDefault();
        var id = $(this).data('id');
        var image = $('#gallery-' + id + ' img').attr('alt');
        $.post("<?php echo e(route('admin.gallery-delete')); ?>", {
            id: id,
            image: image
        }, function(data) {
            if (data.msg == true) {
                $('#gallery-' + id).remove();
            }
        });
    });

    $(function() {
        // Multiple images preview in browser
        var imagesPreview = function(input, placeToInsertImagePreview) {

            if (input.files) {
                var filesAmount = input.files.length;

                for (i = 0; i < filesAmount; i++) {
                    var reader = new FileReader();

                    reader.onload = function(event) {

                        $('<div class="gallery-image-edit" id="gallery-perview-' + i + '"><img src="' + event.target.result + '" height="106" width="173"/></div>').appendTo(placeToInsertImagePreview);
                    }

                    reader.readAsDataURL(input.files[i]);
                }
            }

        };

        $('#gallaryimageupload').on('change', function() {
            imagesPreview(this, 'div#gallerybox');
        });
    });

    $(document).on('click', '#galleryuploadbutton', function(e) {
        e.preventDefault();
        $('#gallaryimageupload').click();
    })
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.layouts.app2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
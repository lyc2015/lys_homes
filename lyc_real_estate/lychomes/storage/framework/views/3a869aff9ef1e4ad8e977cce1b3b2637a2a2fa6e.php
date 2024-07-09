<?php $__env->startSection('title', "会社概要" ); ?>

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
    <form action="<?php echo e(route('admin.history.update',$companyinfo->id)); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        
        <div class="col-lg-8 col-md-4 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header bg-red">
                    <h2>会社概要(沿革)</h2>
                </div>
                <div class="body">
                    <input type="hidden" name="status" class="form-control" value="1" required>
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
                        <div class="form-line">
                            <input type="text" name="title_en" class="form-control" value="<?php echo e($content['title_en']); ?>" required>
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>    
                                标题(英文)
                            </label>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>
                            中间标题
                        </label>
                        <div class="form-line">
                            <textarea class="form-control" name="middle_title" rows="3"><?php echo e($content['middle_title']); ?></textarea>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="bottom_content" class="form-control" value="<?php echo e($content['bottom_content']); ?>" required>
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>    
                                底部内容
                            </label>
                        </div>
                    </div>

                </div>
            </div>
            <div class="card">
                <div class="header bg-red">
                    <span class="red-star">&#9733;</span>
                    企业故事
                </div>
<?php
    $cur_year = date('Y');
    $start_year = $cur_year-15;
?>
                <div class="body gallary-body story-body">
<?php if(!empty($content['company_story'])): ?>
                <?php $__currentLoopData = $content['company_story']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $year => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php $__currentLoopData = $val; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $month => $val2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php $__currentLoopData = $val2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val3): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="row gallary-line story-line">
                        <div class="col-lg-5 image-line">
                           <select name='years[]' required>
                            <?php for($i = $cur_year; $i >= $start_year; $i--): ?>
                                <?php if($i == $year): ?>
                                    <option value="<?php echo e($i); ?>" selected="true"><?php echo e($i); ?></option>
                                <?php else: ?>
                                    <option value="<?php echo e($i); ?>"><?php echo e($i); ?></option>
                                <?php endif; ?>
                            <?php endfor; ?>
                            </select>&nbsp;年
                            &nbsp;<select name='months[]' required>
                            <?php for($j = 1; $j <= 12; $j++): ?>
                                <?php if($j == $month): ?>
                                <option value="<?php echo e($j); ?>" selected="true"><?php echo e($j); ?></option>
                                <?php else: ?>
                                <option value="<?php echo e($j); ?>"><?php echo e($j); ?></option>
                                <?php endif; ?>
                            <?php endfor; ?>
                            </select>&nbsp;月
                            内容：<textarea name="intros[]" rows="2" style="width:300px;" required/><?php echo e($val3); ?></textarea>
                        </div>
                        <div class="col-lg-2">
                            <div class="col-lg-6 add-next-line">
                                <span class="glyphicon glyphicon-plus"></span>
                            </div>
                            <div class="col-lg-6 delete-current-line">
                                <span class="glyphicon glyphicon-minus"></span>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
                </div>
            </div>

            <div class="card">
                <div class="header bg-red">
                    <span class="red-star">&#9733;</span>
                    封面图片
                </div>
                <div class="body gallary-body">
                    <div class="row gallary-line">
                        <div class="col-lg-5 image-line">
                            <input type="file" name="cover_image" class="form-control"/>
<?php echo e($content['cover_image_link']); ?>

                        </div>
                    </div>
                    <div class="form-group form-float" style="padding-bottom:20px">
                        <div class="form-line">
                            <input type="text" class="form-control" name="cover_image_intro" required value="<?php echo e($content['cover_image_intro']); ?>">
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>
                                封面简介
                            </label>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="card">
                <div class="body">
                    
                    <a href="<?php echo e(route('admin.companyinfo.index')); ?>" class="btn btn-danger btn-lg m-t-15 waves-effect">
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
<script src="https://cdn.tiny.cloud/1/yk6vfkrytvy0zzqlj2ev5tp5vr6nwk4cgco1yah7y6gr98qi/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).on("click", ".add-next-line", function() {
        let gallaryLines = $(".story-line");
        var yearHtml = monthHtml = '';
        var cur_year = <?php echo e($cur_year); ?>;
        var start_year = <?php echo e($start_year); ?>;
        for(i = cur_year; i >= start_year; i--) {
            yearHtml += '<option value="'+i+'">'+i+'</option>';
        }
        for(j = 1; j <= 12; j++) {
            monthHtml += '<option value="'+j+'">'+j+'</option>';
        }
        $(".story-body").append(`<div class="row gallary-line story-line">
                    <div class="col-lg-5 image-line">
                        <select name='years[]' required>` + yearHtml +
                        `</select>&nbsp;年

                        &nbsp;<select name='months[]' required>` + monthHtml +
                        `</select>&nbsp;月
                        内容：<textarea name="intros[]" rows="2" style="width:300px;" required /></textarea>
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
    });
    $(document).on("click", ".delete-current-line", function() {
        let gallaryLines = $(".story-line");
        if (gallaryLines.length > 1) {
            $(this).parent().parent().remove();
        }
    });

</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.layouts.app2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
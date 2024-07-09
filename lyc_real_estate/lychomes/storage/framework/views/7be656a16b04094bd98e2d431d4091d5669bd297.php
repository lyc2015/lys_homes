<?php $__env->startSection('title', "会社概要" ); ?>

<?php $__env->startPush('styles'); ?>


<?php $__env->stopPush(); ?>


<?php $__env->startSection('content'); ?>

<div class="block-header"></div>

<div class="row clearfix">

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header bg-red">
                <h2>会社概要(事業案内)</h2>
            </div>
            <div class="body">
                <input type="hidden" name="status" class="form-control" value="1" required>
                <div class="form-group form-float">
                    <div class="form-line">
                        <input type="text" name="title" class="form-control" value="<?php echo e($content['title']); ?>" disabled>
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>    
                            标题
                        </label>
                    </div>
                </div>
                <div class="form-group form-float">
                    <div class="form-line">
                        <input type="text" name="title_en" class="form-control" value="<?php echo e($content['title_en']); ?>" disabled>
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
                        <textarea class="form-control" name="middle_title" rows="3" readonly><?php echo e($content['middle_title']); ?></textarea>
                    </div>
                </div>

                <div class="form-group form-float">
                    <div class="form-line">
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>    
                            中间图片
                        </label>
<br>
<br>
                        <input type="file" name="middle_image" class="form-control" value="" disabled>
<?php echo e($content['middle_image_link']); ?>

                    </div>
                </div>

                <div class="form-group form-float">
                    <label class="form-label">
                        <span class="red-star">&#9733;</span>
                        中间右侧标题
                    </label>
                    <div class="form-line">
                        <textarea class="form-control" name="middle_right_title" rows="3" readonly><?php echo e($content['middle_right_title']); ?></textarea>
                    </div>
                </div>
                <div class="form-group form-float">
                    <label class="form-label">
                        <span class="red-star">&#9733;</span>
                        中间右侧内容
                    </label>
                    <div class="form-line">
                        <textarea class="form-control" name="middle_right_content" rows="3" readonly><?php echo e($content['middle_right_content']); ?></textarea>
                    </div>
                </div>

                <div class="form-group form-float">
                    <label class="form-label">
                        <span class="red-star">&#9733;</span>
                        中间右侧底部标题
                    </label>
                    <div class="form-line">
                        <textarea class="form-control" name="middle_right_bottom_title" rows="3" readonly><?php echo e($content['middle_right_bottom_title']); ?></textarea>
                    </div>
                </div>
                <div class="form-group form-float">
                    <label class="form-label">
                        <span class="red-star">&#9733;</span>
                        中间右侧底部内容
                    </label>
                    <div class="form-line">
                        <textarea class="form-control" name="middle_right_bottom_content" rows="3" readonly><?php echo e($content['middle_right_bottom_content']); ?></textarea>
                    </div>
                </div>
           </div>
        </div>
        <div class="card">
            <div class="header bg-red">
                <span class="red-star">&#9733;</span>
                底部图文
            </div>
            <?php $__currentLoopData = $content['bottoms']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $bottom): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div style = "padding:10px;display:block;border:5px solid #DDD">
                <div class="form-group form-float">
                    <label class="form-label">
                        <span class="red-star">&#9733;</span>    
                        底部图片<?php echo e($key+1); ?>

                    </label>
                    <div class="form-line">
                        <input type="file" name="bottom_images[]" class="form-control" value="" disabled />
<?php echo e($bottom['bottom_image_link']); ?>

                    </div>
                </div>

                <div class="form-group form-float">
                    <label class="form-label">
                        <span class="red-star">&#9733;</span>    
                        底部图片简介<?php echo e($key+1); ?>

                    </label>
                    <div class="form-line">
                        <input type="text" name="bottom_titles[]" class="form-control" value="<?php echo e($bottom['bottom_title']); ?>" disabled/>
                    </div>
                </div>

                <div class="form-group form-float">
                    <label class="form-label">
                        <span class="red-star">&#9733;</span>
                        底部内容<?php echo e($key+1); ?>

                    </label>
                    <div class="form-line">
                        <textarea class="form-control" name="bottom_contents[]" rows="6" readonly><?php echo e($bottom['bottom_content']); ?></textarea>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="card">
            <div class="header bg-red">
                <span class="red-star">&#9733;</span>
                封面图片
            </div>
            <div class="body gallary-body">
                <div class="row gallary-line">
                    <div class="col-lg-5 image-line">
                        <input type="file" name="cover_image" class="form-control" disabled/>
<?php echo e($content['cover_image_link']); ?>

                    </div>
                </div>
                <div class="form-group form-float" style="padding-bottom:20px">
                    <div class="form-line">
                        <input type="text" class="form-control" name="cover_image_intro" value="<?php echo e($content['cover_image_intro']); ?>" disabled>
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>
                            封面简介
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="body">
                <a href="<?php echo e(route('admin.companyinfo.index')); ?>" class="btn btn-danger btn-lg waves-effect">
                    <i class="material-icons left">arrow_back</i>
                    <span>BACK</span>
                </a>
                <a href="<?php echo e(route('admin.business.edit',$companyinfo->id)); ?>" class="btn btn-danger btn-lg waves-effect">
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
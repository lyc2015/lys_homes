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
    <form action="<?php echo e(route('admin.business.store')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header bg-red">
                    <h2>会社概要(企業理念正文)</h2>
                </div>
                <div class="body">
                    <input type="hidden" name="status" class="form-control" value="1" required>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="title" class="form-control" value="" required>
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>    
                                标题
                            </label>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="title_en" class="form-control" value="" required>
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
                            <textarea class="form-control" name="middle_title" rows="3" required></textarea>
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
                            <input type="file" name="middle_image" class="form-control" value="" required>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>
                            中间右侧标题
                        </label>
                        <div class="form-line">
                            <textarea class="form-control" name="middle_right_title" rows="3" required></textarea>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>
                            中间右侧内容
                        </label>
                        <div class="form-line">
                            <textarea class="form-control" name="middle_right_content" rows="3" required></textarea>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>
                            中间右侧底部标题
                        </label>
                        <div class="form-line">
                            <textarea class="form-control" name="middle_right_bottom_title" rows="3" required></textarea>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>
                            中间右侧底部内容
                        </label>
                        <div class="form-line">
                            <textarea class="form-control" name="middle_right_bottom_content" rows="3" required></textarea>
                        </div>
                    </div>
               </div>
            </div>
            <div class="card">
                <div class="header bg-red">
                    <span class="red-star">&#9733;</span>
                    底部图文
                </div>
                <div style = "padding:10px;display:block;border:5px solid #DDD">
                    <div class="form-group form-float">
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>    
                            底部图片1
                        </label>
                        <div class="form-line">
                            <input type="file" name="bottom_images[]" class="form-control" value="" required />
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>    
                            底部图片简介1
                        </label>
                        <div class="form-line">
                            <input type="text" name="bottom_titles[]" class="form-control" value="" required />
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>
                            底部内容1
                        </label>
                        <div class="form-line">
                            <textarea class="form-control" name="bottom_contents[]" rows="6" required></textarea>
                        </div>
                    </div>
                </div>
                <div style = "padding:10px;display:block;border:5px solid #DDD">
                    <div class="form-group form-float">
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>    
                            底部图片2
                        </label>
                        <div class="form-line">
                            <input type="file" name="bottom_images[]" class="form-control" value="" required />
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>    
                            底部图片简介2
                        </label>
                        <div class="form-line">
                            <input type="text" name="bottom_titles[]" class="form-control" value="" required />
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>
                            底部内容2
                        </label>
                        <div class="form-line">
                            <textarea class="form-control" name="bottom_contents[]" rows="6" required></textarea>
                        </div>
                    </div>
                </div>
                <div style = "padding:10px;display:block;border:5px solid #DDD">
                    <div class="form-group form-float">
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>    
                            底部图片3
                        </label>
                        <div class="form-line">
                            <input type="file" name="bottom_images[]" class="form-control" value="" required />
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>    
                            底部图片简介3
                        </label>
                        <div class="form-line">
                            <input type="text" name="bottom_titles[]" class="form-control" value="" required />
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>
                            底部内容3
                        </label>
                        <div class="form-line">
                            <textarea class="form-control" name="bottom_contents[]" rows="6" required></textarea>
                        </div>
                    </div>
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
                            <input type="file" name="cover_image" class="form-control" required />
                        </div>
                    </div>
                    <div class="form-group form-float" style="padding-bottom:20px">
                        <div class="form-line">
                            <input type="text" class="form-control" name="cover_image_intro" required>
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>
                                封面简介
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            
            <a href="<?php echo e(route('admin.companyinfo.index')); ?>" class="btn btn-danger btn-lg m-t-15 waves-effect">
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
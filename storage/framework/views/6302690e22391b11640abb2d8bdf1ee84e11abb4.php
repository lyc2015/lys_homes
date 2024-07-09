<?php $__env->startSection('title', "会社概要" ); ?>

<?php $__env->startPush('styles'); ?>


<?php $__env->stopPush(); ?>


<?php $__env->startSection('content'); ?>

<div class="block-header"></div>

<div class="row clearfix">

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header bg-red">
                <h2>会社概要(会社概要)</h2>
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
                    <div class="form-label">
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>    
                            会社名
                        </label>
                    </div>
                    <div class="form-line">
                        <textarea class="form-control" name="company_name" rows="3" readonly><?php echo e($content['company_name']); ?></textarea>
                    </div>
                </div>
                <div class="form-group form-float">
                    <label class="form-label">
                        <span class="red-star">&#9733;</span>
                        本社所在地
                    </label>
                    <div class="form-line">
                        <textarea class="form-control" name="company_adress" rows="3" readonly><?php echo e($content['company_adress']); ?></textarea>
                    </div>
                </div>

                <div class="form-group form-float">
                    <div class="form-line">
                        <input type="text" name="legal_person_code" class="form-control" value="<?php echo e($content['legal_person_code']); ?>" disabled>
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>    
                            法人番号
                        </label>
                    </div>
                </div>
                <div class="form-group form-float">
                    <div class="form-line">
                        <input type="text" name="login_code" class="form-control" value="<?php echo e($content['login_code']); ?>" disabled>
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>    
                            適格請求書発行事業者登録番号
                        </label>
                    </div>
                </div>
                <div class="form-group form-float">
                    <div class="form-line">
                        <input type="text" name="tel" class="form-control" value="<?php echo e($content['tel']); ?>" disabled>
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>    
                            電話番号 
                        </label>
                    </div>
                </div>

                <div class="form-group form-float">
                    <div class="form-line">
                        <input type="text" name="register_capital" class="form-control" value="<?php echo e($content['register_capital']); ?>" disabled>
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>    
                            資本金
                        </label>
                    </div>
                </div>
                <div class="form-group form-float">
                    <div class="form-line">
                        <input type="text" name="establish_time" class="form-control" value="<?php echo e($content['establish_time']); ?>" disabled>
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>    
                            創立
                        </label>
                    </div>
                </div>
                <div class="form-group form-float">
                    <div class="form-line">
                        <input type="text" name="employee_count" class="form-control" value="<?php echo e($content['employee_count']); ?>" disabled>
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>    
                            従業員数 
                        </label>
                    </div>
                </div>
                <div class="form-group form-float">
                    <div class="form-line">
                        <input type="text" name="legal_person" class="form-control" value="<?php echo e($content['legal_person']); ?>" disabled>
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>    
                            代表者
                        </label>
                    </div>
                </div>
                <div class="form-group form-float">
                    <div class="form-line">
                        <input type="text" name="license_number" class="form-control" value="<?php echo e($content['license_number']); ?>" disabled>
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>    
                            免許番号
                        </label>
                    </div>
                </div>

                <div class="form-group form-float">
                    <label class="form-label">
                        <span class="red-star">&#9733;</span>    
                        事業内容
                    </label>
                    <div class="form-line">
                        <textarea class="form-control" name="business_content" rows="5" readonly><?php echo e($content['business_content']); ?></textarea>
                    </div>
                </div>

                <div class="form-group form-float">
                    <label class="form-label">
                        <span class="red-star">&#9733;</span>
                        所属団体
                    </label>
                    <div class="form-line">
                        <textarea class="form-control" name="membership" rows="5" readonly><?php echo e($content['membership']); ?></textarea>
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
                <a href="<?php echo e(route('admin.outline.edit',$companyinfo->id)); ?>" class="btn btn-danger btn-lg waves-effect">
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
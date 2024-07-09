<?php $__env->startSection('title', "公司概要・沿革" ); ?>

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
                    <h2>公司概要・沿革(中文)</h2>
                </div>
                <div class="body">
                    <input type="hidden" name="status" class="form-control" value="1" required>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="name_zh" class="form-control" value="<?php echo e($content['name_zh']); ?>"  disabled="true">
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>    
                                名称(中文)
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="header bg-red">
                    <h2>公司概要</h2>
                </div>
                <div class="body">
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="title_outline" class="form-control" value="<?php echo e($content['title_outline']); ?>"  disabled="true">
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>    
                                标题
                            </label>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>
                            公司名称
                        </label>
                        <div class="form-line">
                            <textarea class="form-control" name="company_name" rows="3" disabled="true" ><?php echo e($content['company_name']); ?></textarea>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>
                           总公司地址
                        </label>
                        <div class="form-line">
                            <textarea class="form-control" name="company_adress" rows="3" disabled="true"><?php echo e($content['company_adress']); ?></textarea>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>
                            資本金
                        </label>
                        <div class="form-line">
                            <textarea class="form-control" name="capital" rows="3" disabled="true"><?php echo e($content['capital']); ?></textarea>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>
                            营业额
                        </label>
                        <div class="form-line">
                            <textarea class="form-control" name="revenue" rows="3" disabled="true"><?php echo e($content['revenue']); ?></textarea>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>
                            创立
                        </label>
                        <div class="form-line">
                            <textarea class="form-control" name="establish_time" rows="3" disabled="true"><?php echo e($content['establish_time']); ?></textarea>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>
                            代表人
                        </label>
                        <div class="form-line">
                            <textarea class="form-control" name="legal_person" rows="3" disabled="true"><?php echo e($content['legal_person']); ?></textarea>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>
                            主要业务
                        </label>
                        <div class="form-line">
                            <textarea class="form-control" name="business" rows="3" disabled="true"><?php echo e($content['business']); ?></textarea>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>
                            母公司
                        </label>
                        <div class="form-line">
                            <textarea class="form-control" name="mother_company" rows="3" disabled="true"><?php echo e($content['mother_company']); ?></textarea>
                        </div>
                    </div>
                   <div class="form-group form-float">
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>
                            所属团体
                        </label>
                        <div class="form-line">
                            <textarea class="form-control" name="affiliation" rows="3" disabled="true"><?php echo e($content['affiliation']); ?></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="header bg-red">
                    <span class="red-star">&#9733;</span>
                    沿革
                </div>
                <div class="body">
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="title_history" class="form-control" value="<?php echo e($content['title_history']); ?>"  disabled="true">
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>   
                                标题
                            </label>
                        </div>
                    </div>
                </div>
<?php
    $cur_year = date('Y');
    $start_year = $cur_year-15;
?>
                <div class="body gallary-body story-body">
<?php if(!empty($content['company_story'])): ?>
                <?php $__currentLoopData = $content['company_story']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $year => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="row gallary-line story-line">
                        <div class="col-lg-5 image-line">
                           <select name='years[]'  disabled="true">
                           <?php for($i = $cur_year; $i >= $start_year; $i--): ?>
                                <?php if($i == $year): ?>
                                    <option value="<?php echo e($i); ?>" selected="true"><?php echo e($i); ?></option>
                                <?php else: ?>
                                    <option value="<?php echo e($i); ?>"><?php echo e($i); ?></option>
                                <?php endif; ?>
                            <?php endfor; ?>
                            </select>&nbsp;年

                            内容：<textarea name="intros[]" rows="2" style="width:300px;"  disabled="true"/><?php echo e($val); ?></textarea>
                        </div>

                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
                </div>
            </div>

            
            <a href="<?php echo e(route('admin.companyinfozh.index')); ?>" class="btn btn-danger btn-lg m-t-15 waves-effect">
                <i class="material-icons left">arrow_back</i>
                <span>BACK</span>
            </a>
            <a href="<?php echo e(route('admin.corporatezh.edit',$companyinfo->id)); ?>" class="btn btn-danger btn-lg waves-effect">
                <i class="material-icons">edit</i>
                <span>EDIT</span>
            </a>
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

    $(document).on("click", ".add-next-line", function() {
        let gallaryLines = $(".story-line");
        var yearHtml = monthHtml = '';
        var cur_year = <?php echo e($cur_year); ?>;
        var start_year = <?php echo e($start_year); ?>;
        for(i = cur_year; i >= start_year; i--) {
            yearHtml += '<option value="'+i+'">'+i+'</option>';
        }
        $(".story-body").append(`<div class="row gallary-line story-line">
                    <div class="col-lg-5 image-line">
                        <select name='years[]' required>` + yearHtml +
                        `</select>&nbsp;年
                        内容：<textarea name="intros[]" rows="2" style="width:300px;" required/></textarea>
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
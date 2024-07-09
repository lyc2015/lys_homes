<?php $__env->startSection('title', 'Show Job'); ?>

<?php $__env->startPush('styles'); ?>


<?php $__env->stopPush(); ?>


<?php $__env->startSection('content'); ?>

<div class="block-header"></div>

<div class="row clearfix">

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header bg-red">
                <h2>新卒採用</h2>
            </div>
            <div class="body">
                <input type="hidden" name="status" class="form-control" value="1" required>
                <div class="form-group form-float">
                    <div class="form-line">
                        <input type="text" name="type" class="form-control" value="<?php echo e($newgraduate->type); ?>"  disabled="true">
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>    
                            社員種別
                        </label>
                    </div>
                </div>
                <div class="form-group form-float">
                    <label class="form-label">
                        <span class="red-star">&#9733;</span>    
                        初任給
                    </label>
                    <div class="form-line">
                        <textarea name="start_salary" class="form-control"  disabled="true"><?php echo e($newgraduate->start_salary); ?></textarea>
                    </div>
                </div>

                <div class="form-group form-float">
                    <label class="form-label">
                        <span class="red-star">&#9733;</span>
                        試雇期間
                    </label>
                    <div class="form-line">
                        <textarea class="form-control" name="trial_period"  disabled="true"><?php echo e($newgraduate->trial_period); ?></textarea>
                    </div>
                </div>

                <div class="form-group form-float">
                    <label class="form-label">
                        <span class="red-star">&#9733;</span>
                       諸手当
                    </label>
                    <div class="form-line">
                        <textarea class="form-control" name="hands_on"  disabled="true"><?php echo e($newgraduate->hands_on); ?></textarea>
                    </div>
                </div>
                <div class="form-group form-float">
                    <label class="form-label">
                        <span class="red-star">&#9733;</span>
                        昇給
                    </label>
                    <div class="form-line">
                        <textarea class="form-control" name="salary_incr" required><?php echo e($newgraduate->salary_incr); ?></textarea>
                    </div>
                </div>
                <div class="form-group form-float">
                    <label class="form-label">
                        <span class="red-star">&#9733;</span>
                        賞与
                    </label>
                    <div class="form-line">
                        <textarea class="form-control" name="bonus"  disabled="true"><?php echo e($newgraduate->bonus); ?></textarea>
                    </div>
                </div>
                <div class="form-group form-float">
                    <label class="form-label">
                        <span class="red-star">&#9733;</span>
                       勤務地
                    </label>
                    <div class="form-line">
                        <textarea class="form-control" name="work_place"  disabled="true"><?php echo e($newgraduate->work_place); ?></textarea>
                    </div>
                </div>

                <div class="form-group form-float">
                    <label class="form-label">
                        <span class="red-star">&#9733;</span>
                       勤務時間 
                    </label>
                    <div class="form-line">
                        <textarea class="form-control" name="work_time"  disabled="true"><?php echo e($newgraduate->work_time); ?></textarea>
                    </div>
                </div>
                <div class="form-group form-float">
                    <label class="form-label">
                        <span class="red-star">&#9733;</span>
                       休日休暇 
                    </label>
                    <div class="form-line">
                        <textarea class="form-control" name="rest_time"  disabled="true"><?php echo e($newgraduate->rest_time); ?></textarea>
                    </div>
                </div>
                <div class="form-group form-float">
                    <label class="form-label">
                        <span class="red-star">&#9733;</span>
                        福利厚生
                    </label>
                    <div class="form-line">
                        <textarea class="form-control" name="welfare"  disabled="true"><?php echo e($newgraduate->welfare); ?></textarea>
                    </div>
                </div>
                <div class="form-group form-float">
                    <label class="form-label">
                        <span class="red-star">&#9733;</span>
                        教育制度
                    </label>
                    <div class="form-line">
                        <textarea class="form-control" name="training_system"  disabled="true"><?php echo e($newgraduate->training_system); ?></textarea>
                    </div>
                </div>

                <input type="hidden" class="form-control" name="show_rank" step=1 value="1" required>
            </div>
        </div>

        <div class="card">
            <div class="body">
                <a href="<?php echo e(route('admin.newgraduate.index')); ?>" class="btn btn-danger btn-lg waves-effect">
                    <i class="material-icons left">arrow_back</i>
                    <span>BACK</span>
                </a>
                <a href="<?php echo e(route('admin.newgraduate.edit',$newgraduate->id)); ?>" class="btn btn-danger btn-lg waves-effect">
                    <i class="material-icons">edit</i>
                    <span>EDIT</span>
                </a>
            </div>
        </div>

    </div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
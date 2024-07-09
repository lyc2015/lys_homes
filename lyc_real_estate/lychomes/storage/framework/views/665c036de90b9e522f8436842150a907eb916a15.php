<?php $__env->startSection('title', 'Show Property'); ?>

<?php $__env->startPush('styles'); ?>


<?php $__env->stopPush(); ?>


<?php $__env->startSection('content'); ?>

<div class="block-header"></div>

<div class="row clearfix">

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">

            <div class="header bg-red">
                <h2><?php echo e($property->purpose == "rent" ? "賃貸物件" : "販売物件"); ?></h2>
            </div>

            <div class="header">
                <h2>
                    <?php echo e($property->title); ?>

                    <br>
                    <small>Posted By <strong><?php echo e($property->user->name); ?></strong> on <?php echo e($property->created_at->toFormattedDateString()); ?></small>
                </h2>
            </div>

            <div class="header">
                <ul class="list-group">
                    <li class="list-group-item">
                        <strong><?php echo e($property->purpose == "rent" ? "賃貸価格" : "販売価格"); ?> : </strong>
                        <span class="left"> &dollar;;<?php echo e($property->price); ?></span>
                    </li>
                    <li class="list-group-item">
                        <strong>所在地 : </strong>
                        <span class="left"><?php echo e($property->address); ?></span>
                    </li>
                    <li class="list-group-item">
                        <strong>交通 : </strong>
                        <span class="left"><?php echo e($property->nearby); ?></span>
                    </li>
                    <li class="list-group-item">
                        <strong>構造・階数 : </strong>
                        <span class="left"><?php echo e($property->structure); ?></span>
                    </li>
                    <li class="list-group-item">
                        <strong>専有面積 : </strong>
                        <span class="left"><?php echo e($property->master_area); ?></span>
                    </li>
                    <li class="list-group-item">
                        <strong>バルコニー面積 : </strong>
                        <span class="left"><?php echo e($property->balconies_area); ?></span>
                    </li>
                    <li class="list-group-item">
                        <strong>向き : </strong>
                        <span class="left"><?php echo e($property->direction); ?></span>
                    </li>
                    <li class="list-group-item">
                        <strong>間取り : </strong>
                        <span class="left"><?php echo e($property->house_layout); ?></span>
                    </li>
                    <li class="list-group-item">
                        <strong>築年月 : </strong>
                        <span class="left"><?php echo e($property->completion_time); ?></span>
                    </li>

                    <?php if($property->purpose == 'rent'): ?>
                    <li class="list-group-item">
                        <strong>敷金 : </strong>
                        <span class="left"><?php echo e($property->deposit); ?></span>
                    </li>
                    <li class="list-group-item">
                        <strong>礼金 : </strong>
                        <span class="left"><?php echo e($property->key_money); ?></span>
                    </li>
                    <?php endif; ?>

                    <li class="list-group-item">
                        <strong>総戸数 : </strong>
                        <span class="left"><?php echo e($property->household); ?></span>
                    </li>

                    <?php if($property->purpose == 'rent'): ?>
                        <li class="list-group-item">
                            <strong>入居 : </strong>
                            <span class="left"><?php echo e($property->moving_into); ?></span>
                        </li>
                    <?php else: ?>
                        <li class="list-group-item">
                            <strong>管理方式 : </strong>
                            <span class="left"><?php echo e($property->management_mode); ?></span>
                        </li>
                    <?php endif; ?>

                    <!-- <li class="list-group-item">
                        <strong>土地権利 : </strong>
                        <span class="left"><?php echo e($property->land_rights); ?></span>
                    </li> -->

                    <?php if($property->purpose == 'rent'): ?>
                        <li class="list-group-item">
                            <strong>取引態様 : </strong>
                            <span class="left"><?php echo e($property->trade_style); ?></span>
                        </li>
                    <?php else: ?>
                        <li class="list-group-item">
                            <strong>設備 : </strong>
                            <span class="left"><?php echo e($property->equipment); ?></span>
                        </li>
                    <?php endif; ?>

                    <?php if($property->purpose == 'rent'): ?>
                        <li class="list-group-item">
                            <strong>条件 : </strong>
                            <span class="left"><?php echo e($property->condition); ?></span>
                        </li>
                    <?php else: ?>
                        <li class="list-group-item">
                            <strong>その他設備 : </strong>
                            <span class="left"><?php echo e($property->other_equipment); ?></span>
                        </li>
                    <?php endif; ?>

                    <li class="list-group-item">
                        <strong>ペット : </strong>
                        <span class="left"><?php echo e($property->pet); ?></span>
                    </li>
                    <!-- <li class="list-group-item">
                        <strong>通信環境 : </strong>
                        <span class="left"><?php echo e($property->communication_environment); ?></span>
                    </li> -->

                    <?php if($property->purpose == 'rent'): ?>
                        <li class="list-group-item">
                            <strong>保証会社 : </strong>
                            <span class="left"><?php echo e($property->guarantee_company); ?></span>
                        </li>
                    <?php else: ?>
                        <li class="list-group-item">
                            <strong>共用施設 : </strong>
                            <span class="left"><?php echo e($property->common_equipment); ?></span>
                        </li>
                    <?php endif; ?>

                    <?php if($property->purpose == 'rent'): ?>
                        <li class="list-group-item">
                            <strong>更新年月日 : </strong>
                            <span class="left"><?php echo e($property->update_year_month_day); ?></span>
                        </li>
                    <?php else: ?>
                        <li class="list-group-item">
                            <strong>管理費 : </strong>
                            <span class="left"><?php echo e($property->monthly_management_price); ?></span>
                        </li>
                    <?php endif; ?>

                    <!-- <li class="list-group-item">
                        <strong>修繕積立金 : </strong>
                        <span class="left"><?php echo e($property->monthly_maintenance_price); ?></span>
                    </li> -->

                    <?php if($property->purpose == 'rent'): ?>
                        <li class="list-group-item">
                            <strong>備考 : </strong>
                            <span class="left"><?php echo e($property->remark); ?></span>
                        </li>
                    <?php else: ?>
                        <li class="list-group-item">
                            <strong>その他月次費用 : </strong>
                            <span class="left"><?php echo e($property->monthly_others_price); ?></span>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>

        </div>

        <?php if(!$property->gallery->isEmpty()): ?>
        <div class="card">
            <div class="header bg-red">
                <h2>GALLERY IMAGE</h2>
            </div>
            <div class="body">
                <div class="row">
                    <?php $__currentLoopData = $property->gallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-3" style="height:200px">
                        <img class="img-responsive" src="<?php echo e(Storage::url('property/gallery/'.$gallery->name)); ?>" alt="<?php echo e($property->title); ?>" style="width:auto;height:auto;max-width:100%;max-height:100%">
                        <div class="card-content">
                            <?php echo e($gallery->description); ?>

                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <div class="card">
            <div class="body">
                <a href="<?php echo e(route('admin.'.$property->purpose)); ?>" class="btn btn-danger btn-lg waves-effect">
                    <i class="material-icons left">arrow_back</i>
                    <span>BACK</span>
                </a>
                <a href="<?php echo e(route('admin.properties.edit',$property->id)); ?>" class="btn btn-danger btn-lg waves-effect">
                    <i class="material-icons">edit</i>
                    <span>EDIT</span>
                </a>
            </div>
        </div>

    </div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.app2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
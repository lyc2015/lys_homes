<?php $__env->startSection('title', 'Properties'); ?>

<?php $__env->startPush('styles'); ?>

<!-- JQuery DataTable Css -->
<link rel="stylesheet"
    href="<?php echo e(asset('backend/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')); ?>">

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

<div class="block-header">
    <a href="<?php echo e(route('admin.properties.create', ['purpose' => $purpose,])); ?>"
        class="waves-effect waves-light btn right m-b-15 addbtn">
        <i class="material-icons left">add</i>
        <span>CREATE </span>
    </a>
</div>

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header bg-red">
                <h2><?php echo e($purpose == "rent" ? "賃貸物件" : "販売物件"); ?></h2>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                            <tr>
                                <th width="50">SL.</th>
                                <th>物件名</th>
                                <th width="300">交通</th>
                                <th width="150"><?php echo e($purpose == "rent" ? "賃貸価格" : "販売価格"); ?></th>
                                <th width="150">Updated Time</th>
                                <th width="150">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $__currentLoopData = $properties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($key+1); ?></td>
                                <td>
                                    <span title="<?php echo e($property->title); ?>">
                                        <?php echo e(str_limit($property->title)); ?>

                                    </span>
                                </td>
                                <td>
                                    <span title="<?php echo e($property->nearby); ?>">
                                        <?php echo e(str_limit($property->nearby)); ?>

                                    </span>
                                <td>
                                    <?php echo e($property->price); ?> 万円
                                </td>
                                <td>
                                    <?php echo e($property->updated_at->format('Y-m-d H:i:s')); ?>

                                </td>

                                <td class="text-center">
                                    <a href="<?php echo e(route('admin.properties.show',$property->id)); ?>"
                                        class="btn btn-success btn-sm waves-effect">
                                        <i class="material-icons">visibility</i>
                                    </a>
                                    <a href="<?php echo e(route('admin.properties.edit',$property->id)); ?>"
                                        class="btn btn-info btn-sm waves-effect">
                                        <i class="material-icons">edit</i>
                                    </a>
                                    <button type="button" class="btn btn-danger btn-sm waves-effect"
                                        onclick="deletePost(<?php echo e($property->id); ?>)">
                                        <i class="material-icons">delete</i>
                                    </button>
                                    <form action="<?php echo e(route('admin.properties.destroy',$property->id)); ?>" method="POST"
                                        id="del-post-<?php echo e($property->id); ?>" style="display:none;">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                    </form>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>


<?php $__env->startPush('scripts'); ?>

<!-- Jquery DataTable Plugin Js -->
<script src="<?php echo e(asset('backend/plugins/jquery-datatable/jquery.dataTables.js')); ?>"></script>
<script src="<?php echo e(asset('backend/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')); ?>"></script>
<script src="<?php echo e(asset('backend/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js')); ?>"></script>
<script src="<?php echo e(asset('backend/plugins/jquery-datatable/extensions/export/buttons.flash.min.js')); ?>"></script>
<script src="<?php echo e(asset('backend/plugins/jquery-datatable/extensions/export/jszip.min.js')); ?>"></script>
<script src="<?php echo e(asset('backend/plugins/jquery-datatable/extensions/export/pdfmake.min.js')); ?>"></script>
<script src="<?php echo e(asset('backend/plugins/jquery-datatable/extensions/export/vfs_fonts.js')); ?>"></script>
<script src="<?php echo e(asset('backend/plugins/jquery-datatable/extensions/export/buttons.html5.min.js')); ?>"></script>
<script src="<?php echo e(asset('backend/plugins/jquery-datatable/extensions/export/buttons.print.min.js')); ?>"></script>

<!-- Custom Js -->
<script src="<?php echo e(asset('backend/js/pages/tables/jquery-datatable.js')); ?>"></script>

<script>
function deletePost(id) {

    swal({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.value) {
            document.getElementById('del-post-' + id).submit();
            swal(
                'Deleted!',
                'Post has been deleted.',
                'success'
            )
        }
    })
}
</script>


<?php $__env->stopPush(); ?>
<?php echo $__env->make('backend.layouts.app2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
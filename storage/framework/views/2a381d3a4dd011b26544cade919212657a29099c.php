<?php $__env->startSection('title', "お問合せ・連絡先"); ?>

<?php $__env->startPush('styles'); ?>

<!-- JQuery DataTable Css -->
<link rel="stylesheet"
    href="<?php echo e(asset('backend/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')); ?>">

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

<div class="block-header">
    <a href="<?php echo e(route('admin.contact.create')); ?>"
        class="waves-effect waves-light btn right m-b-15 addbtn">
        <i class="material-icons left">add</i>
        <span>CREATE </span>
    </a>
</div>

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header bg-red">
                <h2>お問合せ・連絡先</h2>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                            <tr>
                                <th width="50">NO.</th>
                                <th>名称</th>
                                <th width="150">Updated Time</th>
                                <th width="150">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($contact->id); ?></td>
                                <td>
                                    <span title="<?php echo e($contact->name); ?>">
                                        <?php echo e($contact->name); ?>

                                    </span>
                                </td>
                                <td>
                                    <?php echo e($contact->updated_at->format('Y-m-d H:i:s')); ?>

                                </td>

                                <td class="text-center">
                                    <a href="<?php echo e(route('admin.contact.show',$contact->id)); ?>"
                                        class="btn btn-success btn-sm waves-effect">
                                        <i class="material-icons">visibility</i>
                                    </a>
                                    <a href="<?php echo e(route('admin.contact.edit',$contact->id)); ?>"
                                        class="btn btn-info btn-sm waves-effect">
                                        <i class="material-icons">edit</i>
                                    </a>
                                    <form action="<?php echo e(route('admin.contact.destroy',$contact->id)); ?>" method="POST"
                                        id="del-post-<?php echo e($contact->id); ?>" style="display:none;">
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
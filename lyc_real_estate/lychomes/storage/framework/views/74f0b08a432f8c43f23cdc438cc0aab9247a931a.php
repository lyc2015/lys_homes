<?php $__env->startSection('title', 'Edit Article'); ?>

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
    <form action="<?php echo e(route('admin.article.update',$article->id)); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        
        <div class="col-lg-8 col-md-4 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header bg-red">
                    <h2>Edit 会社ニュース</h2>
                </div>
                <div class="body">
                    <input type="hidden" name="id" class="form-control" value="<?php echo e($article->id); ?>">

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="cover_title" class="form-control" value="<?php echo e($article->cover_title); ?>" required>
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>    
                                封面标题
                            </label>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="cover_title_en" class="form-control" value="<?php echo e($article->cover_title_en); ?>" required>
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>    
                                封面标题(英文)
                            </label>
                        </div>
                    </div>

<!--
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="hidden" class="form-control" name="cover_image" value="<?php echo e($article->cover_image); ?>" required>
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>
                                cover_image
                            </label>
                        </div>
                    </div>
-->
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" class="form-control" name="cover_intro" value="<?php echo e($article->cover_intro); ?>">
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>
                                封面简介
                            </label>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" class="form-control" name="title" value="<?php echo e($article->title); ?>">
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>
正文标题
                            </label>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" class="form-control" name="title_en" value="<?php echo e($article->title_en); ?>">
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>
正文标题(英文)
                            </label>
                        </div>
                    </div>
<!--
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="hidden" class="form-control" name="show_rank" step=1 value="<?php echo e($article->show_rank); ?>">
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>
                                show_rank
                            </label>
                        </div>
                    </div>
-->
                    <div class="form-group form-float">
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>
                            内容
                        </label>
                        <div class="form-line">
                            <textarea id ="mytextarea" class="form-control" name="content" rows="10"><?php echo e($article->content); ?></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="header bg-red">
                    <h2>封面图片</h2>
                </div>
                <div class="body">
                    <div class="gallery-box" id="gallerybox">
                        <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="gallery-image-edit" id="gallery-<?php echo e($image->id); ?>">
    <!--                        <button type="button" data-id="<?php echo e($image->id); ?>" class="btn btn-danger btn-sm"><i class="material-icons">delete_forever</i></button>-->
                            <img class="img-responsive" src="/<?php echo e($image->file_link); ?>" alt="<?php echo e($image->file_name); ?>">
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <hr>
                    <div class="body gallary-body">
                        <div class="row gallary-line">
                            <div class="col-lg-5 image-line">
                                <input type="file" name="images[]" class="form-control" onchange="fileInputChange(event.target, 'uniqId0')"/>
                            </div>
<!--
                            <div class="col-lg-5 text-line">
                                <input type="text" name="discriptions[]" class="form-control" required />
                            </div>
                            <div class="col-lg-2">
                                <div class="col-lg-6 add-next-line">
                                    <span class="glyphicon glyphicon-plus"></span>
                                </div>
                                <div class="col-lg-6 delete-current-line"  data-id="gallery-perview-uniqId0">
                                    <span class="glyphicon glyphicon-minus"></span>
                                </div>
                            </div>
-->
                        </div>
                    </div>
 
                </div>
            </div>

        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="card">
                <div class="body">
                    
                    <a href="<?php echo e(route('admin.article.index')); ?>" class="btn btn-danger btn-lg m-t-15 waves-effect">
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

    function genID(length){
       return Number(Math.random().toString().substr(3,length) + Date.now()).toString(36);
    }

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).on("click", ".add-next-line", function() {
        let gallaryLines = $(".gallary-line");
        if (gallaryLines.length < 10) {
            uniqId = genID();
            $(".gallary-body").append(`<div class="row gallary-line">
                        <div class="col-lg-5 image-line">
                            <input type="file" name="images[]" class="form-control" required  onchange="fileInputChange(event.target, '${uniqId}')"/>
                        </div>
                        <div class="col-lg-5 text-line">
                            <input type="text" name="discriptions[]" class="form-control" required />
                        </div>
                        <div class="col-lg-2">
                            <div class="col-lg-6 add-next-line">
                                <span class="glyphicon glyphicon-plus"></span>
                            </div>
                            <div class="col-lg-6 delete-current-line" data-id="gallery-perview-${uniqId}">
                                <span class="glyphicon glyphicon-minus"></span>
                            </div>
                        </div>
                    </div>`);
        }
    });
    $(document).on("click", ".delete-current-line", function() {
        let gallaryLines = $(".gallary-line");
        if (gallaryLines.length > 1) {
            $(this).parent().parent().remove();
        }
        var id = $(this).attr('data-id');
        $('#'+id).remove();

    });

    // DELETE GALLERY IMAGE
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

    // Multiple images preview in browser
    var imagesPreview = function(input, placeToInsertImagePreview, uniqId) {
        $('#gallerybox').html(''); //一个图片的时候，清空
        if (input.files) {
            var filesAmount = input.files.length;

            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();

                reader.onload = function(event) {
                    $('<div class="gallery-image-edit" id="gallery-perview-' + uniqId + '"><img src="' + event.target.result + '" height="106" width="173" alt=""/></div>').appendTo(placeToInsertImagePreview);
                }

                reader.readAsDataURL(input.files[i]);
            }
        }
    };
    
    function fileInputChange(es, uniqId) {
        imagesPreview(es, 'div#gallerybox', uniqId);
    }
    
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.layouts.app2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
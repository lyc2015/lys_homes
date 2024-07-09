<?php $__env->startSection('styles'); ?>
<!-- <link href="<?php echo e(asset('frontend/css/materialize.min.css')); ?>" rel="stylesheet"> -->
<link href="<?php echo e(asset('frontend/css/styles2.css')); ?>" rel="stylesheet">
<!-- <script src="<?php echo e(asset('bootstrap-4.6.2-dist/js/bootstrap.min.js')); ?>"></script> -->
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<div id="contents" class="business">
    <div class="main">

        <div class="page_header">
            <div class="page_header_parts page_header_bg_img"></div>
            <div class="page_header_parts page_header_catch">
                <div class="inner">
                    <h2 class="page_title">
                        <span class="title-en theme_font">LOGIN</span>
                    </h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">

    <div class="row" style="margin-top:30px">
        <div class="col-sm-3">
        </div>
        <div class="col-sm-6">
            <form method="POST" action="<?php echo e(route('login')); ?>">
                <?php echo csrf_field(); ?>
                <div class="form-group" style="text-align: center;">
                    <p style="font-size:33px">LOGIN</p>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        name="email" required>
                    <?php if($errors->has('email')): ?>
                    <span class="helper-text" data-error="wrong" data-success="right">
                        <strong><?php echo e($errors->first('email')); ?></strong>
                    </span>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
                    <?php if($errors->has('password')): ?>
                    <span class="helper-text" data-error="wrong" data-success="right">
                        <strong><?php echo e($errors->first('password')); ?></strong>
                    </span>
                    <?php endif; ?>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1" name="remember">Remember Me</label>
                </div>
                <div class="form-group" style="text-align: center;">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>
    </div>
    <!-- <div class="row">
        <div class="col s12 m6 offset-m3">
            <div class="card">

                <h4 class="center text-lighten-3 uppercase p-t-30" style="color: #FE6900"><?php echo e(__('Login')); ?></h4>

                <div class="p-20">
                    <form method="POST" action="<?php echo e(route('login')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="row">
                            <div class="input-field col s12">
                                <label for="email"><?php echo e(__('E-Mail Address')); ?></label>
                                <input id="email" type="email" class="<?php echo e($errors->has('email') ? 'is-invalid' : ''); ?>"
                                    name="email" value="<?php echo e(old('email')); ?>" required autofocus>

                                <?php if($errors->has('email')): ?>
                                <span class="helper-text" data-error="wrong" data-success="right">
                                    <strong><?php echo e($errors->first('email')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <label for="password"><?php echo e(__('Password')); ?></label>
                                <input id="password" type="password"
                                    class="<?php echo e($errors->has('password') ? 'is-invalid' : ''); ?>" name="password" required>

                                <?php if($errors->has('password')): ?>
                                <span class="helper-text" data-error="wrong" data-success="right">
                                    <strong><?php echo e($errors->first('password')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <p>
                            <label>
                                <input type="checkbox" name="remember" class="filled-in"
                                    <?php echo e(old('remember') ? 'checked' : ''); ?> />
                                <span><?php echo e(__('Remember Me')); ?></span>
                            </label>
                        </p>

                        <div class="row">
                            <div class="input-field col s12">
                                <button type="submit" class="waves-effect waves-light btn"
                                    style="background-color: #FE6900">
                                    <?php echo e(__('Login')); ?>

                                </button>

                                <a class="text-lighten-3 p-l-15" href="<?php echo e(route('password.request')); ?>">
                                    <?php echo e(__('Forgot Your Password?')); ?>

                                </a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div> -->
    <br />
    <br />
    <br />
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.blank', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>

<?php if($errMessage == "Passwords does not match"): ?>
    <script>
        alert("<?php echo e($errMessage); ?>");  // display string message
    </script>
<?php endif; ?>

<section class="text-center bg-light">
      <div class="container" style="width:60%;">
        <h2 class="mb-5">Reset Password</h2>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/pwreset">
                        <?php echo e(csrf_field()); ?>


                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                                <input id="email" type="email" class="form-control" name="email" value="<?php echo e($userEmail); ?>"  autofocus = "autofocus" readonly>

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                                <input id="password" type="password" class="form-control" name="password" required>

                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('password_confirmation') ? ' has-error' : ''); ?>">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                            <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                                <?php if($errors->has('password_confirmation')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                                <button type="submit" class="btn btn-primary">
                                    Reset Password
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.auth_static_template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
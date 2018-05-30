<?php $__env->startSection('content'); ?>

<section class="text-center bg-light">
      <div class="container" style="width:60%;">
        <h2 class="mb-5">Edit profile</h2>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/editprofile">
                        <?php echo e(csrf_field()); ?>


                        <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                                <input id="name" type="name" class="form-control" name="name" value="<?php echo e(Auth::user()->name); ?>"  autofocus = "autofocus">

                                <?php if($errors->has('name')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('last_name') ? ' has-error' : ''); ?>">
                            <label for="last_name" class="col-md-4 control-label">Last Name</label>

                            <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                                <input id="last_name" type="name" class="form-control" name="last_name" value="<?php echo e(Auth::user()->last_name); ?>"  autofocus = "autofocus">

                                <?php if($errors->has('last_name')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('last_name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                                <input id="email" type="email" class="form-control" name="email" value="<?php echo e(Auth::user()->email); ?>"  autofocus = "autofocus">

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('username') ? ' has-error' : ''); ?>">
                            <label for="username" class="col-md-4 control-label">Username</label>

                            <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                                <input id="username" type="text" class="form-control" name="username" value="<?php echo e(Auth::user()->username); ?>" required autofocus>

                                <?php if($errors->has('username')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('username')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.auth_static_template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
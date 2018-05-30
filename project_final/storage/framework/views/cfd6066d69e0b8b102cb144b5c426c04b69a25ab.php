<?php $__env->startSection('content'); ?>
<div>
    <ul class="breadcrumb">
       <li><a href="project">Projects</a></li>
       <li><?php echo e($projectT[0]->proj_title); ?></li>
   </ul>
</div>
<div class="container">
<br>
	<h2 class="mb-5"><?php echo e($projectT[0]->proj_title); ?></h2>
        <h7 class="mb-5"><?php echo e($projectT[0]->proj_description); ?></h7>
<br>
<br>


	<section>
          
<br>
				<h4 class="mb-5">List of Contributors</h4>


				<?php $__currentLoopData = $projectUC; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

      				<div class="card-deck">
        				<div class="card">
            					<div class="card-header">Project Coordinator</div>
            					<div class="card-body">
            						<h5 class="card-title"><?php echo e($item[0]->username); ?></h5>
            						<p class="card-text"><?php echo e($item[0]->name); ?> <?php echo e($item[0]->last_name); ?></p>
            					</div>
        				</div>
      				</div><br>

				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


				<?php $__currentLoopData = $projectUM; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      				<div class="card-deck">
       					<div class="card">
           					<div class="card-header">Project Member</div>
            					<div class="card-body">
            						<h5 class="card-title"><?php echo e($item[0]->username); ?></h5>
            						<p class="card-text"><?php echo e($item[0]->name); ?> <?php echo e($item[0]->last_name); ?></p>
            					</div>
        				</div>
      				</div><br>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    			</div>

    </section>
</div>


        <div class="col-xl-0 mx-auto">
            <img  width="100%" height="30" src="img/bg-masthead.jpg" alt="">
    </div>

   <?php $__env->stopSection(); ?>

<?php echo $__env->make('template.static_template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>

		<!-- Project Selection -->

    <section class="testimonials text-center bg-light">
		<div class="container">
        <h2 class="mb-5">My Projects</h2>
		<div class="search-container">
			<form action="/project" method="POST" role="search" placeholder="Search Project" name="search_proj">
				<?php echo e(csrf_field()); ?>

				<input type="text" class="search" placeholder="Search Project" name="search_proj" size = "10">
				<button type="submit" class= "search"><i class="fa fa-search"></i></button>
			</form>
		</div></div>

	<div>
	<a class="btn btn-primary" href="/new_project"  style="width:auto;">Create New Project</a></div>
	</section>

<section>
		<div class="card-deck">
	<?php $__currentLoopData = $itens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div class="card">
			<div class="card-header">
			<h5 class="card-title"><?php echo e($item->proj_title); ?></h5>
			</div>
			<div class="card-body">
				<p class="card-text"><?php echo e($item->proj_description); ?></p>
			<a href="aut_thisproject.html" class="btn btn-primary">Go to Project Page</a>
			</div>
			<div class="card-footer">
				<small class="text-muted">Last updated 3 mins ago</small>
			</div>
		</div>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</div><p><br></br></p>
</section>

	</div>
</div>

<?php echo e($itens->links("pagination::bootstrap-4")); ?>



   <?php $__env->stopSection(); ?>
    

<?php echo $__env->make('template.auth_static_template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
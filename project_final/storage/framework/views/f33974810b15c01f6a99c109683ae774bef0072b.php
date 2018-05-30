<?php $__env->startSection('content'); ?>
  
		<!-- Project Selection -->

    <section class="testimonials text-center bg-light">
      <div class="container">
        <h2 class="mb-5">Projects</h2>
		<div class="search-container">
			<form action="/project" method="POST" role="search" placeholder="Search Project" name="search_proj">
				<?php echo e(csrf_field()); ?>

				<input type="text" class="search" placeholder="Search Project" name="search_proj" size = "10">
				<button type="submit" class= "search"><i class="fa fa-search"></i></button>
			</form>
		</div></div>

	<div>
	<a class="btn btn-primary" href="/new_project" style="width:auto;">Create New Project</a></div>
	</section>

<section>
	<div class="col-md-10 col-lg-8 col-xl-10 mx-auto">
		<br>

	<div class="card-deck">
	<?php $__currentLoopData = $itens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div class="card">
			<div class="card-header">
			<h5 class="card-title"><?php echo e($item->proj_title); ?><tab1> <a class="btn btn-success" href="#" onclick="document.getElementById('id04').style.display='block'" style="width:auto;">JOIN</a></h5>
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

</div>
<?php echo e($itens->links("pagination::bootstrap-4")); ?>


</div>
        <div class="col-xl-0 mx-auto">
            <img  width="100%" height="30" src="img/bg-masthead.jpg" alt="">
    </div>

   <?php $__env->stopSection(); ?>
<?php echo $__env->make('template.auth_static_template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
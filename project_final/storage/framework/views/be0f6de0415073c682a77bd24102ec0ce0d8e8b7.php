

<?php $__env->startSection('content'); ?>

      <div class="col-xl-0 mx-auto">
            <img  width="100%" height="30" src="img/bg-masthead.jpg" alt="">
    </div>

<section class="text-center bg-light">
<div class="container" align="center" style="width:80%;">
	<h2 class="mb-5">New Project</h2>
	<div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
	<form  action="/action_page3.php">
		<label for="title"><h5><b>Project Title</b></h5></label>
		<input type="text" placeholder="Enter Project Title" name="title" required><br><br>
		<label for="pdis"><h5><b>Project Description</b></h5></label><br><br>
		<textarea placeholder="Project Description" name="description" rows="10" class = "form-control"></textarea><br>

				<label for="privacy"><b>Privacy</b></label>
				<select name="privacy" class= "form-control" >
					<option value="private">Private</option>
					<option value="public" selected>Public</option>
				</select><br>

				<label for="number"><b>Max Number of Contributors</b></label>
				<input class = "form-control" type="number" name="points" min="1" max="100" step="1" value="5"><br>

			<section class="text-center bg-light">
			<h5><button type="submit" class="btn btn-lg btn-primary" style ="width:25%;">Submit</button></h5>
			<h7><input type="checkbox" checked="checked" name="takeme"> Take me to project page
			</label></h7><br></section>
		</form>
	</div></div></div>
</section>


        <div class="col-xl-0 mx-auto">
            <img  width="100%" height="30" src="img/bg-masthead.jpg" alt="">
    </div>
      <?php $__env->stopSection(); ?>
<?php echo $__env->make('template.auth_static_template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
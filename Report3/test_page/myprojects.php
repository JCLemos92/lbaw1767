<?php 
include_once('header.php');
?>

    <!-- Overlay -->
	<section class="navbar navbar-light bg-light static-top">
	<div id="myNav" class="overlay">
  		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
 		 <div class="overlay-content">
 		 <form action="/newprogect_page.php" method="post">
 		 	Project Title:<br>
  			<input type="text" name="projtitle"><br>
  			Project Description:<br>
  			<textarea name="description" rows="10" cols="50"></textarea><br>
  			Privacy Policy: 
  			<select name="privacy">
  				<option value="private">Private</option>
  				<option value="public" selected>Public</option>
			</select><br>
			Max number of Contributors:<input type="number" name="points" min="1" max="100" step="1" value="5"><br>
			<input type="submit" value="Submit">
 		 </form>
	  </div>
	</div>
	</section>
	<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Create New Project</span>
	

	<!-- Project Selection -->

    <section class="testimonials text-center bg-light">
      <div class="container">
        <h2 class="mb-5">My Projects</h2>
		<div class="search-container">
			<form action="/action_page.php">
				<input type="text" placeholder="Find a Project" name="find_proj" size = "80">
				<button type="submit"><i class="fa fa-search"></i></button>
			</form>

	</section>
	
	<section>
	<div>
		<p><br></p>
	</div>
	<div class="col-md-10 col-lg-8 col-xl-10 mx-auto">
	<div class="card-deck">
		<div class="card">
			<div class="card-header">
			<h5 class="card-title">Title of Project</h5>
			</div>
			<div class="card-body">
				<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
			<a href="#" class="btn btn-primary">Go somewhere</a>
			</div>
			<div class="card-footer">
				<small class="text-muted">Last updated 3 mins ago</small>
			</div>
		</div>
		<div class="card">
			<div class="card-header">
			<h5 class="card-title">Title of Project</h5>
			</div>
			<div class="card-body">
				<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
			<a href="#" class="btn btn-primary">Go somewhere</a>
			</div>
			<div class="card-footer">
				<small class="text-muted">Last updated 3 mins ago</small>
			</div>
		</div>
		<div class="card">
			<div class="card-header">
			<h5 class="card-title">Title of Project</h5>
			</div>
			<div class="card-body">
				<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
			<a href="#" class="btn btn-primary">Go somewhere</a>
			</div>
			<div class="card-footer">
				<small class="text-muted">Last updated 3 mins ago</small>
			</div>
		</div>
	</div></div>
    </section>


	<p><br></br></p> 

	<div class="col-md-10 col-lg-8 col-xl-10 mx-auto">
	<!-- Project Selection -->
	<section>
	<div class="card-deck">
		<div class="card">
			<div class="card-header">
			<h5 class="card-title">Title of Project</h5>
			</div>
			<div class="card-body">
				<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
			<a href="#" class="btn btn-primary">Go somewhere</a>
			</div>
			<div class="card-footer">
				<small class="text-muted">Last updated 3 mins ago</small>
			</div>
		</div>
		<div class="card">
			<div class="card-header">
			<h5 class="card-title">Title of Project</h5>
			</div>
			<div class="card-body">
				<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
			<a href="#" class="btn btn-primary">Go somewhere</a>
			</div>
			<div class="card-footer">
				<small class="text-muted">Last updated 3 mins ago</small>
			</div>
		</div>
		<div class="card">
			<div class="card-header">
			<h5 class="card-title">Title of Project</h5>
			</div>
			<div class="card-body">
				<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
			<a href="#" class="btn btn-primary">Go somewhere</a>
			</div>
			<div class="card-footer">
				<small class="text-muted">Last updated 3 mins ago</small>
			</div>
		</div>
	</div> 
    </section>
    <p><br></br></p>
    <section align="center">
    <div class="pagination" >
  		<a href="#">&laquo;</a>
  		<a href="#">1</a>
  		<a class="active" href="#">2</a>
  		<a href="#">3</a>
  		<a href="#">4</a>
  		<a href="#">5</a>
  		<a href="#">6</a>
  		<a href="#">&raquo;</a>
	</div>

    </section>
</div>




	<p><br></br></p> 
	
<?
include_once('footer.php');
?>
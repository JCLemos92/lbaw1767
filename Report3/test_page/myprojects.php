<?php 
include_once('header.php');
?>
		    <div class="col-xl-0 mx-auto">

            <img  width="100%" height="30" src="img/bg-masthead.jpg" alt="">

    </div>

	<ul class="breadcrumb">

  		<li><a href="myprojects.php">Home</a></li>

  		<li>My Projects</li>

	</ul>





	<div id="id03" class="modal" align="center">



		<form class="modal-content animate" action="/action_page3.php">

		 	<div class="imgcontainer">

		 		<span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;

		 		</span>

	    	</div>



		 	<div class="container">

		 		<label for="title"><b>Project Title</b></label>

				<input type="text" placeholder="Enter Project Title" name="title" required><br>



				<label for="pdis"><b>Project Description</b></label>

				<textarea placeholder="Project Description" name="description" rows="10" cols="50"></textarea><br>



				<label for="privacy"><b>Privacy</b></label>

				<select name="privacy">

					<option value="private">Private</option>

					<option value="public" selected>Public</option>

				</select><br>



				<label for="number"><b>Max Number of Contributors</b></label>

				<input type="number" name="points" min="1" max="100" step="1" value="5"><br>



			</div>



			<button type="submit" class="btn btn-primary">Submit</button>

			<label>

				<input type="checkbox" checked="checked" name="takeme"> Take me to project page

			</label>

		</form>

	</div>

	<div style="position: absolute; top: 11rem; left:7rem">

	<a class="btn btn-primary" href="#" onclick="document.getElementById('id03').style.display='block'" style="width:auto;">Create New Project</a>

	</div>





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

			<h5 class="card-title">Example Project</h5>

			</div>

			<div class="card-body">

				<p class="card-text">This project is an example</p>

			<a href="logged_in.php?page=thisproject" class="btn btn-primary">Try me I do something</a>

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




	<p><br></br></p> 
	
	<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <script>
	function openNav() {
    	document.getElementById("myNav").style.width = "100%";
	}

	function closeNav() {
    	document.getElementById("myNav").style.width = "0%";
	}
	</script>
	
<?
include_once('footer.php');
?>
 <?php 
include_once('header.php');

if(isset($_GET["id"]) && ($_GET["id"] != 'other')){
	if($_GET["id"] == 'test'){
		echo "woops!";
	}
	else{		
		?>
		
		<!-- Forum Page -->

    <section class="testimonials text-center bg-light" style="padding-bottom:1rem">
      <div class="container">
        <h2 class="mb-5">Forum Title</h2>
	</section>
	
	<section style="padding-bottom:0rem">
	<div>
		<p><br></p>
	</div>
	<div class="col-md-10 col-lg-8 col-xl-10 mx-auto">
	<div class="card-deck">
		<div class="card">
			<div class="card-header">
			<h5 class="card-title">User Name</h5>
			</div>
			<div class="card-body">
				<p class="card-text">Forum Post's text.</p>
			</div>
			<div class="card-footer">
				<small class="text-muted">Posted 3 mins ago</small>
			</div>
		</div>
	</div></div>
    </section>
	<section style="padding-bottom:0rem;padding-top:0.2rem">
	<div class="col-md-10 col-lg-8 col-xl-10 mx-auto">
	<div class="card-deck">
		<div class="card">
			<div class="card-header">
			<h5 class="card-title">User Name</h5>
			</div>
			<div class="card-body">
				<p class="card-text">Forum Post's text.</p>
			</div>
			<div class="card-footer">
				<small class="text-muted">Posted 3 mins ago</small>
			</div>
		</div>
	</div></div>
    </section>
	<section style="padding-bottom:0rem;padding-top:0.2rem">
	<div class="col-md-10 col-lg-8 col-xl-10 mx-auto">
	<div class="card-deck">
		<div class="card">
			<div class="card-header">
			<h5 class="card-title">User Name</h5>
			</div>
			<div class="card-body">
				<p class="card-text">Forum Post's text.</p>
			</div>
			<div class="card-footer">
				<small class="text-muted">Posted 3 mins ago</small>
			</div>
		</div>
	</div></div>
    </section>
	<section style="padding-bottom:0rem;padding-top:0.2rem">
	<div class="col-md-10 col-lg-8 col-xl-10 mx-auto">
	<div class="card-deck">
		<div class="card">
			<div class="card-header">
			<h5 class="card-title">User Name</h5>
			</div>
			<div class="card-body">
				<p class="card-text">Forum Post's text.</p>
			</div>
			<div class="card-footer">
				<small class="text-muted">Posted 3 mins ago</small>
			</div>
		</div>
	</div></div>
    </section>
	<section style="padding-bottom:0rem;padding-top:0.2rem">
	<div class="col-md-10 col-lg-8 col-xl-10 mx-auto">
	<div class="card-deck">
		<div class="card">
			<div class="card-header">
			<h5 class="card-title">User Name</h5>
			</div>
			<div class="card-body">
				<p class="card-text">Forum Post's text.</p>
			</div>
			<div class="card-footer">
				<small class="text-muted">Posted 3 mins ago</small>
			</div>
		</div>
	</div></div>
    </section>

	
	
	
	
	<section>
	<div>
		<p><br></p>
	</div>
	<div class="col-md-10 col-lg-8 col-xl-10 mx-auto">
	<div class="card-deck">
		<div class="card">
			<div class="card-header">
			<h5 class="card-title">New Message</h5>
			</div>
			<div class="card-body">
				<p class="card-text">Enter bellow new post</p>
				<textarea id="form_message" name="message" class="form-control" placeholder="Please enter your Message *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
			<a href="forums.php" class="btn btn-primary">Send</a>
			</div>
		</div>
	</div></div>
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
	}
}
elseif(!isset($_GET["id"]) || (isset($_GET["id"]) && ($_GET["id"] == 'other'))){
?>
	<!-- Forum Selection -->

    <section class="testimonials text-center bg-light" style="padding-bottom:1rem">
      <div class="container">
        <h2 class="mb-5">Project Forums</h2>
	</section>
	
	<section>
	<div>
		<p><br></p>
	</div>
	<div class="col-md-10 col-lg-8 col-xl-10 mx-auto">
	<div class="card-deck">
		<div class="card">
			<div class="card-header">
			<h5 class="card-title">Title of Forum</h5>
			</div>
			<div class="card-body">
				<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
			<a href="forums.php?id=1" class="btn btn-primary">Go somewhere</a>
			</div>
			<div class="card-footer">
				<small class="text-muted">Last updated 3 mins ago</small>
			</div>
		</div>
		<div class="card">
			<div class="card-header">
			<h5 class="card-title">Title of Forum</h5>
			</div>
			<div class="card-body">
				<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
			<a href="forums.php?id=1" class="btn btn-primary">Go somewhere</a>
			</div>
			<div class="card-footer">
				<small class="text-muted">Last updated 3 mins ago</small>
			</div>
		</div>
		<div class="card">
			<div class="card-header">
			<h5 class="card-title">Title of Forum</h5>
			</div>
			<div class="card-body">
				<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
			<a href="forums.php?id=1" class="btn btn-primary">Go somewhere</a>
			</div>
			<div class="card-footer">
				<small class="text-muted">Last updated 3 mins ago</small>
			</div>
		</div>
	</div></div>
    </section>


	<p><br></br></p> 

	<div class="col-md-10 col-lg-8 col-xl-10 mx-auto">
	<!-- Forum Selection -->
	<section>
	<div class="card-deck">
		<div class="card">
			<div class="card-header">
			<h5 class="card-title">Title of Forum</h5>
			</div>
			<div class="card-body">
				<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
			<a href="forums.php?id=1" class="btn btn-primary">Go somewhere</a>
			</div>
			<div class="card-footer">
				<small class="text-muted">Last updated 3 mins ago</small>
			</div>
		</div>
		<div class="card">
			<div class="card-header">
			<h5 class="card-title">Title of Forum</h5>
			</div>
			<div class="card-body">
				<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
			<a href="forums.php?id=1" class="btn btn-primary">Go somewhere</a>
			</div>
			<div class="card-footer">
				<small class="text-muted">Last updated 3 mins ago</small>
			</div>
		</div>
		<div class="card">
			<div class="card-header">
			<h5 class="card-title">Title of Forum</h5>
			</div>
			<div class="card-body">
				<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
			<a href="forums.php?id=1" class="btn btn-primary">Go somewhere</a>
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
	
	<a href="#" class="btn btn-primary" style="position:absolute;bottom:1em;right:1em">New Forum</a>

    </section>
</div>




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
}
include_once('footer.php');
?>
@extends('template.auth_static_template')

@section('content')
  
		<!-- Project Selection -->

    <section class="testimonials text-center bg-light">
      <div class="container">
        <h2 class="mb-5">Projects</h2>
		<div class="search-container">
			<form action="/project" method="POST" role="search" placeholder="Search Project" name="search_proj">
				{{ csrf_field() }}
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
	@foreach($itens as $item)
		<div class="card">
			<div class="card-header">
			<h5 class="card-title">{{$item->proj_title}}<tab1> <a class="btn btn-success" href="#" onclick="document.getElementById('id04').style.display='block'" style="width:auto;">JOIN</a></h5>
			</div>
			<div class="card-body">
				<p class="card-text">{{$item->proj_description}}</p>
			<a href="aut_thisproject.html" class="btn btn-primary">Go to Project Page</a>
			</div>
			<div class="card-footer">
				<small class="text-muted">Last updated 3 mins ago</small>
			</div>
		</div>
	@endforeach
	</div><p><br></br></p> 

</div>
{{ $itens->links("pagination::bootstrap-4") }}

</div>
        <div class="col-xl-0 mx-auto">
            <img  width="100%" height="30" src="img/bg-masthead.jpg" alt="">
    </div>

   @endsection
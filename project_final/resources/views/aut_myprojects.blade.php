@extends('template.auth_static_template')

@section('content')

		<!-- Project Selection -->

    <section class="testimonials text-center bg-light">
		<div class="container">
        <h2 class="mb-5">My Projects</h2>
		<div class="search-container">
			<form action="/project" method="POST" role="search" placeholder="Search Project" name="search_proj">
				{{ csrf_field() }}
				<input type="text" class="search" placeholder="Search Project" name="search_proj" size = "10">
				<button type="submit" class= "search"><i class="fa fa-search"></i></button>
			</form>
		</div></div>

	<div>
	<a class="btn btn-primary" href="/new_project"  style="width:auto;">Create New Project</a></div>
	</section>

<section>
		<div class="card-deck">
	@foreach($itens as $item)
		<div class="card">
			<div class="card-header">
			<h5 class="card-title">{{$item->proj_title}}</h5>
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
</section>

	</div>
</div>

{{ $itens->links("pagination::bootstrap-4") }}


   @endsection
    

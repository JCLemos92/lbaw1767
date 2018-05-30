@extends('template.static_template')

@section('content')

<!-- Project Selection -->

    <section class="testimonials text-center bg-light">
      <div class="container">
        <h2 class="mb-5">Projects</h2>
		<div class="search-container">
			<form action="project" method="post">
				{!! csrf_field() !!}
				<input type="text" class="search" placeholder="Search Project" name="search_proj" size = "10">
				<button type="submit" class= "search"><i class="fa fa-search"></i></button>
			</form>

	</section>

<section>
	<div>
	</div>
	<div class="col-md-10 col-lg-8 col-xl-10 mx-auto">
	<div class="card-deck">


@php $i = 0;
@endphp

		@foreach($itens as $item)
@if($i%3 == 0)

</div><p><br></br></p>
<div class="card-deck">
@endif

    
		<div class="card">
			<div class="card-header">
			<h5 class="card-title">{{$item->proj_title}}</h5>
			</div>
			<div class="card-body">
				<p class="card-text">{{$item->proj_description}}</p>
			<a href="project{{$item->id}}" class="btn btn-primary">Go To Project Page</a>
			</div>
			<div class="card-footer">
				<small class="text-muted">Last updated 3 mins ago</small>
			</div>
		</div>

@php $i = $i+1;
@endphp

		@endforeach

</div></div>
		 {{ $itens->links("pagination::bootstrap-4") }}

    </section>


	
</div>


	<p><br></br></p> 


@endsection

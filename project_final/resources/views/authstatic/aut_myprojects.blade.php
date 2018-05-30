@extends('template.auth_static_template')

@section('content')
  
	<div id="id03" class="modal" align="left">

		<form class="modal-content animate" action="aut_projects" method="post">
		{!! csrf_field() !!}
		 	<div class="imgcontainer">
		 		<span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;
		 		</span>
	    	</div>


<div class="container">
		<label for="title"><b>Project Title</b></label>
		<input type="text" placeholder="Enter Project Title" name="title" required><br><br>
		<label for="pdis"><b>Project Description</b></label><br><br>
		<textarea placeholder="Project Description" name="description" rows="10" class = "form-control"></textarea><br>

				<label for="privacy"><b>Privacy</b></label>
				<select name="privacy" class= "form-control" >
					<option value="private">Private</option>
					<option value="public" selected>Public</option>
				</select><br>

				<label for="number"><b>Max Number of Contributors</b></label>
				<input class = "form-control" type="number" name="points" min="1" max="100" step="1" value="5"><br>

			</div>

			<tab1><tab1><button  type="submit" class="btn btn-lg btn-primary" style ="width:50%;">Submit</button>
			<label style="text-align: center">
				<tab1>&ensp;&ensp;<input type="checkbox" checked="checked" name="takeme"> Take me to project page
			</label><br>
		</form>
	</div>

	<!-- Project Selection -->

<div id="id04" class="modal" align="left">

		<form class="modal-content animate" action="/aut_projects" method="post">
		 	<div class="imgcontainer">
		 		<span onclick="document.getElementById('id04').style.display='none'" class="close" title="Close Modal">&times;
		 		</span>
	    		</div>
			<input id="leave_validator" name="leave_validator" type="hidden" value=""> </input>

			<div class="container">
				<h3 style="text-align: center">You have left the Project!</h3><br>
			</div>
		</form>
	</div>


		<!-- Project Selection -->

    <section class="testimonials text-center bg-light">
      <div class="container">
        <h2 class="mb-5">My Projects</h2>
		<div class="search-container">
			<form action="aut_projects" method="post">
			{!! csrf_field() !!}
				<input type="text" class="search" placeholder="Search Project" name="search_proj" size = "10">
				<input id="search_validator" name="search_validator" type="hidden" value=""> </input>
				<button type="submit" class= "search" name="search_submit" value="search_submit" onclick="document.getElementById('search_validator').value = 'search_validator'"><i class="fa fa-search"></i></button>

			</form>
		</div></div>

	<div>
	<a class="btn btn-primary" href="#" onclick="document.getElementById('id03').style.display='block'" style="width:auto;">Create New Project</a></div>
	</section>

<section>
	<div class="col-md-10 col-lg-8 col-xl-10 mx-auto">
		<br>
<ul class="nav nav-tabs" id="myTab" role="tablist">


    <li class="nav-item">
    <a class="nav-link active" id="public-tab" data-toggle="tab" href="#public" role="tab" aria-controls="public" aria-selected="false" style= "font-size: 150%">Public Projects</a>
    </li>
    <li class="nav-item">
     <a class="nav-link" id="private-tab" data-toggle="tab" href="#private" role="tab" aria-controls="private" aria-selected="false" style= "font-size: 150%">Private Projects</a>
    </li>
  </li>
</ul>

        <div class="btn-group">
          <tab2><button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Filter
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Done</a>
            <a class="dropdown-item" href="#">In Progress</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Finished</a>
          </div>
        </div><br><br>

<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="public" role="tabpanel" aria-labelledby="public-tab">
	<div class="card-deck">
@php $i = 0;
@endphp


		@foreach($itensPub as $item)
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
			<a href="aut_projects{{$item->id}}" class="btn btn-primary">Go To Project Page</a>
			</div>
			<div class="card-footer">
				<small class="text-muted">Last updated 3 mins ago</small>
			</div>
		</div>
@php $i = $i+1;
@endphp
		@endforeach


	</div>
</div>

    <div class="tab-pane fade show" id="private" role="tabpanel" aria-labelledby="private-tab">
		<div class="card-deck">

@php $i = 0;
@endphp


		@foreach($itensPriv as $item)
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
			<a href="aut_projects{{$item->id}}" class="btn btn-primary">Go To Project Page</a>
			</div>
			<div class="card-footer">
				<small class="text-muted">Last updated 3 mins ago</small>
			</div>
		</div>

@php $i = $i+1;
@endphp
		@endforeach


	</div>
</div>




    <p><br></br></p>
    </section>

</div>
        <div class="col-xl-0 mx-auto">
            <img  width="100%" height="30" src="img/bg-masthead.jpg" alt="">
    </div>
   @endsection

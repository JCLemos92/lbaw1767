@extends('template.static_template')

@section('content')
<div>
    <ul class="breadcrumb">
       <li><a href="project">Projects</a></li>
       <li>{{$projectT[0]->proj_title}}</li>
   </ul>
</div>
<div class="container">
<br>
	<h2 class="mb-5">{{$projectT[0]->proj_title}}</h2>
        <h7 class="mb-5">{{$projectT[0]->proj_description}}</h7>
<br>
<br>


	<section>
          
<br>
				<h4 class="mb-5">List of Contributors</h4>


				@foreach($projectUC as $item)

      				<div class="card-deck">
        				<div class="card">
            					<div class="card-header">Project Coordinator</div>
            					<div class="card-body">
            						<h5 class="card-title">{{$item[0]->username}}</h5>
            						<p class="card-text">{{$item[0]->name}} {{$item[0]->last_name}}</p>
            					</div>
        				</div>
      				</div><br>

				@endforeach


				@foreach($projectUM as $item)
      				<div class="card-deck">
       					<div class="card">
           					<div class="card-header">Project Member</div>
            					<div class="card-body">
            						<h5 class="card-title">{{$item[0]->username}}</h5>
            						<p class="card-text">{{$item[0]->name}} {{$item[0]->last_name}}</p>
            					</div>
        				</div>
      				</div><br>
				@endforeach
    			</div>

    </section>
</div>


        <div class="col-xl-0 mx-auto">
            <img  width="100%" height="30" src="img/bg-masthead.jpg" alt="">
    </div>

   @endsection

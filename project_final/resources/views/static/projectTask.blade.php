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
		<ul class="nav nav-tabs" id="myTab" role="tablist">

			<li class="nav-item">
    				<a class="nav-link active" id="contributors-tab" data-toggle="tab" href="#contributors" role="tab" aria-controls="contributors" aria-selected="false" style= "font-size: 150%">Contributors</a>
    			</li>

    			<li class="nav-item">
    				<a class="nav-link" id="tasklist-tab" data-toggle="tab" href="#tasklist" role="tab" aria-controls="tasklist" aria-selected="false" style= "font-size: 150%">Task List</a>
    			</li>

    
		</ul>

		<div class="tab-content" id="myTabContent">
    			<div class="tab-pane fade show active" id="contributors" role="tabpanel" aria-labelledby="contributors-tab">
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


    			<div class="tab-pane fade show" id="tasklist" role="tabpanel" aria-labelledby="tasklist-tab">

@php $i=0;
@endphp
				@foreach($tasksProg as $item)
      				<div class="card-deck">
        				<div class="card text-white bg-danger mb-3">
            					<div class="card-header">In works by {{$taskProgU[$i][0]->username}} {{$taskProgU[$i][0]->name}} {{$taskProgU[$i][0]->last_name}}
						</div>
						<div class="card-body">
							<h5 class="card-title">{{$item->taskName}}</h5>
					    		<p class="card-text">{{$item->taskDescription}}</p>
							<div class="card-footer">Date Limit: {{$item->dateLimit}}</div>
            					</div>
        				</div>
      				</div><br>
@php $i = $i+1;
@endphp
				@endforeach

				@foreach($tasksPend as $item)
				<div class="card-deck">
					<div class="card text-white bg-success mb-3">
						<div class="card-header">No one in charge<tab2></tab2>
						</div>
						<div class="card-body">
					    		<h5 class="card-title">{{$item->taskName}}</h5>
					    		<p class="card-text">{{$item->taskDescription}}</p>
							<div class="card-footer">Date Limit: {{$item->dateLimit}}</div>
					    	</div>
					</div>
				</div><br>
				@endforeach

@php $i=0;
@endphp
				@foreach($tasksComp as $item)
				<div class="card-deck">
					<div class="card text-white bg-dark mb-3">
						<div class="card-header">Completed by {{$taskCompU[$i][0]->username}} {{$taskCompU[$i][0]->name}} {{$taskCompU[$i][0]->last_name}}
						</div>
						<div class="card-body">
					    		<h5 class="card-title">{{$item->taskName}}</h5>
					    		<p class="card-text">{{$item->taskDescription}}</p>
							<div class="card-footer">Date of Completion: {{$taskCompD[$i][0]->completiondate}} 12/03/2018</div>
						</div>
					</div>
				</div><br>  
@php $i = $i+1;
@endphp
				@endforeach  
			</div>



    			

    </div>




  </div>
  </div><br><br>





        
		<section align="center"><h4>
    		<div class="text-center " >
  				<a href="#">&laquo;</a>
  				&ensp;<a href="#">1</a>&ensp;
  				<a class="active" href="#">2</a>&ensp;
  				<a href="#">3</a>&ensp;
  				<a href="#">4</a>&ensp;
  				<a href="#">5</a>&ensp;
  				<a href="#">6</a>&ensp;
  				<a href="#">&raquo;</a>&ensp;
			</div>	</h4>	
		</div>
    </section>

</div>

        <div class="col-xl-0 mx-auto">
            <img  width="100%" height="30" src="img/bg-masthead.jpg" alt="">
    </div>

   @endsection
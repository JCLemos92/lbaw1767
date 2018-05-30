@extends('template.auth_static_template')

@section('content')
<div>
    <ul class="breadcrumb">
       <li><a href="aut_projects">Projects</a></li>
       <li>{{$projectT[0]->proj_title}}</li>
   </ul>
</div>
<div class="container">
<br>
	<h2 class="mb-5">{{$projectT[0]->proj_title}}</h2>
        <h7 class="mb-5">{{$projectT[0]->proj_description}}</h7>
<br>
@if($userType == 'Coordinator')
<button type="submit" class="btn btn-fail" href="#" onclick="document.getElementById('response_validator').value='delete:this'; document.getElementById('response_form').submit();" style="width:auto; color: #fff; background-color: #ff0000; border-color: #ff0000;">Delete Project</button>
@endif
<br>

<div id="idresponse" class="modal" align="left">

		<form id="response_form" class="modal-content animate" action="/aut_projects{{$projectT[0]->id}}" method="post">
{!! csrf_field() !!}
		 	<div class="imgcontainer">
			<input id="response_validator" name="response_validator" type="hidden" value=""> </input>
		 		<span onclick="document.getElementById('response_form').submit();" class="close" title="Close Modal">&times;
		 		</span>
	    		</div>
		</form>
	</div>


	<section>
<br>
		<ul class="nav nav-tabs" id="myTab" role="tablist">

			<li class="nav-item">
    				<a class="nav-link active" id="contributors-tab" data-toggle="tab" href="#contributors" role="tab" aria-controls="contributors" aria-selected="false" style= "font-size: 150%">Contributors</a>
    			</li>

    			<li class="nav-item">
    				<a class="nav-link" id="tasklist-tab" data-toggle="tab" href="#tasklist" role="tab" aria-controls="tasklist" aria-selected="false" style= "font-size: 150%">Task List</a>
    			</li>

    			<li class="nav-item">
     				<a class="nav-link" id="forum-tab" data-toggle="tab" href="#forum" role="tab" aria-controls="forum" aria-selected="false" style= "font-size: 150%">Forum</a>
    			</li>

    
		</ul>

		<div class="tab-content" id="myTabContent">
    			<div class="tab-pane fade show active" id="contributors" role="tabpanel" aria-labelledby="contributors-tab">
<br>
				<h4 class="mb-5">List of Contributors</h4>


				@foreach($projectUC as $item)

      				<div class="card-deck">
        				<div class="card">
            					<div class="card-header">Project Coordinator
@if($userID == $item[0]->id  && count($projectUC)>1)
	<button type="submit" class="btn btn-fail" href="#" onclick="document.getElementById('response_validator').value='leave:{{$item[0]->id}}'; document.getElementById('response_form').submit();" style="width:auto; color: #fff; background-color: #ff0000; border-color: #ff0000;">LEAVE</button>
@elseif($userType == 'Coordinator' && $userID != $item[0]->id)
	<button type="submit" class="btn btn-fail" href="#" onclick="document.getElementById('response_validator').value='demote:{{$item[0]->id}}'; document.getElementById('response_form').submit();" style="width:auto; color: #fff; background-color: #ff0000; border-color: #ff0000;">DEMOTE</button>
	<button type="submit" class="btn btn-fail" href="#" onclick="document.getElementById('response_validator').value='remove:{{$item[0]->id}}'; if(document.getElementById('response_validator').value == 'remove:{{$item[0]->id}}')document.getElementById('response_form').submit();" style="width:auto; color: #fff; background-color: #ff0000; border-color: #ff0000;">REMOVE</button>
@endif
						</div>
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
           					<div class="card-header">Project Member
@if($userID == $item[0]->id)
	<button type="submit" class="btn btn-fail" href="#" onclick="document.getElementById('response_validator').value='leave:{{$item[0]->id}}'; document.getElementById('response_form').submit();" style="width:auto; color: #fff; background-color: #ff0000; border-color: #ff0000;">LEAVE</button>
@elseif($userType == 'Coordinator')
	<button type="submit" class="btn btn-fail" href="#" onclick="document.getElementById('response_validator').value='promote:{{$item[0]->id}}'; document.getElementById('response_form').submit();" style="width:auto;">PROMOTE</button>
	<button type="submit" class="btn btn-fail" href="#" onclick="document.getElementById('response_validator').value='remove:{{$item[0]->id}}'; document.getElementById('response_form').submit();" style="width:auto; color: #fff; background-color: #ff0000; border-color: #ff0000;">REMOVE</button>
@endif
						</div>
            					<div class="card-body">
            						<h5 class="card-title">{{$item[0]->username}}</h5>
            						<p class="card-text">{{$item[0]->name}} {{$item[0]->last_name}}</p>
            					</div>
        				</div>
      				</div><br>
				@endforeach 
<br>

@if($userType == "Coordinator")
@php $i=0;
@endphp
				@foreach($projectUA as $item)
      				<div class="card-deck">
       					<div class="card">
           					<div class="card-header">Applied Member 
<form method="post" action="aut_projects{{$projectUAid[$i]->project_ID}}">
{{ csrf_field() }}
	<input id="request_validator" name="request_validator" type="hidden" value=""> </input>
	<tab1><button type="submit" class="btn btn-success" href="#" onclick="document.getElementById('request_validator').value='accept_{{$item[0]->id}}'" style="width:auto;">ACCEPT</button>
	<button type="submit" class="btn btn-fail" href="#" onclick="document.getElementById('request_validator').value='decline_{{$item[0]->id}}'" style="width:auto; color: #fff; background-color: #ff0000; border-color: #ff0000;">DECLINE</button>

</form>
						</div>
            					<div class="card-body">
            						<h5 class="card-title">{{$item[0]->username}}</h5>
            						<p class="card-text">{{$item[0]->name}} {{$item[0]->last_name}}</p>
							<div class="card-footer">Date of Application: {{$projectUAid[$i]->applicationDate}}</div>
            					</div>
        				</div>
      				</div><br>
@php $i = $i+1;
@endphp
				@endforeach 

@php $i=0;
@endphp
				@foreach($projectUI as $item)
      				<div class="card-deck">
       					<div class="card">
           					<div class="card-header">Invited Member 
<form method="post" action="aut_projects{{$projectUIid[$i]->project_ID}}">
{{ csrf_field() }}
	<input id="cancel_validator" name="cancel_validator" type="hidden" value=""> </input>
	<button type="submit" class="btn btn-fail" href="#" onclick="document.getElementById('cancel_validator').value='cancel_{{$item[0]->id}}'" style="width:auto; color: #fff; background-color: #ff0000; border-color: #ff0000;">CANCEL</button>

</form>
						</div>
            					<div class="card-body">
            						<h5 class="card-title">{{$item[0]->username}}</h5>
            						<p class="card-text">{{$item[0]->name}} {{$item[0]->last_name}}</p>
							<div class="card-footer">Date of Invite: {{$projectUIid[$i]->invitedate}}</div>
            					</div>
        				</div>
      				</div><br>
@php $i = $i+1;
@endphp
				@endforeach 



<form class="modal-content animate" action="aut_invite{{$projectT[0]->id}}" method="post">
{!! csrf_field() !!}


	<div class="container">
		<label for="title"><b>Invite new members</b></label>
		<input type="text" placeholder="First Name" name="fname"><br>
		<input type="text" placeholder="Last Name" name="lname"><br>

	</div>

	<tab1><button  type="submit" class="btn btn-lg btn-primary" style ="width:50%;">Search</button>
	<br>
</form>
@endif

    			</div>


    			<div class="tab-pane fade show" id="tasklist" role="tabpanel" aria-labelledby="tasklist-tab">
      
  				<div id="id04" class="modal" align="left">

    					<form class="modal-content animate" action="/aut_createTask{{$projectT[0]->id}}" method="post">
					{!! csrf_field() !!}
      						<div class="imgcontainer">
        						<span onclick="document.getElementById('id04').style.display='none'" class="close" title="Close Modal">&times;
        						</span>
        					</div>

      						<div class="container">
							<label for="title"><b>Task Title</b></label>
							<input type="text" placeholder="Enter Task Title" name="title" required><br>

							<label for="pdis"><b>Task Description</b></label>
							<textarea placeholder="Enter Task Description" name="description" rows="10" class = "form-control"></textarea><br>

							<label for="priority"><b>Priority</b></label>
							<select name="priority" class = "form-control">
								<option value="High">High</option>
								<option value="Medium">Medium</option>
								<option value="Low">Low</option>
							</select><br>

							<label for="date"><b>Date for task</b></label>
							<input type="date" id="bday" name="bday" class = "form-control" required>

      						</div>

      						<tab3><tab3><button  type="submit" class="btn btn-lg btn-primary" style ="width:50%;">Submit</button><br>
    					</form>
  				</div>

				<div align="text-center">
					<br><h2>Task List</h2><br>
					<a class="btn btn-primary" href="#" onclick="document.getElementById('id04').style.display='block'" style="width:auto;">Create New Task</a>
				</div><br>
@php $i=0;
@endphp
				@foreach($tasksProg as $item)
      				<div class="card-deck">
        				<div class="card text-white bg-danger mb-3">
            					<div class="card-header">In works by {{$taskProgU[$i][0]->username}} {{$taskProgU[$i][0]->name}} {{$taskProgU[$i][0]->last_name}}<tab1></tab1></tab1>
                					<a class="btn btn-primary" href="#" onclick="document.getElementById('response_validator').value='completeTask:{{$item->task_ID}}'; document.getElementById('response_form').submit();" style="width:auto;">COMPLETE </a>
							<a class="btn btn-primary" href="#" onclick="document.getElementById('response_validator').value='deleteTask:{{$item->task_ID}}'; document.getElementById('response_form').submit();" style="width:auto;">DELETE</a>
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
							<a class="btn btn-primary" href="#" onclick="document.getElementById('response_validator').value='takeTask:{{$item->task_ID}}'; document.getElementById('response_form').submit();" style="width:auto;">TAKE THIS TASK</a>
							<a class="btn btn-primary" href="#" onclick="document.getElementById('response_validator').value='deleteTask:{{$item->task_ID}}'; document.getElementById('response_form').submit();" style="width:auto;">DELETE</a>
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
							<a class="btn btn-primary" href="#" onclick="document.getElementById('response_validator').value='deleteTask:{{$item->task_ID}}'; document.getElementById('response_form').submit();" style="width:auto;">DELETE</a>
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



    			<div class="tab-pane fade show" id="forum" role="tabpanel" aria-labelledby="forum-tab">
      				<div id="id05" class="modal" align="left">

				    <form class="modal-content animate" action="/action_page3.php">
				    	<div class="imgcontainer">
						<span onclick="document.getElementById('id05').style.display='none'" class="close" title="Close Modal">&times;
						</span>
					</div>

				  	<div class="container">
						<label for="title"><b>Forum Thread Title</b></label>
						<input type="text" placeholder="Enter Forum Thread Title" name="title" required><br>

						<label for="pdis"><b>Post</b></label><br>
						<textarea placeholder="&ensp;&ensp;Enter Text" name="post" rows="10" cols="60"></textarea><br>

				      		<tab3><tab3><button  type="submit" class="btn btn-lg btn-primary" style ="width:50%;">Submit</button><br>
				    	</div>
				    </form>
				</div>

 
  
  <section>

    <div align="text-center">
<br><h2>Forum Threads</h2>
<tab1><a class="btn btn-primary" href="#" onclick="document.getElementById('id05').style.display='block'" style="width:auto;">Create New Forum Thread</a>
</div><br>
  <div>
    <p><br></p>
  </div>
  <div class="col-md-12 col-lg-10 col-xl-12 mx-auto">
  <div class="card-deck">
    <div class="card">
      <div class="card-header">
      <h5 class="card-title">Title of Forum</h5>
      </div>
      <div class="card-body">
        <p class="card-text">Go to a forum post example by clicking below</p>
      <a href="aut_forumpost.html" class="btn btn-primary">Forum Post</a>
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
        <p class="card-text">Go to a forum post example by clicking below</p>
      <a href="forums.php?id=1" class="btn btn-primary">Forum Post</a>
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
        <p class="card-text">Go to a forum post example by clicking below</p>
      <a href="forums.php?id=1" class="btn btn-primary">Forum Post</a>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div></div>
    </section>


  <p><br></br></p> 

  <div class="col-md-12 col-lg-10 col-xl-12 mx-auto">
  <!-- Forum Selection -->
  <section>
  <div class="card-deck">
    <div class="card">
      <div class="card-header">
      <h5 class="card-title">Title of Forum</h5>
      </div>
      <div class="card-body">
        <p class="card-text">Go to a forum post example by clicking below</p>
      <a href="forums.php?id=1" class="btn btn-primary">Forum Post</a>
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
        <p class="card-text">Go to a forum post example by clicking below</p>
      <a href="forums.php?id=1" class="btn btn-primary">Forum Post</a>
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
        <p class="card-text">Go to a forum post example by clicking below</p>
      <a href="forums.php?id=1" class="btn btn-primary">Forum Post</a>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div> 
    </section>
    <p><br></br></p>

   <br> 



    </div>




  </div>
  </div><br><br>


</div>

        <div class="col-xl-0 mx-auto">
            <img  width="100%" height="30" src="img/bg-masthead.jpg" alt="">
    </div>

   @endsection

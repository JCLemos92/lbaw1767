@extends('template.auth_static_template')

@section('content')

@foreach($tests as $item)

<div id="idresponse" class="modal" align="left">

	<form id="response_form" class="modal-content animate" action="/aut_invite{{$id}}" method="post">
	{!! csrf_field() !!}
	 	<div class="imgcontainer">
		<input id="response_validator" name="response_validator" type="hidden" value=""> </input>
	 		<span onclick="document.getElementById('response_form').submit();" class="close" title="Close Modal">&times;
	 		</span>
    		</div>
	</form>
</div>
<!--/aut_projects{{$id}}invite{{$item->id}}-->
<div class="card-deck">
	<div class="card">
		<div class="card-header">{{$item->username}}<tab1>
	<button type="submit" class="btn btn-fail" href="#" onclick="document.getElementById('response_validator').value='invite:{{$item->id}}'; document.getElementById('response_form').submit();" style="width:auto;">INVITE</button>
						</div>
            					<div class="card-body">
            						<h5 class="card-title">{{$item->username}}</h5>
            						<p class="card-text">{{$item->name}} {{$item->last_name}}</p>
            					</div>
        				</div>
      				</div><br>

				@endforeach
<br><br>

        <div class="col-xl-0 mx-auto">
            <img  width="100%" height="30" src="img/bg-masthead.jpg" alt="">
    </div>

   @endsection

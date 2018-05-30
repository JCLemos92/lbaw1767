@extends('template.static_template')

@section('content')
<!-- 
<form class= "form" method="post" action="{{route('store')}}">
  {!! csrf_field() !!}
  <input type="text" name="info" placeholder="info">
  <button class="button">Send</button>
</form>
 -->
    <!-- About Information -->
    <section class="text-center bg-light">
      <div class="container" style="width:60%;">
        <h2 class="mb-5">Sign In!</h2>
          <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            <form class= "form" method="post" action="{{route('store')}}">
              {!! csrf_field() !!}
              <input type="hidden" name="controle" value="sign">
            <h5><label for="uname" ><b>Username</b></label></h5>
      <input type="text" style ="width:60%;" placeholder="Enter Username" name="username" required>

            <br><br><h5><label for="psw"><b>Password</b></label></h5>
      <input type="password" style ="width:60%;" placeholder="Enter Password" name="password" required>
      
      <br><br><h5><button class="btn btn-lg btn-primary" type="submit" style ="width:25%;">Login</button></h5>
      <h7><label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label></h7><br><br>
      <h6> <span class="psw">Forgot <a href="#">password?</a></span></h6>
<br><br>
          </form>
          </div>
      </div>
    </section>

    <!-- Call to Action -->
    <section class="call-to-action text-white text-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h2 class="mb-4">Don't have a register? Sign up now!</h2>
          </div>
          <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
              <div class="form-row">
                <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                  <button type="submit" class="btn btn-block btn-lg btn-primary" onclick="location.href='/home-test/registro.html'">Sign up for ProPlan!</button>  
                 </div>
              </div>
          </div>
        </div>
      </div>
    </section>

@endsection
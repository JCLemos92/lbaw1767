@extends('template.static_template')

@section('content')


<section class="text-center bg-light">
      <div class="container" style="width:60%;">
        <h2 class="mb-5">Forgot your password?</h2>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/pwforget">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-mail Address</label>

                            <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                                <input id="email" type="email" class="form-control" name="email" value=""  autofocus>
                                <b> {{$errMessage}} </b>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                                <button type="submit" class="btn btn-primary">
                                    Send me an email
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </section>

@endsection

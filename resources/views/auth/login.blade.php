<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>{{ config('app.name', __('Wosul')) }}</title>

  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  @include('layouts.partials.links')
  
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('assets/bower_components/iCheck/square/blue.css') }}">

</head>
<body class="hold-transition login-page">

  <div class="login-box">
    <!-- /.login-logo -->
    <div class="login-box-body">
      <div class="login-logo">
        <a href="{{ url('/') }}"><b>Wosul</b></a>
      </div>
	  <div class="card">
		<div class="card-body login-card-body">
      <p class="login-box-msg"></p>
      <form action="{{ route('login') }}" method="post">
        {{ csrf_field() }}
        <div class="input-group mb-3">
          <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="{{ __('Enter Email') }}" required autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>		  
          @if ($errors->has('email'))
              <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
              </span>
          @endif
        </div>
        <div class="input-group mb-3">
          <input id="password" type="password" class="form-control" name="password" placeholder="{{ __('Enter Password') }}" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>		  
          @if ($errors->has('password'))
              <span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
              </span>
          @endif

        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              
               <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> 
			  <label for="remember" style="padding-left:5px !important;">
				{{ __('Remember Me') }}
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">{{ __('Sign In') }}</button>
          </div>
          <!-- /.col -->
        </div>
		<div class="row">
			<div class="col-xs-6 text-center">
				<a href="{{ url('/password/reset') }}">{{ __('Forgot Password') }}</a>
			</div>
		</div>
      </form>
	  </div>
    </div>
	</div>
    <!-- /.login-box-body -->
  </div>

  @include('layouts.partials.scripts')
  <!-- iCheck -->
  <script src="{{ asset('assets/bower_components/iCheck/icheck.min.js') }}"></script>
  <script>
    $(function () {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' // optional
      });
    });
  </script>
</body>
</html>
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>{{ config('app.name', __('Wosul')) }}</title>

  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  @include('layouts.partials.links')

</head>
<body class="hold-transition login-page">

  <div class="login-box">
    <!-- /.login-logo -->
    <div class="login-box-body">
      <div class="login-logo">
        <a href="{{ url('/') }}"><b>Wosul</b></a>
      </div>
            <div class="card">
                <!--<div class="card-header ">{{ __('Reset Password') }}</div>-->
				
                <div class="card-body login-card-body">
					<p class="login-box-msg">Reset your password</p>
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group">
                            <!--<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>-->

                            <div class="input-group mb-3">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="E-Mail Address" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
								<div class="input-group-append">
									<div class="input-group-text">
									  <span class="fas fa-envelope"></span>
									</div>
								</div>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="input-group mb-3">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password"  name="password" required autocomplete="new-password">
								<div class="input-group-append">
									<div class="input-group-text">
									  <span class="fas fa-lock"></span>
									</div>
								</div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <!--<label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>-->

                            <div class="input-group mb-3">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
								<div class="input-group-append">
									<div class="input-group-text">
									  <span class="fas fa-lock"></span>
									</div>
								</div>								
                            </div>
                        </div>

                         <div class="form-group row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary  btn-block">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  @include('layouts.partials.scripts')
  </body>
</html>

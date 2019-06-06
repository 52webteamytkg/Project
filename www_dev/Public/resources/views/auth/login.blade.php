@extends('layouts.app')

@section('style')
	<link rel="stylesheet" type="text/css" href="/css/login.css">
@endsection

@section('title')
  Login
@endsection

@section('content')
	<div class="container">
	    <div class="row">
	      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
	        <div class="card card-signin my-2">
	          <div class="card-body">
	          	{{-- Back to Home ボタン --}}
	          	<a class="navbar-brand" href="{{ url('/') }}"><img class="homelogo" src="/imgs/Mazui_homelogo.png" alt="homelogo">
	          	</a>

	          	<h5 class="card-greeting text-center">Welcome Back!</h5>
	            <h4 class="card-title text-center">Login&nbsp;&nbsp;&nbsp;Sign In</h4>

							 <form method="POST" action="{{ route('login') }}" class="form-signin">
               		@csrf

		              <div class="form-label-group">
		                <input type="email" id="inputEmail" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email address" name="email" value="{{ old('email') }}" required autofocus>
		                <label for="inputEmail">{{ __('E-Mail Address') }}</label>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
		              </div>

		              <div class="form-label-group">
		                <input type="password" id="inputPassword" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" name="password" required>
		                <label for="inputPassword">{{ __('Password') }}</label>

		                 						@if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
		              </div>

		              <div class="custom-control custom-checkbox mb-3">
		                <input type="checkbox" class="custom-control-input" id="customCheck1" {{ old('remember') ? 'checked' : '' }}>
		                <label class="custom-control-label" for="customCheck1"> {{ __('Remember Me') }}</label>
		              </div>

		              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">{{ __('Login') }}</button>

		              @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif

		              <hr class="my-2">

									<div class="sns-coment text-center">
										<p>Or Sign Up Using</p>
									</div>

		              <div class="btn-sns">
			              <ul>
			              	<li class="btn-facebook">
				              	<a href=""><i class="fab fa-facebook-square fa-5x"></i></a>
				             	</li>
			              	<li class="btn-twitter">
				              	<a href=""><i class="fab fa-twitter-square fa-5x"></i></a>
				             	</li>
				             	<li class="btn-google">
				              	<a href=""><i class="fab fa-google-plus-square fa-5x"></i></a>
				             	</li>
				          	</ul>
				          </div>

				          <div class="signup text-center">
				          	<a class="signup_text" href="{{ url('/signup') }}">Sign Up</a>
				          </div>
	            </form>
	          </div>
	        </div>
	      </div>
	    </div>
	 </div>
@endsection
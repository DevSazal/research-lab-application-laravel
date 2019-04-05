@extends('layouts.auth')

@section('content')
    <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">   
				<div class="login100-pic js-tilt" data-tilt>
					<img src="{{ asset('auth/images/img-01.png') }}" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="POST" action="{{ route('password.update') }}">
                        @csrf
					<input type="hidden" name="token" value="{{ $token }}">


					<span class="login100-form-title">
						Reset Password
					</span>

					<div class="wrap-input100 validate-input {{ $errors->has('email') ? 'validate-input alert-validate' : '' }}" data-validate = "{{ $errors->has('email') ? $errors->first('email') : 'Email is required: ex@abc.xyz' }}">
						<input type="email" name="email" class="input100" value="{{ $email ?? old('email') }}"  placeholder="Email" >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>



					<div class="wrap-input100 validate-input {{ $errors->has('password') ? 'validate-input alert-validate' : '' }}" data-validate = "{{ $errors->has('password') ? $errors->first('password') : 'Password is required' }}">
						<input type="password" name="password" class="input100" value=""  placeholder="Password" >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>


					<div class="wrap-input100 validate-input {{ $errors->has('password_confirmation') ? 'validate-input alert-validate' : '' }}" data-validate = "{{ $errors->has('password_confirmation') ? $errors->first('password_confirmation') : 'Password is required' }}">
						<input type="password" name="password_confirmation" class="input100" value="" placeholder="Confirm Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
						{{ __('Reset Password') }}
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
						
						</span>
						<a class="txt2" href="{{ route('login') }}">
							Login your account
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="{{ route('register') }}">
							<b>Create your Account</b>
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection
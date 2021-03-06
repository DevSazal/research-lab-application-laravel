@extends('layouts.auth')

@section('content')
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>  
					<img src="{{ asset('auth/images/img-01.png') }}" alt="IMG">
				</div>

				<div class="login100-form validate-form">  <!--form convert div-->
					<span class="login100-form-title">    
						{{ __('Verify Your Email Address') }}
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<!-- <input type="email" name="email" class="input100"  placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span> -->
						@if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                   		 @endif
							
						<p> Before proceeding, Please check your email for a verification link. If you did not receive the email, <b>you can click below to request another</b>. </p>
					</div>


					
					<div class="container-login100-form-btn">
						<button type="submit" onclick="location.href='{{ route('verification.resend') }}'" class="login100-form-btn hover">
							Send Another Reset Link
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
				</div>
			</div>
		</div>
	</div>

@endsection
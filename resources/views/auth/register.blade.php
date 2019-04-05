@extends('layouts.auth')

@section('content')
<style type="text/css">
		.input100 {
		    border-radius: unset;
		}
		@media (min-width: 1024px) and (max-width: 4000px) {
  
		  	.mobile{
		  		display: none;
		  	}
		  	.login100-pic {
			  	width: 45%;
			}
			.login100-form {
			  	width: 45%;
			}
			.wrap-login100 {
		    	padding: 70px 130px 33px 95px;
			}
			.btn-size{
				width:40%;
			}
		  
		}
		@media (min-width: 200px) and (max-width: 1023px) {
		  
			.laptop{
			  	display: none;
			}


		}
	</style>
<?php 
 ?>
 @desktop
	<div class="limiter laptop">
		<div class="container-login100">
			<form class="validate-form" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
				@csrf
			<div class="wrap-login100">
				<span class="login100-form-title">
						Let's Join As a Researcher
					</span>
				<div class="login100-pic" >
					<div class="wrap-input100 validate-input {{ $errors->has('name') ? 'validate-input alert-validate' : '' }}" data-validate = "{{ $errors->has('name') ? $errors->first('name') : 'Name is required' }}">
						<input type="text" name="name" class="input100" value="{{ old('name') }}" placeholder="Name" >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input {{ $errors->has('email') ? 'validate-input alert-validate' : '' }}" data-validate = "{{ $errors->has('email') ? $errors->first('email') : 'Email is required: ex@abc.xyz' }}">
						<input type="email" name="email" class="input100" value="{{ old('email') }}"  placeholder="Email" >
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

					<div class="wrap-input100 validate-input {{ $errors->has('password') ? 'validate-input alert-validate' : '' }}" data-validate = "{{ $errors->has('password') ? $errors->first('password') : 'Confirm Password is required' }}">
						<input type="password" name="password_confirmation" class="input100" value="" placeholder="Confirm Password" >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input {{ $errors->has('phone') ? 'validate-input alert-validate' : '' }}" data-validate = "{{ $errors->has('phone') ? $errors->first('phone') : 'Phone is required' }}">
						<input type="text" name="phone" class="input100" value="{{ old('phone') }}"  placeholder="Phone" >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</span>
					</div>
				</div>



				<div class="login100-form">
					

					<!-- <div class="wrap-input100 validate-input" data-validate = "Profile Photo is required: ex@abc.xyz">
						<input type="file" name="image" class="input100" value=""  placeholder="Profile Photo" accept="image/*">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-camera" aria-hidden="true"></i>
						</span>
					</div> -->
					<div class="wrap-input100 " data-validate = "">
						<input type="file" name="image" class="" value=""  placeholder="Profile Photo" accept="image/*">
						<span class="focus-input100"></span>
						<!-- <span class="symbol-input100">
							<i class="fa fa-camera" aria-hidden="true"></i>
						</span> -->
						<p class="help-block" style=" color: #39d2b4;">Equal ratio. (example: 100*100)</p>
						@if ($errors->has('image'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
					</div>
					
					<div class="wrap-input100 validate-input {{ $errors->has('edu_dept') ? 'validate-input alert-validate' : '' }}" data-validate = "{{ $errors->has('edu_dept') ? $errors->first('edu_dept') : 'Department is required' }}">
						<input type="text" name="edu_dept" class="input100" value="{{ old('edu_dept') }}"  placeholder="Department" >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-book" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input {{ $errors->has('edu_varsity') ? 'validate-input alert-validate' : '' }}" data-validate = "{{ $errors->has('edu_varsity') ? $errors->first('edu_varsity') : 'University is required' }}">
						<input type="text" name="edu_varsity" class="input100" value="{{ old('edu_varsity') }}"  placeholder="University" >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-university" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 {{ $errors->has('edu_country') ? 'validate-input alert-validate' : '' }}" data-validate = "{{ $errors->has('edu_country') ? $errors->first('edu_country') : 'Country is required' }}">
						<select id="country" name="edu_country" id="country" class="input100" placeholder="Country of University" ></select>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-globe" aria-hidden="true"></i>
						</span>
					</div>



					<div class="wrap-input100 validate-input {{ $errors->has('trxid') ? 'validate-input alert-validate' : '' }}" data-validate = "{{ $errors->has('trxid') ? $errors->first('trxid') : 'bKash TrxID is required' }}">
						<input type="text" name="trxid" class="input100"  value="{{ old('trxid') }}" placeholder="bKash TrxID" >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-money" aria-hidden="true"></i>
						</span>
					</div>

				</div>
			

			<!-- button -->
				<div class="container-login100-form-btn">
					<label class="text-center">* First, you have to send 500BDT on this bKash number 01700110022. Then, enter your bKash TrxID into the form.
					</label>
					<button type="submit" class="login100-form-btn btn-size">
						Register
					</button>
				</div>

				<div class="text-center container-login100-form-btn">
					<span class="txt1" style="padding-right: 5px;">
						Forgot 
					</span>
					<a class="txt2" href="{{ route('password.request') }}">
						Username / Password?
					</a>
				</div>

				<div class="text-left p-t-136 container-login100-form-btn">
						<a class="txt2" href="{{ route('login') }}">
							<b>Login your Account</b>
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
				</div>
			</div>
			</form>
		</div>
	</div>
<!-- 	laptop end -->
@elsedesktop
<!-- 	other start -->
<div class="limiter mobile">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="{{ asset('auth/images/img-01.png') }}" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
					@csrf
					<span class="login100-form-title">
						Let's Join As a Researcher
					</span>

					<div class="wrap-input100 validate-input {{ $errors->has('name') ? 'validate-input alert-validate' : '' }}" data-validate = "{{ $errors->has('name') ? $errors->first('name') : 'Name is required' }}">
						<input type="text" name="name" class="input100" value="{{ old('name') }}" placeholder="Name" >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input {{ $errors->has('email') ? 'validate-input alert-validate' : '' }}" data-validate = "{{ $errors->has('email') ? $errors->first('email') : 'Email is required: ex@abc.xyz' }}">
						<input type="email" name="email" class="input100" value="{{ old('email') }}"  placeholder="Email" >
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

					<div class="wrap-input100 validate-input {{ $errors->has('password') ? 'validate-input alert-validate' : '' }}" data-validate = "{{ $errors->has('password') ? $errors->first('password') : 'Confirm Password is required' }}">
						<input type="password" name="password_confirmation" class="input100" value="" placeholder="Confirm Password" >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input {{ $errors->has('phone') ? 'validate-input alert-validate' : '' }}" data-validate = "{{ $errors->has('phone') ? $errors->first('phone') : 'Phone is required' }}">
						<input type="text" name="phone" class="input100" value="{{ old('phone') }}"  placeholder="Phone" >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</span>
					</div>


					<!-- half of input text -->
					<!-- <div class="wrap-input100 validate-input" data-validate = "Profile Photo is required: ex@abc.xyz">
						<input type="file" name="image" class="input100" value=""  placeholder="Profile Photo" accept="image/*">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-camera" aria-hidden="true"></i>
						</span>
					</div> -->
					<div class="wrap-input100 " data-validate = "">
						<input type="file" name="image" class="" value=""  placeholder="Profile Photo" accept="image/*">
						<span class="focus-input100"></span>
						<!-- <span class="symbol-input100">
							<i class="fa fa-camera" aria-hidden="true"></i>
						</span> -->
						<p class="help-block" style=" color: #39d2b4;">Equal ratio. (example: 100*100)</p>
						@if ($errors->has('image'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
					</div>
					
					<div class="wrap-input100 validate-input {{ $errors->has('edu_dept') ? 'validate-input alert-validate' : '' }}" data-validate = "{{ $errors->has('edu_dept') ? $errors->first('edu_dept') : 'Department is required' }}">
						<input type="text" name="edu_dept" class="input100" value="{{ old('edu_dept') }}"  placeholder="Department" >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-book" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input {{ $errors->has('edu_varsity') ? 'validate-input alert-validate' : '' }}" data-validate = "{{ $errors->has('edu_varsity') ? $errors->first('edu_varsity') : 'University is required' }}">
						<input type="text" name="edu_varsity" class="input100" value="{{ old('edu_varsity') }}"  placeholder="University" >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-university" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 {{ $errors->has('edu_country') ? 'validate-input alert-validate' : '' }}" data-validate = "{{ $errors->has('edu_country') ? $errors->first('edu_country') : 'Country is required' }}">
						<select id="country" name="edu_country" id="country" class="input100" placeholder="Country of University" ></select>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-globe" aria-hidden="true"></i>
						</span>
					</div>



					<div class="wrap-input100 validate-input {{ $errors->has('trxid') ? 'validate-input alert-validate' : '' }}" data-validate = "{{ $errors->has('trxid') ? $errors->first('trxid') : 'bKash TrxID is required' }}">
						<input type="text" name="trxid" class="input100"  value="{{ old('trxid') }}" placeholder="bKash TrxID" >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-money" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<label class="text-center">* First, you have to send 500BDT on this bKash number 01700110022. Then, enter your bKash TrxID into the form.
						</label>
						<button type="submit" class="login100-form-btn">
							Register
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="{{ route('password.request') }}">
							Username / Password?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="{{ route('login') }}">
							<b>Login your Account</b>
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	@enddesktop
<script src="{{ asset('AdminSD/assets/js/countries.js') }}"></script>
<script language="javascript">
    populateCountries("country");
</script>
@endsection
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
	
	<div class="limiter laptop">
		<div class="container-login100">
			<form class="validate-form" action="index.html" method="get" enctype="">
			<div class="wrap-login100">
				<span class="login100-form-title">
						Let's Join As a Researcher
					</span>
				<div class="login100-pic" >
					<div class="wrap-input100 validate-input" data-validate = " Name is required">
						<input type="text" name="name" class="input100" value="" placeholder="Name" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Email is required: ex@abc.xyz">
						<input type="email" name="email" class="input100" value=""  placeholder="Email" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input type="password" name="password" class="input100" value=""  placeholder="Password" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Confirm Password is required">
						<input type="password" name="password_confirmation" class="input100" value="" placeholder="Confirm Password" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Phone is required">
						<input type="text" name="phone" class="input100" value=""  placeholder="Phone" required>
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
					<div class="wrap-input100 validate-input" data-validate = "Profile Photo is required: ex@abc.xyz">
						<input type="file" name="image" class="" value=""  placeholder="Profile Photo" accept="image/*">
						<span class="focus-input100"></span>
						<!-- <span class="symbol-input100">
							<i class="fa fa-camera" aria-hidden="true"></i>
						</span> -->
					</div>
					
					<div class="wrap-input100 validate-input" data-validate = "Department is required">
						<input type="text" name="edu_dept" class="input100" value=""  placeholder="Department" required >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-book" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "University is required">
						<input type="text" name="edu_varsity" class="input100" value=""  placeholder="University" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-university" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Country is required">
						<select id="country" name="edu_country" class="input100" value="" placeholder="Slect Country" required>
							<option type="text" value="rana"> test</option>
							<option type="text" value="rana"> test</option>
							<option type="text" value="rana"> test</option>
							<option type="text" value="rana"> test</option>
						</select>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-globe" aria-hidden="true"></i>
						</span>
					</div>



					<div class="wrap-input100 validate-input" data-validate = "bKash TrxID is required">
						<input type="text" name="trxid" class="input100"  value="" placeholder="bKash TrxID" required>
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
					<a class="txt2" href="#">
						Username / Password?
					</a>
				</div>

				<div class="text-left p-t-136 container-login100-form-btn">
						<a class="txt2" href="index.html">
							<b>Login your Account</b>
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
				</div>
			</div>
			</form>
		</div>
	</div>
<!-- 	laptop end -->
<!-- 	other start -->
<div class="limiter mobile">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="{{ asset('auth/images/img-01.png') }}" alt="IMG">
				</div>

				<form class="login100-form validate-form">
					<span class="login100-form-title">
						Let's Join As a Researcher
					</span>

					<div class="wrap-input100 validate-input" data-validate = " Name is required">
						<input type="text" name="name" class="input100" value="" placeholder="Name" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Email is required: ex@abc.xyz">
						<input type="email" name="email" class="input100" value=""  placeholder="Email" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input type="password" name="password" class="input100" value=""  placeholder="Password" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Confirm Password is required">
						<input type="password" name="password_confirmation" class="input100" value="" placeholder="Confirm Password" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Phone is required">
						<input type="text" name="phone" class="input100" value=""  placeholder="Phone" required>
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
					<div class="wrap-input100 validate-input" data-validate = "Profile Photo is required: ex@abc.xyz">
						<input type="file" name="image" class="" value=""  placeholder="Profile Photo" accept="image/*">
						<span class="focus-input100"></span>
						<!-- <span class="symbol-input100">
							<i class="fa fa-camera" aria-hidden="true"></i>
						</span> -->
					</div>
					
					<div class="wrap-input100 validate-input" data-validate = "Department is required">
						<input type="text" name="edu_dept" class="input100" value=""  placeholder="Department" required >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-book" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "University is required">
						<input type="text" name="edu_varsity" class="input100" value=""  placeholder="University" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-university" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Country is required">
						<select id="country" name="edu_country" class="input100" value="" placeholder="Slect Country" required>
							<option type="text" value="rana"> test</option>
							<option type="text" value="rana"> test</option>
							<option type="text" value="rana"> test</option>
							<option type="text" value="rana"> test</option>
						</select>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-globe" aria-hidden="true"></i>
						</span>
					</div>



					<div class="wrap-input100 validate-input" data-validate = "bKash TrxID is required">
						<input type="text" name="trxid" class="input100"  value="" placeholder="bKash TrxID" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-money" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="index.html">
							<b>Login your Account</b>
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection
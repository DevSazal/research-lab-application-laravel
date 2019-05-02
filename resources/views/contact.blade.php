@extends('layouts.public')

@section('title', 'Contact - ')
  
@section('content')
  <!--Header menu option End -->
 
	<!--Location map Start -->
	<section id="location-map">	
	
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.7896223640487!2d90.37421641438482!3d23.75488038458712!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8ace928ae15%3A0xaa8023ec98f14cf5!2sDaffodil+International+University!5e0!3m2!1sen!2sbd!4v1544072897236" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
		
	</section>
	<!--Location map End -->
	
	<div class="container"> 
		<section class="contact-us pt-20 pb-10"> 
			<h2>KEEP IN TOUCH</h2>
			<p>Your email address will not be published. Required fields are marked.</p>
			<hr />
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-sm-6 form-group">
							<input class="form-control" id="name" name="name" placeholder="Name*" type="text" required>
						</div>
						<div class="col-sm-6 form-group">
							<input class="form-control" id="email" name="email" placeholder="Email*" type="email" required>
						</div>
						<div class="col-sm-12 form-group">
							<input class="form-control" id="subject" name="subject" placeholder="Subject*" type="text" required>
						</div>
					</div>
					<textarea class="form-control" id="comments" name="comments" placeholder="Comment*" required rows="5"></textarea>
				  <br>
				  <div class="row">
						<div class="col-md-12 form-group">
							<button class="btn" type="submit">Send</button>
						</div>
				  </div>
				</div>
		
			  </div>
		</section>
		<section class="publication pt-20 pb-10">
			<div class="row">
				<div class="col-sm-12 col-md-4 col-lg-4">
				  <div class="panel panel text-center ">
					<div class="panel-heading pt-40 "> <i class="fas fa-phone fa-4x"></i></div>
					<div class="panel-body"> <b>+880-1773-053355</b> <br /><b>+880-1521-117791</b> </div>
				  </div>
				</div>
				<div class="col-sm-12 col-md-4 col-lg-4">
				  <div class="panel panel text-center">
					<div class="panel-heading pt-40 "> <i class="fas fa-envelope fa-4x"></i> </div>
					<div class="panel-body"> <b>info_csc@diu.edu.bd</b> <br /><b>support_csc@diu.edu.bd</b></div>
				  </div>
				</div>
				<div class="col-sm-12 col-md-4 col-lg-4">
				  <div class="panel panel text-center">
					<div class="panel-heading pt-40 "><i class="fas fa-map-marked-alt fa-4x"></i> </div>
					<div class="panel-body"> <b>Daffodil Tower 4/2, Sobhanbag, Mirpur Rd, Dhaka 1207</b></div>
				  </div>
				</div>
			</div> 
		</section>
	</div>
 
@endsection
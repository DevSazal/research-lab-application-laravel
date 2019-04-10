
@extends('layouts.public')

@section('title', '')
  
@section('content')
  <!--norse-map section start-->
  <section id="norse-map">
    <iframe src="https://cybermap.kaspersky.com/widget/dynamic.html" width="100%" height="650px" style="#controls{ display: none;}"></iframe>
  </section>
  <!--norse-map section End-->

  <div class="container">
    <!-- Container For all section-->
    <!--research section start-->
    <section class="research pt-40">
		<div class="row">
			<div class="col-sm-8 col-md-8 col-lg-8">
			  <h2 class="text-center">OUR RESEARCH</h2>
			  <p class="text-justify text-center pt-10">The Cyber and Information Security Research (CISR) Group conduct cutting-edge research in cyber warfare, situational understanding, visual analytics, secure communications, sensing and signal
				analytics to defend the nation’s critical infrastructures against attacks from known and future adversaries, understand the threat to provide real-time actionable intelligence from diverse data, secure the supply chain and critical
				infrastructure, enable continuing operational capabilities, and defeat known and future adversaries.!!!It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point
				of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use
				Lorem Ipsum as their default model text.</p>
			</div>
			<div class="col-sm-4 col-md-4 col-lg-4 pd-20">
			<!-- <img class="img-responsive center-block" src="img/saburkhan11.png" alt="sabur khan" /> -->
			   
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
					<ol class="carousel-indicators">
					  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					  <li data-target="#myCarousel" data-slide-to="1"></li>
					  <li data-target="#myCarousel" data-slide-to="2"></li>
					</ol>

				<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">

						<div class="item active">
							<img class="img-responsive center-block" src="{{asset('assets/img/saburkhan11.png') }}" alt="Sabur Khan" >
							<div class="carousel-caption">
								<h4><b>Sabur Khan</b></h4>
								<p>Honourable Chairman</p>
							</div>
						</div>
						<div class="item">
							<img class="img-responsive center-block" src="{{asset('assets/img/D.Touhid buiyan.png') }}" alt="D.Touhid buiyan">
							<div class="carousel-caption">
							  <h4><b>Dr. Touhid buiyan</b></h4>
							  <p>Head, Dept. of SWE</p>
							</div>
					  </div>
					  <!--<div class="item">
						<img class="img-responsive center-block" src="{{asset('assets/img/Maruf hasan.jpg') }}" alt="Maruf hasan">
						<div class="carousel-caption">
							<h4><b>Maruf hasan</b></h4>
							<p>Security Specialist</p>
						</div>
					  </div>-->
					   <!-- Left and right controls-->
						<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
						  <span class="<!--glyphicon glyphicon-chevron-left-->" aria-hidden="true"></span>
						  <span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
						  <span class="<!--glyphicon glyphicon-chevron-left-->" aria-hidden="true"></span>
						  <span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div>
		</div>
    </section>
		
	<!--research section End-->
    <!--Current research publication section start-->
    <section class="publication pt-20">
      <h2 class="text-left pb-15">CURRENT RESEARCH</h2>
      <div class="row">
        <div class="col-sm-12 col-md-4 col-lg-4">
          <div class="panel" onclick="window.location = 'https://appsoliclab.com/';">
            <div class="panel-heading"><b><span class="glyphicon glyphicon-book pr-5" aria-hidden="true"></span> Publication</b></div>
            <div class="panel-body">An Algorithm for Constructing and Searching Spaces of Alternative Hypotheses</div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4">
          <div class="panel" onclick="window.location = 'https://appsoliclab.com/';">
            <div class="panel-heading"><b><span class="glyphicon glyphicon-book pr-5" aria-hidden="true"></span> Publication</b></div>
            <div class="panel-body">An Algorithm for Constructing and Searching Spaces of Alternative Hypotheses</div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4">
          <div class="panel" onclick="window.location = 'https://appsoliclab.com/';">
            <div class="panel-heading"><b><span class="glyphicon glyphicon-book pr-5" aria-hidden="true"></span> Publication</b></div>
            <div class="panel-body">An Algorithm for Constructing and Searching Spaces of Alternative Hypotheses</div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4">
          <div class="panel" onclick="window.location = 'https://appsoliclab.com/';">
            <div class="panel-heading"><b><span class="glyphicon glyphicon-book pr-5" aria-hidden="true"></span> Publication</b></div>
            <div class="panel-body">An Algorithm for Constructing and Searching Spaces of Alternative Hypotheses</div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4">
          <div class="panel" onclick="window.location = 'https://appsoliclab.com/';">
            <div class="panel-heading"><b><span class="glyphicon glyphicon-book pr-5" aria-hidden="true"></span> Publication</b></div>
            <div class="panel-body">An Algorithm for Constructing and Searching Spaces of Alternative Hypotheses</div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4">
          <div class="panel" onclick="window.location = 'https://appsoliclab.com/';">
            <div class="panel-heading"><b><span class="glyphicon glyphicon-book pr-5" aria-hidden="true"></span> Publication</b></div>
            <div class="panel-body">An Algorithm for Constructing and Searching Spaces of Alternative Hypotheses</div>
          </div>
        </div>
      </div>
    </section>
    <!--Current research publication section End-->

    <!-- Project section start -->
    <section class="project pt-20">
      <h2 class="text-left pb-15">PROJECTS</h2>
      <div class="row">
        <div class="col-sm-12 col-md-4 col-lg-4">
          <div class="panel panel1">
            <div class="panel-heading pt-40"><h1>Snoop Switch</h1> </div>
            <div class="panel-body"><h2>Detect mobile networks abuse on your Android phone.</h2></div>
            <div class="project-links pb-40">
              <a href=""><i class="fas fa-envelope"></i></a>
              <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4">
          <div class="panel panel2" >
            <div class="panel-heading pt-40"><h1>Snoop Switch</h1> </div>
            <div class="panel-body"><h2>Detect mobile networks abuse on your Android phone.</h2></div>
            <div class="project-links pb-40">
              <a href=""><i class="fas fa-envelope"></i></a>
              <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4">
          <div class="panel panel1" >
            <div class="panel-heading pt-40"><h1>Snoop Switch</h1> </div>
            <div class="panel-body"><h2>Detect mobile networks abuse on your Android phone.</h2></div>
            <div class="project-links pb-40">
              <a href=""><i class="fas fa-envelope"></i></a>
              <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4">
          <div class="panel panel2">
            <div class="panel-heading pt-40"><h1>Snoop Switch</h1> </div>
            <div class="panel-body"><h2>Detect mobile networks abuse on your Android phone.</h2></div>
            <div class="project-links pb-40">
              <a href=""><i class="fas fa-envelope"></i></a>
              <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4">
          <div class="panel panel1">
            <div class="panel-heading pt-40"><h1>Snoop Switch</h1> </div>
            <div class="panel-body"><h2>Detect mobile networks abuse on your Android phone.</h2></div>
            <div class="project-links pb-40">
              <a href=""><i class="fas fa-envelope"></i></a>
              <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4">
          <div class="panel panel2">
            <div class="panel-heading pt-40"><h1>Snoop Switch</h1> </div>
            <div class="panel-body"><h2>Detect mobile networks abuse on your Android phone.</h2></div>
            <div class="project-links pb-40">
              <a href=""><i class="fas fa-envelope"></i></a>
              <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
          </div>
        </div>
    </section>
    <!-- Project section end -->
	
	<!-- Event section start -->
	<section class="events pt-20 pb-30"> 
		<h2>EVENTS</h2>
		<p>Upcoming Education Events to feed your brain.</p>
		<hr />
		<div class="row"> 
			<div class="single-event">
				<div class="col-sm-2 col-md-2 color-main br-1"> 
					<h1 class="text-center"><b>18</b></h1>
					<p class="text-center"><b>DECEMBER</b></p>
				</div>
				<div class="col-sm-6 col-md-6 pull-left"> 
					<a href="#"><h3>Cyber Defence Interactive Seminer</h3></a>
					<p class="font-12"><b><span class="glyphicon glyphicon-time"></span> 8:00 AM - 5:00 PM  <span class="glyphicon glyphicon-map-marker"></span> DAFFODIL 71</b></p>
					<p>Proactive cyber defense or active cyber defense (ACD) means acting in anticipation to oppose an attack involving computers and networks.</p>
				</div>
				<div class="col-sm-4 col-md-4"> 
					<img class="img-responsive center-block" src="{{ asset('assets/img/Picture1.jpg') }}" alt="" />
				</div>
			 </div>
			<div class="single-event">
				<div class="col-sm-2 col-md-2 color-main br-1"> 
					<h1 class="text-center"><b>04</b></h1>
					<p class="text-center"><b>JANUARY</b></p>
				</div>
				<div class="col-sm-6 col-md-6 pull-left"> 
					<a href="#"><h3>Workshop on Penetration Testing</h3></a>
					<p class="font-12"><b><span class="glyphicon glyphicon-time"></span> 8:00 AM - 5:00 PM  <span class="glyphicon glyphicon-map-marker"></span> DAFFODIL 71</b></p>
					<p>Penetration testing (also called pen testing) is the practice of testing a computer system, network or Web application to find vulnerabilities that an attacker could exploit.</p>
				</div>
				<div class="col-sm-4 col-md-4"> 
					<img class="img-responsive center-block" src="{{ asset('assets/img/Picture3.jpg') }}" alt="" />
				</div>
			</div>
		</div>
	</section>
	<!-- Event section End -->
  </div>
  
  <!-- footer section Start -->
@endsection
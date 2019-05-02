
@extends('layouts.public')

@section('title', '')
  
@section('content')

<style>
  .image-box{
    position: relative;
      margin-top: 5px;
      transition: all 0.8s eas      top: 0;
      left: 0;
      width: 225px;
      border-radius: 3px;
      box-shadow: 0 1.5rem 4rem rgba(0, 0, 0, 0.15);
      transition: all 0.2s; 
  }

  .overlay-top-right {
      top: -10px;
      right: -10px;
  }
  
  .overlay {
      width: 150px;
      height: 150px;
      overflow: hidden;
      position: absolute;
      z-index: 2;
  }
  .overlay-top-right span {
    left: -24px;
    top: 30px;
    transform: rotate(45deg);
  }
  .overlay span {
  position: absolute;
    display: block;
    width: 258px;
    padding: 8px 0;
    background-color: #ea6355;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
    color: #fff;
    font: 700 12px/1 "Lato", sans-serif;
    text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
    text-transform: uppercase;
    text-align: center;
  }

  .overlay-3 span {
      background-image: linear-gradient(to right bottom, #2998ff, #5643fa);
  }

  @media only screen and (max-width: 600px){
    .image-box{
      width: 100%;
      height: 225px;
    }
  } 
  @media only screen and (max-width: 1023px){
    .image-box{
      width: 100%;
      height: 100%;
    }
  }
 </style>


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
					  <div class="item">
						<img class="img-responsive center-block" src="{{asset('assets/img/Maruf-hasan.png') }}" alt="Maruf hasan">
						<div class="carousel-caption">
							<h4><b>Maruf Hassan</b></h4>
							<p>Security Specialist</p>
						</div>
					  </div>
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
        @foreach ($research as $r) 
        <div class="col-sm-12 col-md-4 col-lg-4">
          <div class="panel" onclick="window.location = 'https://appsoliclab.com/';">
            <div class="panel-heading"><b><span class="glyphicon glyphicon-book pr-5" aria-hidden="true"></span> {{ \Illuminate\Support\Str::words($r->title, 7) }}</b></div>
            <div class="panel-body">{{ \Illuminate\Support\Str::words($r->description, 15,'....') }}</div>
          </div>
        </div>
        @endforeach
        <!-- <div class="col-sm-12 col-md-4 col-lg-4">
          <div class="panel" onclick="window.location = 'https://appsoliclab.com/';">
            <div class="panel-heading"><b><span class="glyphicon glyphicon-book pr-5" aria-hidden="true"></span> Publication</b></div>
            <div class="panel-body">An Algorithm for Constructing and Searching Spaces of Alternative Hypotheses</div>
          </div>
        </div> -->
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
              <a ><i class="fas fa-envelope"></i></a>
              <a ><i class="fab fa-youtube"></i></a>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4">
          <div class="panel panel2" >
            <div class="panel-heading pt-40"><h1>Snoop Switch</h1> </div>
            <div class="panel-body"><h2>Detect mobile networks abuse on your Android phone.</h2></div>
            <div class="project-links pb-40">
              <a ><i class="fas fa-envelope"></i></a>
              <a ><i class="fab fa-youtube"></i></a>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4">
          <div class="panel panel1" >
            <div class="panel-heading pt-40"><h1>Snoop Switch</h1> </div>
            <div class="panel-body"><h2>Detect mobile networks abuse on your Android phone.</h2></div>
            <div class="project-links pb-40">
              <a ><i class="fas fa-envelope"></i></a>
              <a ><i class="fab fa-youtube"></i></a>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4">
          <div class="panel panel2">
            <div class="panel-heading pt-40"><h1>Snoop Switch</h1> </div>
            <div class="panel-body"><h2>Detect mobile networks abuse on your Android phone.</h2></div>
            <div class="project-links pb-40">
              <a ><i class="fas fa-envelope"></i></a>
              <a ><i class="fab fa-youtube"></i></a>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4">
          <div class="panel panel1">
            <div class="panel-heading pt-40"><h1>Snoop Switch</h1> </div>
            <div class="panel-body"><h2>Detect mobile networks abuse on your Android phone.</h2></div>
            <div class="project-links pb-40">
              <a ><i class="fas fa-envelope"></i></a>
              <a ><i class="fab fa-youtube"></i></a>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4">
          <div class="panel panel2">
            <div class="panel-heading pt-40"><h1>Snoop Switch</h1> </div>
            <div class="panel-body"><h2>Detect mobile networks abuse on your Android phone.</h2></div>
            <div class="project-links pb-40">
              <a ><i class="fas fa-envelope"></i></a>
              <a ><i class="fab fa-youtube"></i></a>
            </div>
          </div>
        </div>
    </section>
    <!-- Project section end -->
	
	<!-- Event section start -->

  	<div class="container"> 
      <section class="events pt-20 pb-30"> 
        <h2>Events</h2>
        <p>It's helps to build your career</p>
        <hr />
        <div class="row">
          @foreach($events as $event)
          <div class="single-event">
            <div class="col-md-2 color-main br-1"> 
              <h1 class="text-center"><b>{{ \Carbon\Carbon::parse($event->start_date)->format('j') }}</b></h1>
              <p class="text-center"><b>{{ \Carbon\Carbon::parse($event->start_date)->format('F') }}</b></p>
              <p class="text-center"><b><i class="fa fa-phone-square"></i> {{ $event->contact }}</b></p>
            </div>
            <div class="col-md-6 pull-left"> 
              <a ><h3>{{ $event->title }}</h3></a> 
            <p class="font-12"><b><span class="glyphicon glyphicon-time"></span> {{ \Carbon\Carbon::parse($event->start_time)->format('h:m A') }}<i class="fas fa-money-bill-alt pl-5 "></i> @if($event->fee == NULL )<span> FREE</span> @else <span>{{$event->fee}} BDT</span>@endif <span class="glyphicon glyphicon-map-marker"></span> {{ $event->venue }}</b></p>
              <p style="text-align: justify;"> {{ \Illuminate\Support\Str::words($event->description, 39,'....') }}</p>
            </div>
            <div class="col-md-4 col-" style="overflow: hidden;">
              <div class="image-box center-block">
                <img class="img-responsive " src="{{ asset('storage/trainingPhoto/'.$event->file)}}" alt="" />
                <div class="overlay overlay-top-right .overlay-3 "> 
                  @if($event->type == 0)<span>Workshop</span>@elseif($event->type == 1)<span>Seminar</span>@endif
                </div>
              </div> 
            </div>
          </div>
          @endforeach
        </div>
      </section>
    </div>
	<!-- Event section End -->
</div>
  
  <!-- footer section Start -->
@endsection
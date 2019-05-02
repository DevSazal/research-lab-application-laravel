@extends('layouts.public')

@section('title', 'Awareness Events - ')
  
@section('content')

 <style>
 	.image-box{
 		position: relative;
    	margin-top: 5px;
	    transition: all 0.8s eas	    top: 0;
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
  <section id="training-map">
    <img src="{{ asset('assets/img/cybersecurity-seninar-header.jpg') }}" width="100%" height="350px" style="#controls{ display: none;}"></img>
  </section>
  <!--norse-map section End-->
  
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
			 
			<nav class="pagination-box" aria-label="Page navigation">
          {{ $events->links() }}                         
       	 </nav>
		</div>
	</section>
  
	</div>

 @endsection
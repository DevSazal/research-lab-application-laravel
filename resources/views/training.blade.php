@extends('layouts.public')

@section('title', 'Training - ')
  
@section('content')

  <style type="text/css">
    .short-line-up {
      background: #e74c3c none repeat scroll 0 0;
      display: block;
      height: 3px;
      width: 50px;
      margin-bottom: 25px;
    }

    
    .short-line {
      background: #85cf73 none repeat scroll 0 0;
      display: block;
      height: 3px;
      width: 50px;
      margin-bottom: 10px;
    }
    .panel {
      border-radius: unset;
    }
    .trainer i{
      color:#337ab7;
      padding-right: 7px;
      
    }

    .short-line-after-trainer {
      background: #f1eeee none repeat scroll 0 0;
      display: block;
      height: 1px;
      width: 100%;
      margin: 10px 0;
    }

    .trainer-footer i {
    color: #6ECF73;
    padding-right: 7px;

    }
    .panel-body {
      padding-top: 5px;
    }

  </style>

	<!--norse-map section start-->
	  <section id="training-map">
		<img src="{{ asset('assets/img/training-banner-5.jpg') }}" width="100%" height="350px" style="#controls{ display: none;}"></img>
	  </section>
  <!--norse-map section End-->

  <section class="traning pb-20 pt-20" >
      <div class="container">
        <h2 class="text-left ">TRAINING</h2>
        <p>It's helps to build your career</p>
        <span class="short-line-up"></span>
          <div class="row">
              @foreach($trainings as $t)
              <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('storage/trainingPhoto/'.$t->file)}}" alt="Card image cap" width="100%" alt="training image" style="height: 180px;">
                    <div class="card-body"> 
                        <h5 class="card-title">{{ $t->title }}</h5>
                        <span class="short-line"></span>
                        <div style="padding-bottom:20px"> @if($t->type == 0)<span class="label label-success">Technical</span>@elseif($t->type == 1)<span class="label label-primary">Vendor</span>@endif</div> 

                        <p class="card-text">{{ \Illuminate\Support\Str::words($t->description, 29,'....') }}</p>
                        <span>
                          <i class="far fa-user"></i><span class="icon-text">{{ $t->trainer_name }}</span> <br>
                          <i class="far fa-calendar-alt"></i><span class="icon-text">{{ \Carbon\Carbon::parse($t->start_date)->format('j F Y') }}</span>    
                        </span>

                        <span class="short-line-after-trainer"></span>
                        <div class="trainer-footer"> 
                            <div class="row">
                                <div class="col-sm-5"><i class="fas fa-money-bill-alt"></i> @if($t->fee != NULL){{ $t->fee.'' }}@else<span>Free</span>@endif</div>
                                <div class="col-sm-7 text-right"><i class="fa fa-phone"></i> {{ $t->contact }}</div>
                            </div> 
                        </div> 
                        
                    </div>
                </div>
              </div>
            @endforeach
          </div>
          <nav class="pagination-box" aria-label="Page navigation">
          {{ $trainings->links() }}                         
        </nav>
      </div>
  </section>

 @endsection
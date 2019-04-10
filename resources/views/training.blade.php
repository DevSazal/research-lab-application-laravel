@extends('layouts.public')

@section('title', '')
  
@section('content')

  <style type="text/css">
    
    .short-line {
      background: #337ab7 none repeat scroll 0 0;
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
      background: #337ab7 none repeat scroll 0 0;
      display: block;
      height: 1px;
      width: 100%;
      margin: 10px 0;
    }

    .trainer-footer i{
      color:#337ab7;
      padding-right: 7px;
    }
    .panel-body {
      padding-top: 5px;
    }

  </style>

	<!--norse-map section start-->
	  <section id="training-map">
		<img src="{{ asset('assets/img/RND header.jpg') }}" width="100%" height="350px" style="#controls{ display: none;}"></img>
	  </section>
  <!--norse-map section End-->
  <section class="traning" style="padding-top: 30px;">
    <div class="container"> 
        <div class="row">
            <div class="col-md-3">
                <img  src="{{ asset('assets/img/Picture1.jpg') }}" width="100%" alt="Trainer image">
                <div class="panel panel-default ">
                    <div class="panel-body">
                        <div class="training">
                            <div class="row">
                              <div class="container"> 
                                <h4><b>Web Development</b></h4>
                              </div>
                            </div>
                            <span class="short-line"></span>
                        </div>  
                        <div class="trainer">
                            <div class="row">
                                <div class="container"> 
                                  <div><i class="fas fa-user-tie"></i> Md Kamrul Hasan</div>
                                  <div><i class="fa fa-calendar fa-1x"></i> 12-04-2019</div> 
                                </div>              
                            </div> 
                        </div> 
                        <span class="short-line-after-trainer"></span>
                        <div class="trainer-footer"> 
                            <div class="row">
                                <div class="col-sm-6"><i class="fas fa-money-bill-alt"></i> 12500</div>
                                <div class="col-sm-6"><i class="fa fa-phone"></i> 01521117791</div>
                            </div> 
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
 @endsection
@extends('layouts.public')

@section('title', 'Research - ')
  
@section('content')

<style type="text/css">
  .short-line {
      background: #e74c3c none repeat scroll 0 0;
      display: block;
      height: 3px;
      width: 50px;
      margin-bottom: 25px;
    }

</style>
 
	<!--norse-map section start-->
	  <section id="training-map">
		<img src="{{ asset('assets/img/RND header.jpg') }}" width="100%" height="350px" style="#controls{ display: none;}"></img>
	  </section>
    <!--norse-map section End-->
 
 <div class="container">
 <!--Current research publication section start-->
    <section class="publication pt-20 pb-30">
      <h2 class="text-left ">VIEW ALL RUNNING RESEARCH </h2>
      <p>It's helps to build your career</p>
      <span class="short-line"></span>
      <div class="row">
         @foreach ($research as $r) 
        <div class="col-sm-12 col-md-4 col-lg-4">
          <div class="panel" onclick="window.location = 'https://appsoliclab.com/';">
            <div class="panel-heading"><b><span class="glyphicon glyphicon-book pr-5" aria-hidden="true"></span> {{ \Illuminate\Support\Str::words($r->title, 7) }} </b></div>
            <div class="panel-body">{{ \Illuminate\Support\Str::words($r->description, 15,'....') }}</div>
  			    <div class="panel-footer">
    			     <div class="col-sm-6 pull-left"> <i class="fas fa-user"></i> {{ $r->user->name }}</div>
    				    <div class="col-sm-6 pull-right"> <i class="fas fa-calendar-alt"></i>  {{ \Carbon\Carbon::parse($r->created_at)->format('j F Y') }}</div>
  			    </div>
          </div>
        </div>
        @endforeach 
      </div>
      <nav class="pagination-box" aria-label="Page navigation">
          {{ $research->links() }}                         
      </nav>
    </section>
    <!--Current research publication section End-->
</div>
	
	<!-- footer section Start -->
  @endsection
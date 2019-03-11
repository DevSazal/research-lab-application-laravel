@extends('layouts.root')

@section('title', 'Research ('.$research->id.') - '.$research->title.' | ')
@section('pagetitle', '#'.sprintf("%04d", $research->id))

@section('content')

<style>
.btn-warning.active.focus, .btn-warning.active:focus, .btn-warning.active:hover, .btn-warning:active.focus, .btn-warning:active:focus, .btn-warning:active:hover, .open>.dropdown-toggle.btn-warning.focus, .open>.dropdown-toggle.btn-warning:focus, .open>.dropdown-toggle.btn-warning:hover {
    color: #fff;
    background-color: #d58512;
    border-color: #d58512;
}
</style>
                <div class="row">
                    <div class="col-md-8">
                        <section class="single-research-feed">
                            <div class="card">
                                <div class="header">
                                    <h3 class="title"><b>{{ $research->title }}</b></h3>
                                </div>
                                <section class="single-feed-research">
                                    <div class="content">
                                        <p class="category single-feed-time" data-toggle="tooltip" data-placement="bottom" title=""><i class="ti-reload"></i> <b>&nbsp Posted</b> {{ \Carbon\Carbon::parse($research->created_at)->format('jS F Y') }}</p>
                                        <p class="category single-feed-time text-justify"> {{$research->description}}</p>
                                        <div class="footer">
                                            <div class="chart-legend">
                                            <!--<i class="fa fa-circle text-info"></i>
                                                <i class="fa fa-circle text-danger"></i>
                                                <i class="fa fa-circle text-warning"></i>-->
                                                <p><b>Skills required</b></p>
                                                <?php $rs = App\ResearchSkill::where('research_id', $research->id)->get(); ?>  
                                                @foreach($rs as $skill)
                                                <div class="tag skill"> {{ $skill->skill->title }}</div>
                                                @endforeach
                                            </div>
                                            <br>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <section>
                            <div class="card">
                                <div class="content">
                                    <div class="footer">
                                        <div class="Additional-File">
                                            <div class="chart-legend">
                                                <!--<i class="fa fa-circle text-info"></i>
                                                <i class="fa fa-circle text-danger"></i>
                                                <i class="fa fa-circle text-warning"></i>-->
                                                <p><b>Additional File</b></p>
                                                <?php $files = App\File::where('research_id', $research->id)->get(); ?>  
                                                @foreach($files as $file)
                                                <div class="document">
                                                    <i class="fa fa-paperclip" aria-hidden="true"></i>
                                                    <a href="{{ asset('storage/researchfile/'.$file->file) }}" target="_blank"> {{ $file->file }}</a>
                                                </div>
                                                @endforeach
                                                
                                            </div>
                                        </div>
                                        <br>
                                    </div>
                                </div> 
                            </div> 
                        </section>
                    </div>
                    <div class="col-md-4"> 
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-md-12">
                                    <?php
                                     $check = App\ResearchApplicant::where('research_id', $research->id)->where('user_id', Auth::user()->id)->count();
                                     ?>
                                        @if($check > 0)
                                        <button class="btn-primary-color" style="background: #e4e4e4;" disabled><b>Applied</b></button>
                                        @else
                                        <button onclick="$(this).parent().find('#publish').submit()" class="btn-primary-color" ><b>Apply</b></button>
                                        <form id="publish" method="POST" action="{{ url('app/research/'.$research->id.'/apply') }}">
                                                            @method('PUT')
                                                            @csrf
                                        </form>
                                        @endif
                                    </div>  
                                </div>
                                <div class="footer">
                                    <div class="stats">
                                        <div class="about-supervisor"><h4>About Supervisor</h4></div>
                                        <div class="supervisor-info">
                                            <p class="supervisor"><i class="fa fa-user pl-5"></i>{{ $research->user->name }} </p>
                                            <p class="Supervisor-designation"><i class="ti-briefcase pl-5"></i>@if(empty($research->user->designation))Undefined @else{{ $research->user->designation }}@endif</p>
                                            <p class="Supervisor-designation"><i class="ti-location-pin pl-5"></i>@if(empty($research->user->company))Undefined @else{{ $research->user->company }}@endif</p>
                                            <p class="supervisor-degree"><i class="ti-book pl-5"></i>@if(empty($research->user->edu_dept))Undefined @else{{ $research->user->edu_dept }}@endif</p> 
                                            <p class="supervisor-degree-map"><i class="fa fa-location-arrow pl-5"></i>@if(empty($research->user->edu_varsity))Undefined @else{{ $research->user->edu_varsity }}@endif, @if(empty($research->user->edu_country))Undefined @else{{ $research->user->edu_country }}@endif</p>
                                        </div>
                                        <div class="research-status">
                                            <h5><b>Research Status</b></h5>
                                            <p><i class="ti-stats-up pl-5"></i> <span class="pl-5">Open</span>  {{ $open = App\Research::where('status', 1)->where('user_id', $research->user_id)->count() }} </p>  
                                            <p><i class="ti-reload pl-5"></i> <span class="pl-5">Running</span>   {{ $run = App\Research::where('status', 2)->where('user_id', $research->user_id)->count() }}</p>  
                                            <p><i class="ti-check pl-5"></i><span class="pl-5">Completed</span>   {{ $done = App\Research::where('status', 3)->where('user_id', $research->user_id)->count() }}</p> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-12">
                        <div class="card ">
                            <div class="header">
                                <h3 class="title"><b>Applied Member</b></h3>
                            </div>
                            <hr>
                            @foreach($appliers as $applier)
                            <?php $user = App\User::find($applier->user_id); ?>
                            
                            <section class="single-feed-profile">
                                <div class="single-feed">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="header">
                                                <a href="#"><h4 class="title"><b>{{ $applier->user['name'] }}</b></h4></a>
                                                <a href="{{ url('/app/research/'.$research->id.'/call/'.$applier->user_id) }}" class="btn btn-warning btn-sm" style="border-radius: unset; margin-top: -24px;">Keep Interview</a>
                                            </div>
                                            <div class="content">
                                                <div class="col-md-6"> 
                                                    <div class="researcher-info category"> 
                                                        <p class="supervisor-degree"><i class="ti-book pl-5"></i> {{ $applier->user['edu_dept'] }}</p>
                                                        <p class="Supervisor-designation"><i class="ti-location-pin pl-5"></i> {{ $applier->user['edu_varsity'] }}</p> 
                                                    </div> 
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="researcher-info category">     
                                                        <p><i class="ti-reload pl-5"></i> <span class="pl-5">Running</span>   {{ $run = App\ResearchApplicant::where('status', 2)->where('user_id', $applier->user_id)->count() }}</p>  
                                                        <p><i class="ti-check pl-5"></i><span class="pl-5">Completed</span>   {{ $end = App\ResearchApplicant::where('status', 3)->where('user_id', $applier->user_id)->count() }}</p> 
                                                    </div>   
                                                </div>
                                                <div class="footer">
                                                    <div class="chart-legend">
                                                    <!--<i class="fa fa-circle text-info"></i>
                                                        <i class="fa fa-circle text-danger"></i>
                                                        <i class="fa fa-circle text-warning"></i>-->
                                                        <div class="tag skill"> Security</div>
                                                        <div class="tag skill"> Network security</div>
                                                        <div class="tag skill"> Application security</div>
                                                    </div>
                                                    <br>
                                                    <div class="stats feed-stats">
                                                        <div class="col-md-6 research-feed-footer-left"><i class="ti-reload"></i> <b>Applied</b> 
                                                        <?php 
                                                        if(date('Y-m-d') != ($applier->updated_at)->format('Y-m-d')){
                                                            echo ($applier->updated_at)->format('Y-m-d');
                                                            // echo date('Y-m-d', strtotime('today - 7 days')); 
                                                        }else{
                                                            $date1 = new DateTime(date('Y-m-d H:i:s'));
                                                            $date2 = new DateTime($applier->updated_at);
                                                            echo $date1->diff($date2)->format("%h hour %i minutes ago");
                                                        }
                                                    ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 single-feed-img"> 
                                            <img src="{{ $applier->user['image'] != NULL ? asset('storage/profile/'.$applier->user['image']) : asset('AdminSD/assets/img/pro-avt.png') }}" alt="">
                                        </div>
                                    </div> 
                                </div>
                            </section>
                            
                            @endforeach
                            
                            <!-- <section class="single-feed-profile">
                                <div class="single-feed">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="header">
                                                <a href="#"><h4 class="title"><b>Jason B. Gallegos</b></h4></a>
                                            </div>
                                            <div class="content">
                                                <div class="col-md-6"> 
                                                    <div class="researcher-info category"> 
                                                        <p class="supervisor-degree"><i class="ti-book pl-5"></i> Dept. of Software Engineering</p>
                                                        <p class="Supervisor-designation"><i class="ti-location-pin pl-5"></i>Daffodil International University</p> 
                                                    </div> 
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="researcher-info category">     
                                                        <p><i class="ti-reload pl-5"></i> <span class="pl-5">Running</span>   18</p>  
                                                        <p><i class="ti-check pl-5"></i><span class="pl-5">Completed</span>   16</p> 
                                                    </div>   
                                                </div>
                                                <div class="footer">
                                                    <div class="chart-legend">

                                                        <div class="tag skill"> Security</div>
                                                        <div class="tag skill"> Network security</div>
                                                        <div class="tag skill"> Application security</div>
                                                    </div>
                                                    <br>
                                                    <div class="stats feed-stats">
                                                        <div class="col-md-6 research-feed-footer-left"><i class="ti-reload"></i> <b>Applied</b> 3 minutes ago</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 single-feed-img"> 
                                            <img src="{{ asset('AdminSD/assets/img/pro-avt.png') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </section>     -->
                        </div>
                    </div>   
                </div>

@endsection
                
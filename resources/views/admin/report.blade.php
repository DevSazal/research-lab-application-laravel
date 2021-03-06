@extends('layouts.root')

@section('title', 'Dashboard - ')
@section('pagetitle', 'Report')

@section('content')
<style> 

table,
    thead,
    tr,
    tbody,
    th{
        text-align: center;
        weight:bold;
        font-size: 12px;
        
    }
    .tooltip-inner{max-width:800px;}
</style>


    @if(Auth::user()->role > 1)
    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12 ">
                <section class="single-report-feed">
                    <div class="card">
                        <div class="header">
                            <h5 class="title"><b>Active Project</b></h5>
                        </div>
                        <section class="single-feed-research">
                            <div class="content">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                                <?php 
                                $research = App\Research::where('user_id', Auth::user()->id)->where('status', '>=', 2)
                                            ->orderBy('status', 'asc')->orderBy('id', 'desc')->get();
                                            $i = 0;
                                ?>
                                @foreach($research as $r)
                                    <?php $i++; ?>
                                    <div class="panel panel-default" role="tab">
                                        <div class="panel-heading" role="button" id="headingOne"  data-toggle="collapse" data-parent="#accordion" href="#collapse{{$r->id}}" aria-expanded="true" aria-controls="collapse{{$r->id}}">
                                            <h5 class="panel-title">
                                
                                                {{ $r->title}}
                                                
                                            </h5>
                                        </div>
                                        <div id="collapse{{$r->id}}" class="panel-collapse collapse @if($i == 1) in @endif" role="tabpanel" aria-labelledby="headingOne">
                                            <div class="panel-body table-responsive">
                                            <table class="table table-hover text-center">
                                                    <thead >
                                                    <tr>
                                                        <th><b>#</b></th>
                                                        <th><b>Researcher</b></th>
                                                        <th><b>Chat</b></th>   
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php 
                                                    $appliers = App\ResearchApplicant::where('research_id', $r->id)->where('status', '>=', 2)
                                                                ->orderBy('status', 'asc')->orderBy('id', 'desc')->get();
                                                                
                                                    ?>
                                                    @foreach($appliers as $applier)
                                                    <tr>
                                                        <td>{{ $applier->id }}</td>
                                                        <td>{{ $applier->user->name }}</td>
                                                        <td><a href="{{ url('/app/inbox/'.$r->id) }}" class="btn btn-info btn-sm">Chat</a></td>     
                                                    </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </section>
                    </div>
                </section>
                </div>
                <div class="col-md-12">
                    <section class="single-report-feed">
                        <div class="card">
                            <div class="header">
                                <h5 class="title"><b>Present Status</b></h5>
                            </div>
                            <section class="single-feed-research">
                                <div class="content">
                                    <h5><i class="ti-stats-up"> </i> Runing Research :  <b>{{ $run = App\Research::where('status', 2)->where('user_id', Auth::user()->id)->count() }}</b></h5> 
                                    <!-- <h5><i class="ti-user"> </i> Awarded Researcher : <b>12</b></h5> -->

                                </div>
                            </section>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12">
                    <section class="single-report-feed">
                        <div class="card">
                            <div class="header">
                                <h5 class="title"><b>Apointment Schedule</b></h5>
                            </div>
                            <section class="single-feed-research">
                                <div class="content table-responsive">
                                    <table class="table table-hover text-center">
                                        <thead >
                                        <tr>
                                            <th><b>#</b></th>
                                            <th><b>Appointed</b></th>
                                            <th><b>Date</b></th>
                                            <th><b>Time</b></th>
                                            <th><b>Agenda</b></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <!-- <tr>
                                            <td >1</td>
                                            <td>Rana</td>
                                            <td>10-04-2019</td>
                                            <td>10.00</td>
                                            <td>Open</td>
                                        </tr> -->
                                        <?php 
                                                $appointments = App\Appointment::where('user_id', Auth::user()->id)
                                                            ->orderBy('id', 'desc')->get();
                                                                
                                             ?>
                                        @foreach($appointments as $ap)
                                        <tr data-toggle="tooltip" data-placement="left" title="Note: {{$ap->note}}">
                                            <td>{{ $ap->id }}</td>
                                            <td>{{ $ap->appointeduser->name}}</td>
                                            <td>{{ \Carbon\Carbon::parse($ap->appointment_date)->format('j F, Y') }}</td>
                                            <td>{{ $ap->time->time }}</td>
                                            @if($ap->research_id != NULL)
                                            <td><a href="{{url('app/research/'.$ap->research_id )}}" class="btn btn-info btn-sm">#{{sprintf("%04d", $ap->research_id)}}</a></td>
                                            @else
                                            <td>Open</td>
                                            @endif
                                        </tr>
                                        @endforeach
                                        
                                        </tbody>
                                    </table>
                                </div>
                            </section>
                        </div>
                    </section>
                </div>
                <div class="col-md-12">
                    <section class="single-report-feed">
                        <div class="card">
                            <div class="header">
                                <h5 class="title"><b>Total Research Status</b></h5>
                            </div>
                            <section class="single-feed-research">
                                <div class="content">
                                    <h5><i class="ti-reload"> </i> Not Started Yet : <b>  {{ $open = App\Research::where('status', 1)->where('user_id', Auth::user()->id)->count() }}</b> </h5>  
                                    <h5><i class="ti-cup"> </i> Completed Research : <b>  {{ $complete = App\Research::where('status','>', 2)->where('user_id', Auth::user()->id)->count() }} </b></h5>
                                    
                                </div>
                            </section>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    @else
    <!-- Next -->
    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12 ">
                <section class="single-report-feed">
                    <div class="card">
                        <div class="header">
                            <h5 class="title"><b>My Research Panel</b></h5>
                        </div>
                        <section class="single-feed-research">
                            <div class="content">
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <?php 
                                    $research = App\ResearchApplicant::where('user_id', Auth::user()->id)->where('status', '>=', 2)
                                                ->orderBy('status', 'asc')->orderBy('id', 'desc')->get();
                                                $i = 0;
                                    ?>
                                    @foreach($research as $r)
                                    <?php $i++; ?>
                                    <div class="panel panel-default" role="tab">
                                        <div class="panel-heading" role="button" id="headingOne"  data-toggle="collapse" data-parent="#accordion" href="#collapse{{$r->id}}" aria-expanded="true" aria-controls="collapse{{$r->id}}">
                                        <h5 class="panel-title">
                                            
                                            {{ $r->research->title }}
                                            
                                        </h5>
                                        </div>
                                        <div id="collapse{{$r->id}}" class="panel-collapse collapse @if($i == 1) in @endif" role="tabpanel" aria-labelledby="headingOne">
                                            <div class="panel-body table-responsive">
                                            <table class="table table-hover text-center">
                                                    <thead >
                                                    <tr>
                                                        <th><b>#</b></th>
                                                        <th><b>Supervisor</b></th>
                                                        <th><b>Chat</b></th>   
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>{{ $r->research->user_id }}</td>
                                                        <td>{{ $r->research->user->name }}</td>
                                                        <td><a href="{{ url('/app/inbox/'.$r->research_id) }}" class="btn btn-info btn-sm">Chat</a></td>     
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach  
                                
                                
                            </div>
                        </section>
                    </div>
                </section>
                </div>
                <div class="col-md-12">
                    <section class="single-report-feed">
                        <div class="card">
                            <div class="header">
                                <h5 class="title"><b>Present Status</b></h5>
                            </div>
                            <section class="single-feed-research">
                                <div class="content">
                                    <h5><i class="ti-stats-up"> </i> Runing Research :  <b>{{ $run = App\ResearchApplicant::where('status', 2)->where('user_id', Auth::user()->id)->count() }}</b></h5>
                                    <!-- <h5><i class="ti-user"></i> Runing Researcher : <b>12</b></h5> -->

                                </div>
                            </section>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12">
                    <section class="single-report-feed">
                        <div class="card">
                            <div class="header">
                                <h5 class="title"><b>Apointment Schedule </b></h5>
                            </div>
                            <section class="single-feed-research">
                                <div class="content table-responsive">
                                    <table class="table table-hover text-center">
                                        <thead >
                                        <tr>
                                            <th><b>#</b></th>
                                            <th><b>Appointed By</b></th>
                                            <th><b>Date</b></th>
                                            <th><b>Time</b></th>
                                            <th><b>Agenda</b></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                                $appointments = App\Appointment::where('m_user_id', Auth::user()->id)
                                                            ->orderBy('id', 'desc')->get();
                                                                
                                             ?>
                                        @foreach($appointments as $ap)
                                        <tr data-toggle="tooltip" data-placement="left" title="Note: {{$ap->note}}">
                                            <td>{{ $ap->id}}</td>
                                            <td>{{ $ap->user->name}}</td>
                                            <td>{{ \Carbon\Carbon::parse($ap->appointment_date)->format('j F, Y') }}</td>
                                            <td>{{ $ap->time->time }}</td>
                                            @if($ap->research_id != NULL)
                                            <td><a href="{{url('app/research/'.$ap->research_id )}}" class="btn btn-info btn-sm">#{{sprintf("%04d", $ap->research_id)}}</a></td>
                                            @else
                                            <td>Open</td>
                                            @endif
                                        </tr>
                                        @endforeach
        
                                        </tbody>
                                    </table>
                                </div>
                            </section>
                        </div>
                    </section>
                </div>
                <div class="col-md-12">
                    <section class="single-report-feed">
                        <div class="card">
                            <div class="header">
                                <h5 class="title"><b>Total Status</b></h5>
                            </div>
                            <section class="single-feed-research">
                                <div class="content">
                                    <h5><i class="ti-time"> </i> Current Appointment : <b>  {{ $run = App\Appointment::where('m_user_id', Auth::user()->id)->count() }}</b> </h5>
                                    <h5><i class="ti-cup"> </i> Wining Award     : <b> {{ $award = App\ResearchApplicant::where('status','>=', 1)->where('user_id', Auth::user()->id)->count() }} </b></h5>  
                                    <h5><i class="ti-reload"> </i> Completed Research : <b>  {{ $complete = App\ResearchApplicant::where('status','>', 2)->where('user_id', Auth::user()->id)->count() }} </b></h5>
                                    
                                </div>
                            </section>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    @endif
<script>
    $(function () {
    $('[data-toggle="tooltip"]').tooltip()
    })
</script>


@endsection
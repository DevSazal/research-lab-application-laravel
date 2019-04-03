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
</style>



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
                                <div class="panel panel-default"  role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                    <h5 class="panel-title">
                                        <!-- <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> -->
                                        How to set orderby for role of post_author as parameter 8
                                        <!-- </a> -->
                                    </h5>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body table-responsive">
                                        <table class="table table-hover text-center">
                                                <thead >
                                                <tr>
                                                    <th><b>#</b></th>
                                                    <th><b>Researcher Name</b></th>
                                                    <th><b>Chat</b></th>   
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Kamrul Hasan</td>
                                                    <td><a href="#" class="btn btn-info btn-sm">Chat</a></td>     
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Sazal Hasan</td>
                                                    <td><a href="#" class="btn btn-info btn-sm">Chat</a></td>     
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default"  role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                    <h5 class="panel-title">
                                        <!-- <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> -->
                                        How to set orderby for role of post_author as parameter 8
                                        <!-- </a> -->
                                    </h5>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body table-responsive">
                                        <table class="table table-hover text-center">
                                                <thead >
                                                <tr>
                                                    <th><b>#</b></th>
                                                    <th><b>Researcher Name</b></th>
                                                    <th><b>Chat</b></th>   
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Kamrul Hasan</td>
                                                    <td><a  href="#" class="btn btn-info btn-sm">Chat</a></td>     
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Sazal Hasan</td>
                                                    <td><a  href="#" class="btn btn-info btn-sm">Chat</a></td>     
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default"  role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                    <h5 class="panel-title">
                                        <!-- <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> -->
                                        How to set orderby for role of post_author as parameter 8
                                        <!-- </a> -->
                                    </h5>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body table-responsive">
                                        <table class="table table-hover text-center">
                                                <thead >
                                                <tr>
                                                    <th><b>#</b></th>
                                                    <th><b>Researcher Name</b></th>
                                                    <th><b>Chat</b></th>   
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Kamrul Hasan</td>
                                                    <td><a href="#" class="btn btn-info btn-sm">Chat</a></td>     
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Sazal Hasan</td>
                                                    <td><a href="#" class="btn btn-info btn-sm">Chat</a></td>     
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                
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
                                    <h5><i class="ti-reload"></i> Runing Project :  <b>04</b></h5> 
                                    <h5><i class="ti-user"></i> Runing Researcher : <b>12</b></h5>

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
                                <h5 class="title"><b>Apointment of researcher </b></h5>
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
                                        <tr>
                                            <td>1</td>
                                            <td>Rana</td>
                                            <td>10-04-2019</td>
                                            <td>10.00</td>
                                            <td>Open</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Sazal</td>
                                            <td>10-04-2019</td>
                                            <td>11.00</td>
                                            <td><a href="#" class="btn btn-info btn-sm">#001</a></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Kamrul</td>
                                            <td>10-04-2019</td>
                                            <td>12.00</td>
                                            <td><a href="#" class="btn btn-info btn-sm">#002</a></td>
                                        </tr>
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
                                    <h5><i class="ti-stats-up"> </i> Complete Project : <b>  22</b> </h5>  
                                    <h5><i class="ti-user"> </i> Total Researcher : <b>  35 </b></h5>
                                    <h5><i class="ti-cup"> </i> Wining Award     : <b> 05 </b></h5>
                                </div>
                            </section>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection
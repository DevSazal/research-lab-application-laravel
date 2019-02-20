@extends('layouts.root')

@section('title', 'Dashboard - ')
@section('pagetitle', 'My Feed')

@section('content')

                    <div class="row" id="board">
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-xs-5">
                                            <div class="icon-big icon-warning text-center">
                                                <i class="ti-book"></i>
                                            </div>
                                        </div>
                                        <div class="col-xs-7">
                                            <div class="numbers">
                                                <p>Research</p>
                                                105
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <hr />
                                        <div class="stats">
                                            <i class="ti-reload"></i> Updated now
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-xs-5">
                                            <div class="icon-big icon-success text-center">
                                                <i class="ti-stats-up"></i>
                                            </div>
                                        </div>
                                        <div class="col-xs-7">
                                            <div class="numbers">
                                                <p>Open</p>
                                                1,345
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <hr />
                                        <div class="stats">
                                            <i class="ti-calendar"></i> Last day
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-xs-5">
                                            <div class="icon-big icon-danger text-center">
                                                <i class="ti-reload"></i>
                                            </div>
                                        </div>
                                        <div class="col-xs-7">
                                            <div class="numbers">
                                                <p>Running</p>
                                                23
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <hr />
                                        <div class="stats">
                                            <i class="ti-timer"></i> In the last hour
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-xs-5">
                                            <div class="icon-big icon-info text-center">
                                                <i class="ti-check"></i>
                                            </div>
                                        </div>
                                        <div class="col-xs-7">
                                            <div class="numbers">
                                                <p>Completed</p>
                                                45
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <hr />
                                        <div class="stats">
                                            <i class="ti-reload"></i> Updated now
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                   <!--  short board -->

                    <div class="row">

                        <div class="col-md-12">
                            <div class="card">
                                <div class="header">
                                    <h3 class="title"><b>My Feed</b></h3>
                                </div>
                                <hr>
                                <section class="single-feed">
                                    <div class="header">
                                        <a href="single-research-feed.html">
                                            <h4 class="title"><b>What is Lorem Ipsum</b></h4>
                                        </a>
                                    </div>
                                    <div class="content">
                                        <p class="category">Nullam et, etiam consectetuer fusce lectus nascetur at.
                                            Pulvinar dapibus diam turpis sed, vel eget neque. Sed lacus donec, neque
                                            velit viverra tellus, faucibus integer odio animi amet lacinia augue. Lacus
                                            etiam nec, fusce curabitur, sollicitudin pede suscipit quam, aliquet vel
                                            pede. Suscipit lectus luctus, ac urna eu luctus.</p>
                                        <div class="footer">
                                            <div class="chart-legend">
                                                <!--<i class="fa fa-circle text-info"></i>
                                            <i class="fa fa-circle text-danger"></i>
                                            <i class="fa fa-circle text-warning"></i>-->
                                                <div class="tag skill"> Security</div>
                                                <div class="tag skill"> Network security</div>
                                                <div class="tag skill"> Application security</div>
                                                <div class="tag skill"> Pen Testing</div>
                                                <div class="tag skill"> SQL inject Testing</div>
                                            </div>
                                            <br>
                                            <div class="stats feed-stats">
                                                <div class="col-md-6 research-feed-footer-left"><i class="ti-reload"></i>
                                                    <b>Created</b> 3 minutes ago</div>
                                                <a>
                                                    <div class="col-md-6 research-feed-footer-right"><i class="fa fa-user"></i>
                                                        Maruf Hasan</div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section class="single-feed">
                                    <div class="header">
                                        <a href="single-research-feed.html">
                                            <h4 class="title"><b>What is Lorem Ipsum</b></h4>
                                        </a>
                                    </div>
                                    <div class="content">
                                        <p class="category">Nullam et, etiam consectetuer fusce lectus nascetur at.
                                            Pulvinar dapibus diam turpis sed, vel eget neque. Sed lacus donec, neque
                                            velit viverra tellus, faucibus integer odio animi amet lacinia augue. Lacus
                                            etiam nec, fusce curabitur, sollicitudin pede suscipit quam, aliquet vel
                                            pede. Suscipit lectus luctus, ac urna eu luctus.</p>
                                        <div class="footer">
                                            <div class="chart-legend">
                                                <!--<i class="fa fa-circle text-info"></i>
                                            <i class="fa fa-circle text-danger"></i>
                                            <i class="fa fa-circle text-warning"></i>-->
                                                <div class="tag skill"> Security</div>
                                                <div class="tag skill"> Network security</div>
                                                <div class="tag skill"> Application security</div>
                                                <div class="tag skill"> Pen Testing</div>
                                                <div class="tag skill"> SQL inject Testing</div>
                                            </div>
                                            <br>
                                            <div class="stats feed-stats">
                                                <div class="col-md-6 research-feed-footer-left"><i class="ti-reload"></i>
                                                    <b>Created</b> 3 minutes ago</div>
                                                <a>
                                                    <div class="col-md-6 research-feed-footer-right"><i class="fa fa-user"></i>
                                                        Maruf Hasan</div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section class="single-feed">
                                    <div class="header">
                                        <a href="single-research-feed.html">
                                            <h4 class="title"><b>What is Lorem Ipsum</b></h4>
                                        </a>
                                    </div>
                                    <div class="content">
                                        <p class="category">Nullam et, etiam consectetuer fusce lectus nascetur at.
                                            Pulvinar dapibus diam turpis sed, vel eget neque. Sed lacus donec, neque
                                            velit viverra tellus, faucibus integer odio animi amet lacinia augue. Lacus
                                            etiam nec, fusce curabitur, sollicitudin pede suscipit quam, aliquet vel
                                            pede. Suscipit lectus luctus, ac urna eu luctus.</p>
                                        <div class="footer">
                                            <div class="chart-legend">
                                                <!--<i class="fa fa-circle text-info"></i>
                                            <i class="fa fa-circle text-danger"></i>
                                            <i class="fa fa-circle text-warning"></i>-->
                                                <div class="tag skill"> Security</div>
                                                <div class="tag skill"> Network security</div>
                                                <div class="tag skill"> Application security</div>
                                                <div class="tag skill"> Pen Testing</div>
                                                <div class="tag skill"> SQL inject Testing</div>
                                            </div>
                                            <br>
                                            <div class="stats feed-stats">
                                                <div class="col-md-6 research-feed-footer-left"><i class="ti-reload"></i>
                                                    <b>Created</b> 3 minutes ago</div>
                                                <a>
                                                    <div class="col-md-6 research-feed-footer-right"><i class="fa fa-user"></i>
                                                        Maruf Hasan</div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!--pagination-->
                                <nav class="pagination-box" aria-label="Page navigation">
                                    <ul class="pagination" role="navigation">
                                        <li class="page-item disabled" aria-disabled="true" aria-label="« Previous">
                                            <span class="page-link" aria-hidden="true">‹</span>
                                        </li>
                                        <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" rel="next" aria-label="Next »">›</a>
                                        </li>
                                    </ul>
                                </nav>
                                <!--pagination END-->
                            </div>
                        </div>
                    </div>


                    <!-- <div class="row">

                        <div class="col-md-12">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title">Users Behavior</h4>
                                    <p class="category">24 Hours performance</p>
                                </div>
                                <div class="content">
                                    <div id="chartHours" class="ct-chart"></div>
                                    <div class="footer">
                                        <div class="chart-legend">
                                            <i class="fa fa-circle text-info"></i> Open
                                            <i class="fa fa-circle text-danger"></i> Click
                                            <i class="fa fa-circle text-warning"></i> Click Second Time
                                        </div>
                                        <hr>
                                        <div class="stats">
                                            <i class="ti-reload"></i> Updated 3 minutes ago
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title">Email Statistics</h4>
                                    <p class="category">Last Campaign Performance</p>
                                </div>
                                <div class="content">
                                    <div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div>

                                    <div class="footer">
                                        <div class="chart-legend">
                                            <i class="fa fa-circle text-info"></i> Open
                                            <i class="fa fa-circle text-danger"></i> Bounce
                                            <i class="fa fa-circle text-warning"></i> Unsubscribe
                                        </div>
                                        <hr>
                                        <div class="stats">
                                            <i class="ti-timer"></i> Campaign sent 2 days ago
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card ">
                                <div class="header">
                                    <h4 class="title">2015 Sales</h4>
                                    <p class="category">All products including Taxes</p>
                                </div>
                                <div class="content">
                                    <div id="chartActivity" class="ct-chart"></div>

                                    <div class="footer">
                                        <div class="chart-legend">
                                            <i class="fa fa-circle text-info"></i> Tesla Model S
                                            <i class="fa fa-circle text-warning"></i> BMW 5 Series
                                        </div>
                                        <hr>
                                        <div class="stats">
                                            <i class="ti-check"></i> Data information certified
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->



@endsection
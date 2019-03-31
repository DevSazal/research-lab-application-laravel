<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>@yield('title')Applied Reaserch Application | Cyber Security Center | Developed by Appsolic Lab</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Bootstrap core CSS     -->
    <link href="{{ asset('AdminSD/assets/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="{{ asset('AdminSD/assets/css/animate.min.css') }}" rel="stylesheet" />

    <!--  Paper Dashboard core CSS    -->
    <link href="{{ asset('AdminSD/assets/css/paper-dashboard.css') }}" rel="stylesheet" />


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{ asset('AdminSD/assets/css/demo.css') }}" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="{{ asset('AdminSD/assets/css/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('AdminSD/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('AdminSD/assets/css/pretty-checkbox.min.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('AdminSD/assets/css/mdb.css') }}" rel="stylesheet">
     Font Awesome v5
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"> -->

    <style type="text/css">
        .pretty input:checked~.state.p-warning-o label:before, .pretty.p-toggle .state.p-warning-o label:before {
            border-color: #14bf96!important;
        }
        .pretty.p-default:not(.p-fill) input:checked~.state.p-warning-o label:after {
            background-color: #14bf96!important;
        }
    </style>
    <!-- color change code 2nd style -->
    <?php
        $color = "#1abc9c";
        $color = "#39d2b4";

        // $color = "#55c57a";
     ?>
    <style>
    .navbar .navbar-nav > li > a.btn-success, .btn-success {
        border-color: {{$color}};
        color: {{$color}};
    }
    .btn-success.active.focus, .btn-success.active:focus, .btn-success.active:hover, .btn-success:active.focus, .btn-success:active:focus, .btn-success:active:hover, .open>.dropdown-toggle.btn-success.focus, .open>.dropdown-toggle.btn-success:focus, .open>.dropdown-toggle.btn-success:hover {
        background-color: {{$color}};
        border-color: {{$color}};
    }
        .single-feed .header .title {
        color: {{$color}};
    }
        .tag {
        background-color: {{$color}};
    }

    .pagination>.disabled>span.page-link {
        color: {{$color}};
    }
    .pagination>.active>span.page-link {
        color: {{$color}};
        border: 2px solid {{$color}};
    }
    .pagination li a.page-link, .pagination li:first-child a.page-link, .pagination li:last-child a.page-link {
        color: {{$color}};

    }
    .pagination li.active a.page-link, .pagination li a.page-link:hover, .pagination li.active a.page-link:hover {
    color: {{$color}};
    border: 2px solid {{$color}};
    }
    .pagination li a.page-link, .pagination li:first-child a.page-link, .pagination li:last-child a.page-link {
    color: {{$color}};
    }
    .pagination li.active a.page-link, .pagination li a.page-link:hover, .pagination li.active a.page-link:hover {
    color: {{$color}};
    border: 2px solid {{$color}};
    }
    .navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:not(.btn):hover, .navbar-default .navbar-nav > .active > a:not(.btn):focus, .navbar-default .navbar-nav > li > a:not(.btn):hover, .navbar-default .navbar-nav > li > a:not(.btn):focus {
    color: {{$color}};
    }
    .document a {
    color: {{$color}};
    }
    .sidebar[data-active-color="danger"] .nav li.active > a, .off-canvas-sidebar[data-active-color="danger"] .nav li.active > a {
    color: {{$color}};
    }
    .btn-primary-color {
    background: {{$color}};
    }
    ul li ul .open {
    color: {{$color}} !important;
    }
    .navbar .navbar-nav > li > a.btn-success:hover, .navbar .navbar-nav > li > a.btn-success:focus, .navbar .navbar-nav > li > a.btn-success:active, .navbar .navbar-nav > li > a.btn-success.active, .open > .navbar .navbar-nav > li > a.btn-success.dropdown-toggle, .btn-success:hover, .btn-success:focus, .btn-success:active, .btn-success.active, .open > .btn-success.dropdown-toggle {
    background-color: {{$color}};
    border-color: {{$color}};
    }
    .icon-success {
    color: {{$color}};
    }
    .stats .research-feed-footer-right:hover {
    color: {{$color}};
    }
    </style>

</head>

<body onload="myLoader()">
    
    <div id="preloader"></div>  

    <div class="wrapper">
        <div class="sidebar" data-background-color="white" data-active-color="danger">

            <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="#" class="simple-text">
                        Cyber Research Lab
                    </a>
                </div>

                <ul class="nav">
                    <?php $segment = Request::segment(2) ?>
                    @guest
                    @else
                    <li class="
                    @if(!$segment)
                        active
                    @endif">
                        <a href="{{ url('/app')}}">
                            <i class="ti-panel"></i>
                            <p>My Feed</p>
                        </a>
                    </li>
                    @if(Auth::user()->role > 1 && Auth::user()->power == 1)
                    <li class="
                            @if($segment=='research' && Request::segment(3)=='create'))
                            active
                            @endif">
                        <a href="{{ route('admin.research.create') }}">
                            <i class="ti-pencil-alt"></i>
                            <p>Create A Research</p>
                        </a>
                    </li>
                    @endif
                    @if(Auth::user()->role > 2 && Auth::user()->power == 1)
                    <li class="
                            @if($segment=='user' && Request::segment(3)=='add'))
                            active
                            @endif">
                        <a href="{{ route('createUser') }}">
                            <i class="ti-plus"></i>
                            <p>Add A Supervisor</p>
                        </a>
                    </li>
                    @endif
                    @if(Auth::user()->role > 2 && Auth::user()->power == 1)
                    <li class="
                            @if($segment=='user' && Request::segment(3)==NULL))
                            active
                            @endif">
                        <a href="{{ route('request') }}">
                            <i class="ti-signal"></i>
                            <p>Member Request</p>
                        </a>
                    </li>
                    @endif
                    <!-- <li data-panelId="panel1" class="dropdown-btn">
                        <a href="table.html">
                            <i class="ti-view-list-alt"></i>
                            <p>Training<b class="caret"></b></p>
                        </a>
                        <ul id="panel1" class="dropdown-ul">
                            <li><a href="#"><span>T</span><span>Table 1</span></a></li>
                            <li><a href="#"><span>T</span><span>Table 1</span></a></li>
                            <li><a href="#"><span>T</span><span>Table 1</span></a></li>
                        </ul>
                    </li>
                    <li data-panelId="panel2" class="dropdown-btn">
                        <a href="typography.html">
                            <i class="ti-layout-slider"></i>
                            <p>Workshop <b class="caret"></b></p>
                        </a>
                        <ul id="panel2" class="dropdown-ul">
                            <li><a href="#"><span>T</span><span>Table 1</span></a></li>
                            <li><a href="#"><span>T</span><span>Table 1</span></a></li>
                            <li><a href="#"><span>T</span><span>Table 1</span></a></li>
                        </ul>
                    </li>
                    <li data-panelId="panel3" class="dropdown-btn">
                        <a href="typography.html">
                            <i class="ti-blackboard"></i>
                            <p>Seminar <b class="caret"></b></p>
                        </a>
                        <ul id="panel3" class="dropdown-ul">
                            <li><a href="#"><span>T</span><span>Table 1</span></a></li>
                            <li><a href="#"><span>T</span><span>Table 1</span></a></li>
                            <li><a href="#"><span>T</span><span>Table 1</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="icons.html">
                            <i class="ti-light-bulb"></i>
                            <p>Contest</p>
                        </a>
                    </li> -->
                    @if(Auth::user()->role > 2 && Auth::user()->power == 1)
                    <li data-panelId="panel4" class="
                            @if($segment=='skill')
                            active
                            @endif dropdown-btn">
                        <a href="{{ route('admin.skill.index') }}">
                            <i class="ti-pin-alt"></i>
                            <p>Skill @if($segment=='skill')@else<b class="caret"></b>@endif</p>
                        </a>
                        <ul id="panel4" class="dropdown-ul">
                            <li><a href="{{ route('admin.skill.index') }}" class="
                                @if($segment=='skill' && !Request::segment(3))
                                open
                                @endif"><span><i class="fa fa-circle-o" aria-hidden="true"></i></span><span>All skills</span></a></li>
                            <li><a href="{{ route('admin.skill.create') }}" class="
                                @if($segment=='skill' && Request::segment(3)=='create')
                                open
                                @endif"><span><i class="fa fa-circle-o" aria-hidden="true"></i></span><span>Add skill</span></a></li>
                        </ul>
                    </li>
                    @endif
                    @if(Auth::user()->role > 1 && Auth::user()->power == 1)
                    <li data-panelId="panel5" class="
                            @if($segment=='research')
                            active
                            @endif dropdown-btn">
                        <a href="{{ route('admin.research.index') }}">
                            <i class="ti-book"></i>
                            <p>My Research @if($segment=='research')@else<b class="caret"></b>@endif</p>
                        </a>
                        <ul id="panel5" class="dropdown-ul">
                            <li><a href="{{ route('admin.research.create') }}" class="
                                @if($segment=='research' && Request::segment(3)=='create')
                                open
                                @endif"><span><i class="fa fa-circle-o" aria-hidden="true"></i></span><span>Create Research</span></a>
                            </li>
                            <li><a href="{{ route('admin.research.index') }}" class="
                                @if($segment=='research' && !Request::segment(3))
                                open
                                @endif"><span><i class="fa fa-circle-o" aria-hidden="true"></i></span><span>All Researches</span></a>
                            </li>
                            
                        </ul>
                    </li>
                    @endif
                    <li>
                        <a href="">
                            <i class="ti-user"></i>
                            <p>My Profile</p>
                        </a>
                    </li>
                    <!-- <li>
                        <a href="maps.html">
                            <i class="ti-map"></i>
                            <p>Maps</p>
                        </a>
                    </li>
                    <li>
                        <a href="notifications.html">
                            <i class="ti-bell"></i>
                            <p>Notifications</p>
                        </a>
                    </li> -->
                    <li class="">
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            <i class="ti-export"></i>
                            <p style="text-transform: capitalize;">Sign Out</p>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>

        <div class="main-panel">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar bar1"></span>
                            <span class="icon-bar bar2"></span>
                            <span class="icon-bar bar3"></span>
                        </button>
                        <a class="navbar-brand" href="#">@yield('pagetitle')</a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-panel"></i>
                                    <p>Stats</p>
                                </a>
                            </li>
                            
                            <li>
                                <a href="#">
                                    <i class="ti-settings"></i>
                                    <p>Settings</p>
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>
            </nav>


            <div class="content">
                <div class="container-fluid">

                    






@yield('content')




                </div>
            </div>


            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <ul>

                            <li>
                                <a href="#">
                                    Cyber Security Center
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Daffodil
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Licenses
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright pull-right">
                        &copy;
                        <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i>
                        by <a href="http://www.appsoliclab.com">Appsolic Lab</a>
                    </div>
                </div>
            </footer>

        </div>
    </div>


</body>

<!--   Core JS Files   -->
<script src="{{ asset('AdminSD/assets/js/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('AdminSD/assets/js/bootstrap.min.js') }}" type="text/javascript"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<!-- <script src="{{ asset('AdminSD/assets/js/bootstrap-checkbox-radio.js') }}"></script> -->


<!--  Charts Plugin -->
<script src="{{ asset('AdminSD/assets/js/chartist.min.js') }}"></script>

<!--  Notifications Plugin    -->
<script src="{{ asset('AdminSD/assets/js/bootstrap-notify.js') }}"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!-- Paper Dashboard Core javascript and methods for Demo purpose -->
<script src="{{ asset('AdminSD/assets/js/paper-dashboard.js') }}"></script>

<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
<script src="{{ asset('AdminSD/assets/js/demo.js') }}"></script>
<script src="{{ asset('AdminSD/assets/js/main.js') }}"></script>
<!-- <script src="{{ asset('AdminSD/assets/js/mdb.js') }}"></script> -->

<script type="text/javascript">
    // $(document).ready(function () {

    //     demo.initChartist();

    //     $.notify({
    //         icon: 'ti-gift',
    //         message: "Welcome to <b>Cyber Research Lab</b> - a beautiful connectivity platform for researcher."

    //     }, {
    //             type: 'success',
    //             timer: 4000
    //         });

    // });
</script>
<script>
        
        var preloader = document.getElementById("preloader");

        function myLoader(){
            preloader.style.display = 'none';
            // without fixed time
        };


        // function myLoader(){

        //     var time = 300;
        //     setTimeout(function() {

        //          preloader.style.display = 'none';
                 
        //     },time);
            
        // };

    </script>

</html>
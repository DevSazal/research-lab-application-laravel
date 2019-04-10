<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    
    <title>@yield('title')Cyber Security Center | Developed by Appsolic Lab</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('AdminSD/inbox/css/style.css') }}">
</head>

<body>
    <div class="wrapper">
        <header>
            <div class="container">
                <div class="left chat-top"><a href="{{ url('app/')}}"><i class="fas fa-arrow-left"></i> Back to Dashboard</span></a></div>
                <div class="middle">
                    <!-- <h3>@yield('pagetitle')</h3> -->
                    @yield('pagetitle')
                </div>
                <div class="right">
                    <div class="username">
                        <div class="settings">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit"><i class="fas fa-power-off"></i> Logout</button>
                            </form>
                        </div>
                        <!-- <a><i class="fas fa-sign-out-alt"></i> Logout</a> -->
                    </div>
                </div>
            </div>
        </header>
        <main id="">
            <div class="col-left">
                <div class="col-content">
                    <div class="messages">
                    <?php $segment = Request::segment(3) ?>
                        <?php if(Auth::user()->role == 2){
        $list = App\Research::where('user_id', Auth::user()->id)->where('status','>=', 2)->get();
                        ?>
                        @foreach($list as $set)
                            <li class="
                            @if($segment==$set->id)
                            active
                            @endif"  onclick="location.href='{{ url('app/inbox/'.$set->id) }}'">
                                <div class="avatar">
                                    <div class="avatar-image">
                                        <!-- <div class="status online"></div> -->
                                        <img src="{{ asset('AdminSD/inbox/img/chat.png') }}">
                                    </div>
                                </div>
                                <h3>Research #{{ sprintf("%04d", $set->id) }}</h3>
                                <p><?php $info = App\User::find($set->user_id); echo $info->name; ?></p>
                            </li>
                        @endforeach
                        <?php }elseif(Auth::user()->role == 1){
        $list = App\ResearchApplicant::where('user_id', Auth::user()->id)->where('status','>=', 2)->get();
        ?>
                        @foreach($list as $set)
                            <li class="
                            @if($segment==$set->research_id)
                            active
                            @endif"  onclick="location.href='{{ url('app/inbox/'.$set->research_id) }}'">
                                <div class="avatar">
                                    <div class="avatar-image">
                                        <!-- <div class="status offline"></div> -->
                                        <img src="{{ asset('AdminSD/inbox/img/chat.png') }}">
                                    </div>
                                </div>
                                <h3>Research #{{ sprintf("%04d", $set->research_id) }}</h3>
                                <p><?php $r = App\Research::find($set->research_id); $info = App\User::find($r->user_id); echo $info->name; ?></p>
                            </li>
                        @endforeach
                        <?php } ?>

                    </div>

                </div>

            </div>





            @yield('content')




            
            </main>
    </div>

    <script type="text/javascript" src="{{ asset('AdminSD/inbox/js/chat.js') }}"></script>
</body>

</html>

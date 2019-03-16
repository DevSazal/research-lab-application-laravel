@extends('layouts.root')

@section('title', 'Messages - ')
@section('pagetitle', 'My Chat Room')


@section('content')
<style>
.card .avatar {
    /* width: 163px;
    height: 100%;
    overflow: unset;
    border-radius: unset;
    margin-right: 5px; */
}
.img-circle {
    /* border-radius: 5px; */
}
.custom-select.is-invalid, .form-control.is-invalid, .was-validated .custom-select:invalid, .was-validated .form-control:invalid {
    border-color: #e3342f;
}
.msg li a{
    color: #252422;
}
.msg li a:hover, .msg li a:focus {
    color: #3091B2 !important;
}
.card .content.msglist {
    padding: 15px 0px 10px 0px;
}
    </style>

            <!-- content code start -->

                
            <div class="row">
                    <div class="col-lg-4 col-md-5">
                        
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Messages</h4>
                            </div>
                            <div class="content msglist">
                                <ul class="list-unstyled team-members msg">
    <?php if(Auth::user()->role = 2){
            $list = App\Research::where('user_id', Auth::user()->id)->where('status', 2)->get();
            ?>
                @foreach($list as $set)

                                            <li onclick="location.href='{{ url('app/inbox/'.$set->id) }}'">
                                                <!-- <a href="#"> -->
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="avatar">
                                                            <img src="{{ asset('AdminSD/assets/img/chat.png') }}" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <b>#{{ sprintf("%04d", $set->id) }}</b>
                                                        <br />
                                                        <span class="text-success"><small><?php $info = App\User::find($set->user_id); echo $info->name; ?></small></span>
                                                    </div>

                                                    <!-- <div class="col-xs-3 text-right">
                                                        2:12 AM
                                                    </div> -->
                                                </div>
                                                <!-- </a> -->
                                            </li>
                @endforeach
    <?php }elseif(Auth::user()->role = 1){
        $list = App\ResearchApplicant::where('user_id', Auth::user()->id)->where('status', 2)->get();
        ?>
            @foreach($list as $set)
                                            <li onclick="location.href='{{ url('app/inbox/'.$set->research_id) }}'">
                                                <!-- <a href="#"> -->
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="avatar">
                                                            <img src="{{ asset('AdminSD/assets/img/chat.png') }}" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <b>#{{ sprintf("%04d", $set->research_id) }}</b>
                                                        <br />
                                                        <span class="text-success"><small><?php $r = App\Research::find($set->research_id); $info = App\User::find($r->user_id); echo $info->name; ?></small></span>
                                                    </div>

                                                    <!-- <div class="col-xs-3 text-right">
                                                        2:12 AM
                                                    </div> -->
                                                </div>
                                                <!-- </a> -->
                                            </li>
                @endforeach
    <?php } ?>
                                            <li onclick="location.href='#'">
                                                <!-- <a href="#"> -->
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="avatar">
                                                            <img src="{{ asset('AdminSD/assets/img/chat.png') }}" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <b>DJ Khaled</b>
                                                        <br />
                                                        <span class="text-success"><small>Available</small></span>
                                                    </div>

                                                    <!-- <div class="col-xs-3 text-right">
                                                        2:12 AM
                                                    </div> -->
                                                </div>
                                                <!-- </a> -->
                                            </li>
                                            

                                        </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7">
                        <div class="card">
                            
                            <div class="content">
                                

                            <div class="empty-state no-selection"><strong class="font-accent">Select a Conversation</strong><small>Try selecting a conversation or searching for someone specific.</small></div>

                            </div>
                        </div>
                    </div>


                </div>
            

            <!-- content code end -->



@endsection
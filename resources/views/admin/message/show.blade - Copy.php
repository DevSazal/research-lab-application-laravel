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


    <style>
    .container{max-width:1170px; margin:auto;}
img{ max-width:100%;}
.inbox_people {
  background: #f8f8f8 none repeat scroll 0 0;
  float: left;
  overflow: hidden;
  width: 40%; border-right:1px solid #c4c4c4;
}
.inbox_msg {
  border: 1px solid #c4c4c4;
  clear: both;
  overflow: hidden;
}
.top_spac{ margin: 20px 0 0;}


.recent_heading {float: left; width:40%;}
.srch_bar {
  display: inline-block;
  text-align: right;
  width: 60%; padding:
}
.headind_srch{ padding:10px 29px 10px 20px; overflow:hidden; border-bottom:1px solid #c4c4c4;}

.recent_heading h4 {
  color: #05728f;
  font-size: 21px;
  margin: auto;
}
.srch_bar input{ border:1px solid #cdcdcd; border-width:0 0 1px 0; width:80%; padding:2px 0 4px 6px; background:none;}
.srch_bar .input-group-addon button {
  background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
  border: medium none;
  padding: 0;
  color: #707070;
  font-size: 18px;
}
.srch_bar .input-group-addon { margin: 0 0 0 -27px;}

.chat_ib h5{ font-size:15px; color:#464646; margin:0 0 8px 0;}
.chat_ib h5 span{ font-size:13px; float:right;}
.chat_ib p{ font-size:14px; color:#989898; margin:auto}
.chat_img {
  float: left;
  width: 11%;
}
.chat_ib {
  float: left;
  padding: 0 0 0 15px;
  width: 88%;
}

.chat_people{ overflow:hidden; clear:both;}
.chat_list {
  border-bottom: 1px solid #c4c4c4;
  margin: 0;
  padding: 18px 16px 10px;
}
.inbox_chat { height: 550px; overflow-y: scroll;}

.active_chat{ background:#ebebeb;}

.incoming_msg_img {
  display: inline-block;
  width: 6%;
}
.received_msg {
  display: inline-block;
  padding: 0 0 0 10px;
  vertical-align: top;
  width: 92%;
 }
 .received_withd_msg p {
  background: #ebebeb none repeat scroll 0 0;
  border-radius: 3px;
  color: #646464;
  font-size: 14px;
  margin: 0;
  padding: 5px 10px 5px 12px;
  width: 100%;
}
.time_date {
  color: #747474;
  display: block;
  font-size: 12px;
  margin: 8px 0 0;
}
.received_withd_msg { width: 57%;}
.mesgs {
  /* float: left; */
  padding: 30px 15px 0 25px;
  /* width: 60%; */
}

 .sent_msg p {
  background: #05728f none repeat scroll 0 0;
  border-radius: 3px;
  font-size: 14px;
  margin: 0; color:#fff;
  padding: 5px 10px 5px 12px;
  width:100%;
}
.outgoing_msg{ overflow:hidden; margin:26px 0 26px;}
.sent_msg {
  float: right;
  width: 46%;
}
.input_msg_write input {
  background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
  border: medium none;
  color: #4c4c4c;
  font-size: 15px;
  min-height: 48px;
  width: 100%;
}

.type_msg {border-top: 1px solid #c4c4c4;position: relative;}
.msg_send_btn {
  background: #05728f none repeat scroll 0 0;
  border: medium none;
  border-radius: 50%;
  color: #fff;
  cursor: pointer;
  font-size: 17px;
  height: 33px;
  position: absolute;
  right: 0;
  top: 11px;
  width: 33px;
}</style>

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
                            <div class="header">
                                <h4 class="title">Group Name</h4>
                            </div>
                            <div class="content">
<!--   msg code  -->

        <div class="mesgs">
          <div class="msg_history" style="height: 350px;
    overflow-y: scroll;">
            @foreach($messages as $msg)
            @if($msg->user_id != Auth::user()->id)
            <div class="incoming_msg">
              <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
              <div class="received_msg">
                <div class="received_withd_msg">
                  <p>{{ $msg->message }}</p>
                  <span class="time_date"> 11:01 AM    |    June 9</span></div>
              </div>
            </div>
            @else
            <div class="outgoing_msg">
              <div class="sent_msg">
                <p>{{ $msg->message }}</p>
                <span class="time_date"> 11:01 AM    |    June 9</span> </div>
            </div>
            @endif
            @endforeach
            <!-- <div class="incoming_msg">
              <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
              <div class="received_msg">
                <div class="received_withd_msg">
                  <p>Test, which is a new approach to have</p>
                  <span class="time_date"> 11:01 AM    |    Yesterday</span></div>
              </div>
            </div>
            <div class="outgoing_msg">
              <div class="sent_msg">
                <p>Apollo University, Delhi, India Test</p>
                <span class="time_date"> 11:01 AM    |    Today</span> </div>
            </div>
            <div class="incoming_msg">
              <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
              <div class="received_msg">
                <div class="received_withd_msg">
                  <p>We work directly with our designers and suppliers,
                    and sell direct to you, which means quality, exclusive
                    products, at a price anyone can afford.</p>
                  <span class="time_date"> 11:01 AM    |    Today</span></div>
              </div>
            </div> -->
          </div>
          <div class="type_msg">
            <div class="input_msg_write">
              <input type="text" class="write_msg" placeholder="Type a message">
              <button class="msg_send_btn" type="button"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
            </div>
          </div>
        </div>

<!--   msg code  End -->




                            </div>
                        </div>
                    </div>


                </div>
            

            <!-- content code end -->



@endsection
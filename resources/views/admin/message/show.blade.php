@extends('layouts.messenger')

@section('title', 'Messages - ')
@section('pagetitle', 'Research #'.sprintf("%04d", $research->id))


@section('content')
<style type="text/css">
    .complete_research{
        width:100%;
        border-radius: 25px ;
        background: #31af91;
        margin-top: 10px;
        padding: 10px 0;
        
    }
    .complete_research a{
        color:#fff !important;
        text-align: center;
    }
    
    .complete_research:hover {
        width:100%;
        border-radius: 20px;
        background: #3091B2;
        margin-top: 10px;
        padding: 10px 0;
        color:#fff !important;
        text-align: center;
    }
    

</style>
            <div class="col">
                <div class="col-content" id="chatBox">
                    <section class="message">
                        <div class="grid-message">
                            
                            @foreach($messages as $msg)
                            @if($msg->user_id != Auth::user()->id)
                            <div class="col-message-received">
                                <div class="message-received-content">
                                    <div class="img-recipent"><img src="{{ $msg->user['image'] != NULL ? asset('storage/profile/'.$msg->user['image']) : asset('AdminSD/assets/img/pro-avt.png') }}"></div>
                                    <div class="message-received">
                                        <p>{{ $msg->message }}</p>
                                        @if($msg->file != NULL)
                                        <p><i class="fas fa-paperclip"></i> <a href="{{ asset('storage/researchfile/'.$msg->file)}}" target="_blank" style="color: #e6dde9;">{{ $msg->file }}</a></p>
                                        @endif
                                    </div>
                                </div>
                                <div class="received-name-date-time">
                                    <span>{{ \Carbon\Carbon::parse($msg->created_at)->format('h:m a | j F Y') }}</span> |<span>{{ $msg->user['name'] }}</span>
                                </div>
                            </div>
                            @else
                            <div class="col-message-sent">
                                <div class="message-sent">
                                    
                                        <p>{{ $msg->message }}</p>
                                        @if($msg->file != NULL)
                                        <p><i class="fas fa-paperclip"></i> <a href="{{ asset('storage/researchfile/'.$msg->file)}}" target="_blank" style="color: #e6dde9;">{{ $msg->file }}</a></p>
                                        @endif
                                    
                                </div>
                            </div>
                            @endif
                            @endforeach
                            
                            
                        </div>
                    </section>

                </div>


                <div class="col-foot">

                    <div class="compose">
                        <form action="{{ route('admin.inbox.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                            <input name="msg" type="text" class="message-box" placeholder="Type a message" autocomplete="off" required>
                            <!-- <textarea class="message-box" placeholder="Type a message"></textarea> -->
                            <div class="compose-dock">
                                <div class="dock">
                                    <input type="file" name="file" id="file" class="inputfile" data-multiple-caption="{count} files selected" multiple />
                                    <label for="file"><span></span><img src="{{ asset('AdminSD/inbox/img/cloud-upload.png') }}"></label>
                                </div>
                            </div>
                            <input type="hidden" name="rid" value="{{ $research->id }}">
                            <input type="hidden" name="spid" value="{{ $research->user_id }}">
                            
                        </form>
                    </div>

                </div>

            </div>

            <div class="col-right">

                <div class="col-content">

                    <div class="user-panel">

                        <div class="avatar">
                            <div class="avatar-image" style="width: 100%;">
                                <!-- <div class="status online"></div><img src="./img/avatar.png"></div> -->

                            <a href="{{ url('app/research', $research->id) }}"><h3><i class="fas fa-external-link-alt"></i> {{ $research->title }}</h3></a>
                            <!-- <p>London, United Kingdom</p> -->
                            @if(Auth::user()->role == 2 && Auth::user()->power == 1)
                            @if ($research->status != 3)
                            <div class="complete_research">      
                                <a href="{{ url('app/research/complete', $research->id) }}">Complete Research</a>      
                            </div>
                            @else
                            <i class="fas fa-trophy" style="color: #f39c12"></i> <p style="color: #f39c12">  Research Completed</p>
                            @endif
                            @else
                            @endif
                            
                            

                        </div>

                    </div>   

                </div>

            </div>
@endsection     
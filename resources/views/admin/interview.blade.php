@extends('layouts.root')

@section('title', 'Make Appointment - ')
@section('pagetitle', 'Make Appointment')


@section('content')
<style>
.card .avatar {
    width: 163px;
    height: 100%;
    overflow: unset;
    border-radius: unset;
    margin-right: 5px;
}
.img-circle {
    border-radius: 5px;
}
.custom-select.is-invalid, .form-control.is-invalid, .was-validated .custom-select:invalid, .was-validated .form-control:invalid {
    border-color: #e3342f;
}
    </style>

            <!-- content code start -->

                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="card">
                            <div class="header">
                                <!-- <h4 class="title">Enter New Profile Information</h4> -->
                            </div>
                            <div class="content">
                            <ul class="list-unstyled team-members">
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <div class="avatar">
                                                            <img src="{{ $user->image != NULL ? asset('storage/profile/'.$user->image) : asset('AdminSD/assets/img/pro-avt.png') }}" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7">
                                                        {{$user->name}}
                                                        <br>
                                                        <span class="text-muted"><small></small></span>
                                                        <br>
                                                        <br>
                                                        <div class="stats"><i class="fa fa-phone" aria-hidden="true"></i> {{$user->phone}}</div>
                                                        <div class="stats"><i class="fa fa-envelope"></i> {{$user->email}}</div>
                                                        <br>
                                                        <div class="stats"><i class="ti-book pl-5"></i>  {{$user->edu_dept}}</div>
                                                        <div class="stats"><i class="ti-location-pin pl-5"></i>   {{$user->edu_varsity}}</div>
                                                        
                                                    </div>

                                                    <!-- <div class="col-md-3 text-right">
                                                        <btn class="btn btn-sm btn-success btn-icon"><i class="fa fa-envelope"></i></btn>
                                                    </div> -->
                                                </div>
                                            </li> 
                                            
                            </ul>





                                <form action="{{ url('/app/research/invite') }}" method="post">
                                    @method('PUT')
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Note</label>
                                                <textarea rows="5" name="note" class="form-control border-input {{ $errors->has('note') ? ' is-invalid' : '' }}" placeholder="Here can be your description">@if(old('note')){{old('note')}}@else{{ "Hi, Let's meet to discuss about agenda." }}@endif</textarea>
                                                <!-- <input type="text" class="form-control border-input {{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Name" name="name" value="{{ old('name') }}"> -->

                                                @if ($errors->has('note'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('note') }}</strong>
                                                    </span>
                                                @endif

                                            </div>
                                        </div>
                                        
                                    </div>

                                    

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Appointment Date</label>
                                                <input type="date" name="date" class="form-control border-input {{ $errors->has('date') ? ' is-invalid' : '' }}" placeholder="" value="@if(old('date')){{old('date')}}@else{{date('Y-m-d', strtotime('today + 1 days'))}}@endif" required>

                                                @if ($errors->has('date'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('date') }}</strong>
                                                    </span>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Set Appointment Schedule</label>
                                                <select name="time" class="form-control border-input  {{ $errors->has('time') ? ' is-invalid' : '' }}" id="sel1">
                                                    <option>Select Timeslot</option>
                                                    @foreach($times as $t)
                                                    <option value="{{ $t->id }}">{{ $t->time }}</option>
                                                    @endforeach
                                                </select>
                                                <!-- <input type="text" class="form-control border-input  {{ $errors->has('workplace') ? ' is-invalid' : '' }}" placeholder="Daffodil International University" value="{{ old('workplace') ? old('workplace') : 'Daffodil International University' }}" name="workplace"> -->

                                                @if ($errors->has('time'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('time') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <input type="hidden" name="invite_user_id" value="{{ $user->id }}">
                                        <input type="hidden" name="research_id" value="{{ $rid }}">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Make Appointment</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>




                </div>

            

            <!-- content code end -->



@endsection
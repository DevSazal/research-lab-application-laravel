@extends('layouts.root')

@section('title', 'Make Appointment - ')
@section('pagetitle', 'Make Appointment')


@section('content')
<style>
    .card .avatar {
    width: 100%;
    height: 100%;
    overflow: unset;
    border-radius: unset;
    margin-right: 5px;
}
.img-circle {
    border-radius: 5px;
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
                                                    <div class="col-md-3">
                                                        <div class="avatar">
                                                            <img src="http://localhost:8000/storage/profile/image.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        DJ Khaled
                                                        <br>
                                                        <span class="text-muted"><small>Offline</small></span>
                                                        <br>
                                                        <br>
                                                        <div class="stats"><i class="fa fa-phone" aria-hidden="true"></i> 01755889911</div>
                                                        <div class="stats"><i class="fa fa-envelope"></i> tester@diu.edu.bd</div>
                                                        <br>
                                                        <div class="stats"><i class="ti-book pl-5"></i>  B.Sc In Software Engineering</div>
                                                        <div class="stats"><i class="ti-location-pin pl-5"></i>   Daffodil International University</div>
                                                        
                                                    </div>

                                                    <div class="col-md-3 text-right">
                                                        <!-- <btn class="btn btn-sm btn-success btn-icon"><i class="fa fa-envelope"></i></btn> -->
                                                    </div>
                                                </div>
                                            </li> 
                                            
                            </ul>





                                <form action="{{ route('storeUser') }}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Note</label>
                                                <textarea rows="5" class="form-control border-input" placeholder="Here can be your description" value="Mike">Hi, Let's meet to discuss about agenda.</textarea>
                                                <!-- <input type="text" class="form-control border-input {{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Name" name="name" value="{{ old('name') }}"> -->

                                                @if ($errors->has('name'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </span>
                                                @endif

                                            </div>
                                        </div>
                                        
                                    </div>

                                    

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Appointment Date</label>
                                                <input type="date" class="form-control border-input {{ $errors->has('designation') ? ' is-invalid' : '' }}" placeholder="" name="date" value="@if(old('exp')){{old('exp')}}@else{{date('Y-m-d', strtotime('today + 1 days'))}}@endif" required>

                                                @if ($errors->has('designation'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('designation') }}</strong>
                                                    </span>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Select Schedule</label>
                                                <select name="time" class="form-control border-input  {{ $errors->has('workplace') ? ' is-invalid' : '' }}" id="sel1">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                </select>
                                                <!-- <input type="text" class="form-control border-input  {{ $errors->has('workplace') ? ' is-invalid' : '' }}" placeholder="Daffodil International University" value="{{ old('workplace') ? old('workplace') : 'Daffodil International University' }}" name="workplace"> -->

                                                @if ($errors->has('workplace'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('workplace') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-center">
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
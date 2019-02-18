@extends('layouts.root')

@section('title', 'New User List | Cyber Security Center by Appsolic Lab')
@section('pagetitle', 'Add Supervisor')


@section('content')


            <!-- content code start -->

                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Enter New Profile Information</h4>
                            </div>
                            <div class="content">
                                <form action="{{ route('storeUser') }}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control border-input {{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Name" name="name" value="{{ old('name') }}">

                                                @if ($errors->has('name'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </span>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email Address</label>
                                                <input type="email" class="form-control border-input {{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email" name="email" value="{{ old('email') }}" autocomplete="off">

                                                @if ($errors->has('email'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif

                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" class="form-control border-input {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="" name="password" autocomplete="off">

                                                @if ($errors->has('password'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Confirm Password</label>
                                                <input type="password" class="form-control border-input"  name="password_confirmation" placeholder="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Phone</label>
                                                <input type="text" class="form-control border-input {{ $errors->has('phone') ? ' is-invalid' : '' }}" placeholder="015********" name="phone" value="{{ old('phone') }}">

                                                @if ($errors->has('phone'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('phone') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Designation</label>
                                                <input type="text" class="form-control border-input {{ $errors->has('designation') ? ' is-invalid' : '' }}" placeholder="Assistant Professor" name="designation" value="{{ old('designation') }}">

                                                @if ($errors->has('designation'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('designation') }}</strong>
                                                    </span>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Workplace</label>
                                                <input type="text" class="form-control border-input  {{ $errors->has('workplace') ? ' is-invalid' : '' }}" placeholder="Daffodil International University" value="{{ old('workplace') ? old('workplace') : 'Daffodil International University' }}" name="workplace">

                                                @if ($errors->has('workplace'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('workplace') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Add Supervisor</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>

            

            <!-- content code end -->



@endsection
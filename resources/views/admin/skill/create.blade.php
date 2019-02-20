@extends('layouts.root')

@section('title', 'New User List | Cyber Security Center by Appsolic Lab')
@section('pagetitle', 'Add Skill')


@section('content')


            <!-- content code start -->

                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Add New Skill</h4>
                            </div>
                            <div class="content">
                                <form action="{{ route('admin.skill.store') }}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control border-input {{ $errors->has('title') ? ' is-invalid' : '' }}" placeholder="type skill title" name="title" value="{{ old('title') }}" required>

                                                @if ($errors->has('title'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('title') }}</strong>
                                                    </span>
                                                @endif

                                            </div>
                                        </div>
                                    </div>
                          

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Save</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>

            

            <!-- content code end -->



@endsection
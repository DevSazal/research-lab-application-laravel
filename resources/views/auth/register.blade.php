@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b>Let's Join As A Researcher</b></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Phone</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required autofocus>

                                @if ($errors->has('phone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Profile Photo<!--  (Optional) --></label>

                            <div class="col-md-6">
                                <input type="file" class="form-control-file {{ $errors->has('image') ? ' is-invalid' : '' }}" id="exampleFormControlFile1" name="image" accept="image/*">
                                <!-- <p class="help-block">Equal ratio. (example: 100*100)</p> -->
                                <!-- <input id="name" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required autofocus> -->

                                @if ($errors->has('image'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Department</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('edu_dept') ? ' is-invalid' : '' }}" name="edu_dept" value="{{ old('edu_dept') }}" placeholder="B.Sc in Software Engineering" required autofocus>

                                @if ($errors->has('edu_dept'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('edu_dept') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">University</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('edu_varsity') ? ' is-invalid' : '' }}" name="edu_varsity" value="{{ old('edu_varsity') }}" placeholder="Daffodil International University" required autofocus>

                                @if ($errors->has('edu_varsity'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('edu_varsity') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Country of University</label>

                            <div class="col-md-6">
                                <select class="form-control {{ $errors->has('edu_country') ? ' is-invalid' : '' }}" id="country" name="edu_country"></select>
                                <!-- <input id="name" type="text" class="form-control{{ $errors->has('edu_country') ? ' is-invalid' : '' }}" name="edu_country" value="{{ old('edu_country') }}" placeholder="Bangladesh" required autofocus> -->

                                @if ($errors->has('edu_country'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('edu_country') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('AdminSD/assets/js/countries.js') }}"></script>
<script language="javascript">
    populateCountries("country");
</script>
@endsection

@extends('layouts.root')

@section('title', 'Edit Profile - ')
@section('pagetitle', 'Edit Profile')


@section('content')
<style>
.pretty.p-default.p-thick .state label:after, .pretty.p-default.p-thick .state label:before {
    border-width: calc(1em / 7);
}
.pretty:hover{
    color: #14bf96!important;

}
.card .pretty label{
    color: unset !important;
}
.pretty{color: #9A9A9A;}



.input-file-container {
  position: relative;
  width: 225px;
} 
.js .input-file-trigger {
  display: block;
  padding: 14px 45px;
  background: #39D2B4;
  color: #fff;
  font-size: 1em;
  transition: all .4s;
  cursor: pointer;
}
.js .input-file {
  position: absolute;
  top: 0; left: 0;
  width: 225px;
  opacity: 0;
  padding: 14px 0;
  cursor: pointer;
}
/*.js .input-file:hover + .input-file-trigger,
.js .input-file:focus + .input-file-trigger,
.js .input-file-trigger:hover,
.js .input-file-trigger:focus {
  background: #34495E;
  color: #39D2B4;
}*/
.js .input-file:hover + .input-file-trigger, .js .input-file:focus + .input-file-trigger, .js .input-file-trigger:hover, .js .input-file-trigger:focus {
    background: #fffcf5;
    color: #7ac29a;
    border: 1px solid #dee0e0;
    transition: all 0.5s;
}

.file-return {
  margin: 0;
}
.file-return:not(:empty) {
  margin: 1em 0;
}
.js .file-return {
  font-style: italic;
  font-size: .9em;
  font-weight: bold;
}
.js .file-return:not(:empty):before {
  content: "Selected file: ";
  font-style: normal;
  font-weight: normal;
}


.custom-select.is-invalid, .form-control.is-invalid, .was-validated .custom-select:invalid, .was-validated .form-control:invalid {
    border-color: #e3342f;
}
</style>
                <div class="row">
                    <div class="col-lg-4 col-md-5">
                        <div class="card card-user">
                            <div class="image" style="background: #56d9b4;">
                                <!-- <img src="assets/img/background.jpg" alt="..."/> -->
                            </div>
                            <div class="content">
                                <div class="author">
                                  <img class="avatar border-white" src="{{ $user->image != NULL ? asset('storage/profile/'.$user->image) : asset('AdminSD/assets/img/pro-avt.png') }}" alt="..."/>
                                  <h4 class="title">{{ $user->name }}<br />
                                     <a href="">
                                         @if(Auth::user()->role > 3)
                                         <small>@Admin</small>
                                         @elseif(Auth::user()->role == 3)
                                         <small>@Training & Awareness Coordinator</small>
                                         @elseif(Auth::user()->role == 2)
                                         <small>@Supervisor</small>
                                         @elseif(Auth::user()->role == 1)
                                         <small>@Researcher</small>
                                         @endif
                                        </a>
                                  </h4>
                                </div>
                                <!-- <p class="description text-center">
                                    "I like the way you work it <br>
                                    No diggity <br>
                                    I wanna bag it up"
                                </p> -->
                            </div>
                            <!-- <hr>
                            <div class="text-center">
                                <div class="row">
                                    <div class="col-md-3 col-md-offset-1">
                                        <h5>12<br /><small>Files</small></h5>
                                    </div>
                                    <div class="col-md-4">
                                        <h5>2GB<br /><small>Used</small></h5>
                                    </div>
                                    <div class="col-md-3">
                                        <h5>24,6$<br /><small>Spent</small></h5>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Change Password</h4>
                            </div>
                            <div class="content">
                                <form action="{{ route('password') }}" method="post">
                                    @csrf
                                    <!-- <div class="row">
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
                                    </div> -->
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
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Update Password</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Profile</h4>
                            </div>
                            <div class="content">
                                <form action="{{ route('update') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control border-input {{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Name" name="name" value="{{ old('name') ? old('name') : $user->name }}">

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
                                                <input type="email" class="form-control border-input {{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email" name="email" value="{{ old('email') ? old('email') : $user->email }}" autocomplete="off">

                                                @if ($errors->has('email'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif

                                            </div>
                                        </div>
                                    </div>

                                    <!-- <div class="row">
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
                                    </div> -->

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Phone</label>
                                                <input type="text" class="form-control border-input {{ $errors->has('phone') ? ' is-invalid' : '' }}" placeholder="015********" name="phone" value="{{ old('phone') ? old('phone') : $user->phone }}">

                                                @if ($errors->has('phone'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('phone') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
 <!-- SAZAL File -->
                                    <div class="form-group  row">
                                            <div class="col-md-12">
                                                <div class="input-file-container">  
                                                    <input class="input-file" id="my-file" type="file" name="file" 
                                                    accept="application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint,
                                                    text/plain, application/pdf, image/*">
                                                    <label tabindex="0" for="my-file" class="input-file-trigger"><i class="fa fa-paperclip" aria-hidden="true"></i> Change Picture</label>
                                                </div>
                                                <p class="file-return">only image format accepted.</p>

                                                @if ($errors->has('file'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('file') }}</strong>
                                                    </span>
                                                @endif
                                            </div> 
                                    </div>


                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Department</label>
                                                <input type="text" class="form-control border-input {{ $errors->has('edu_dept') ? ' is-invalid' : '' }}" placeholder="B.Sc In Software Engineering" name="edu_dept" value="{{ old('edu_dept') ? old('edu_dept') : $user->edu_dept }}">

                                                @if ($errors->has('edu_dept'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('edu_dept') }}</strong>
                                                    </span>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>University</label>
                                                <input type="text" class="form-control border-input  {{ $errors->has('edu_varsity') ? ' is-invalid' : '' }}" placeholder="Daffodil International University" value="{{ old('edu_varsity') ? old('edu_varsity') : $user->edu_varsity != NULL ? $user->edu_varsity : '' }}" name="edu_varsity">

                                                @if ($errors->has('edu_varsity'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('edu_varsity') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Country of University @if($user->edu_country != NULL)<span style="color:#56d9b4;">({{$user->edu_country}})</span>@endif</label>
                                                <select class="form-control border-input {{ $errors->has('edu_country') ? ' is-invalid' : '' }}" id="country" name="edu_country"></select>
                                                <!-- <input type="text" class="form-control border-input {{ $errors->has('edu_dept') ? ' is-invalid' : '' }}" placeholder="Assistant Professor" name="edu_dept" value="{{ old('edu_dept') }}"> -->

                                                @if ($errors->has('edu_country'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('edu_country') }}</strong>
                                                    </span>
                                                @endif

                                            </div>
                                        </div>
                                    </div>





                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Designation</label>
                                                <input type="text" class="form-control border-input {{ $errors->has('designation') ? ' is-invalid' : '' }}" placeholder="Assistant Professor" name="designation" value="{{ old('designation') ? old('designation') : $user->designation }}">

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
                                                <input type="text" class="form-control border-input  {{ $errors->has('workplace') ? ' is-invalid' : '' }}" placeholder="Daffodil International University" value="{{ old('workplace') ? old('workplace') : $user->company }}" name="workplace">

                                                @if ($errors->has('workplace'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('workplace') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Update Profile</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title"><b>Choose your own skills<b></h4>
                                    <label style="padding-top: 5px;">Select the following suitable skills for you. Hope these choices will be the best suit your knowledge.</label>
                            </div>
                            <div class="content" style="padding-top: 8px;">
                                <form action="{{ route('updateSkill') }}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                @foreach($skills as $skill)
                                                    <div class="pretty p-default p-thick p-pulse p-curve">
                                                        <input type="checkbox" name="uskills[]" value="{{ $skill->id }}" 
                                                        @foreach($us as $k)
                                                            @if($skill->id == $k->skill_id)
                                                                checked
                                                            @endif
                                                        @endforeach
                                                        />
                                                        <div class="state p-warning-o">
                                                            <label>{{ $skill->title }}</label>
                                                        </div>
                                                    </div>
                                                @endforeach
                                                
                                                @if ($errors->has('uskills'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('uskills') }}</strong>
                                                    </span>
                                                @endif
                                            
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Update Skill</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>


                            <!-- content code end -->
<script src="{{ asset('AdminSD/assets/js/countries.js') }}"></script>
<script language="javascript">
    populateCountries("country");
</script>
<script type="text/javascript">
    document.querySelector("html").classList.add('js');

var fileInput  = document.querySelector( ".input-file" ),  
    button     = document.querySelector( ".input-file-trigger" ),
    the_return = document.querySelector(".file-return");
      
button.addEventListener( "keydown", function( event ) {  
    if ( event.keyCode == 13 || event.keyCode == 32 ) {  
        fileInput.focus();  
    }  
});
button.addEventListener( "click", function( event ) {
   fileInput.focus();
   return false;
});  
fileInput.addEventListener( "change", function( event ) {  
    the_return.innerHTML = this.value;  
});
</script>
@endsection
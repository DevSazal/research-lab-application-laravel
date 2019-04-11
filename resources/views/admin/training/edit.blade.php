@extends('layouts.root')

@section('title', 'Edit Training - ')
@section('pagetitle', 'Edit Training')


@section('content')

<style type="text/css">
    .card .header {
    padding: 20px 14px 0;
}
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
.pretty.p-icon:not(.p-fill) input:checked~.state. label:after {
    background-color: #14bf96!important;
}
</style>
            <!-- content code start -->

<form action="{{ route('admin.training.update', $training->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PATCH')

                <!-- About training Code start -->
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="header" style="padding-bottom: 20px;">
                                <h4 class="title"><b>Update Training Information<b></h4>
                            </div>
                            
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="content">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label><b>Course Title</b></label>
                                                <input type="text" class="form-control border-input {{ $errors->has('title') ? ' is-invalid' : '' }}" placeholder="Course Title" name="title" value="{{ old('title') ? old('title') : $training->title }}" required>

                                                @if ($errors->has('title'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('title') }}</strong>
                                                    </span>
                                                @endif

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label><b>Description </b></label>
                                                <textarea name="description" rows="5" class="form-control border-input {{ $errors->has('description') ? ' is-invalid' : '' }}" placeholder="Here can be your course description" value="">{{ old('description') ? old('description') : $training->description }}</textarea>

                                                
                                                @if ($errors->has('description'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('description') }}</strong>
                                                    </span>
                                                @endif


                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label><i class="fa fa-calendar" aria-hidden="true"></i> <b> Start Date</b></label>
                                                <input type="date" class="form-control border-input {{ $errors->has('start_date') ? ' is-invalid' : '' }}" placeholder="" name="start_date" value="@if(old('start_date')){{old('start_date')}}@else{{date('Y-m-d', strtotime($training->start_date))}}@endif" required>

                                                @if ($errors->has('start_date'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('start_date') }}</strong>
                                                    </span>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label><i class="fa fa-money" aria-hidden="true"></i><b> Fee</b></label>
                                                <input type="text" class="form-control border-input {{ $errors->has('fee') ? ' is-invalid' : '' }}" placeholder="BDT" name="fee" value="{{ old('fee') ? old('fee') : $training->fee }}">

                                                @if ($errors->has('fee'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('fee') }}</strong>
                                                    </span>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label><i class="fa fa-phone" aria-hidden="true"></i><b> Contact</b></label>
                                                <input type="text" class="form-control border-input {{ $errors->has('contact') ? ' is-invalid' : '' }}" placeholder="Contact Number" name="contact" value="{{ old('contact') ? old('contact') : $training->contact }}" required>

                                                @if ($errors->has('contact'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('contact') }}</strong>
                                                    </span>
                                                @endif

                                            </div>
                                        </div>
                                    </div>
                          
                                    <!-- <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Save</button>
                                    </div> -->
                                    <div class="clearfix"></div>                              
                            </div>
                        </div>
                    </div>
                </div>
                <!-- About training Code end -->

                <!-- About trainer Code start -->
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="header" style="padding-bottom: 20px;">
                                <h4 class="title"><b>About Trainer<b></h4>
                            </div>
                            
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <!-- <div class="header">
                                <h4 class="title"><b>Post A New Research Project<b></h4>
                            </div> -->
                            <div class="content">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label><b>Trainer Name</b></label>
                                                <input type="text" class="form-control border-input {{ $errors->has('trainer') ? ' is-invalid' : '' }}" placeholder="Trainer Name" name="trainer" value="{{ old('trainer') ? old('trainer') : $training->trainer_name }}" required>

                                                @if ($errors->has('trainer'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('trainer') }}</strong>
                                                    </span>
                                                @endif

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                
                                                <label><b>Description </b></label>
                                                <textarea name="trainer_description" rows="5" class="form-control border-input {{ $errors->has('trainer_description') ? ' is-invalid' : '' }}" placeholder="Here can be trainer description" value="">{{ old('trainer_description') ? old('trainer_description') : $training->trainer_description }}</textarea>

                                                
                                                @if ($errors->has('trainer_description'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('trainer_description') }}</strong>
                                                    </span>
                                                @endif


                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                            
                                                <div class="pretty p-default p-thick p-pulse p-curve">
                                                    <input type="radio" name="type" value="0" />
                                                    <div class="state p-warning-o">
                                                        <label>Technical Training</label>
                                                    </div>
                                                </div>
                                                <div class="pretty p-default p-thick p-pulse p-curve">
                                                    <input type="radio" name="type" value="1" />
                                                    <div class="state p-warning-o">
                                                        <label>Vendor Training</label>
                                                    </div>
                                                </div>
                                                
                                                @if ($errors->has('type'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('type') }}</strong>
                                                    </span>
                                                @endif
                                            
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Save</button>
                                    </div> -->
                                    <div class="clearfix"></div>                              
                            </div>
                        </div>
                    </div>
                </div>

                <!-- About trainer Code End-->




                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <!-- <div class="header" style="padding-bottom: 20px;">
                                <h4 class="title"><b>Post A New Research Project<b></h4>
                                <h4 class="title"><b>Tell us what you need done<b></h4>
                            </div> -->
                            <div class="content">
                                
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group  row">
                                            <a href="{{ asset('storage/trainingPhoto/'.$training->file)}}">{{$training->file}}</a>
                                                <div class="col-md-3">
                                                    <div class="input-file-container">  
                                                        <input class="input-file" id="my-file" type="file" name="file" 
                                                        accept="application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint,
                                                        text/plain, application/pdf, image/*">
                                                        <label tabindex="0" for="my-file" class="input-file-trigger"><i class="fa fa-paperclip" aria-hidden="true"></i> Upload your file</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <p class="file-return">only pdf, doc, docx, xls, xlsx, ppt, pptx and image format</p>

                                                @if ($errors->has('file'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('file') }}</strong>
                                                    </span>
                                                @endif
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                          

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Save Training</button>
                                    </div>
                                    <div class="clearfix"></div>
                                
                            </div>
                        </div>
                    </div>
                </div>


</form>           

            <!-- content code end -->

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
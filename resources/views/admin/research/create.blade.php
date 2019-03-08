@extends('layouts.root')

@section('title', 'Add Research - ')
@section('pagetitle', 'Add Research')


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
</style>
            <!-- content code start -->

<form action="{{ route('admin.research.store') }}" method="post" enctype="multipart/form-data">
    @csrf
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="header" style="padding-bottom: 20px;">
                                <!-- <h4 class="title"><b>Post A New Research Project<b></h4> -->
                                <h4 class="title"><b>Tell us what you need done<b></h4>
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
                                                <label><b>Choose a name for your project</b></label>
                                                <!-- <label>Title</label> -->
                                                <input type="text" class="form-control border-input {{ $errors->has('title') ? ' is-invalid' : '' }}" placeholder="Research Title" name="title" value="{{ old('title') }}" required>

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
                                                <!-- <label>Description</label> -->
                                                <label><b>Tell us more about your project</b></label>
                                                <textarea name="description" rows="5" class="form-control border-input {{ $errors->has('description') ? ' is-invalid' : '' }}" placeholder="Here can be your research description" value="Mike">{{ old('description') }}</textarea>

                                                
                                                @if ($errors->has('description'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('description') }}</strong>
                                                    </span>
                                                @endif


                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label><b>Expire Date</b></label>
                                                <input type="date" class="form-control border-input {{ $errors->has('exp') ? ' is-invalid' : '' }}" placeholder="" name="exp" value="{{ old('exp') }}" required>

                                                @if ($errors->has('exp'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('exp') }}</strong>
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
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title"><b>What skills are required?<b></h4>
                                    <label style="padding-top: 5px;">Select the following suitable skills for your research. Hope these choices will be the best suit your needs.</label>
                            </div>
                            <div class="content" style="padding-top: 8px;">
                                
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                @foreach($skills as $skill)
                                                    <div class="pretty p-default p-thick p-pulse p-curve">
                                                        <input type="checkbox" name="rskills[]" value="{{ $skill->id }}" />
                                                        <div class="state p-warning-o">
                                                            <label>{{ $skill->title }}</label>
                                                        </div>
                                                    </div>
                                                @endforeach
                                                
                                                @if ($errors->has('rskills'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('rskills') }}</strong>
                                                    </span>
                                                @endif
                                            
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="clearfix"></div>
                                
                            </div>
                        </div>
                    </div>


                </div>





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
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Save</button>
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
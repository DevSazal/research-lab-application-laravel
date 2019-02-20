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
                                <form action="{{ route('admin.skill.update', $skill->id) }}" method="post">
                                    @csrf
                                    @method('PATCH')
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control border-input {{ $errors->has('title') ? ' is-invalid' : '' }}" placeholder="type skill title" name="title" value="{{$skill->title}}" required>

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




                    <div class="row">

                        <div class="col-md-12">
                            <div class="card">
                                <div class="header">
                                    <h3 class="title"><b>Skill List</b></h3>

                                    <a href="{{ route('admin.skill.create') }}" class="btn btn-success"> + Add New Skill</a>
                                </div>
                                
                                 <!--    <div class="header">
                                    <h4 class="title">Striped Table</h4>
                                    <p class="category">Here is a subtitle for this table</p>
                                </div> -->
                                <div class="content table-responsive table-full-width" style="padding-left: 20px; padding-right: 20px; margin: unset;">
                                    <table class="table table-striped">
                                        <thead>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Created</th>
                                            <th>Updated</th>
                                            <!-- <th>Status</th> -->
                                            <th>Action</th>
                                        </thead>
                                        <tbody>
                                            @foreach($skills as $skill)
                                            <tr>
                                                <td>{{ $skill->id }}</td>
                                                <td>{{ $skill->title }}</td>
                                                <td>{{ $skill->created_at }}</td>
                                                <td>{{ $skill->updated_at }}</td>
                                                <!-- <td>
                                                    @if($skill->power == 1)
                                                        <span class="label label-success">Accepted</span>
                                                    @else
                                                        <span class="label label-warning">Pending</span>
                                                    @endif
                                                </td> -->
                                                <td>
                                                        <button onclick="$(this).parent().find('#accept').submit()" class="btn btn-info btn-sm">Edit</button>
                                                        <button onclick="$(this).parent().find('#wait').submit()" class="btn btn-danger btn-sm">Delete</button>
                                                    
                                                        <!-- <a href="javascript:void(0)" onclick="$(this).parent().find('#accept').submit()" class="btn btn-info btn-sm">Accept</a> -->
                                                        <form id="accept" method="POST" action="{{ route('admin.skill.edit', $skill->id) }}">
                                                            @method('GET')
                                                            @csrf
                                                        </form>
                                                    
                                                        <!-- <a href="javascript:void(0)" onclick="$(this).parent().find('#wait').submit()" class="btn btn-danger btn-sm">Wait</a> -->
                                                        <form id="wait" method="POST" action="{{ route('admin.skill.destroy', $skill->id) }}">
                                                            @method('DELETE')
                                                            @csrf
                                                        </form>
                                                                                                        
                                                </td>
                                            </tr>
                                            @endforeach
                                            
                                            
                                        </tbody>
                                    </table>

                                </div>
                                <!--pagination-->
                                <nav class="pagination-box" aria-label="Page navigation">
                                    {{ $skills->links() }}
                                    <!-- <ul class="pagination" role="navigation">
                                        <li class="page-item disabled" aria-disabled="true" aria-label="« Previous">
                                            <span class="page-link" aria-hidden="true">‹</span>
                                        </li>
                                        <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" rel="next" aria-label="Next »">›</a>
                                        </li>
                                    </ul> -->
                                </nav>
                                <!--pagination END-->
                            </div>
                        </div>
                    </div>

            

            <!-- content code end -->



@endsection
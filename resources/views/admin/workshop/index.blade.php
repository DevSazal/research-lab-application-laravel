@extends('layouts.root')

@section('title', 'Awareness Program - ')
@section('pagetitle', 'Awareness Program')


@section('content')
    <style>
        #board{
            display: none;
        }
        .table-striped tbody > tr:nth-of-type(2n) {
            background-color: #FFF;
        }
        .table-striped tbody > tr:hover {
            background-color: #f5f5f5;
        }
        .btn-sm {
            font-size: 12px;
            border-radius: 26px;
            padding: 4px 10px;
            margin-top: -4px;
            margin-bottom: -4px;
        }
        .table-striped > thead > tr > th{
            font-weight: bold;
            font-size: 1em;
        }
        .btn{
            border-width: 2px;
        }
    </style>

                    <div class="row">

                        <div class="col-md-12">
                            <div class="card">
                                <div class="header">
                                    <h3 class="title"><b>Program List</b></h3>
                                    <a href="{{ route('admin.awareness.create') }}" class="btn btn-success"> + Add New Program</a>
                                </div>
                                
                                 <!--    <div class="header">
                                    <h4 class="title">Striped Table</h4>
                                    <p class="category">Here is a subtitle for this table</p>
                                </div> -->
                                <div class="content table-responsive table-full-width" style="padding-left: 20px; padding-right: 20px; margin: unset;">
                                    <table class="table table-striped">
                                        <thead>
                                            <th>#</th>
                                            <th>Program Title</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Type</th>
                                            <th>Fee</th>
                                            <th>Contct</th>
                                            <th>Created</th>
                                            <th>Action</th>
                                        </thead>

                                        <tbody>
                                            @foreach($workshops as $t)
                                            <tr>
                                                <td><b>{{ $t->id }}</b></td>
                                                <td>{{ $t->title }}</td>
                                                <td>{{ \Carbon\Carbon::parse($t->start_date)->format('j F Y') }}</td>
                                                <td>{{ \Carbon\Carbon::parse($t->start_time)->format('h:i A') }}</td>
                                                <td>@if($t->type == 0)<span class="label label-primary">Workshop</span>@elseif($t->type == 1)<span class="label label-success">Seminar</span>@endif</td>
                                                <td>@if($t->fee != NULL){{ $t->fee.' BDT' }}@else<span class="label label-success">Free</span>@endif</td>
                                                <td>{{ $t->contact }}</td>
                                                <td>{{ ($t->created_at)->format('Y/m/d') }}</td>
                                                
                                                <td>     
                                                    @if(Auth::user()->role > 2 && Auth::user()->power == 1)
                                                       <a href="{{ route('admin.awareness.edit', $t->id) }}" class="btn btn-info btn-sm">Edit</a>
                                                    @endif                                                     
                                                </td>
                                            </tr>
                                            @endforeach
                                            
                                            
                                        </tbody>

                                    </table>

                                </div>
                                <!--pagination-->
                                <nav class="pagination-box" aria-label="Page navigation">
                                    {{ $workshops->links() }}
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



<script>

</script>

@endsection
@extends('layouts.root')

@section('title', 'Research - ')
@section('pagetitle', 'Research')


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
                                    <h3 class="title"><b>Research List</b></h3>
                                    <a href="{{ route('admin.research.create') }}" class="btn btn-success"> + Add New Training</a>
                                </div>
                                
                                 <!--    <div class="header">
                                    <h4 class="title">Striped Table</h4>
                                    <p class="category">Here is a subtitle for this table</p>
                                </div> -->
                                <div class="content table-responsive table-full-width" style="padding-left: 20px; padding-right: 20px; margin: unset;">
                                    <table class="table table-striped">
                                        <thead>
                                            <th>#</th>
                                            <th>Training Title</th>
                                            <th>Date</th>
                                            <th>Trainer Name</th>
                                            <th>Fee</th>
                                            <th>Contct</th>
                                            <th>Created</th>
                                            <th>Action</th>
                                        </thead>

                                        <tbody>
                                            @foreach($research as $r)
                                            <tr>
                                                <td><b>{{ $r->id }}</b></td>
                                                <td>{{ $r->title }}</td>
                                                <td>{{ ($r->created_at)->format('Y-m-d') }}</td>
                                                <td title="{{ \Carbon\Carbon::parse($r->expire_at)->format('jS F Y') }}">
                                                <?php 
                                                    if(date('Y-m-d') > $r->expire_at){
                                                        echo "Expired";
                                                        // echo date('Y-m-d', strtotime('today - 7 days')); 
                                                    }else{
                                                        $date1 = new DateTime(date('Y-m-d H:i:s'));
                                                        $date2 = new DateTime($r->expire_at);
                                                        echo $date1->diff($date2)->format("%dD %hH");
                                                    }
                                                        ?></td>
                                                <td>
                                                    @if($r->status == 1)
                                                        <span class="label label-success">Published</span>
                                                    @else
                                                        <span class="label label-warning">Pending</span>
                                                    @endif
                                                </td>
                                                <td>{{ $r->user->name }}</td>
                                                <td>
                                                    
                                                @if(Auth::user()->role > 2 && Auth::user()->power == 1)
                                                    @if($r->status == 0)
                                                        <button onclick="$(this).parent().find('#publish').submit()" class="btn btn-success btn-sm">Publish</button>
                                                        

                                                    @else
                                                        <button onclick="$(this).parent().find('#wait').submit()" class="btn btn-danger btn-sm">Pending</button>
                                                        
                                                    @endif
                                                @endif
                                                        <!-- <button onclick="$(this).parent().find('#edit').submit()" class="btn btn-info btn-sm">Edit</button> -->
                                                        <a href="{{ route('admin.research.edit', $r->id) }}" class="btn btn-info btn-sm">Edit</a>


                                                        <!-- <a href="javascript:void(0)" onclick="$(this).parent().find('#wait').submit()" class="btn btn-danger btn-sm">Wait</a> -->
                                                        <form id="wait" method="POST" action="{{ url('app/research/pending', $r->id) }}">
                                                            @method('PUT')
                                                            @csrf
                                                        </form>
                                                        <!-- <a href="javascript:void(0)" onclick="$(this).parent().find('#accept').submit()" class="btn btn-info btn-sm">Accept</a> -->
                                                        <form id="publish" method="POST" action="{{ url('app/research/publish', $r->id) }}">
                                                            @method('PUT')
                                                            @csrf
                                                        </form>
                                                        <!-- <a href="javascript:void(0)" onclick="$(this).parent().find('#accept').submit()" class="btn btn-info btn-sm">Accept</a> -->
                                                        <form id="edit" method="POST" action="{{ route('admin.research.edit', $r->id) }}">
                                                            @method('GET')
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
                                    {{ $research->links() }}
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
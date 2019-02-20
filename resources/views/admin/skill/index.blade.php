@extends('layouts.root')

@section('title', 'New User List | Cyber Security Center by Appsolic Lab')
@section('pagetitle', 'Dashboard')


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
                                    <h3 class="title"><b>Skill List</b></h3>
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
                                                    
                                                        <a href="javascript:void(0)" onclick="$(this).parent().find('#accept').submit()" class="btn btn-info btn-sm">Accept</a>
                                                        <form id="accept" method="POST" action="{{ url('app/user/verify', $skill->id) }}">
                                                            @method('PUT')
                                                            @csrf
                                                        </form>
                                                    
                                                        <a href="javascript:void(0)" onclick="$(this).parent().find('#wait').submit()" class="btn btn-danger btn-sm">Wait</a>
                                                        <form id="wait" method="POST" action="{{ url('app/user/unverify', $skill->id) }}">
                                                            @method('PUT')
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



<script>
     // showNotification('top','right');
    function showNotification(from, align){
    color = Math.floor((Math.random() * 4) + 1);

    $.notify({
        icon: "ti-gift",
        message: "XXXX Welcome to <b>Paper Dashboard</b> - a beautiful freebie for every web developer."

    },{
        type: type[color],
        timer: 4000,
        placement: {
            from: from,
            align: align
        }
    });
}
</script>

@endsection
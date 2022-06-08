@extends('layouts.app')
@section('content')
<div id="content-container">
    <div class="pageheader">
        <div id="page-content">
            <div class="panel">

                <div class="panel-heading ">
                    <h3 class="panel-title">All Post </h3>                  
                    <!-- <a href="{{config('app.baseURL')}}/post/add"><button style="margin-top:10px;" type="submit" class="btn pull-right btn-primary panel-button">Add </button></a></h3> -->
                </div>

                <div class="panel-body">
                    <table class="table table-bordered col-md-12 col-sm-12" id="myTable" style="padding-right: 0px;
                    padding-left: 0px;" >
                    <tr>
                        <th>Post Id</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Image</th>
                        <!-- <th>Category</th> -->
                    </tr>
                    @foreach($post as $data)
                    <tr>
                            <td>{{$data->post_id}}</td>
                            <td>{{$data->title}}</td>
                            <td>{{$data->description}}</td>
                            <td><img src="{{config('app.baseURL')}}/storage/app/{{$data->image}}" style='height:50px;'></td>
                            <!-- <td>{{$data->desciption}}</td> -->

                    </tr>
                    @endforeach
                    </table>
                </div>
            </div>

        </div>

    </div>
</div>
<script type="text/javascript">
    $(document).ready( function () {
        $('#myTable').DataTable({
            "order":[
            [0,"desc"]
            ],
        });
    } ); 
</script>
@endsection
@extends('Admin.layouts.master')
@section('title','Manage-Catagory')
@section('ManageCatagory_active','active')
@section('mainContent')
<div class="main-grid">
    <div class="agile-grids">	
        <!-- tables -->

        <div class="table-heading">
            <h2> Manage Catagories</h2>
            <h2 style="color:green">{{Session::get('message')}}</h2>
        </div>
        <div class="agile-tables">
            <div class="w3l-table-info">
                <table id="table">
                    <thead>
                        <tr>
                            <th>Catagory ID</th>
                            <th>Catagory Name</th>
                            <th>Catagory Description</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                       
                @foreach($catagories as $catagory)
              
                        <tr>
                            <td>{{$catagory->catagory_id}}</td>
                            <td>{{$catagory->catagory_name}}</td>
                            <td>{{$catagory->catagory_description}}</td>
                            <td><?php if($catagory->publication_status==1){ ?>
                                <span class="label label-success">Active</span>
                            <?php }else{ ?>
                                <span class="label label-danger">Inactive</span>
                            <?php } ?>
                            </td>
                            <td>
                                <?php if($catagory->publication_status==1) { ?>
                                <a href="{{url('/published-catagory/'.$catagory->catagory_id)}}" class="btn btn-primary">
                                    <span class="glyphicon glyphicon-thumbs-down" title="Unpublish"></span>
                                </a>
                                <?php }else{ ?>
                                   <a href="{{url('/unpublished-catagory/'.$catagory->catagory_id)}}" class="btn btn-success">
                                    <span class="glyphicon glyphicon-thumbs-up" title="Publish"></span>
                                </a>
                                <?php } ?>
                                   <a href="{{url('/update-catagory/'.$catagory->catagory_id)}}" class="btn btn-info">
                                    <span class="glyphicon glyphicon-edit" title="Edit"></span>
                                </a>
                                <a onclick="return confirm('Are you sure to Delete!!!')" href="{{url('/delete-catagory/'.$catagory->catagory_id)}}" class="btn btn-danger">
                                    <span class="glyphicon glyphicon-trash" title="Delete"></span>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- //tables -->
    </div>
</div>
@endsection


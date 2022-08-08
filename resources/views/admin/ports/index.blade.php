@extends('layouts.admin')
@section('title')
Ports | A Logistics Company
@endsection
@section('admin-contents')

@if (session('status'))
   <div class="alert alert-success" role="alert">
        {{ session('status') }}
        <a href="" class="close pull-right">&times;</a>
   </div>
@elseif (session('warning'))
   <div class="alert alert-danger" role="alert">
        {{ session('warning') }}
        <a href="" class="close pull-right">&times;</a>
   </div>    
@endif


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Ports <a href="{{url('/add-port')}}" class="btn btn-success" data-toggle="modal" data-target="#portModal">Add</a></h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Ports List</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Sl.</th>
                            <th>Name</th>
                            <th>Country</th>
                            <th>Slug</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ports as $port)
                            <tr>
                                <td>{{$port->id}}</td>
                                <td>{{$port->name}}</td>
                                <td>{{$port->country_info->name}}</td>
                                <td>{{$port->slug}}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{url('/edit-port/'.$port->slug)}}" class="btn btn-primary">Edit</a>
                                        <a class="btn btn-danger" href="#" data-toggle="modal" data-target="#sureModal">Delete</a>
                                    </div>

                                                                        <!-- Are You Sure Modal-->
                                    <div class="modal fade" id="sureModal" tabindex="-1" role="dialog" aria-labelledby="sureModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title text-primary" id="sureModalLabel">Ready to delete?</h5>
                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body text-dark">Are you sure, you want to delete the item?</div>
                                            <div class="modal-footer">
                                                <a href="{{url('/delete-port/'.$port->slug)}}" class="btn btn-danger">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Port Add Modal -->
    <div class="modal fade" id="portModal" tabindex="-1" role="dialog" aria-labelledby="portModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="portModalLabel">Add Port</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="user" action="{{url('/save-port')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="col-12 mb-3 mb-sm-0">
                            <label for="country_id" class="text-primary"> <b>Country <span class="text-danger">*</span></b> </label>
                            <select name="country_id" id="country_id" required="" class="form-control @error('country_id') is-invalid @enderror">
                                <option>Select A Country</option>
                                @foreach($countries as $country)
                                    <option value="{{$country->id}}">{{$country->name}}</option>
                                @endforeach
                            </select>
                            <span class="text-danger">
                                @error('country_id')
                                    <p class="text-danger">{{$message}}</p> 
                                @enderror
                            </span>
                            <br>
                        </div>

                        <div class="col-12 mb-3 mb-sm-0">
                            <label for="name" class="text-primary"> <b>Name <span class="text-danger">*</span></b> </label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name"
                                placeholder="Port Name" required="">
                            <span class="text-danger">
                                @error('name')
                                    <p class="text-danger">{{$message}}</p> 
                                @enderror
                            </span>
                            <br>
                        </div>

                        <div class="col-12 mb-3 mb-sm-0">
                            <label for="slug" class="text-primary"> <b>Slug <span class="text-danger">*</span></b> </label>
                            <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" id="slug"
                                placeholder="Slug" required="">
                            @error('slug')
                                <p class="text-danger">{{$message}}</p> 
                            @enderror    
                            <br>
                        </div>
                        <div class="col-12 mb-3 mb-sm-0">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



</div>
<!-- /.container-fluid -->


@endsection
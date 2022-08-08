@extends('layouts.admin')
@section('title')
Edit Container | A Logistics Company
@endsection
@section('admin-contents')

@if (session('status'))
   <div class="alert alert-success" role="alert">
        {{ session('status') }}
        <a class="close pull-right">&times;</a>
   </div>
@elseif (session('warning'))
   <div class="alert alert-danger" role="alert">
        {{ session('warning') }}
        <a class="close pull-right">&times;</a>
   </div>    
@endif


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Containers</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Containers List</h6>
        </div>
        <div class="card-body">
            <form class="user" action="{{url('/update-container/'.$container->slug)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-12 mb-3 mb-sm-0">
                    <label for="name" class="text-primary"> <b>Name <span class="text-danger">*</span></b> </label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name"
                        value="{{$container->name}}" required="">
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
                        value="{{$container->slug}}" required="">
                    @error('slug')
                        <p class="text-danger">{{$message}}</p> 
                    @enderror    
                    <br>
                </div>
                <div class="col-12 mb-3 mb-sm-0">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->


@endsection
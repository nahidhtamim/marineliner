@extends('layouts.admin')
@section('title')
Dashboard | A Premium Media Company
@endsection
@section('admin-contents')

@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
    <a class="close">&times;</a>
</div>
@elseif (session('warning'))
<div class="alert alert-danger" role="alert">
    {{ session('warning') }}
    <a class="close">&times;</a>
</div>
@endif


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Print Publications</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Print Publications List
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                    Add
                </button>
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="text-center">
                        <tr>
                            <th>SL.</th>
                            <th>Title</th>
                            <th>Images</th>
                            <th>Description Ttop</th>
                            <th>Description Bottom</th>
                            <th>Youtube Video</th>
                            <th>Slug</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i=1; @endphp
                        @forelse ($publications as $publication)
                            <tr>
                                <td>{{$i++;}}</td>
                                <td>{{$publication->title}}</td>
                                <td></td>
                                <td>{{$publication->description_top}}</td>
                                <td>{{$publication->description_bottom}}</td>
                                <td>{!!$publication->youtube_video!!}</td>
                                <td>{{$publication->slug}}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{url('/edit-publication/{slug}')}}" class="btn btn-primary">Edit</a>
                                        <a href="{{url('/delete-publication/{slug}')}}" class="btn btn-danger">Delete</a>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">No Publication yet!</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Print Publications</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="user" action="/add-publication" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-12 mb-3 mb-sm-0">
                                <label for="title" class="text-primary"> <b>Title <span class="text-danger">*</span></b> </label>
                                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title"
                                    placeholder="Publication Title">
                                <span class="text-danger">
                                    @error('title')
                                        <p class="text-danger">{{$message}}</p> 
                                    @enderror
                                </span>
                                <br>
                            </div>
                            <div class="col-12">
                                <label for="description_top" class="text-primary"> <b>Top Description <span class="text-danger">*</span></b> </label>
                                <textarea name="description_top" rows="2" id="description_top"
                                    class="form-control text-left @error('description_top') is-invalid @enderror">
                                    Top Description
                                </textarea>
                                @error('description_top')
                                    <p class="text-danger">{{$message}}</p> 
                                @enderror
                                <br>
                            </div>
                            <div class="col-12">
                                <label for="description_bottom" class="text-primary"> <b>Bottom Description</b> </label>
                                <textarea name="description_bottom" rows="2" id="description_bottom"
                                    class="form-control text-left">
                                    Bottom Description
                                </textarea>
                                <br>
                            </div>
                            <div class="col-12 mb-3 mb-sm-0">
                                <label for="youtube_video" class="text-primary"> <b>Youtube Video</b> </label>
                                <input type="text" name="youtube_video" class="form-control" id="youtube_video"
                                    placeholder="Youtube Video">
                                <br>
                            </div>
                            <div class="col-12 mb-3 mb-sm-0">
                                <label for="slug" class="text-primary"> <b>Slug</b> </label>
                                <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" id="slug"
                                    placeholder="Slug">
                                @error('slug')
                                    <p class="text-danger">{{$message}}</p> 
                                @enderror    
                                <br>
                            </div>
                            <div class="col-12 mb-3 mb-sm-0">
                                <label for="images" class="text-primary"> <b>Images</b> <span class="text-danger">*</span> </label>
                                <input type="file" name="images[]" class="form-control" id="images" accept="image/*" multiple>
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
</div>
<!-- /.container-fluid -->


@endsection

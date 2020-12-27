@extends('layouts.admin')

@section('title', 'Edit Category')

@section('content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Category</h6>
        </div>
        <div class="card-body ">
            <form class="user" action="{{route('admin_category_update', ['id'=>$data->id])}}" method="post">
                @csrf
                <div class="form-group col-lg-6">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-2">
                                <label>Parent</label>
                            </div>
                            <div class="col-lg-10">
                                <select class="custom-select" name="parent_id">
                                    <option value="0">Main Category</option>
                                    @foreach ($datalist as $rs)
                                        <option value="{{$rs->id}}" @if ($rs->id == $data->parent_id) selected="selected" @endif>{{$rs->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                    <div class="row">
                        <div class="col-lg-2">
                            <label>Title</label>
                        </div>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" value="{{$data->title}}" name="title">
                        </div>
                    </div>
                    </div>
                    <div class="form-group">
                    <div class="row">
                        <div class="col-lg-2">
                            <label>Keywords</label>
                        </div>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" value="{{$data->keywords}}" name="keywords">
                        </div>
                    </div>
                    </div>
                    <div class="form-group">
                    <div class="row">
                        <div class="col-lg-2">
                            <label>Description</label>
                        </div>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" value="{{$data->description}}" name="description">
                        </div>
                    </div>
                    </div>
                    <div class="form-group">
                    <div class="row">
                        <div class="col-lg-2">
                            <label>Status</label>
                        </div>
                        <div class="col-lg-10">
                            <select class="custom-select" name="status">
                                <option selected="selected">{{$data->status}}</option>
                                <option>false</option>
                                <option>true</option>
                            </select>
                        </div>
                    </div>
                    </div>
                    <div class="form-group">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button type="submit" class="btn btn-primary btn-user btn-block col-lg-3 ">
                            Update Category
                        </button>
                    </div>
                    </div>
                </div>


            </form>
        </div>
    </div>
@endsection



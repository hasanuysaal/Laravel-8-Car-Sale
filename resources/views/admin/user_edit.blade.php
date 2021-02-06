@extends('layouts.admin')

@section('title', 'Update User')


@section('content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Update Product</h6>
        </div>
        <div class="card-body ">
            <form class="user" action="{{route('admin_user_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group col-lg-12">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-2">
                                <label>Name</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" value="{{$data->name}}" name="name">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-2">
                                <label>Email</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" value="{{$data->email}}" name="email">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-2">
                                <label>Phone</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" value="{{$data->phone}}" name="phone">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-2">
                                <label>Address</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" value="{{$data->address}}" name="address">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-2">
                                <label>İmage</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="file" class="form-control" name="image">
                                @if ($data->profile_photo_path)
                                    <img src="{{Illuminate\Support\Facades\Storage::url($data->profile_photo_path)}}" height="100" alt="">
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button type="submit" class="btn btn-primary btn-user btn-block col-lg-3 ">
                                Update
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection



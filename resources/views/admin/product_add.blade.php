@extends('layouts.admin')

@section('title', 'Add Product')

@section('content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add Product</h6>
        </div>
        <div class="card-body ">
            <form class="user" action="{{route('admin_product_store')}}" method="post">
                @csrf
                <div class="form-group col-lg-6">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-2">
                                <label>Parent</label>
                            </div>
                            <div class="col-lg-10">
                                <select class="custom-select" name="category_id">
                                    @foreach ($datalist as $rs)
                                        <option value="{{$rs->id}}">{{$rs->title}}</option>
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
                            <input type="text" class="form-control" name="title">
                        </div>
                    </div>
                    </div>
                    <div class="form-group">
                    <div class="row">
                        <div class="col-lg-2">
                            <label>Make</label>
                        </div>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="make">
                        </div>
                    </div>
                    </div>
                    <div class="form-group">
                    <div class="row">
                        <div class="col-lg-2">
                            <label>Series</label>
                        </div>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="series">
                        </div>
                    </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-2">
                                <label>Model</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" name="model">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-2">
                                <label>Year</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="number" class="form-control" value="0" name="year">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-2">
                                <label>Fuel</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" name="fuel">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-2">
                                <label>Gear</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" name="gear">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-2">
                                <label>KM</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="number" class="form-control" value="0" name="km">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-2">
                                <label>Engine Power</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" name="engine_power">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-2">
                                <label>Engine Capacity</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" name="engine_capacity">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-2">
                                <label>Traction</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" name="traction">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-2">
                                <label>Color</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" name="color">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-2">
                                <label>Condition</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" name="condition">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-2">
                                <label>Price</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="number" class="form-control" value="0" name="price">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-2">
                                <label>Detail</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" name="detail">
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
                                <option selected="selected">false</option>
                                <option>true</option>
                            </select>
                        </div>
                    </div>
                    </div>
                    <div class="form-group">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button type="submit" class="btn btn-primary btn-user btn-block col-lg-3 ">
                            Add Product
                        </button>
                    </div>
                    </div>
                </div>


            </form>
        </div>
    </div>
@endsection



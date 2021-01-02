@extends('layouts.admin')

@section('title', 'Update Product')

@section('js')
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
@endsection

@section('content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Update Product</h6>
        </div>
        <div class="card-body ">
            <form class="user" action="{{route('admin_product_update',['id'=>$data->id])}}" method="post">
                @csrf
                <div class="form-group col-lg-12">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-2">
                                <label>Parent</label>
                            </div>
                            <div class="col-lg-10">
                                <select class="custom-select" name="category_id">
                                    @foreach ($datalist as $rs)
                                        <option value="{{$rs->id}}" @if ($rs->id == $data->category_id) selected="selected" @endif>{{$rs->title}}</option>
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
                            <label>Make</label>
                        </div>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" value="{{$data->make}}" name="make">
                        </div>
                    </div>
                    </div>
                    <div class="form-group">
                    <div class="row">
                        <div class="col-lg-2">
                            <label>Series</label>
                        </div>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" value="{{$data->series}}" name="series">
                        </div>
                    </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-2">
                                <label>Model</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" value="{{$data->model}}" name="model">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-2">
                                <label>Year</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="number" class="form-control" value="{{$data->year}}" name="year">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-2">
                                <label>Fuel</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" value="{{$data->fuel}}" name="fuel">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-2">
                                <label>Gear</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" value="{{$data->gear}}" name="gear">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-2">
                                <label>KM</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="number" class="form-control" value="{{$data->km}}" name="km">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-2">
                                <label>Engine Power</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" value="{{$data->engine_power}}" name="engine_power">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-2">
                                <label>Engine Capacity</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" value="{{$data->engine_capacity}}" name="engine_capacity">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-2">
                                <label>Traction</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" value="{{$data->traction}}" name="traction">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-2">
                                <label>Color</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" value="{{$data->color}}" name="color">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-2">
                                <label>Condition</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" value="{{$data->condition}}" name="condition">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-2">
                                <label>Price</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="number" class="form-control" value="{{$data->price}}" name="price">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-2">
                                <label>Detail</label>
                            </div>
                            <div class="col-lg-10">
                                <textarea class="form-control" id="body" name="detail">{{$data->detail}}</textarea>
                                <script>
                                    ClassicEditor
                                        .create( document.querySelector( '#body' ) )
                                        .catch( error => {
                                            console.error( error );
                                        } );
                                </script>
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
                                <option>true</option>
                                <option>false</option>
                            </select>
                        </div>
                    </div>
                    </div>
                    <div class="form-group">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button type="submit" class="btn btn-primary btn-user btn-block col-lg-3 ">
                            Update Product
                        </button>
                    </div>
                    </div>
                </div>


            </form>
        </div>
    </div>
@endsection


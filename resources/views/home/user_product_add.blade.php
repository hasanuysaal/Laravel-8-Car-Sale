@extends('layouts.home')

    @section('title', 'Add Product')

@section('jss')
    <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
@endsection

@section('content')
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-5">
                    @include('home.usermenu')
                </div>
                <div class="col-lg-10 col-md-7">
                    <div class="card-body ">
                        <form class="user" action="{{route('user_product_store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group col-lg-12">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label>Category</label>
                                        </div>
                                        <div class="col-lg-10">
                                            <select class="custom-select" name="category_id">
                                                @foreach ($datalist as $rs)
                                                    <option value="{{$rs->id}}">{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title)}}</option>
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
                                            <textarea class="form-control" id="body" placeholder="Enter the Description" name="detail"></textarea>
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
                                            <label>İmage</label>
                                        </div>
                                        <div class="col-lg-10">
                                            <input type="file" class="form-control" name="image">
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
            </div>
        </div>
    <br>
@endsection

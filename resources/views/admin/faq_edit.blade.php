@extends('layouts.admin')

@section('title', 'Edit FAQ')

@section('js')

    <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
@endsection

@section('content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit FAQ</h6>
        </div>
        <div class="card-body ">
            <form class="user" action="{{route('admin_faq_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group col-lg-12">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-2">
                                <label>Position</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="number" value="{{$data->position}}" class="form-control" name="position">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-2">
                                <label>Question</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" value="{{$data->question}}" name="question">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-2">
                                <label>Answer</label>
                            </div>
                            <div class="col-lg-10">
                                <textarea class="form-control" id="body" name="answer">{{$data->answer}}</textarea>
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
                                    <option>false</option>
                                    <option>true</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button type="submit" class="btn btn-primary btn-user btn-block col-lg-3 ">
                                Edit
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection



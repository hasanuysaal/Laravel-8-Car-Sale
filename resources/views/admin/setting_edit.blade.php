@extends('layouts.admin')

@section('title', 'Update Settings')

@section('js')
    <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
@endsection

@section('content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Update Settings</h6>
        </div>
        <div class="card-body ">
            <form class="user" action="{{route('admin_setting_update')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group col-lg-12">
                    <input type="hidden" class="form-control" value="{{$data->id}}" name="id">
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
                                <label>Company</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" value="{{$data->company}}" name="company">
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
                                <label>Fax</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" value="{{$data->fax}}" name="fax">
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
                                <label>Smtp Server</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" value="{{$data->smtpserver}}" name="smtpserver">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-2">
                                <label>Smtp Email</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" value="{{$data->smtpemail}}" name="smtpemail">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-2">
                                <label>Smtp Password</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="password" class="form-control" value="{{$data->smtppassword}}" name="smtppassword">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-2">
                                <label>Smtp Port</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="number" class="form-control" value="{{$data->smtpport}}" name="smtpport">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-2">
                                <label>Facebook</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" value="{{$data->facebook}}" name="facebook">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-2">
                                <label>Instagram</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" value="{{$data->instagram}}" name="instagram">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-2">
                                <label>Twitter</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" value="{{$data->twitter}}" name="twitter">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-2">
                                <label>Youtube</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" value="{{$data->youtube}}" name="youtube">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-2">
                                <label>Aboutus</label>
                            </div>
                            <div class="col-lg-10">
                                <textarea class="form-control" id="ta_abouts" name="aboutus">{{$data->aboutus}}</textarea>

                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-2">
                                <label>Contact</label>
                            </div>
                            <div class="col-lg-10">
                                <textarea class="form-control" id="ta_contact" name="contact">{{$data->contact}}</textarea>

                            </div>
                        </div>
                    </div> <div class="form-group">
                        <div class="row">
                            <div class="col-lg-2">
                                <label>References</label>
                            </div>
                            <div class="col-lg-10">
                                <textarea class="form-control" id="ta_references" name="references">{{$data->references}}</textarea>

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
                            Update Settings
                        </button>
                    </div>
                    </div>
                </div>
                <script>
                    ClassicEditor
                        .create( document.querySelector( '#ta_abouts' ) )
                        .catch( error => {
                            console.error( error );
                        } );
                    ClassicEditor
                        .create( document.querySelector( '#ta_contact' ) )
                        .catch( error => {
                            console.error( error );
                        } );
                    ClassicEditor
                        .create( document.querySelector( '#ta_references' ) )
                        .catch( error => {
                            console.error( error );
                        } );
                </script>

            </form>
        </div>
    </div>
@endsection



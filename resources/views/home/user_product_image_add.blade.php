<html>
<head>
    <link href="{{asset('assets')}}/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('assets')}}/admin/css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">{{$data->title}}</h6>
    </div>
    <div class="card-body ">
        <form class="user" action="{{route('user_image_store',['product_id'=>$data->id])}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group col-lg-12">
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
                            Add Image
                        </button>
                    </div>
                </div>
            </div>
        </form>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($images as $rs)
                        <tr>
                            <td>{{$rs->id}}</td>
                            <td>{{$rs->title}}</td>
                            <td>
                                @if ($rs->image)
                                    <img src="{{Illuminate\Support\Facades\Storage::url($rs->image)}}" height="150px" alt="">
                                @endif
                            </td>
                            <td><a href="{{route('user_image_delete',['id' => $rs->id,'product_id'=>$data->id])}}" onclick="return confirm('Delete ! Are you sure?')" class="btn btn-danger btn-circle">
                                    <i class="fas fa-trash"></i>
                                </a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>


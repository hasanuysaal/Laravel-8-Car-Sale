<!-- Custom fonts for this template-->
<link href="{{asset('assets')}}/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

<!-- Custom styles for this template-->
<link href="{{asset('assets')}}/admin/css/sb-admin-2.min.css" rel="stylesheet">

<div class="card-body">
    @include('home.message')
    <form class="user" action="{{route('admin_review_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
        @csrf
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>
                <th>Id</th><td>{{$data->id}}</td>
            </tr>
            <tr>
                <th>Name</th><td>{{$data->user->name}}</td>
            </tr>
            <tr>
                <th>Product</th><td>{{$data->product->title}}</td>
            </tr>
            <tr>
                <th>Review</th><td>{{$data->review}}</td>
            </tr>
            <tr>
                <th>Rate</th><td>{{$data->rate}}</td>
            </tr>
            <tr>
                <th>IP</th><td>{{$data->IP}}</td>
            </tr>
            <tr>
                <th>Created Date</th><td>{{$data->created_at}}</td>
            </tr>
            <tr>
                <th>Updated Date</th><td>{{$data->updated_at}}</td>
            </tr>
            <!--<tr>
                <th>IP</th><td>$data->ip</td>
            </tr>-->
            <tr>
                <th>Status</th>
                <td>
                    <select name="status" class="form-control">
                        <option selected>{{$data->status}}</option>
                        <option>True</option>
                        <option>False</option>
                    </select>
                </td>
            </tr>

            </thead>

        </table>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="submit" class="btn btn-primary btn-user btn-block col-lg-3 ">
                Update Review
            </button>
        </div>
        </div>
    </form>
    </div>
</div>



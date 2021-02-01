<!-- Custom fonts for this template-->
<link href="{{asset('assets')}}/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

<!-- Custom styles for this template-->
<link href="{{asset('assets')}}/admin/css/sb-admin-2.min.css" rel="stylesheet">

<div class="card-body">
    @include('home.message')
    <form class="user" action="{{route('admin_message_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
        @csrf
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>
                <th>Id</th><td>{{$data->id}}</td>
            </tr>
            <tr>
                <th>Name</th><td>{{$data->name}}</td>
            </tr>
            <tr>
                <th>Email</th><td>{{$data->email}}</td>
            </tr>
            <tr>
                <th>Phone</th><td>{{$data->phone}}</td>
            </tr>
            <tr>
                <th>Subject</th><td>{{$data->subject}}</td>
            </tr>
            <tr>
                <th>Message</th><td>{{$data->message}}</td>
            </tr>
            <!--<tr>
                <th>IP</th><td>$data->ip</td>
            </tr>-->
            <tr>
                <th>Admin Note</th>
                <td>
                    <textarea name="note" class="form-control"> {{$data->note}}</textarea>
                </td>
            </tr>

            </thead>

        </table>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="submit" class="btn btn-primary btn-user btn-block col-lg-3 ">
                Update Message
            </button>
        </div>
        </div>
    </form>
    </div>
</div>



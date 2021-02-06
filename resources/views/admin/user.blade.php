@extends('layouts.admin')

@section('title', 'User List')

@section('content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th></th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Roles</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($datalist as $rs)
                        <tr>
                            <td>{{$rs->id}}</td>
                            <td>
                                @if ($rs->profile_photo_path)
                                    <img class="img-profile rounded-circle" src="{{Illuminate\Support\Facades\Storage::url($rs->profile_photo_path)}}" height="40px" width="40px" style="border-radius: 10px;" alt="">
                                @endif
                            </td>
                            <td>{{$rs->name}}</td>
                            <td>{{$rs->email}}</td>
                            <td>{{$rs->phone}}</td>
                            <td>{{$rs->address}}</td>
                            <td> @foreach($rs->roles as $row)
                                     {{$row->name}}
                                @endforeach
                                <a href="{{route('admin_user_roles',['id'=>$rs->id])}}" onclick="return  !window.open(this.href,'','top=50 left=100 width=1100,height=700')">
                                    <i class="fas fa-fw fa-plus"></i>
                                </a>
                            </td>
                            <td><a href="{{route('admin_user_edit',['id' => $rs->id])}}" onclick="return confirm('Edit ! Are you sure?')" class="btn btn-info btn-circle">
                                    <i class="fas fa-fw fa-cog"></i>
                                </a></td>
                            <td><a href="{{route('admin_user_delete',['id' => $rs->id])}}" onclick="return confirm('Delete ! Are you sure?')" class="btn btn-danger btn-circle">
                                    <i class="fas fa-trash"></i>
                                </a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('footer')

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('assets')}}/Admin/vendor/jquery/jquery.min.js"></script>
    <script src="{{asset('assets')}}/Admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('assets')}}/Admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('assets')}}/Admin/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="{{asset('assets')}}/Admin/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="{{asset('assets')}}/Admin/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('assets')}}/Admin/js/demo/datatables-demo.js"></script>

@endsection


<!-- Custom fonts for this template-->
<link href="{{asset('assets')}}/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

<!-- Custom styles for this template-->
<link href="{{asset('assets')}}/admin/css/sb-admin-2.min.css" rel="stylesheet">

<title>{{$data->name}}</title>

<div class="card-body">
    @include('home.message')
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                <tr>
                    <th rowspan="8" align="center" valign="center">
                    @if ($data->profile_photo_path)
                        <img src="{{Illuminate\Support\Facades\Storage::url($data->profile_photo_path)}}" height="300px" width="300px" style="border-radius: 15px;" alt="">
                    @endif
                    </td>
                    </th><td>{{$data->id}}</td>
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
                    <th>Date</th><td>{{$data->created_at}}</td>
                </tr>
                <tr>
                    <th>Roles</th>
                    <td>
                        <table>
                            @foreach($data->roles as $row)
                                <tr>
                                    <td>{{$row->name}}</td>
                                    <td>
                                        <a href="{{route('admin_user_role_delete',['userid'=>$data->id,'roleid'=>$row->id])}}" onclick="return confirm('Delete ! Are you sure?')" class="btn btn-danger btn-circle">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </td>
                </tr>

                <tr>
                    <th>Add Role</th>
                    <td>
                        <table>
                            <form role="form" action="{{route('admin_user_role_add',['id'=>$data->id])}}" method="post" >
                                @csrf
                                <tr>
                                    <td>
                                        <select name="roleid">
                                            @foreach($datalist as $rs)
                                                <option value="{{$rs->id}}">{{$rs->name}}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <button type="submit" class="btn btn-primary btn-user btn-light ">
                                            Add Role
                                        </button>
                                    </td>
                                </tr>
                            </form>
                        </table>
                    </td>
                </tr>



            </table>

        </div>
</div>



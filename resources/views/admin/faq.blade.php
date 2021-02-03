@extends('layouts.admin')

@section('title', 'Frequently Asked Question List')

@section('content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row">
                <h6 class=" col-lg-10 m-0 font-weight-bold text-primary">Frequently Asked Question</h6>
                <a href="{{route('admin_faq_add')}}" class="col-lg-2 btn btn-primary btn-user btn-block">
                    Add FAQ
                </a>
                    @include('home.message')
                </div>
            </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Position</th>
                        <th>Question</th>
                        <th>Answer</th>
                        <th>Status</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($datalist as $rs)
                        <tr>
                            <td>{{$rs->id}}</td>
                            <td>{{$rs->position}}</td>
                            <td>{{$rs->question}}</td>
                            <td>{!! $rs->answer !!}</td>
                            <td>{{$rs->status}}</td>
                            <td><a href="{{route('admin_faq_edit',['id' => $rs->id])}}" onclick="return confirm('Edit ! Are you sure?')" class="btn btn-info btn-circle">
                                    <i class="fas fa-fw fa-cog"></i>
                                </a></td>
                            <td><a href="{{route('admin_faq_delete',['id' => $rs->id])}}" onclick="return confirm('Delete ! Are you sure?')" class="btn btn-danger btn-circle">
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


<x-admin.master-dash>
    @section('css')
        <link href="{{asset('assets/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    @endsection
    @section('content')
        <h1>Welcome in index Role</h1>
        <div class="col-form-label-lg">
            <a href="{{route('roles.create')}}"><button type="button" class="btn btn-primary">Create</button></a>
        </div>

        <div class="container-fluid">
            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Roles</h1>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Roles</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Delete</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($roles as $role)
                            <tr>
                                <th>{{$role->id}}</th>
                                <th><a href="{{route('roles.edit',$role)}}">{{$role->name}}</a> </th>
                                <th>{{$role->description}}</th>
                                <th>
                                    <form action="{{route('roles.destroy',$role->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>

                                </th>
                            </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>

        </div>
    @endsection

    @section('scripts')
            <script src="{{asset('assets/vendor/datatables/jquery.dataTables.min.js')}}"></script>
            <script src="{{asset('assets/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

            <!-- Page level custom scripts -->
            <script src="{{asset('assets/js/demo/datatables-demo.js')}}"></script>
        @endsection
</x-admin.master-dash>

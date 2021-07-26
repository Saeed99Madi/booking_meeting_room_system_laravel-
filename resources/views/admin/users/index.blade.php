<x-admin.master-dash>
    @section('content')
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Users</h1>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Users</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>UserName</th>
                                    <th>email</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>UserName</th>
                                    <th>email</th>
                                    <th>Delete</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                @foreach($users as $user)
                                <tr>
{{--                                    @foreach($users as $user)--}}
                                    <th>{{$user->id}}</th>
                                        <th><a href="{{route('users.edit',$user->id)}}">{{$user->name}}</a></th>
                                    <th>{{$user->email}}</th>

                                    <th>
                                        <form action="{{route('users.destroy',$user->id)}}" method="post" >
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>

                                    </th>
{{--                                    @endforeach--}}
                                </tr>
                                @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>

            </div>
    @endsection

</x-admin.master-dash>

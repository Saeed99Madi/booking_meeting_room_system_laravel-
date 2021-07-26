<x-admin.master-dash>
    @section('content')

        <h1>{{$user->name}}</h1>
        <div class="row">
                <div class="col-sm-6">
                    <form method="post" action="{{route('users.update',$user->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <img class="img-profile rounded-circle" height="100bx" width="100bx" src="{{'/images/'.$user->avatar}}">
                        </div>
                        <div class="form-group">
                            <input type="file" name="avatar"  >
                        </div>
                        <div class="form-group">
                            <lable for="name">name</lable>
                            <input type="text" name="name" class="form-control" id="name" value="{{$user->name}}" >
                        </div>
                        <div class="form-group">
                            <lable for="email">email</lable>
                            <input type="text" name="email" class="form-control" id="email" value="{{$user->email}}" >
                        </div>
                         <div class="form-group">
                         <lable for="password">password</lable>
                        <input type="password" name="password" class="form-control" id="password">
                             </div>
                        <div class="form-group">
                            <lable for="password-confirmation">Confirm Password</lable>
                            <input type="password" name="password_confirmation" class="form-control" id="password-confirmation">
                        </div>
                        <div class="mb-4">
                        <button type="submit" class="btn btn-primary">submit</button>
                        </div>
                    </form>
                </div>
            <div class="col-sm-6">
                <div class="container-fluid">


                            <!-- Page Heading -->


                            <!-- DataTales Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">User's_Roles</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                            <tr>
                                                <th>Option</th>
                                                <th>ID</th>
                                                <th>Role_Name</th>
                                                <th>Attach</th>
                                                <th>Detach</th>
                                            </tr>
                                            </thead>
                                            <tfoot>
                                            <tr>
                                                <th>Option</th>
                                                <th>ID</th>
                                                <th>Role_Name</th>
                                                <th>Attach</th>
                                                <th>Detach</th>
                                            </tr>
                                            </tfoot>
                                            <tbody>
                                            @foreach($roles as $role)
                                                <tr>
                                                    <td>
                                                        <input type="checkbox"
                                                            @foreach($user->roles as $role_user)
                                                                @if($role_user->name == $role->name)
                                                                    Checked
                                                                @endif
                                                            @endforeach>
                                                    </td>
                                                    <td>{{$role->id}}</td>
                                                    <td>{{$role->name}}</td>
                                                    <td>
                                                        <form action="{{route('users.attach',$user->id)}}" method="post">
                                                            @csrf
                                                            @method('PUT')
                                                            <input type="hidden" name="role" value="{{$role->id}}">
                                                            <button type="submit" class="btn btn-primary"
                                                                         @if($user->roles->contains($role))disabled
                                                                @endif>Attach</button>

                                                        </form>
                                                    </td>
                                                    <td>

                                                        <form action="{{route('users.detach',$user->id)}}" method="post">
                                                            @csrf
                                                            @method('PUT')
                                                            <input type="hidden" name="role" value="{{$role->id}}">
                                                            <button type="submit" class="btn btn-danger"
                                                                    @if(!$user->roles->contains($role))
                                                                        disabled
                                                                    @endif>Detach
                                                            </button>
                                                        </form>

                                                    </td>

                                              </tr>
                                            @endforeach
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
            </div>
        </div>

    @endsection
</x-admin.master-dash>

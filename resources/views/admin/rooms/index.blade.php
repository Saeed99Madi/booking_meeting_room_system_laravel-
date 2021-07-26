<x-admin.master-dash>
    @section('content')
        <x-admin.master-dash>
            @section('css')
                <link href="{{asset('assets/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
            @endsection
            @section('content')
                <div class="col-form-label-lg">
                    <a href="{{route('rooms.create')}}"><button type="button" class="btn btn-primary">Create</button></a>
                </div>

                <div class="container-fluid">
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Rooms</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Rooms</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Board</th>
                                        <th>WiFi</th>
                                        <th>Projector</th>
                                        <th>Number Of Seats</th>
                                        <th>image</th>
                                        <th>Description</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Board</th>
                                        <th>WiFi</th>
                                        <th>Projector</th>
                                        <th>Number Of Seats</th>
                                        <th>image</th>
                                        <th>Description</th>
                                        <th>Delete</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($rooms as $room)
                                        <tr>
                                            <th>{{$room->id}}</th>
                                            <th><a href="{{route('rooms.edit',$room->id)}}">{{$room->name}}</a> </th>
                                            <th>{{$room->board}}</th>
                                            <th>{{$room->wifi}}</th>
                                            <th>{{$room->projector}}</th>
                                            <th>{{$room->seats}}</th>
                                            <th><div><img  height="40bx" src="{{$room->image}}"></div></th>
                                            <th>{{$room->description}}</th>
                                            <th>
                                                <form action="{{route('rooms.destroy',$room->id)}}" method="post">
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

    @endsection

</x-admin.master-dash>

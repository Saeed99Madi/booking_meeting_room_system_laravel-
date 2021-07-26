<x-admin.master-dash>
    @section('content')
        <h1>Bookings</h1>
        <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Bookings</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Bookings</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>Room Name</th>
                                        <th>User Name</th>
                                        <th>Time From</th>
                                        <th>Time To</th>
                                        <th>Description</th>
                                        <th>Operations</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>Room Name</th>
                                        <th>User Name</th>
                                        <th>Time From</th>
                                        <th>Time To</th>
                                        <th>Description</th>
                                        <th>Operations</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($bookings as $booking)
                                        <tr>
                                            <th>{{$booking->room_id}}</th>
                                            <th>{{$booking->user_id}}</th>
                                            <th>{{$booking->start_time}}</th>
                                            <th>{{$booking->end_time}}</th>
                                            <th>{{$booking->description}}</th>
                                            <th>
{{--                                                <a href="{{route('bookings.index')}}" class="btn btn-xs btn-primary">View</a>--}}
{{--                                                <a href="{{route('bookings.edit',$booking->id)}}" class="btn btn-xs btn-info">Edit</a>--}}
                                                <form method="GET" action="{{route('bookings.edit',$booking->id)}}" accept-charset="UTF-8" style="display: inline-block;" onsubmit="return confirm('Are you sure?');">
                                                    @csrf
                                                    <input class="btn btn-xs btn-info" type="submit" value="Edit">
                                                </form>
                                                <form method="POST" action="{{route('bookings.destroy',$booking->id)}}" accept-charset="UTF-8" style="display: inline-block;" onsubmit="return confirm('Are you sure?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input class="btn btn-xs btn-danger" type="submit" value="Delete">
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
</x-admin.master-dash>

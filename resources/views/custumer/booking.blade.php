<x-home.home-master>
    @section('content')
        <h1>Booking</h1>

        <form method="post" action="{{route('booking.store',$room->id)}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <lable for="start_time">Start Time</lable>
                <input type="hidden" name="user_id" class="form-control" id="user_id" value="{{auth()->user()->id}}" >
            </div>
            <div class="form-group">
                <lable for="start_time">Start Time</lable>
                <input type="hidden" name="room_id" class="form-control" id="room_id" value="{{$room->id}}" >
            </div>
            <div class="form-group">
                <lable for="start_time">Start Time</lable>
                <input type="datetime-local" name="start_time" class="form-control" id="start_time"  >
            </div>
            <div class="form-group">
                <lable for="end_time">End Time</lable>
                <input type="datetime-local" name="end_time" class="form-control" id="end_time"  >
            </div>
            <div class="form-group">
                <lable for="description">Note</lable>
                <input type="text" name="note" class="form-control" id="note"  >
            </div>
            <div class="mb-4">
                <button type="submit" class="btn btn-primary">submit</button>
            </div>
        </form>
    @endsection
        @section('change')
            @if(!Auth::guest())
                <div class="card my-4">
                    <h5 class="card-header">Change Room</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="list-unstyled mb-0">
{{--                                    @foreach($rooms as $room)--}}
{{--                                        <li>--}}
{{--                                            <form action="{{route('room.booking',$room->id)}}" method="post">--}}
{{--                                                @csrf--}}
{{--                                                <button type="submit" class="btn btn-primary">{{$room->name}}</button>--}}
{{--                                            </form>--}}
{{--                                        </li>--}}
{{--                                    @endforeach--}}
                                                        @foreach($rooms as $room)
                                                            <li>
                                                                <a href="{{route('room.booking',$room->id)}}">{{$room->name}}</a>
                                                            </li>
                                                        @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endsection
</x-home.home-master>

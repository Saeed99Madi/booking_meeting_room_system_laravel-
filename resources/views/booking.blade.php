<x-home.home-master>
    @section('content')

        <!-- Blog Post -->
            @foreach($rooms as $room)
                <div class="card mb-4">
                    <img class="card-img-top" src="{{'/roomImg/'.$room->image}}" alt="Card image cap">
                    <div class="card-body">
                        <h2 class="card-title">{{$room->name}}</h2>
                        <p class="card-text">{{\Illuminate\Support\Str::limit($room->discription,'50','  ....')}}</p>
{{--                        <a href="{{route('room', $room->id)}}" class="btn btn-primary">Read More &rarr;</a>--}}
                    </div>
                    <div class="card-footer text-muted">
                        Posted on {{$room->created_at->diffForHumans()}}
                        by <a href="#"> {{$room->seats}}</a>
                        <form action="{{route('room.booking',$room->id)}}">
                            class="mb-4">
                            <button type="submit" class="btn btn-primary">Book</button>
                        </form>
                    </div>
                </div>
            @endforeach


        <!-- Pagination -->
            <ul class="pagination justify-content-center mb-4">
                <li class="page-item">
                    <a class="page-link" href="#">&larr; Older</a>
                </li>
                <li class="page-item disabled">
                    <a class="page-link" href="#">Newer &rarr;</a>
                </li>
            </ul>


        @endsection
</x-home.home-master>

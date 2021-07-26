<x-master-dash>
    @section('content')
        <form method="post" action="{{route('roles.store')}}" >
            @csrf
            <div class="form-group">
                <lable for="name">name</lable>
                <input type="text" name="name" class="form-control" id="name"  >
            </div>
            <div class="form-group">
                <lable for="description">Description</lable>
                <input type="text" name="description" class="form-control" id="description"  >
            </div>
            <div class="mb-4">
            <button type="submit" class="btn btn-primary">submit</button>
            </div>
        </form>
    @endsection
</x-master-dash>

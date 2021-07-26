<x-master-dash>
    @section('content')
        <form method="post" action="{{route('roles.update', $role)}}" >
            @csrf
            @method('PUT')
            <div class="form-group">
                <lable for="name">name</lable>
                <input type="text" name="name" class="form-control" id="name" value="{{$role->name}}" >
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Example textarea</label>
                <input type="text" name="description" class="form-control" id="description" value="{{$role->description}}" >
            </div>
            <div class="mb-4">
                <button type="submit" class="btn btn-primary">submit</button>
            </div>
        </form>
    @endsection
</x-master-dash>

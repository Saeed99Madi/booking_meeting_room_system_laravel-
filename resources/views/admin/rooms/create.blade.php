<x-admin.master-dash>
    @section('content')
        <h1>create</h1>

                <form method="post" action="{{route('rooms.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="file" name="image" id="image" >
                    </div>
                    <div class="form-group">
                        <lable for="name">name</lable>
                        <input type="text" name="name" class="form-control" id="name"  >
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="board">Board</label>
                        </div>
                        <select class="custom-select" name="board" id="board">
                            <option selected>Choose...</option>
                            <option value="existing">Existing</option>
                            <option value="not_exist">Not_exist</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="wifi">WIFI</label>
                        </div>
                        <select class="custom-select" name="wifi" id="wifi">
                            <option selected>Choose...</option>
                            <option value="existing">Existing</option>
                            <option value="not_exist">Not_exist</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="projector">projector</label>
                        </div>
                        <select class="custom-select" name="projector" id="projector">
                            <option selected>Choose...</option>
                            <option value="existing">Existing</option>
                            <option value="not_exist">Not_exist</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="seats">Number Of Seats</label>
                        </div>
                        <select class="custom-select" name="seats" id="seats">
                            <option selected>Choose...</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                            <option value="4">Four</option>
                            <option value="5">Five</option>
                            <option value="6">Six</option>
                        </select>
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
</x-admin.master-dash>

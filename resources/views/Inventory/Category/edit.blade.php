<x-app-layout>
    <div class="card">
        <form method="post" action="/inventory/category/edit-post">
            @csrf
            <input type="hidden" name="id" value="{{$category->id}}">
            <div class="form-group">
                <label for="">
                    Name
                </label>
                <input type="text" name="name" class="form-control" value="{{$category->name}}" required>

            </div>
            <div class="form-group">
                <label for="">code</label>
                <input tpe="text" name="code" class="form-control" value="{{$category->code}}" required>
            </div>
            <div class="form-group">
                <button class="btn btn-success">Edit</button>
            </div>
        </form>
    </div>
</x-app-layout>
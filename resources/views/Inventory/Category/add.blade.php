<x-app-layout>
    <div class="card">
        <div class="card-body">
            <h1>Add Product</h1>
            <form method="post" action="/inventory/category/add-post">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" required>
                    <div class="form-group">
                        <label for="">Code</label>
                        <input type="text" name="code" class="form-control" required>
                        <div class="form-group">
                            <button class="btn btn-success">Save</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
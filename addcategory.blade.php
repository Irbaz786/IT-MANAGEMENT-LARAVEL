@extends('admin.adminmaster')
@section('main')
        <div class="content-wrapper">
    <div class="container-fluid">
        
                        <div class="bg-light rounded h-100 p-4">
                            <h4 class="mb-4">Add Category</h4>
                            <form action="/category1A" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Category Name</label>
                                    <input type="text" class="form-control" name="cname">
                                </div>
                                <div class="mb-3">
                                <label class="form-label">Add Discription</label>
                                <textarea class="form-control" placeholder="Add Discription" style="height: 100px;" name="disc"></textarea>
                            </div>
                                <button type="submit" class="btn btn-primary">Add</button>
                            </form>
                        </div>
                    </div>
                  
</div>

@endsection
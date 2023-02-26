@extends('admin.adminmaster')
@section('main')

         <div class="content-wrapper">
        <div class="container-fluid pt-4 px-4">           
        <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h4 class="mb-4">Add Category</h4>
                            <form action="\category1A\{{$d->id}}" method="post">
                                @csrf
                                @method('put')
                                <div class="mb-3">
                                    <label class="form-label">Category Name</label>
                                    <input type="text" class="form-control" name="cname" value="{{$d->title}}">
                                </div>
                                <div class="mb-3">
                                <label class="form-label">Add Discription</label>
                                <textarea class="form-control" placeholder="Add Discription" style="height: 100px;" name="disc" value="{{$d->meg}}">{{$d->meg}}</textarea>
                            </div>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        </div>
                    </div> 
                </div>

@endsection
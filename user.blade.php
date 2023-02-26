@extends('m2')
@section('main')
        <div class="content-wrapper">           
            <div class="container-fluid">

                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Category Table</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Category ID</th>
                                            <th scope="col">Category Name</th>
                                            <th scope="col">Discription</th>
                                            <th scope="col">Oprations</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                             @foreach($data as $c)
                                        <tr>
                                            <th scope="row">{{$c->id}}</th>
                                            <td>{{$c->cname}}</td>
                                            <td>{{$c->disc}}</td>
                                            <td>
                                            <div class="btn-group" role="group">
                                                  <button type="button" class="btn btn-warning"><a href="{{url('delete', $c->id)}}" style="color: white;">Delete</a></button>
                                            </form>
                                                  <button type="button" class="btn btn-warning"><a href="category1A\{{$c->id}}\edit" style="color: white;">Edit</a></button>
                                            </div>
                                            </td>  
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <button type="button" class="btn btn-success"><a href="addcategoryA" style="color: white;">Add</a></button>
                            </div>
                        </div>
                    </div>
</div>

@endsection
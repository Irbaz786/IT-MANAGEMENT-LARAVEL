@extends('adminmaster')
@section('main')
        <div class="container-fluid pt-4 px-4">           
            <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Sell Properties Data Table</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Sell Properties ID</th>
                                            <th scope="col">Owner Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Location</th>
                                            <th scope="col">Category ID</th>
                                            <th scope="col">Size</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Images</th>
                                            <th scope="col">Discription</th>
                                            <th scope="col">Oprations</th>
                                        </tr>
                                    </thead>
                                     <tbody>
                                             @foreach($data as $s)
                                        <tr>
                                            <th scope="row">{{$s->id}}</th>
                                            <td>{{$s->sname}}</td>
                                            <td>{{$s->semail}}</td>
                                            <td>{{$s->loc}}</td>
                                            <td>{{$s->tid}}</td>
                                            <td>{{$s->size}}</td>
                                            <td>{{$s->price}}</td>
                                            <td><img scr="{{$s->img}}" height="40px" width="50px"></td>
                                            <td>{{$s->disc}}</td>
                                            <td>
                                            <div class="btn-group" role="group">
                                            <form action="\selldata\{{$s->id}}" method="post"> 
                                             @csrf
                                             @method('delete')  
                                                  <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                                  <button type="button" class="btn btn-warning"><a href="selldata\{{$s->id}}\edit" style="color: white;">Edit</a></button>
                                            </div>
                                            </td>  
                                        </tr>
                                        @endforeach
                                       </tbody> 
                                </table>
                                <button type="button" class="btn btn-success"><a href="addselldata" style="color: white;">Add</a></button>
                            </div>
                        </div>
                    </div>
</div>

@endsection
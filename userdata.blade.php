@extends('adminmaster')
@section('main')
        <div class="container-fluid pt-4 px-4">           
            <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">User Table</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">User ID</th>
                                            <th scope="col">User Name</th>
                                            <th scope="col">Email</th>
                                            <!-- <th scope="col">Password</th> -->
                                            <th scope="col">Oprations</th>
                                        </tr>
                                    </thead>
                                     <tbody>
                                     @foreach($userdata as $u)
                                        <tr>
                                            <th scope="row">{{$u->id}}</th>
                                            <td>{{$u->name}}</td>
                                            <td>{{$u->email}}</td>
                                            <!-- <td>{{$u->password}}</td> -->
                                            <td>
                                            <div class="btn-group" role="group">
                                     <form action="\userdata\{{$u->id}}" method="post"> 
                                             @csrf
                                             @method('delete')  
                                                  <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                                  <button type="button" class="btn btn-warning"><a href="\edituser\{{$u->id}}" style="color: white;">Edit</a></button>
                                            </div>
                                            </td>  
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
</div>

@endsection
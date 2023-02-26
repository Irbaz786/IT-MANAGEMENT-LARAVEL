@extends('admin.adminmaster')
@section('main')
        <div class="content-wrapper">           
  <div class="container-fluid">
           
            <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">

                               <form class="d-none d-md-flex ms-4" action="/searchf" method="post" >
                    @csrf
                    <input class="form-control border-0" type="searchf" placeholder="Search By Name" name="fname">
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <button type="submit" class="btn btn-warning">Search</button>
                    </form><br>
                      



                            <h6 class="mb-4">Feedback Table</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Feedback ID</th>
                                            <th scope="col">Feedback Name</th>
                                            <th scope="col">Email</th>
                                             <th scope="col">Message</th>
                                            <th scope="col">Oprations</th>
                                        </tr>
                                    </thead>
                                     <tbody>
                                             @foreach($data as $f)
                                        <tr>
                                            <th scope="row">{{$f->id}}</th>
                                            <td>{{$f->fname}}</td>
                                            <td>{{$f->femail}}</td>
                                            <td>{{$f->meg}}</td>
                                            
                                            
                                            <td>
                                            <div class="btn-group" role="group">
                                            <form action="\feedbackA\{{$f->id}}" method="post"> 
                                             @csrf
                                             @method('DELETE')  
                                                  <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                                  <button type="button" class="btn btn-warning"><a href="\feedbackA\{{$f->id}}\edit" style="color: white;">Edit</a></button>
                                            </div>
                                            </td>  
                                        </tr>
                                        @endforeach
                                       </tbody> 
                                </table>

                                  <div class="pagination">  
                                {{ $data->links() }}
                                </div>
                                
                                </div>
                        </div>
                    </div>
</div>

@endsection
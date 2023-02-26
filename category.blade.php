@extends('admin.adminmaster');
@section('main');

        

<div class="content-wrapper">           
  <div class="container-fluid">
    <div class="col-12">

        <div class="bg-light rounded h-100 p-4">
          
            <form class="d-none d-md-flex ms-4" action="/search" method="post" >
                    @csrf
                    <input class="form-control border-0" type="search" placeholder="Search By   Category Name" name="scname">
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <button type="submit" class="btn btn-warning">Search</button>
                    </form><br>
                      


<h6 class="mb-4">Search</h6>
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
<form action="\category1A\{{$c->id}}" method="post">
@csrf
@method('DELETE')

<input type="submit" value="Delete">
</form>
<button type="button" class="btn btn-warning"><a href="category1A\{{$c->id}}\edit" style="color: white;">Edit</a></button>
</div>
</td>  
 </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                  <div class="pagination">  
                                {{ $data->links() }}
                                </div>
                                
                                <button type="button" class="btn btn-success"><a href="addcategoryA" style="color: white;">Add</a></button>
                            </div>
                        </div>
                    </div>
</div>

@endsection
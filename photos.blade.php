@extends('admin.adminmaster')
@section('main')

                <div class="content-wrapper">           
  <div class="container-fluid">
    <div><br></br></div>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Photo </title>
</head>
<body>
        <form action="/ph" method="post" enctype="multipart/form-data">
            @csrf 
            
            <input type="file" name="filename">
            <button type="submit">Upload</button>
        </form>



</body>
</html>
@endsection
<x-layoutadmin>
    <x-slot name="title">All cv data</x-slot>
    <x-slot name="body">
        {{-- @foreach($projects as $value) --}}
            {{-- <h1 class="ALLTADA">all recived cvs </h1> --}}
        {{-- @endforeach --}}
        {{-- <div class="allcvtable">
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>NAME</th>
                        <th>TRADE</th>
                        <th>CITY</th>
                        <th>CONTECT 1</th>
                        <th>CONTECT TWO</th>
                        <th>PASSPORT</th>
                        <th>DATE/TIME</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($projects as $value)
                        <tr>
                            <td>{{ $value->user_id }}</td>
                            <td>{{ $value->username }}</td>
                            <td>{{ $value->trade }}</td>
                            <td>{{ $value->city }}</td>
                            <td>{{ $value->contect1 }}</td>
                            <td>{{ $value->contect2 }}</td>
                            <td>{{ $value->passport }}</td>
                            <td>{{ $value->created_at }}</td>
                            <div class="d-flex">
                                <td>
                                    <a href="editcv/{{$value->user_id}}"><button class="btn btn-info">Edit</button></a>
                                    <a href="delete/{{$value->user_id}}"><button class="btn btn-danger">Delete</button></a>
                                </td>
                            </div>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div> --}}
    <!DOCTYPE html>   
<html lang="en">   
<head>   
<meta charset="utf-8">   
<title>Final Output</title>   
<meta name="description" content="Bootstrap.">  
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">   
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css"></style>
<script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>  
<body style="margin:20px auto">  
<div class="container allcvtable">
<div class="row header" style="text-align:center;color:green">
<h3>all recived cvs </h3>
</div>
<table id="myTable" class="table table-striped" >  
        <thead>  
          <tr>  
            <th>#</th>
            <th>NAME</th>
            <th>TRADE</th>
            <th>CITY</th>
            <th>CONTECT 1</th>
            <th>CONTECT TWO</th>
            <th>PASSPORT</th>
            <th>DATE/TIME</th>
            <th>Actions</th>
          </tr>  
        </thead>  
        <tbody>  
            @foreach($projects as $value)
            <tr>
                <td>{{ $value->user_id }}</td>
                <td>{{ $value->username }}</td>
                <td>{{ $value->trade }}</td>
                <td>{{ $value->city }}</td>
                <td>{{ $value->contect1 }}</td>
                <td>{{ $value->contect2 }}</td>
                <td>{{ $value->passport }}</td>
                <td>{{ $value->created_at }}</td>
                <div class="d-flex">
                    <td>
                        <a href="editcv/{{$value->user_id}}"><button class="btn btn-info">Edit</button></a>
                        <a href="delete/{{$value->user_id}}"><button class="btn btn-danger">Delete</button></a>
                    </td>
                </div>

            </tr>
        @endforeach
</body>  
<script>
$(document).ready(function(){
    $('#myTable').dataTable();
});
</script>
</html> 
    </x-slot>
</x-layoutadmin>
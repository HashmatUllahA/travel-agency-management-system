<x-layoutadmin>
    <x-slot name="title">All cv data</x-slot>
    <x-slot name="body">
       
<div class="allcvtable">
<h3 class="text-info text-center">All Recived CV </h3>
<table id="myTable" class="table table-striped" >  
        <thead>  
          <tr>  
            
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
            @foreach($data as $value)
            <tr>
                {{-- <td>{{ $value->user_id }}</td> --}}
                <td>{{ $value->username }}</td>
                <td>{{ $value->trade }}</td>
                <td>{{ $value->city }}</td>
                <td>{{ $value->contect1 }}</td>
                <td>{{ $value->contect2 }}</td>
                <td>{{ $value->passport }}</td>
                <td>{{ $value->created_at }}</td>
                <div style="" class="edtdeletebtn d-flex">
                    <td>
                        <a href="editcv/{{$value->user_id}}"><button class="EDBTN btn-info">Edit</button></a>
                        <a href="delete/{{$value->user_id}}"><button class="EDBTN btn-danger">Delete</button></a>
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
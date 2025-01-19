<x-layoutadmin>
    <x-slot name="title">All vasa</x-slot>
    <x-slot name="body">
       
<div class="allcvtable">
<h3 class="text-info text-center">The visa we have available Now</h3>
<table id="myTable" class="table table-striped" >  
        <thead>  
          <tr>  
            <th>S/O</th>
            <th>Trade</th>
            <th>Country</th>
           
            <th>Recuerd Persion</th>
            <th>Last Date</th>
            <th>Actions</th>
          </tr>  
        </thead>  
        <tbody>  
            @foreach($data as $value)
            <tr>
            <td>{{ $loop->iteration }}
                <td>{{ $value->title }}</td>
                <td>{{ $value->country }}</td>
                <td>{{ $value->requerd }}</td>
                <td>{{ $value->lastdate }}</td>
                <div style="" class="edtdeletebtn d-flex">
                    <td>
                        <a href="editvias/{{$value->id}}"><button class="EDBTN btn-info">Edit</button></a>
                        <a href="deletevisa/{{$value->id}}"><button class="EDBTN btn-danger">Delete</button></a>
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
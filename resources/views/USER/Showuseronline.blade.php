<x-layoutadmin>
    <x-slot name="title">user applay</x-slot>
    <x-slot name="body">
       
<div class="allcvtable">
<h3 class="text-info text-center">Those Condidates who has applied (Online) </h3>
<table id="myTable" class="table table-striped" >  
        <thead>  
          <tr>  
            <th>Name</th>
            <th>Father Name</th>
            <th>Gender</th>
            <th>CNIC</th>
            <th>D.O.B</th>
            <th>P.O.P</th>
            <th>Passport.NO</th>
            <th>Title</th>
            <th>Experience</th>
            <th>Actions</th>
          </tr>  
        </thead>  
        <tbody>  
            @foreach($data as $value)
            <tr>
                {{-- <td>{{ $value->user_id }}</td> --}}
                <td>'{{ $value->name }}'</td>
                <td>{{ $value->fname }}</td>
                <td>{{ $value->gender }}</td>
                <td>{{ $value->cnicno }}</td>
                <td>{{ $value->dob }}</td>
                <td>{{ $value->placebarth }}</td>
                <td>{{ $value->passportno }}</td>
                <td>{{ $value->visatitle }}</td>
                <td>{{ $value->Experience }}</td>
                <div style="display:flex;" class="edtdeletebtn d-flex">
                    <td>
                        <a href="editapplay/{{$value->id}}"><button class="EDBTN btn-info">Edit</button></a>
                        <a href="deleteapplay/{{$value->id}}"><button class="EDBTN btn-danger">Delete</button></a>
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
<x-layoutadmin>
    <x-slot name="title">getreturn passport</x-slot>
    <x-slot name="body">

<div class="allcvtable">
<h3 class="text-info text-center">ALL RETURN PASSPORT</h3>
<table id="myTable" class="table table-striped" >
        <thead>
          <tr>
            <th>S/O</th>
            <th>name</th>
            <th>Father Name</th>
            <th>Passport NO</th>
            <th>CITY</th>

            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach($data as $value)
            <tr>
                {{-- <td>{{ $value->user_id }}</td> --}}
                <td>{{ $value->id }}</td>
                <td>'{{ $value->name }}'</td>
                <td>{{ $value->fathername }}</td>
                <td>{{ $value->passportno }}</td>
                <td>{{ $value->city }}</td>
                <div style="" class="edtdeletebtn d-flex">
                    <td>
                        <a href="deletpassport/{{$value->id}}"><button class="EDBTN btn-danger">Delete</button></a>
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

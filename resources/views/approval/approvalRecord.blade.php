<x-layoutadmin>
    <x-slot name="title">all approval</x-slot>
    <x-slot name="body">
       
<div class="allcvtable">
<h3 class="text-info text-center">Approval Records.</h3>
    <table id="myTable" class="table table-striped" >  
        <thead>  
          <tr>  
            
            <th>Name</th>
            <th>Father Name</th>
            <th>Mobile Number</th>
            <th>Passport Number</th>
           
            <th>Actions</th>
          </tr>  
        </thead>  
        <tbody>  
            @foreach($approvals as $a)
                <tr>
                    <td>{{ $a->name }}</td>
                    <td>{{ $a->father_name }}</td>
                    <td>{{ $a->mobile_number }}</td>
                    <td>{{ $a->passport_number }}</td>
                    <div  class="edtdeletebtn d-flex">
                        <td>
                        <a href="{{ asset($a->file_path) }}" target="_blank">
                            <button class="EDBTN btn-info">View</button>
                        </a>
                        </td>
                    </div>
                </tr>
            @endforeach
        </body>
    </table>
<script>
$(document).ready(function(){
    $('#myTable').dataTable();
});
</script>
</html> 
    </x-slot>
</x-layoutadmin>
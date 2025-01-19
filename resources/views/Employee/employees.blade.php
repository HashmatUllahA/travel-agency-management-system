<x-layoutadmin>
    <x-slot name="title">all approval</x-slot>
    <x-slot name="body">
       
<div class="allcvtable">
  <a href="/app/add-employee">
    <button class="btn btn-info text-white" >+ Employee</button>
  </a>
<h3 class="text-info text-center">Pak feature Employees.</h3>
    <table id="myTable" class="table table-striped" >  
        <thead>  
          <tr>  
            
            <th>image</th>
            <th>Name</th>
            <th>Father Name</th>
            <th>Email</th>
            <th>Mobile Number</th>
            <th>Cnic number </th>
            <th>City </th>
            <th>Added date</th>
          </tr>  
        </thead>  
        <tbody>  
          @foreach($users as $user)
              <tr>
              <td><img src="{{ asset($user->image_path) }}" alt="User Image" style="width: 50px; height: 50px;"></td>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->father_name }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->mobile_number }}</td>
                  <td>{{ $user->cnic_number }}</td>
                  <td>{{ $user->address }}</td>
                  <td>{{ $user->created_at->format('d M Y') }}</td> 

              </tr>
          @endforeach
        </body>
    </table>
<script>

</script>
</html> 
    </x-slot>
</x-layoutadmin>
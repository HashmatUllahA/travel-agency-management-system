<x-layoutadmin>
    <x-slot name="title">all Return p table</x-slot>
    <x-slot name="body">

<div class="allcvtable">
<h3 class="text-info text-center">All return payment</h3>
<table id="myTable" class="table table-striped" >
        <thead>
          <tr>

            <th>NAME</th>
            <th>Father Name</th>
            <th>Passport NO</th>
            <th>City</th>
            <th>Contect</th>
            <th>Return Payment</th>
            <th>Date</th>
            <th>Actions</th>

          </tr>
        </thead>
        <tbody>
            @foreach($result as $value)
            <tr>
                {{-- <td>{{ $value->user_id }}</td> --}}
                <td>{{ $value->name }}</td>
                <td>{{ $value->fathername }}</td>
                <td>{{ $value->passportno }}</td>
                <td>{{ $value->city}}</td>
                <td>{{ $value->contect }}</td>
                <td>{{ $value->retunpayment }}</td>
                
                <td>{{ $value->created_at->format('d M Y')}}</td>
                <div style="" class="edtdeletebtn d-flex">
                    <td>
                        <a href="returnpayment/{{$value->id}}"><button class="EDBTN btn-info w-60">view</button></a>

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

<x-layoutadmin>
    <x-slot name="title">MANTHS return table</x-slot>
    <x-slot name="body">

<div class="allcvtable">

<h3 class="text-info text-center">Return payment ON :{{$date }}</h3>


<table id="myTable" class="table table-striped" >
        <thead>
          <tr>

            <th>Name</th>
            <th>Passport</th>
            <th>Contect</th>
            <th>City</th>
            <th>Return Payment</th>
          </tr>
          <tfoot>
            <tr class="bg-info">
              <td>Total Return Amount</td>
              <td>---------></td>
              <td>---------></td>
              <td>---------></td>
              <td><b>{{ $totalAmount }}</b></td>
            </tr>
          </tfoot>
        </thead>
        <tbody>

        @foreach($result as $value)
    <tr>
        <td>{{ $value->name }}</td>
        <td>{{ $value->passportno }}</td>
        <td>{{ $value->contect }}</td>
        <td>{{ $value->city }}</td>
        <td>{{ $value->retunpayment }}</td>
    </tr>
    <h1></h1>
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

<x-layoutadmin>
    <x-slot name="title">MANTHS table</x-slot>
    <x-slot name="body">

<div class="allcvtable">

<h3 class="text-info text-center">COST ON :{{$date }}</h3>


<table id="myTable" class="table table-striped" >
        <thead>
          <tr>

            <th>WORK</th>
            <th>DATE</th>
            <th>Amount</th>
          </tr>
          <tfoot>
            <tr class="bg-info">
              <td>Total Amount</td>
              <td>---------></td>
              <td><b>{{ $totalAmount }}</b></td>
            </tr>
          </tfoot>
        </thead>
        <tbody>
            {{-- @if ($result)
            @foreach($result as $value)
                <tr>
                    td>{{ $value->work }}</td>
                    <td>{{ $value->date }}</td>
                    <td>{{ $value->expence }}</td>
                    <td>{{ $totalAmount }}</td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="4">No result found</td>
            </tr>
        @endif --}}
        @foreach($result as $value)
    <tr>
        <td>{{ $value->work }}</td>
        <td>{{ $value->date }}</td>
        <td>{{ $value->expence }}</td>
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

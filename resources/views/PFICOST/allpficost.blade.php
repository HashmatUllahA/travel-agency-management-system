<x-layoutadmin>
    <x-slot name="title">cost payment</x-slot>
    <x-slot name="body">

<div class="allcvtable">
<h3 class="text-info text-center">All Cost payment</h3>
<table id="myTable" class="table table-striped" >
        <thead>
          <tr>

            <th>title </th>
            <th>Expance</th>
            <th>Datails</th>
            <th>Payment stutas</th>
            <!-- <th>Massage</th> -->
            <th>Date </th>
            <th>Actions</th>

          </tr>
        </thead>
        <tbody>
            @foreach($result as $value)
            <tr>
                {{-- <td>{{ $value->user_id }}</td> --}}
                <td>{{ $value->work }}</td>
                <td>{{ $value->expence }}</td>
                <td>{{ $value->details }}</td>
                <td>{{ $value->paymentstutas }}</td>
                <!-- <td>{{ $value->msg }}</td> -->
                <td>{{ $value->created_at->format('d M Y')}}</td>
                <div style="" class="edtdeletebtn d-flex">
                    <td>
                        <a href="edit-and-update-cost/{{$value->id}}"><button class="EDBTN btn-info w-60">edit</button></a>


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

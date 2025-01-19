<x-layoutadmin>
    <x-slot name="title">recived month payment</x-slot>
    <x-slot name="body">

        <section class="section ALLTADA">
            <div class="row justify-content-center mb-5">
                <h3 class="font-weight-bold ml-md-0 mx-auto text-center text-sm-left">Find the monthly Amounts</h3>
                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                {{ session()->pull('success') }}
            @endif
            <div class="row justify-content-center">
                @if(session('message'))
                    <div class="alert alert-danger">
                        {{ session('message') }}
                    </div>
                @endif

                <form method="GET" action="{{ route('recivedmonth') }}" class="p-4 shadow rounded bg-light">
                    <div class="row align-items-end g-3">
                        <!-- Select Amount -->
                        <div class="col-md-4">
                            <label for="amount" class="form-label ">Select Amount:</label>
                            <select class="form-select finish-margin" name="find_is" id="amount" required>
                                <option value="" disabled selected>Please select the amount</option>
                                <option value="receviedAmount">Recevied Amount</option>
                                <option value="returnAmount">Return Amount</option>
                                <option value="costPfi">Cost Amount</option>
                            </select>
                        </div>

                        <!-- Search by Date -->
                        <div class="col-md-4">
                            <label for="date" class="form-label">Search by Date:</label>
                            <input type="date" id="date" name="month" class="form-control" required>
                        </div>

                        <!-- Submit Button -->
                        <div class="col-md-2">
                            <button class="btn btn-info w-100" type="submit">Search</button>
                        </div>
                    </div>
                </form>
            </div>
            </div>
            <div class="tables-div">
                <!-- Received Amount Table -->
                @if(session('noRecordmessage'))
                    <div class="alert alert-warning text-center">
                        {{ session('noRecordmessage') }}
                    </div>
                @endif
                @if(isset($receviedAmounts) && $receviedAmounts->isNotEmpty())
                    <div class="recived-amount-table-div">
                        <h4>Received Amount Records</h4>
                        <h6>Total Recived amount of the selected month: <strong>{{ $totalReceived }}</strong></h6>
                        <table id="myTable" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Father Name</th>
                                    <th>Trade</th>
                                    <th>Contact</th>
                                    <th>Passport No</th>
                                    <th>Total Payment</th>
                                    <th>Received Payment</th>
                                    <th>Payment Status</th>
                                    <th>Company Name</th>
                                    <th>City</th>
                                    <th>Date</th>
                                    <th>Message</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($receviedAmounts as $amount)
                                    <tr>
                                        <td>{{ $amount->name }}</td>
                                        <td>{{ $amount->fathername }}</td>
                                        <td>{{ $amount->trade }}</td>
                                        <td>{{ $amount->contect }}</td>
                                        <td>{{ $amount->passportno }}</td>
                                        <td>{{ $amount->totalpayment }}</td>
                                        <td>{{ $amount->recivepayment }}</td>
                                        <td>{{ $amount->paymentstutas }}</td>
                                        <td>{{ $amount->companyname }}</td>
                                        <td>{{ $amount->city }}</td>
                                        <td>{{ $amount->created_at->format('d M Y') }}</td> 
                                        <td>{{ $amount->msg }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
                
                <!-- Return Amount Table -->
                @if(isset($returnAmounts) && $returnAmounts->isNotEmpty())
                    <div class="return-amount-table-div">
                        <h4>Return Amount Records</h4>
                        <h6>Total Returm amount of the selected month: <strong>{{ $totalReturnAmount }}</strong></h6>
                        <table id="myTable" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Father Name</th>
                                    <th>Trade</th>
                                    <th>Contact</th>
                                    <th>Passport No</th>
                                    <!-- <th>Total Payment</th> -->
                                    <th>Return Payment</th>
                                    <th>Payment Status</th>
                                    <th>Company Name</th>
                                    <th>City</th>
                                    <th>Date</th>
                                    <th>Country</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($returnAmounts as $amount)
                                    <tr>
                                        <td>{{ $amount->name }}</td>
                                        <td>{{ $amount->fathername }}</td>
                                        <td>{{ $amount->trade }}</td>
                                        <td>{{ $amount->contect }}</td>
                                        <td>{{ $amount->passportno }}</td>
                                        <!-- <td>{{ $amount->totalpayment }}</td> -->
                                        <td>{{ $amount->retunpayment }}</td>
                                        <td>{{ $amount->paymentstutas }}</td>
                                        <td>{{ $amount->companyname }}</td>
                                        <td>{{ $amount->city }}</td>
                                        <td>{{ $amount->created_at->format('d M Y') }}</td> 

                                        <td>{{ $amount->country }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif

                <!-- Cost Amount Table -->
                @if(isset($constAmounts) && $constAmounts->isNotEmpty())
                    <div class="cost-amount-table-div">
                        <h4>Cost Amount Records</h4>
                        <h6>Total Cost amount of the selected month: <strong>{{ $totalCostAmount }}</strong></h6>

                        <table id="myTable" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Work</th>
                                    <th>Expense</th>
                                    <th>Details</th>
                                    <th>Payment Status</th>
                                    <th>Date</th>
                                    <th>Message</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($constAmounts as $amount)
                                    <tr>
                                        <td>{{ $amount->work }}</td>
                                        <td>{{ $amount->expence }}</td>
                                        <td>{{ $amount->details }}</td>
                                        <td>{{ $amount->paymentstutas }}</td>
                                        <td>{{ $amount->date }}</td>
                                        <td>{{ $amount->msg }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>


        <section>

    </x-slot>
  </x-layoutadmin>
<style>
    .finish-margin{
        margin:0px !important;
    }
</style>
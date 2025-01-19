<x-layoutadmin>
    <x-slot name="title">Dashboard</x-slot>
    <x-slot name="body">
        <section class="section ALLTADA">
            <div class="row">
                <!-- Information about visas -->
                <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Information about Visas</h5>
                                <div class="table-responsive">
                                    <table id="visaTable" class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Trade</th>
                                                <th>Country</th>
                                                <th>Required Persons</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($InfoAboutVisas as $info)
                                            <tr>
                                                <td>{{ $info->title }}</td>
                                                <td>{{ $info->country }}</td>
                                                <td>{{ $info->requerd }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Total Required Persons:</th>
                                                <td></td>
                                                <td>{{ $requerdPersion }}</td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                </div>

                <!-- Today's received payment records -->
                <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Today's Received Payment Records</h5>
                            <div class="table-responsive">
                                <table id="receivedPaymentsTable" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Trade</th>
                                            <th>Payment</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($todayRecivedPaiments as $recived)
                                        <tr>
                                            <td>{{ $recived->name }}</td>
                                            <td>{{ $recived->trade }}</td>
                                            <td>{{ $recived->recivepayment }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Total Received Payment:</th>
                                            <td></td>
                                            <td>{{ $totalRecivedPaymentToday }}</td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Today's return payment records -->
                <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Today's Return Payment Records</h5>
                            <div class="table-responsive">
                                <table id="returnPaymentsTable" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Trade</th>
                                            <th>Payment</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($todayReturnPaiments as $return)
                                        <tr>
                                            <td>{{ $return->name }}</td>
                                            <td>{{ $return->trade }}</td>
                                            <td>{{ $return->retunpayment }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Total Return Payment:</th>
                                            <td></td>
                                            <td>{{ $totalReturnPaymentToday }}</td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Today's cost payment records -->
                <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Today's Cost Payment Records</h5>
                            <div class="table-responsive">
                                <table id="returnPaymentsTable" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Payment</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($todayCostPaiments as $cost)
                                        <tr>
                                            <td>{{ $cost->work }}</td>
                                            <td>{{ $cost->expence }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Total Cost Payment:</th>
                                            <td>{{ $totalCostPaymentToday }}</td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recived passport -->
                <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Today's Recived Pasports</h5>
                            <div class="table-responsive">
                                <table id="returnPaymentsTable" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Trade</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($todayRecivedPassports as $RecivedP)
                                        <tr>
                                            <td>{{ $RecivedP->name }}</td>
                                            <td>{{ $RecivedP->trade }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>All Recived Passport:</th>
                                            <td>{{ $totalRecivedPassport }}</td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- return passport -->
                <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Count Pasports and Resumes</h5>
                           <p>Today return Passport: {{$todayReturnPassportsCount}}</p>
                           <p>All return Passport: {{$totalReturnPassport}}</p>
                           <p>Today online Resumes: {{$todayOnlineResumesResumesCount}}</p>
                           <p>All Online Resumes: {{$allOnlineResumesResumes}}</p>
                           <p>Today recived by hand  Resumes: {{$todayRecivedByHandResumesCount}}</p>
                           <p>All recived by hand  Resumes: {{$allRecivedByHandResumes}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </x-slot>
</x-layoutadmin>

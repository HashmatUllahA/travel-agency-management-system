<x-layoutadmin>
    <x-slot name="title">Return Payment</x-slot>
    <x-slot name="body">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-12 col-12" style="margin-left: 200;
    margin-top: -71px;">
                    <div class="card shadow-lg border-0">
                        <div class="card-body p-5">
                            <h3 class="mb-4 text-center text-uppercase text-primary">Return Payment</h3>
                            <p class="text-center text-muted mb-4">Entrust with high professionalism, we offer pixel-perfect web and mobile application development, third-party integration, and solutions.</p>

                            @if(session()->has('success'))
                                <div class="alert alert-success text-center">
                                    {{ session()->get('success') }}
                                </div>
                            @endif

                            <form action="returnpaymentview" method="post" enctype="multipart/form-data">
                                @csrf

                                <!-- Full Name & Passport No -->
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="name" class="form-label">Full Name*</label>
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter your full name" required />
                                    </div>
                                    <div class="col-md-6">
                                        <label for="passportno" class="form-label">Passport No*</label>
                                        <input type="text" name="passportno" class="form-control" id="passportno" placeholder="Enter passport number" required />
                                    </div>
                                </div>

                                <!-- Contact Number & Return Payment -->
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="contact" class="form-label">Contact Number*</label>
                                        <input type="text" name="contect" class="form-control" id="contact" placeholder="Enter your contact number" required />
                                    </div>
                                    <div class="col-md-6">
                                        <label for="returnpayment" class="form-label">Return Payment*</label>
                                        <input type="text" name="retunpayment" class="form-control" id="returnpayment" placeholder="Enter return payment" required />
                                    </div>
                                </div>

                                <!-- Company Name & Payment Status -->
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="companyname" class="form-label">Company Name*</label>
                                        <input type="text" name="companyname" class="form-control" id="companyname" placeholder="Enter company name" required />
                                    </div>
                                    <div class="col-md-6">
                                        <label for="paymentstatus" class="form-label">Select Payment Status*</label>
                                        <select name="paymentstutas" class="form-control" id="paymentstatus" required>
                                            <option value="Cash">Cash</option>
                                            <option value="Account">Account</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Father Name & Trade -->
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="fathername" class="form-label">Father Name*</label>
                                        <input type="text" name="fathername" class="form-control" id="fathername" placeholder="Enter father's name" required />
                                    </div>
                                    <div class="col-md-6">
                                        <label for="trade" class="form-label">Trade*</label>
                                        <input type="text" name="trade" class="form-control" id="trade" placeholder="Enter trade" required />
                                    </div>
                                </div>

                                <!-- City & Date -->
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="city" class="form-label">City*</label>
                                        <input type="text" name="city" class="form-control" id="city" placeholder="Enter city" required />
                                    </div>
                                    <!-- Country -->
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="country" class="form-label">Country*</label>
                                        <select name="country" class="form-control" id="country" required>
                                            <option value="UAE">UAE</option>
                                            <option value="Qatar">QATAR</option>
                                            <option value="UK">UK</option>
                                        </select>
                                    </div>
                                </div>
                                </div>

                               

                                <!-- Message -->
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <label for="msg" class="form-label">Message</label>
                                        <textarea name="msg" id="msg" class="form-control" rows="5" placeholder="Enter your message"></textarea>
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="d-flex justify-content-end pt-3">
                                    <button type="submit" class="btn btn-primary btn-lg ms-2">
                                        <small class="font-weight-bold">Submit</small>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-layoutadmin>

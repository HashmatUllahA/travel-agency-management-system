<x-layoutadmin>
    <x-slot name="title">PFI Cost</x-slot>
    <x-slot name="body">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10 col-12" style="margin-top: -66px;">
                    <div class="card shadow-lg border-0 rounded-lg">
                        <div class="card-body p-5">
                            <h3 class="mb-4 text-center text-uppercase text-primary">PFI Cost</h3>

                            @if(session()->has('success'))
                                <div class="alert alert-success text-center">
                                    {{ session()->get('success') }}
                                </div>
                            @endif

                            <form action="pficostpaymentview" method="post" enctype="multipart/form-data">
                                @csrf

                                <!-- Work & Expense Payments -->
                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <label for="work" class="form-label">Title*</label>
                                        <input type="text" name="work" class="form-control" id="work" placeholder="enter cost title" required />
                                    </div>
                                    <div class="col-md-6">
                                        <label for="expence" class="form-label">Cost Payments*</label>
                                        <input type="text" name="expence" class="form-control" id="expence" placeholder="enter cost amount" required />
                                    </div>
                                </div>

                                <!-- Details & Payment Status -->
                                <div class="row mb-4">
                                    <!-- <div class="col-md-6">
                                        <label for="details" class="form-label">Cost description*</label>
                                        <input type="text" name="details" class="form-control" id="details" placeholder="enter Cost description" required />
                                    </div> -->
                                    <div class="col-md-6">
                                        <label for="paymentstutas" class="form-label">Select Payment Status*</label>
                                        <select name="paymentstutas" class="form-control" id="paymentstutas" required>
                                            <option value="Cash">Cash</option>
                                            <option value="Account">Account</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Date -->
                               

                                <!-- Message -->
                                <div class="row mb-4">
                                    <div class="col-md-12">
                                        <label for="msg" class="form-label">Cost description</label>
                                        <textarea name="details" id="msg" class="form-control" rows="5" placeholder="enter description and any additional message..."></textarea>
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="text-end">
                                    <button type="submit" class="btn btn-primary btn-lg">
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

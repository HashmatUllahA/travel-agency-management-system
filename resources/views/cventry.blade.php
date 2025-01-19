<x-layoutadmin>
    <x-slot name="title">Entry Dashboard</x-slot>
    <x-slot name="body">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10">
                    <div class="card shadow-lg border-0">
                        <div class="card-body p-5">
                            <h3 class="mb-4 text-center text-uppercase text-primary">Resume Registration Form</h3>
                            @if(session()->has('success'))
                                <div class="alert alert-success text-center">
                                    {{ session()->get('success') }}
                                </div>
                            @endif
                            <form action="/app/submit-entry" method="post">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label class="form-label" for="username">Full Name*</label>
                                        <input type="text" id="username" name="username" class="form-control" placeholder="enter full name" required />
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label" for="fathername">Father Name</label>
                                        <input type="text" id="fathername" name="fatherName" class="form-control" placeholder="enter father name" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label class="form-label" for="trade">Trade</label>
                                        <input type="text" id="trade" name="trade" class="form-control" placeholder="enter trade here.." />
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label" for="city">City*</label>
                                        <input type="text" id="city" name="city" class="form-control" placeholder="enter city name" required />
                                    </div>
                                    
                                </div>
                                <div class="row mb-3">
                                <div class="col-md-6">
                                        <label class="form-label" for="contact1">Contact 1*</label>
                                        <input type="text" id="contact1" name="contect1" class="form-control" placeholder="enter primary contact" required />
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label" for="contact2">Contact 2</label>
                                        <input type="text" id="contact2" name="contect2" class="form-control" placeholder="enter secondary contact" />
                                    </div>
                                    
                                    <!-- <div class="col-md-6">
                                        <label class="form-label" for="passport">Passport Status</label>
                                        <select id="passport" name="passport" class="form-select">
                                            <option selected value="Passport present">Passport Present</option>
                                            <option value="No present">No Passport</option>
                                        </select>
                                    </div> -->
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-layoutadmin>

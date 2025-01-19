<x-layoutadmin>
    <x-slot name="title">Entry Dashboard</x-slot>
    <x-slot name="body">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10">
                    <div class="card shadow-lg border-0">
                        <div class="card-body p-5">
                            <h3 class="mb-4 text-center text-uppercase text-primary">Add New Employee</h3>
                            @if(session()->has('message'))
                                <div class="alert alert-success text-center">
                                    {{ session()->get('message') }}
                                </div>
                            @endif
                            <form action="/app/add-new-employee" enctype="multipart/form-data" method="post">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label class="form-label" for="username">Name*</label>
                                        <input type="text" id="username" name="username" class="form-control" placeholder="enter full name" required />
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label" for="fathername">Father Name</label>
                                        <input type="text" id="fathername" name="fatherName" class="form-control" placeholder="enter father name" required />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                <div class="col-md-6">
                                        <label class="form-label" for="trade">Email</label>
                                        <input type="text" id="trade" name="email" class="form-control" placeholder="enter contact number here.." required />
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label" for="trade">Contact Number</label>
                                        <input type="text" id="trade" name="contact_number" class="form-control" placeholder="enter contact number here.." required />
                                    </div>
                                    
                                    
                                    
                                </div>
                                <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label" for="contact2">Identy card Number(cnic)</label>
                                    <input type="text" id="contact2" name="cnic_number" class="form-control" placeholder="enter cnic number" required />
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="city">Address*</label>
                                    <input type="text" id="city" name="address" class="form-control" placeholder="enter city name" required />
                                </div>
                                    
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label class="form-label" for="image">Password</label>
                                        <input type="password" id="password" name="password" class="form-control" required />
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label" for="image">Image</label>
                                        <input type="file" id="image" name="image" class="form-control" required />
                                    </div>
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

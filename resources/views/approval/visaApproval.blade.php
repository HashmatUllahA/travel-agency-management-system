<x-layoutadmin>
    <x-slot name="title">visa approval</x-slot>
    <x-slot name="body">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10">
                    <div class="card shadow-lg border-0">
                        <div class="card-body p-5">
                            @if(session('message'))
                                <div class="alert alert-success text-center">
                                    {{ session('message') }}
                                </div>
                            @endif

                            <h3 class="mb-4 text-center text-uppercase text-primary">store visa approval record.</h3>

                            @if(session()->has('success'))
                                <div class="alert alert-success text-center">
                                    {{ session()->get('success') }}
                                </div>
                            @endif

                            <form action="/submit-visa-approval" enctype="multipart/form-data" method="post">
                                @csrf
                                <!-- Country & Visa Title -->
                                <div class="row mb-3">
                                    
                                    <div class="col-md-6">
                                        <label class="form-label" for="visa-title">Name*</label>
                                        <input type="text" id="visa-title" name="name" class="form-control" placeholder="Enter visa title" required />
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label" for="country">Father Name*</label>
                                        <input type="text" id="country" name="father_name" class="form-control" placeholder="Enter country name" required />
                                    </div>
                                </div>

                                <!-- Required Persons & Last Date -->
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label class="form-label" for="required-persons">Contact Number</label>
                                        <input type="number" id="required-persons" name="contect_number" class="form-control" placeholder="Number of required persons" />
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label" for="last-date">Passport Number*</label>
                                        <input type="number" id="last-date" name="passport_number" class="form-control" required />
                                    </div>
                                </div>

                                <!-- Advertisement Image -->
                                <div class="mb-4">
                                    <label class="form-label" for="advertisement-image">select approvel file (pdf)</label>
                                    <input type="file" id="advertisement-image" name="approvel_file" class="form-control" />
                                </div>

                                <!-- Submit Button -->
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

<script>
    document.getElementById("submitBtn").addEventListener("click", function(){
      alert("The data is submitted successfully");
    });
</script>

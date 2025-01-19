<x-layoutadmin>
    <x-slot name="title">Submit Visa</x-slot>
    <x-slot name="body">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10">
                    <div class="card shadow-lg border-0">
                        <div class="card-body p-5">
                            @if(session('status'))
                                <div class="alert alert-success text-center">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <h3 class="mb-4 text-center text-uppercase text-primary">Submit Visa Details Form</h3>

                            @if(session()->has('success'))
                                <div class="alert alert-success text-center">
                                    {{ session()->get('success') }}
                                </div>
                            @endif

                            <form action="showform" enctype="multipart/form-data" method="post">
                                @csrf
                                <!-- Country & Visa Title -->
                                <div class="row mb-3">
                                    
                                    <div class="col-md-6">
                                        <label class="form-label" for="visa-title">Trade*</label>
                                        <input type="text" id="visa-title" name="title" class="form-control" placeholder="Enter visa title" required />
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label" for="country">Country*</label>
                                        <input type="text" id="country" name="country" class="form-control" placeholder="Enter country name" required />
                                    </div>
                                </div>

                                <!-- Required Persons & Last Date -->
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label class="form-label" for="required-persons">Required Persons</label>
                                        <input type="number" id="required-persons" name="requerd" class="form-control" placeholder="Number of required persons" />
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label" for="last-date">Last Date*</label>
                                        <input type="date" id="last-date" name="lastdate" class="form-control" required />
                                    </div>
                                </div>

                                <!-- Advertisement Image -->
                                <div class="mb-4">
                                    <label class="form-label" for="advertisement-image">Advertisement Image</label>
                                    <input type="file" id="advertisement-image" name="advimg" class="form-control" />
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

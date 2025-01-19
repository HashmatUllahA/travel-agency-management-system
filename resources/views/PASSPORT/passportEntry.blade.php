<x-layoutadmin>
    <x-slot name="title">Passport Entry</x-slot>
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

                            <h3 class="mb-4 text-center text-uppercase text-primary">Passport Entry </h3>

                            @if(session()->has('success'))
                                <div class="alert alert-success text-center">
                                    {{ session()->get('success') }}
                                </div>
                            @endif

                            <form action="/app/submit-passport" enctype="multipart/form-data" method="post">
                                @csrf
                                
                                <!-- Full Name & Father Name -->
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label class="form-label" for="full-name">Full Name*</label>
                                        <input type="text" id="full-name" name="name" class="form-control" placeholder="enter full name .." required />
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label" for="father-name">Father's Name*</label>
                                        <input type="text" id="father-name" name="fathername" class="form-control" placeholder="enter father's name .." required />
                                    </div>
                                </div>

                                <!-- Passport No & City -->
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label class="form-label" for="passport-no">Passport No*</label>
                                        <input type="text" id="passport-no" name="passportno" class="form-control" placeholder="Enter passport number" required />
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label" for="city">Trade*</label>
                                        <input type="text" id="city" name="trade" class="form-control" placeholder="enter trade.." required />
                                    </div>
                                </div>

                                <!-- Date -->
                                <div class="row mb-3">
                                <div class="col-md-6">
                                        <label class="form-label" for="city">City*</label>
                                        <input type="text" id="city" name="city" class="form-control" placeholder="enter city.." required />
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="d-flex justify-content-end pt-3">
                                    <button type="submit" class="btn btn-warning btn-lg ms-2">Submit</button>
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

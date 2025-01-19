<x-layoutadmin>
    <x-slot name="title">view  payment</x-slot>
    <x-slot name="body">

        <section class="section ALLTADA">

    {{-- <p>Total Payment: {{ $result->totalpayment }}</p>
    <p>Received Payment: {{ $result->recivepayment }}</p> --}}
    {{-- <p>Remaining Payment: {{ $remainingAmount }}</p> --}}
            <div class="container">

<a href="{{ route('generate.pdf', ['id' => $result->id]) }}">
    <button class="EDBTN btn-info float-right">Download PDF</button>
</a>
                {{-- <form action="{{ route('payments.generate-pdf') }}" method="GET">
                    <button class="btn btn-primary float-right" type="submit">Generate PDF</button>
                </form> --}}
                <div class="d-flex">
                    <img src="{{url('frontend/wp-content/uploads/sites/5/2018/03/logo-white.png')}}"
                    data-at2x="http://104.131.177.38/demo/creptaam/ico-landing-dark/wp-content/themes/creptaam/images/logo-white2x.png" alt="ICO Landing Dark"/>
                    <div>
                        <h4 class="text-center pl-3">PAK FUTURE INTERNATIONAL AGENCY</h4>
                        <h6 class="text-center pl-3">Pak Future provides all kind of visa services like manpower recruitment, immigration and education.</h6>
                    </div>

            </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <h2>Payment Slip</h2>
                        </div>
                        <div class="col-md-5 text-right">
                            <p>Date: {{ $result->created_at->format('d/m/Y') }}</p>

                        </div>
                    </div>
                    <div class="slip-header">
                        <h4>Payment Details</h4>
                    </div>

                    <div class="slip-body">
                        <div class="row">
                            <div class="col-md-5 ml-2">
                                <p><strong>Customer Name:</strong>  {{ $result->name }}</p>
                                <p><strong>Father Name:</strong>  {{ $result->fathername }}</p>
                                <p><strong>Passport No:</strong>  {{ $result->passportno }}</p>
                                <p><strong>Contect No:</strong> {{ $result->contect }}</p>
                                <p><strong>Address:</strong> {{ $result->city }}</p>
                            </div>
                            <div class="col-md-5 text-right">
                                <p><strong>Status:</strong> {{ $result->trade }}</p>
                                <p><strong>Payment Method:</strong> {{ $result->paymentstutas }}</p>
                                <p><strong>Total Amount AED:</strong> {{ $result->totalpayment }}</p>
                                <p><strong>Recive Amount:</strong>{{ $result->recivepayment }}</p>
                                {{-- <p><strong>Remaining Amount:</strong>   {{ number_format($remainingAmount, 2) }}</p> --}}


                                {{-- <p><strong>Remaining Amount:</strong> {{ $result->$remainingAmount }}</p> --}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <p><strong>Country:</strong> Payment for {{ $result->country }}</p>
                                <p><strong>Company Name:</strong> Payment for <b>({{ $result->companyname }})</b></p>
                            </div>
                        </div>
                    </div>
                    <div >

                        <p>Thank you for your payment!</p>
                    </div>
                    <div class="text-center">
                        <p><strong>Authorised Signature:</strong>____________________</p>
                    </div>
                </div>
                <!-- Bootstrap JS -->
                <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


              <div class="container">
                <div class="row pt-1">
                    <div class="col-md-12">

                        <h5 class="text-info mb-3 text-center">Helpline</h3>
                        <h6 class="text-info mb-3 text-center">Contact: Tel:+92 51 4571389</h4>
                        <h6 class="text-info mb-3 text-center">Contact: Tel: 0514571384, Cell: 03009300117, 03219300117, 03369300117</h5>
                        <h6 class="text-info mb-3 text-center">Email: info@pakfutureint.com</h5>

                    </div>
                </div>

            </div>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
                  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
                  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
                  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
                  <script>
                    document.getElementById("submitBtn").addEventListener("click", function(){
                      alert("The data is submitted successfully");
                    });
                  </script>



            </div>
        </x-slot>
  </x-layoutadmin>

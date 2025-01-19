<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>print PDF</title>
</head>
<style>
    .text-center{
        margin-left: 200px;
    }
    .providesall{
        margin-left: 100px;

    }
    .slip-body{
        margin-left: 500px;
        margin-top: -200px;
height: 200px;
    }
    .helpine{
        text-align: center;
    }
</style>
<body>
    <div class="d-flex">

        <div>
            <h4 style=""class="text-center pl-3">PAK FUTURE INTERNATIONAL AGENCY</h4>
            <h5 class="providesall pl-3">Pak Future provides all kind of visa services like manpower recruitment, immigration and education.</h6>
        </div>

</div>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h2>Payment Slip</h2>
            </div>
            <div class="col-md-5 text-right">
                <p>Date: {{ $payment->created_at }}</p>

            </div>
        </div>
        <div class="slip-header">
            <h4>Payment Details</h4>
        </div>

        <div class="">


            <div class="row">
                <div class="col-md-5 ml-2">
                    <p><strong>Customer Name:</strong>{{ $payment->id }}</p>
                    <p><strong>Father Name:</strong>  {{ $payment->fathername }}</p>
                    <p><strong>Passport No:</strong>  {{ $payment->passportno }}</p>
                    <p><strong>Contect No:</strong> {{ $payment->contect }}</p>
                    <p><strong>Address:</strong> {{ $payment->city }}</p>
                </div>

                 <div class="col-md-5 text-right slip-body">
                    <p><strong>Status:</strong> {{ $payment->trade }}</p>
                    <p><strong>Payment Method:</strong> {{ $payment->paymentstutas }}</p>
                    <p><strong>Total Amount AED:</strong> {{ $payment->totalpayment }}</p>
                    <p><strong>Recive Amount:</strong>{{ $payment->recivepayment }}</p>
                    {{-- <p><strong>Remaining Amount:</strong>${{ number_format($remainingAmount, 2) }}</p> --}}


                    {{-- <p><strong>Remaining Amount:</strong> {{ $payment->$remainingAmount }}</p> --}}
                </div>

            </div>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <p><strong>Country:</strong> Payment for {{ $payment->country }}</p>
                    <p><strong>Company Name:</strong> Payment for <b>({{ $payment->companyname }})</b></p>
                    <p><strong>Message:</strong> to remember <b>({{ $payment->msg }})</b></p>
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

            <h4 class="text-info mb-3 helpine">Helpline</h3>
            <h5 class="text-info mb-3 helpine ">Contact: Tel:+92 51 4571389</h4>
            <h5 class="text-info mb-3 helpine ">Contact: Tel: 0514571384, Cell: 03009300117, 03219300117, 03369300117</h5>
            <h5 class="text-info mb-3 helpine">Email: info@pakfutureint.com</h5>

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
</body>
</html>

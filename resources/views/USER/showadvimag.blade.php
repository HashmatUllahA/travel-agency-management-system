 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>pak future adv</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{url('frontend/css/main.css')}}">
</head>
<style>
    .telephoneicon{
        margin-left: 550px;
       
    }
    .close{
        color: aliceblue
        
    }
    .closebtnborder{
        
        margin-left: 750px;
    }
    body{
        background-color: blueviolet;
        width: 1200px;
    }
</style>
<body>
     <div class="container">
        <div class="row pt-5">
            <div class="telephoneicon">
                <i class="text-info fa  fa-phone fa-3x iconclass"></i>
              </div>
              
            <div class="col-md-12">
                
                <h1 class="text-info mb-3 text-center">+92 51 4571389</h1>
                <h5 class="text-info mb-3 text-center">OFFICE # 07, 2ND FLOOR NOOR PLAZA CHANDNI CHOWK RAWARPINDI PAKISTAN</h5>
                <h5 class="text-info mb-3 text-center">Contact: Tel: 0514571389, Fax: 0514571384, Cell: 03009300117, 03219300117, 03369300117</h5>
                <h5 class="text-info mb-3 text-center">Email: info@pakfutureint.com, Website: www.pakfutureintl.com</h5>
              <div class="card">
                <div class="card-header d-flex">
                    <h5>URGENT NEED OF {{$images->title}} IN -{{$images->country}}</h5>
                    
                <div class="closebtnborder">
                    <a href=""><span class="close btn btn-info cancel" onclick="closeForm()">x</span></a>
                </div>
                    
            </div>
                <div class="card-body">
                   
                            <img src="{{ asset($images->image_path) }}" alt="" width="1100px" height="500px"> 
                            <td></td>    
                        
                </div>
              </div>
            </div>
        </div>
     </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script> 
    <script src="{{url('frontend/js/main.js')}}"></script>
</body>
</html> 

<x-layoutadmin>
    <x-slot name="title">edit user online applay</x-slot>
    <x-slot name="body">
      
        <section class="section ALLTADA">
          <div class="col-3 mt-3 float-right">
          </div>
          <div class="">
            <h3 class="text-info text-center">Update online apllay for visa </h3>
          </div>
            <form action="../editapplay/{id}" method="post">
              @csrf
                <div class="d-flex">
                  <div class="col-5 mt-3 pl-3 ">
                    <p>Name</p>
                    <input name="name" value="{{$result->name}}" type="text" class="form-control" placeholder="Name">
                  </div>
                  <div class="col-5 mt-3">
                  <p>Father Name</p>
                    <input name="fname" value="{{$result->fname}}" type="text" class="form-control" placeholder="Trade">
                  </div>
                </div>
              <div class="d-flex">
                <div class="col-5 mt-3 pl-3 ">
                  <p>Gender</p>
                  <input name="gender" value="{{$result->gender}}" type="text" class="form-control" placeholder="City">
                </div>
                <div class="col-5 mt-3">
                  <p>CNIC:*</p>
                    <input name="cnicno" value="{{$result->cnicno}}"type="text" class="form-control" placeholder="Contect 1">
                </div>
              </div>
            <div class="d-flex">
              <div class="col-5 mt-3 pl-3 ">
                <p>Data of Birth:*</p>
                <input name="dob" value="{{$result->dob}}"  type="text" class="form-control" placeholder="contect 2">
              </div>
              <div class="col-5 mt-3 pl-3 ">
                <p>Place of Birth:*</p>
                <input name="placebarth" value="{{$result->placebarth}}"  type="text" class="form-control" placeholder="contect 2">
              </div>
              
              </div>
              <div class="d-flex">
                <div class="col-5 mt-3 pl-3 ">
                  <p>Passport No:*</p>
                  <input name="passportno" value="{{$result->passportno}}"  type="text" class="form-control" placeholder="contect 2">
                </div>
                <div class="col-5 mt-3 pl-3 ">
                  <p>Passoprt Expiry:*</p>
                  <input name="expriypassport" value="{{$result->expriypassport}}"  type="text" class="form-control" placeholder="contect 2">
                </div>
                
                </div>
                <div class="d-flex">
                    <div class="col-5 mt-3 pl-3 ">
                      <p>Visa title:*</p>
                      <input name="visatitle" value="{{$result->visatitle}}"  type="text" class="form-control" placeholder="contect 2">
                    </div>
                    <div class="col-5 mt-3 pl-3 ">
                      <p>Experience:*</p>
                      <input name="Experience" value="{{$result->Experience}}"  type="text" class="form-control" placeholder="contect 2">
                    </div>
                    
                    </div>
            </div>
            </div>
            <div class="col-3 mt-3 ">
              <input style="margin-left:440px ;" class="btn btn-primary btnonline " id="submitBtn" type="submit" value="submit">
            </div>
            </form>
            <script>
                document.getElementById("submitBtn").addEventListener("click", function(){
                  alert("The data is submitted successfully");
                });
              </script>
    </x-slot>
  </x-layoutadmin>
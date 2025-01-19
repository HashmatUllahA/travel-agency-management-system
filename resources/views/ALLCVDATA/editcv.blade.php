<x-layoutadmin>
    <x-slot name="title">entry dishbord</x-slot>
    <x-slot name="body">
      
        <section class="section ALLTADA">
          <div class="col-3 mt-3 float-right">
          </div>
          <div class="">
            <h1>Enter Information who are apply for the visa </h1>
          </div>
            <form action="../editcv/{user_id}" method="post">
              @csrf
                <div class="d-flex">
                  <div class="col-5 mt-3 pl-3 ">
                    <p>Name</p>
                    <input name="username" value="{{ $result->username }}" type="text" class="form-control" placeholder="Name">
                  </div>
                  <div class="col-5 mt-3">
                  <p>Trade</p>
                    <input name="trade" value="{{ $result->trade }}" type="text" class="form-control" placeholder="Trade">
                  </div>
                </div>
              <div class="d-flex">
                <div class="col-5 mt-3 pl-3 ">
                  <p>City</p>
                  <input name="city" value="{{ $result->city }}" type="text" class="form-control" placeholder="City">
                </div>
                <div class="col-5 mt-3">
                  <p>Contect 1</p>
                    <input name="contect1" value="{{ $result->contect1 }}"type="text" class="form-control" placeholder="Contect 1">
                </div>
              </div>
            <div class="d-flex">
              <div class="col-5 mt-3 pl-3 ">
                <p>Contect 2</p>
                <input name="contect2" value="{{ $result->contect2 }}"  type="text" class="form-control" placeholder="contect 2">
              </div>
              <div class="col-5 mt-3">
                <p>Passport</p>
              <div class="w-200 mt-3 pl-3 ">
  
                <select name="passport" value="{{ $result->passport }}" class="col-5" name="" id="">
                  <option class="col-5 " value="Passport present">Passport present</option>
                  <option value="No present">No Passport</option>
                </select>
              </div>
            </div>
            </div>
            <div class="col-3 mt-3 float-right">
              <input class="btn btn-primary  " type="submit" value="submit">
            </div>
            </form>
    </x-slot>
  </x-layoutadmin>
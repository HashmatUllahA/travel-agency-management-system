<x-layoutadmin>
  <x-slot name="title">submit visa</x-slot>
  <x-slot name="body">
     
<div class="allcvtable">
<h3 class="text-dark">EDIT AND UPDATE VISA DETAILS HERE </h3>
{{-- @if(session('country'))
  <p>data save for {{session('country')}}</p>
  @endif --}}
<form action="../editvisa/{id}" enctype="multipart/form-data" method="post">
  @csrf
    <div class="d-flex">
      <div class="col-5 mt-3 pl-3 ">
        <p class="text-dark">Country</p>
        <input name="country" value="{{$result->country }}" type="text" class="form-control" placeholder="Enter country name here" required>
      </div>
      <div class="col-5 mt-3">
      <p class="text-dark">Visa Title</p>
        <input name="title" value="{{$result->title }}" type="text" class="form-control" placeholder="Enter visa Title here" required>
      </div>
    </div>
  <div class="d-flex">
    <div class="col-5 mt-3 pl-3 ">
      <p class="text-dark">Requerd Person</p>
      <input name="requerd" value="{{$result->requerd }}" type="text" class="form-control" placeholder="How many requerd person" required>
    </div>
    <div class="col-5 mt-3">
      <p class="text-dark">LAST DATE</p>
        <input name="lastdate" value="{{$result->lastdate ?? 'code not found'}}" type="date" class="form-control" placeholder="Enter last date" required>
    </div>
  </div>
<div class="d-flex">
  <div class="col-5 mt-3 pl-3 ">
    <p class="text-dark">advertisement Image</p>
    <input  name="advimg" value="{{$result->advimg}}" type="file" class="form-control " placeholder="contect 2" >
  </div>
  
  </div>
</div>
</div>
<div class="col-3 mt-3 float-right">
  <input class="btn btn-primary  " type="submit" value="Submit">
</div>
</form>
  </x-slot>
</x-layoutadmin>
<x-layoutadmin>
    <x-slot name="title">pfi cost</x-slot>
    <x-slot name="body">

        <section class="section ALLTADA">
            <div class="container card-0 justify-content-center ">
                <div class="card-body px-sm-4 px-0">
                    <div class="row justify-content-center mb-5">
                         <div class="col-md-10 col">
                             <h3 class="font-weight-bold ml-md-0 mx-auto text-center text-sm-left">PFI COST</h3>

                             <p class="mt-md-4 ml-md-0 ml-2 text-center text-sm-left"> Enter the monthes on the follwing input field to search the months cost of the pak future INT</p>
                            </div>
                        </div>
                        @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        {{ session()->pull('success') }}
                    @endif
                        <div class="row justify-content-center round">
                            <div class="col-lg-8 col-md-8 ">
                                <div class="card shadow-lg card-1">
                                    <div class="card-body inner-card">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-5 col-md-6 col-sm-12">
                                                <form method="GET" action="{{ route('search') }}">
                                                    <label for="date">Search by date:</label>
                                                    <input type="date" id="date" name="date">
                                                    <button class="btn btn-info  col-sm-6 mt-3" type="submit">Search</button>
                                                  </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            </div>

          </div>

    </x-slot>
  </x-layoutadmin>

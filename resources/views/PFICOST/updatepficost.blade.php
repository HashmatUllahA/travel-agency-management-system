<x-layoutadmin>
    <x-slot name="title">Update PFI Cost</x-slot>
    <x-slot name="body">
        <div class="container" style="margin-left: 300px;">
            <h3 class="font-weight-bold text-center text-primary mt-4">Update PFI Cost</h3>
            
            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif

            <form action='../update/{{$result->id}}' method="post" enctype="multipart/form-data" class="mt-4">
                @csrf
                <!-- Work -->
                <div class="form-group">
                    <label for="work" class="font-weight-bold">Title*</label>
                    <input 
                        type="text" 
                        required 
                        value="{{ $result->work }}" 
                        name="work" 
                        class="form-control" 
                        id="work" 
                        placeholder="Enter Work">
                </div>

                <!-- Expense Payments -->
                <div class="form-group">
                    <label for="expense" class="font-weight-bold">Cost Payments*</label>
                    <input 
                        type="text" 
                        required 
                        value="{{ $result->expence }}" 
                        name="expence" 
                        class="form-control" 
                        id="expense" 
                        placeholder="Enter Payment Amount">
                </div>
                    <!-- Payment Status -->
                <div class="form-group">
                    <label for="payment-status" class="font-weight-bold">Payment Status*</label>
                    <select 
                        name="paymentstutas" 
                        required 
                        class="form-control" 
                        id="payment-status">
                        <option value="Cash" {{ $result->paymentstutas == 'Cash' ? 'selected' : '' }}>Cash</option>
                        <option value="Acount" {{ $result->paymentstutas == 'Acount' ? 'selected' : '' }}>Account</option>
                    </select>
                </div>
                <!-- Details -->
                <div class="form-group">
                    <label for="details" class="font-weight-bold">Cost description*</label>
                    <input 
                     id="msg"
                    rows="5"
                        type="text" 
                        required 
                        value="{{ $result->details }}" 
                        name="details" 
                        class="form-control" 
                        id="details" 
                        placeholder="Enter Details">
                </div>

                

                <!-- Message -->
                <!-- <div class="form-group">
                    <label for="message" class="font-weight-bold">Message</label>
                    <textarea 
                        name="msg" 
                        class="form-control rounded-0" 
                        id="message" 
                        placeholder="Any Message" 
                        rows="5">{{ $result->msg }}</textarea>
                </div> -->

                <!-- Submit Button -->
                <div class="text-right" style=" width: 100px;"    >
                    <button type="submit" class="btn btn-primary btn-block">
                        <small class="font-weight-bold">Submit</small>
                    </button>
                </div>
            </form>
        </div>
    </x-slot>
</x-layoutadmin>

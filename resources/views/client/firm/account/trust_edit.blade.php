<x-firmHeader />
<div class="main-panel matterinside">
    <div class="content-wrapper">
         <div class="row m-2">
              <div class="col-md-12 m-2">
                <div class="m-2 border border-dark rounded bg-white" id="trust-account-form" >
                    <form action="{{ route('client.firm.trust.account.edit.action', $details->trust_account_id) }}" method="post">
                        @csrf
        
                    <div class="row m-2">
                            <div class="col-md-12 m-2">
                                <h4>Add Trust Account</h4>
                            </div>
                            <div class="col-md-5 m-2">
                                 <label for="">Trust Account Name *</label>
                                 <input type="text" name="trust_account_name" id="trust_account_name" class="form-control" value="{{ $details->trust_account_name }}" required> 
                            </div>
                            <div class="col-md-5 m-2">
                                <label for="">Display Name</label>
                                <input type="text" name="display_name" id="display_name" value="{{ $details->display_name }}" class="form-control"> 
                           </div>
        
                            <div class="col-md-5 m-2">
                                <label for="">Bank Name</label>
                                <input type="text" name="bank_name" id="bank_name" value="{{ $details->bank_name }}" class="form-control"> 
                            </div>
                            <div class="col-md-5 m-2">
                                <label for="">Branch</label>
                                <input type="text" name="branch" id="branch" value="{{ $details->branch }}" class="form-control"> 
                            </div>
        
                            <div class="col-md-5 m-2">
                                <label for="">Available for Matters in State *</label>
                                <select name="matters_states" id="matters_states" class="form-control">
                                        <option value="{{ $details->state }}">{{ $details->state }}</option>
                                        @foreach ($states as $state)
                                        @if($state->state_name != $details->state)
                                        <option value="{{ $state->state_name }}">{{ $state->state_name }}</option>
                                        @endif
                                        @endforeach
                                </select>
                            </div>
        
                            <div class="col-md-8 m-2">
                                  <button type="submit" class="btn btn-primary">Save</button>
                                  <a href="{{ route('client.firm.account.page') }}"><button type="button"  class="btn btn-dark">Cancel</button></a>
                                  <a href="{{ route('client.firm.trust.account.status.change', ['id' => $details->trust_account_id, 'status' => 'close']) }}" class="btn btn-outline-danger">Close Account</a>
                            </div>
                    </div>
                    </form>
                   </div>
              </div>
         </div>
    </div>
</div>
<x-firmFooter />
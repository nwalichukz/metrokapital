@extends('dashboard/src/html/crm/dashboard-layout')
@section('content')   
    <!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="col-lg-6">
                                    <div class="card card-bordered h-100">
                                        <div class="card-inner">
                                            <div class="card-head">
                                                <h5 class="card-title">Confirm Transfer Details </h5>
                                            </div>
                                            <form method="POST" action="{{url('/user/external-transfer')}}">
                                            @csrf
                                               
                                            <div class="form-group">
                                                    <label class="form-label" for="cf-email-address">Enter Bank Name</label>
                                
                                                    <input type="text"  class="form-control" value="{{$bank_name}}" id="cf-email-address" disabled required>
                                                </div>

                                                <div class="form-group">
                                                    <label class="form-label" for="cf-email-address">Account Name</label>
                                
                                                    <input type="text"  class="form-control" value="{{$account_name}}" id="cf-email-address" disabled required>
                                                </div>
                                                            
                                                      
                                                <div class="form-group">
                                                    <label class="form-label" for="cf-email-address">Account Number</label>
                                                    <input type="text" name="account_number" class="form-control" value="{{$account_number}}" id="cf-email-address" disabled required>
                                                     <input type="hidden" name="sender_user_id" value="{{Auth::user()->id}}"  required>
                                                     <input type="hidden" name="bank_name" value="{{$bank_name}}"  required>
                                                     <input type="hidden" name="amount" value="{{$amount}}"  required>
                                                     <input type="hidden" name="account_number" value="{{$account_number}}"  required>
                                                     <input type="hidden" name="account_name" value="{{$account_name}}"  required>
                                                     

                                                </div>

                                                <div class="form-group">
                                                    <label class="form-label" for="cf-email-address">Amount</label>
                                                    <input type="text" class="form-control" value="${{$amount}}" id="cf-email-address" disabled required>
                                                </div>

                                                <div class="form-group">
                                                    <label class="form-label" for="cf-email-address">Fees</label>
                                                    <input type="text" name="amount" class="form-control" value="$1" id="cf-email-address" disabled required>
                                                </div>

                                                <div class="form-group">
                                                    <label class="form-label" for="cf-email-address">PIN</label>
                                                    <input type="text" name="pin" class="form-control" id="cf-email-address" required>
                                                </div>
                                              
                                              
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-lg btn-primary">Make Transfer</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endsection

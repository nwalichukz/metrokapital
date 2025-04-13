@extends('dashboard/src/html/crm/dashboard-layout')
@section('content')  
    <!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                            <H6> BALANCE: {{ number_format(Auth::user()->userWallet->balance)}} USD</H6>
                            </BR>
                                <div class="col-lg-6">
                                    <div class="card card-bordered h-100">
                                        <div class="card-inner">
                                            <div class="card-head">
                                                <h5 class="card-title">Confirm Transfer Details</h5>
                                            </div>
                                            <form method="POST" action="{{url('/user/internal-transfer/create')}}">
                                            @csrf
                                            <div class="form-group">
                                                    <label class="form-label" for="cf-full-name">Name</label>
                                                    <input type="text" name="name" value="{{$data->user->name}}" class="form-control" id="cf-full-name" required disabled>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label class="form-label" for="cf-full-name">Wallet No</label>
                                                    <input type="number" name="receiver_wallet_no" value="{{$data->wallet_no}}" class="form-control" id="cf-full-name" required disabled>
                                                </div>
                                               
                                                    
                                                    <input type="hidden" name="sender_wallet_no" value="{{Auth::user()->userWallet->wallet_no}}" class="form-control" id="cf-full-name" required disabled>
                                               
                                                <div class="form-group">
                                                    <label class="form-label" for="cf-email-address">Amount</label>
                                                    <input type="number" name="amount" value="{{$amount}}" required class="form-control" id="cf-email-address" disabled>
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

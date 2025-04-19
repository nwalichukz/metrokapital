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
                                                <h5 class="card-title">Internal Transfer</h5>
                                            </div>
                                            <form method="POST" action="{{url('/user/confirm-wallet-details')}}">
                                            @csrf
                                                <div class="form-group">
                                                    <label class="form-label" for="cf-full-name">Wallet No</label>
                                                    <input type="number" name="wallet_no" class="form-control" id="cf-full-name" required>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="cf-email-address">Amount</label>
                                                    <input type="number" name="amount" class="form-control" id="cf-email-address" required>
                                                </div>
                                               
                                              
                                              
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-lg btn-primary">Confirm Details</button>
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

     <!-- content @s -->
 @extends('dashboard/src/html/crm/dashboard-layout')
@section('content')        
            <!-- content @s -->
            <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                            <h5 class="card-title">WALLET INFO</h5>
    </BR>
                            <H6> ID : {{Auth::user()->userWallet->wallet_no}}</H6>
    </BR>
    <H6> BALANCE: {{ number_format(Auth::user()->userWallet->balance)}} USD</H6>
    </BR>

    </BR>
    <H6 style="color:red;"> JOINT ACC BALANCE: {{ number_format(Auth::user()->userWallet->balance_two)}} USD</H6>
    </BR>
                                <div class="col-lg-6">
                                    <div class="card card-bordered h-100">
                                        <div class="card-inner">
                                            <div class="card-head">
                                                <h5 class="card-title">FUND JOINT ACCOUNT</h5>
                                            </div>
                                            <form method="POST" action="{{url('user/fund-joint-account/create')}}">
                                            @csrf
                                                <div class="form-group">
                                                    <label class="form-label" for="cf-full-name">Enter amount</label>
                                                    <input name="amount" type="number" class="form-control" id="cf-full-name" placeholder="Enter amount to fund in USD" required>
                                                      <input name="user_id" type="hidden" class="form-control" value="{{Auth::user()->id}}">
                                                </div>
                                                                                     

                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-lg btn-primary">Fund</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- content @e -->
                 @endsection
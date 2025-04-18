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
                                                <h5 class="card-title">Transfer to a Bank</h5>
                                            </div>
                                            <form action="#">
                                               
                                                
                                                            <div class="form-group">
                                                                <label class="form-label" for="fv-topics">Select Bank</label>
                                                                <div class="form-control-wrap ">
                                                                    <select class="form-select js-select2" id="fv-topics" name="fv-topics" data-placeholder="Select a option" required>
                                                                        <option label="empty" value="">Select Bank</option>
                                                                        <option value="fv-gq">Access Bank</option>
                                                                        <option value="fv-tq">Ecobank</option>
                                                                        <option value="fv-ab">UBA</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                      
                                                <div class="form-group">
                                                    <label class="form-label" for="cf-email-address">Account Number</label>
                                                    <input type="text" class="form-control" id="cf-email-address">
                                                </div>

                                                <div class="form-group">
                                                    <label class="form-label" for="cf-email-address">Amount</label>
                                                    <input type="text" class="form-control" id="cf-email-address">
                                                </div>
                                              
                                              
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-lg btn-primary">Proceed</button>
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

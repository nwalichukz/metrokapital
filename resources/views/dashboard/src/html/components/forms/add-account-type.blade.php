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
                                                <h5 class="card-title">ADD ACCOUNT TYPE</h5>
                                            </div>
                                            <form method="POST" action="{{url('admin/create-investment-type')}}">
                                            @csrf
                                                
                                                            <div class="form-group">
                                                                <label class="form-label" for="fv-topics">Select Plan Name</label>
                                                                <div class="form-control-wrap ">
                                                                    <select class="form-select js-select2" id="fv-topics" name="label_name" data-placeholder="Select a option" required>
                                                                        <option value="">Select Label Name</option>
                                                                        <option value="annuities">Annuities</option>
                                                                        <option value="arbitrage">Arbitrage</option>
                                                                        <option value="loans">Loans</option>
                                                                        <option value="dps">DPS</option>
                                                                        <option value="islamic banking">Islamic Banking</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                    <label class="form-label" for="cf-email-address">Account Name</label>
                                                    <input name="account_name" type="text" class="form-control" id="cf-email-address" required>
                                                </div>
                                                      
                                                <div class="form-group">
                                                    <label class="form-label" for="cf-email-address">Min. Amount</label>
                                                    <input name="min_amount" type="number" class="form-control" id="cf-email-address" required>
                                                </div>

                                                <div class="form-group">
                                                    <label class="form-label" for="cf-email-address">Max. Amount</label>
                                                    <input name="max_amount" type="text" class="form-control" id="cf-email-address" required>
                                                </div>

                                                <div class="form-group">
                                                    <label class="form-label" for="cf-email-address">Percentage Profit</label>
                                                    <input name="earning_percentage" type="text" class="form-control" id="cf-email-address" required>
                                                </div>

                                                
                                                <div class="form-group">
                                                                <label class="form-label" for="fv-topics">Select Duration in Day(s)</label>
                                                                <div class="form-control-wrap ">
                                                                    <select name="duratn_in_mnth" class="form-select js-select2" id="fv-topics" name="fv-topics" data-placeholder="Select a option" required>
                                                                        <option label="empty" value="">Select duration</option>
                                                                        <option value="10">10</option>
                                                                        <option value="14">14</option>
                                                                        <option value="15">15</option>
                                                                        <option value="20">20</option>
                                                                        <option value="30">30</option>
                                                                        <option value="40">40</option>
                                                                        <option value="50">50</option>
                                                                        <option value="60">60</option>
                                                                        <option value="70">70</option>
                                                                        <option value="80">80</option>
                                                                        <option value="90">90</option>
                                                                        <option value="100">100</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                              
                                                            <div class="form-group">
                                                                <label class="form-label" for="default-textarea">Description</label>
                                                                <div class="form-control-wrap">
                                                                    <textarea name="description" class="form-control no-resize" id="default-textarea" required> Description about the account type </textarea>
                                                                </div>
                                                            </div>
                                                  
                                              
                                              
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-lg btn-primary">Save</button>
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

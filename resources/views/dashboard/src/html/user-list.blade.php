@inject('appData', 'App\Services\Helper')
@extends('dashboard/src/html/crm/dashboard-layout')
@section('content')
     <!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">All Users </h3>
                                            <div class="nk-block-des text-soft">
                                                <p> </p>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <div class="toggle-wrap nk-block-tools-toggle">
                                               
                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                                <div class="toggle-expand-content" data-content="pageMenu">
                                                    <ul class="nk-block-tools g-3">
                                                        {{--<li><a href="#" class="btn btn-white btn-outline-light">
                                                            <em class="icon ni ni-download-cloud"></em><span>Export</span></a></li>--}}
                                                        <li class="nk-block-tools-opt">
                                                            <div class="drodown">
                                                                <a href="#" class="dropdown-toggle btn btn-icon btn-primary" data-bs-toggle="dropdown"><em class="icon ni ni-plus"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        {{--<li><a href="#"><span>Add User</span></a></li>
                                                                        <li><a href="#"><span>Add Team</span></a></li>
                                                                        <li><a href="#"><span>Import User</span></a></li>--}}
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div><!-- .toggle-wrap -->
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="card card-bordered card-stretch">
                                        <div class="card-inner-group">
                                            <div class="card-inner position-relative card-tools-toggle">
                                                <div class="card-title-group">
                                                    <div class="card-tools">
                                                        <div class="form-inline flex-nowrap gx-3">
                                                            <div class="form-wrap w-150px">
                                                     <form method="POST" action="{{url('/admin/search-user')}}">
                                                            @csrf
                                                       <input type="text" name="term" placeholder="Enter email or name of user" required>
                                                                        </br><br/>
                                                        <input type="submit" value="Search">
                                                            </form>
                                                                {{--<select class="form-select js-select2" data-search="off" data-placeholder="Bulk Action">
                                                                   <option value="">Bulk Action</option>
                                                                    <option value="email">Send Email</option>
                                                                    <option value="group">Change Group</option>
                                                                    <option value="suspend">Suspend User</option>
                                                                    <option value="delete">Delete User</option>
                                                                </select>--}}
                                                            </div>
                                                            <div class="btn-wrap">
                                                               {{--<span class="d-none d-md-block"><button class="btn btn-dim btn-outline-light disabled">Apply</button></span>--}}
                                                                <span class="d-md-none"><button class="btn btn-dim btn-outline-light btn-icon disabled"><em class="icon ni ni-arrow-right"></em></button></span>
                                                            </div>
                                                        </div><!-- .form-inline -->
                                                    </div><!-- .card-tools -->
                                                    <div class="card-tools me-n1">
                                                        <ul class="btn-toolbar gx-1">
                                                            <li>
                                                                <a href="#" class="btn btn-icon search-toggle toggle-search" data-target="search"><em class="icon ni ni-search"></em></a>
                                                            </li><!-- li -->
                                                            <li class="btn-toolbar-sep"></li><!-- li -->
                                                            <li>
                                                                <div class="toggle-wrap">
                                                                    <a href="#" class="btn btn-icon btn-trigger toggle" data-target="cardTools"><em class="icon ni ni-menu-right"></em></a>
                                                                    <div class="toggle-content" data-content="cardTools">
                                                                        <ul class="btn-toolbar gx-1">
                                                                            <li class="toggle-close">
                                                                                <a href="#" class="btn btn-icon btn-trigger toggle" data-target="cardTools"><em class="icon ni ni-arrow-left"></em></a>
                                                                            </li><!-- li -->
                                                                            <li>
                                                                                <div class="dropdown">
                                                                                    <a href="#" class="btn btn-trigger btn-icon dropdown-toggle" data-bs-toggle="dropdown">
                                                                                        <div class="dot dot-primary"></div>
                                                                                        <em class="icon ni ni-filter-alt"></em>
                                                                                    </a>
                                                                                    <div class="filter-wg dropdown-menu dropdown-menu-xl dropdown-menu-end">
                                                                                        <div class="dropdown-head">
                                                                                            <span class="sub-title dropdown-title">Filter Users</span>
                                                                                        </div>
                                                                                        <div class="dropdown-body dropdown-body-rg">
                                                                                            <div class="row gx-6 gy-3">
                                                                                                <div class="col-6">
                                                                                                    <div class="custom-control custom-control-sm custom-checkbox">
                                                                                                        <input type="checkbox" class="custom-control-input" id="hasBalance">
                                                                                                        <label class="custom-control-label" for="hasBalance"> Have Balance</label>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-6">
                                                                                                    <div class="custom-control custom-control-sm custom-checkbox">
                                                                                                        <input type="checkbox" class="custom-control-input" id="hasKYC">
                                                                                                        <label class="custom-control-label" for="hasKYC"> KYC Verified</label>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-6">
                                                                                                    <div class="form-group">
                                                                                                        <label class="overline-title overline-title-alt">Role</label>
                                                                                                        <select class="form-select js-select2">
                                                                                                            {{--<option value="any">Any Role</option>
                                                                                                            <option value="investor">Investor</option>
                                                                                                            <option value="seller">Seller</option>
                                                                                                            <option value="buyer">Buyer</option>--}}
                                                                                                        </select>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-6">
                                                                                                    <div class="form-group">
                                                                                                        <label class="overline-title overline-title-alt">Status</label>
                                                                                                        <select class="form-select js-select2">
                                                                                                           {{-- <option value="any">Any Status</option>
                                                                                                            <option value="active">Active</option>
                                                                                                            <option value="pending">Pending</option>
                                                                                                            <option value="suspend">Suspend</option>
                                                                                                            <option value="deleted">Deleted</option>--}}
                                                                                                        </select>
                                                                                                    </div>
                                                                                                </div>


                                                                                                <div class="col-12">
                                                                                                    <div class="form-group">
                                                                                                        <button type="button" class="btn btn-secondary">Filter</button>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="dropdown-foot between">
                                                                                            <a class="clickable" href="#">Reset Filter</a>
                                                                                            <a href="#">Save Filter</a>
                                                                                        </div>
                                                                                    </div><!-- .filter-wg -->
                                                                                </div><!-- .dropdown -->
                                                                            </li><!-- li -->



                                                                            <li>
                                                                                <div class="dropdown">
                                                                                    <a href="#" class="btn btn-trigger btn-icon dropdown-toggle" data-bs-toggle="dropdown">
                                                                                        <em class="icon ni ni-setting"></em>
                                                                                    </a>
                                                                                    <div class="dropdown-menu dropdown-menu-xs dropdown-menu-end">
                                                                                        <ul class="link-check">
                                                                                            <li><span>Show</span></li>
                                                                                            <li class="active"><a href="#">10</a></li>
                                                                                            <li><a href="#">20</a></li>
                                                                                            <li><a href="#">50</a></li>
                                                                                        </ul>
                                                                                        <ul class="link-check">
                                                                                            <li><span>Order</span></li>
                                                                                            <li class="active"><a href="#">DESC</a></li>
                                                                                            <li><a href="#">ASC</a></li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div><!-- .dropdown -->
                                                                            </li><!-- li -->
                                                                        </ul><!-- .btn-toolbar -->
                                                                    </div><!-- .toggle-content -->
                                                                </div><!-- .toggle-wrap -->
                                                            </li><!-- li -->
                                                        </ul><!-- .btn-toolbar -->
                                                    </div><!-- .card-tools -->
                                                </div><!-- .card-title-group -->

                                                <div class="card-search search-wrap" data-search="search">
                                                    <div class="card-body">
                                                        <div class="search-content">
                                                            <a href="#" class="search-back btn btn-icon toggle-search" data-target="search"><em class="icon ni ni-arrow-left"></em></a>
                                                            <input type="text" class="form-control border-transparent form-focus-none" placeholder="Search by user or email">
                                                            <button class="search-submit btn btn-icon"><em class="icon ni ni-search"></em></button>
                                                        </div>
                                                    </div>
                                                </div><!-- .card-search -->
                                            </div><!-- .card-inner -->
                                            <div class="card-inner p-0">
                                                <div class="nk-tb-list nk-tb-ulist">
                                                    <div class="nk-tb-item nk-tb-head">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid">
                                                                <label class="custom-control-label" for="uid"></label>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col"><span class="sub-text">User</span></div>
                                                        <div class="nk-tb-col tb-col-mb"><span class="sub-text">Balance</span></div>
                                                        <div class="nk-tb-col tb-col-md"><span class="sub-text">Phone</span></div>
                                                        <div class="nk-tb-col tb-col-lg"><span class="sub-text">Verified</span></div>
                                                        <div class="nk-tb-col tb-col-lg"><span class="sub-text">Last Login</span></div>
                                                        <div class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></div>
                                                        <div class="nk-tb-col nk-tb-col-tools text-end">
                                                            <div class="dropdown">
                                                                <a href="#" class="btn btn-xs btn-outline-light btn-icon dropdown-toggle" data-bs-toggle="dropdown" data-offset="0,5"><em class="icon ni ni-plus"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-xs dropdown-menu-end">
                                                                    <ul class="link-tidy sm no-bdr">
                                                                        <li>
                                                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" checked="" id="bl">
                                                                                <label class="custom-control-label" for="bl">Balance</label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" checked="" id="ph">
                                                                                <label class="custom-control-label" for="ph">User Type</label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" id="vri">
                                                                                <label class="custom-control-label" for="vri">Verified</label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" id="st">
                                                                                <label class="custom-control-label" for="st">Status</label>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->


                                                   @foreach($users as $user)
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid1">
                                                                <label class="custom-control-label" for="uid1"></label>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <a href="#">
                                                                <div class="user-card">
                                                                    <div class="user-avatar bg-primary">
                                                                        <span>{{strtoupper(substr($user->name,0, 2))}}</span>
                                                                    </div>
                                                                    <div class="user-info">
                                                                        <span class="tb-lead">{{$user->name}} <span class="dot dot-success d-md-none ms-1"></span></span>
                                                                        <span>{{$user->email}}</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-mb">
                                                            <span class="tb-amount">{{$user->userWallet->balance}} <span class="currency">USD</span></span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>{{$user->access_level}}</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <ul class="list-status">
                                                                <li><em class="icon text-success ni ni-check-circle"></em> <span>Email</span></li>
                                                                <li><em class="icon ni ni-alert-circle"></em> <span>KYC</span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>10 Feb 2020</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span class="tb-status text-success">{{$user->status}}</span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1">
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Wallet">
                                                                        <em class="icon ni ni-wallet-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                                        <em class="icon ni ni-mail-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                                                        <em class="icon ni ni-user-cross-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <ul class="link-list-opt no-bdr">
                                                                               {{-- <li><a href="#"><em class="icon ni ni-focus"></em><span>Quick View</span></a></li>
                                                                                <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                                <li><a href="{{url('/admin/view-user-transactions/'.$user->id)}}"><em class="icon ni ni-repeat"></em><span>Transaction</span></a></li>--}}
                                                                                @if(Auth::user()->access_level == 'admin')
                                                                                <li><a href="{{url('admin/send-email/'.$user->id)}}"><em class="icon ni ni-activity-round"></em><span>Send Email</span></a></li>
                                                                                <li><a href="{{url('admin/add-account-type/'.$user->id)}}"><em class="icon ni ni-activity-round"></em><span>Add Investment Type</span></a></li>
                                                                                <li><a href="{{url('admin/get-all-investment-type/'.$user->id)}}"><em class="icon ni ni-activity-round"></em><span>View Investment Type</span></a></li>
                                                                                <li><a href="{{url('admin/get-add-transaction/'.$user->id)}}"><em class="icon ni ni-activity-round"></em><span>Create Transaction</span></a></li>
                                                                                @endif
                                                                                <li class="divider"></li>
                                                                               {{-- <li><a href=""><em class="icon ni ni-shield-star"></em><span>Reset Pass</span></a></li>--}}
                                                                                @if($user->access_level == 'user')
                                                                                <li><a href="{{url('/admin/make-admin/'.$user->id)}}"><em class="icon ni ni-shield-off"></em><span>Make Admin</span></a></li>
                                                                                @else
                                                                                <li><a href="{{url('/admin/remove-admin/'.$user->id)}}"><em class="icon ni ni-shield-off"></em><span>Revoke Admin</span></a></li>
                                                                                @endif

                                                                                @if($user->account_officer == 'no')
                                                                                <li><a href="{{url('/admin/make-account-officer/'.$user->id)}}"><em class="icon ni ni-shield-off"></em><span>Make Acoount Officer</span></a></li>
                                                                                @else
                                                                                <li><a href="{{url('/admin/remove-account-officer/'.$user->id)}}"><em class="icon ni ni-shield-off"></em><span>Revoke Account Officer</span></a></li>
                                                                                @endif

                                                                                @if($user->external_transfer_status == 'active')
                                                                                <li><a href="{{url('/admin/make-inactive-external-transfer/'.$user->id.'/inactive')}}"><em class="icon ni ni-shield-off"></em><span>Make External Transfer Inactive</span></a></li>
                                                                                @else
                                                                                <li><a href="{{url('/admin/make-active-external-transfer/'.$user->id.'/active')}}"><em class="icon ni ni-shield-off"></em><span>Make External Transfer active</span></a></li>
                                                                                @endif

                                                                                @if(Auth::user()->access_level == 'admin')
                                                                                @if($user->status == 'suspend')
                                                                                <li><a href="{{url('/admin/unsuspend-user/'.$user->id)}}"><em class="icon ni ni-na"></em><span>UnSuspend User</span></a></li>

                                                                                @elseif($user->status == 'active')
                                                                                <li><a href="{{url('/admin/suspend-user/'.$user->id)}}"><em class="icon ni ni-na"></em><span>Suspend User</span></a></li>
                                                                                @endif
                                                                                <li><a href="{{url('/admin/delete-user/'.$user->id)}}"><em class="icon ni ni-na"></em><span>Delete User</span></a></li>
                                                                                @endif
                                                                            </ul>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                       @endforeach
                                                


                                                </div><!-- .nk-tb-list -->
                                            </div><!-- .card-inner -->
                                            <div class="card-inner">
                                                <div class="nk-block-between-md g-3">
                                                    <div class="g">
                                                        <ul class="pagination justify-content-center justify-content-md-start">
                                                            <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                            <li class="page-item"><span class="page-link"><em class="icon ni ni-more-h"></em></span></li>
                                                            <li class="page-item"><a class="page-link" href="#">6</a></li>
                                                            <li class="page-item"><a class="page-link" href="#">7</a></li>
                                                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                                        </ul><!-- .pagination -->
                                                    </div>
                                                    <div class="g">
                                                        <div class="pagination-goto d-flex justify-content-center justify-content-md-start gx-3">
                                                            <div>Page</div>
                                                            <div>
                                                                <select class="form-select js-select2" data-search="on" data-dropdown="xs center">
                                                                    <option value="page-1">1</option>
                                                                    <option value="page-2">2</option>
                                                                    <option value="page-4">4</option>
                                                                    <option value="page-5">5</option>
                                                                    <option value="page-6">6</option>
                                                                    <option value="page-7">7</option>
                                                                    <option value="page-8">8</option>
                                                                    <option value="page-9">9</option>
                                                                    <option value="page-10">10</option>
                                                                    <option value="page-11">11</option>
                                                                    <option value="page-12">12</option>
                                                                    <option value="page-13">13</option>
                                                                    <option value="page-14">14</option>
                                                                    <option value="page-15">15</option>
                                                                    <option value="page-16">16</option>
                                                                    <option value="page-17">17</option>
                                                                    <option value="page-18">18</option>
                                                                    <option value="page-19">19</option>
                                                                    <option value="page-20">20</option>
                                                                </select>
                                                            </div>
                                                            <div>OF 102</div>
                                                        </div>
                                                    </div><!-- .pagination-goto -->
                                                </div><!-- .nk-block-between -->
                                            </div><!-- .card-inner -->
                                        </div><!-- .card-inner-group -->
                                    </div><!-- .card -->
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
                </div>
                @endsection
                <!-- content @e -->
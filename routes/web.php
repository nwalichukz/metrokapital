<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Index\IndexController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\StaticPages\PageController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\KycController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Binary\BinaryController;
use App\Http\Controllers\Referral\ReferralController;
use App\Http\Controllers\Investment\InvestmentController;
use App\Http\Controllers\Investment\CitizenByInvestment;
use App\Http\Controllers\Investment\ResidencyByInvestment;
use App\Http\Controllers\Investment\ResidencyByRealEstate;
use App\Http\Controllers\Investment\InvestmentTypeController;
use App\Http\Controllers\Wallet\UserWalletController;
use App\Http\Controllers\Wallet\DepositRequestController;
use App\Http\Controllers\Wallet\WalletAddressController;
use App\Http\Controllers\Wallet\WithdrawalRequestController;
use App\Http\Controllers\Wallet\UserTransactionHistoryController;
use App\Http\Controllers\Email\Mailer;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('landing/main-index');
});


Route::get('/citizenship-inv-grenada', function () {
    return view('landing/citizenship-by-investment-grenada');
});

Route::get('/contact-us', function () {
    return view('landing/contact')->with(['title'=>'Contact Us']);
});

Route::get('/about-us', function () {
    return view('landing/about-us')->with(['title'=>'Contact Us']);
});

Route::get('/real-estate-inv-antigua-and-barbuda', function () {
    return view('landing/real-estate-investment-antigua-and-barbuda');
});

Route::get('/residency-inv-australia', function () {
    return view('landing/residency-investment-australia');
});


Route::get('/get-transactions', function () {
    return view('dashboard/src/html/crm/transaction');
});

Route::get('/get-joint-account-plans', function () {
    return view('dashboard/src/html/crm/joint-account');
});

Route::get('/get-savings-account-plans', function () {
    return view('dashboard/src/html/crm/savings-account');
});


Route::get('/get-retirement-account-plans', function () {
    return view('dashboard/src/html/crm/retirement-account-plans');
});


Route::get('/get-current-account-plans', function () {
    return view('dashboard/src/html/current-account-plans');
});



Route::get('/get-insurance', function () {
    return view('dashboard/src/html/pages/insurance');
});


Route::get('/get-login', function () {
    return view('dashboard/src/html/pages/auths/auth-login');
});


Route::get('/get-register', function () {
    return view('dashboard/src/html/pages/auths/auth-register');
});


Route::get('/get-reset', function () {
    return view('dashboard/src/html/pages/auths/reset');
});



Route::post('/create-user', [UserController::class, 'create']);
Route::post('/update-user', [UserController::class, 'update']);
Route::any('/search-user', [UserController::class, 'searchUser']);
Route::post('/post-reset-password', [Mailer::class, 'postResetPassword']);

Route::get('/user-profile-setting/{id?}', [UserController::class, 'userProfileSetting']);

Route::get('/user/security-setting/{id?}', [UserController::class, 'userSecuritySetting']);

Route::get('/admin/user-list', [UserController::class, 'userList']);


Route::get('/admin/all-users', [UserController::class, 'getAll']);
Route::get('/admin/get-account-officer', [UserController::class, 'getAccountOfficer']);

Route::any('/post-login', [AuthController::class, 'login']);

Route::get('/user-signin/{id}', [AuthController::class, 'dashboard']);


Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/user/grt-joint-account', [InvestmentController::class, 'getJointAccount']);
Route::get('/admin/end-investment/{id}', [InvestmentController::class, 'endInv']);
Route::get('/user/delete-investment/{id}', [InvestmentController::class, 'delete']);

Route::post('/user/investment/create', [InvestmentController::class, 'create']);

Route::get('/dashboard/get-investment-page', [InvestmentController::class, 'getInvestmentPage']);
Route::get('/admin/get-all-investments', [InvestmentController::class, 'getAll']);
Route::get('/user/get-my-investments/{user_id}', [InvestmentController::class, 'myInvestments']);


Route::get('/admin/get-citizenship-by-investment', [CitizenByInvestment::class, 'addACitizenByInvestmentPage']);
Route::post('/admin/create-citizenship-by-investment', [CitizenByInvestment::class, 'create']);
Route::get('/admin/get-citizenship-by-investment/{id}', [CitizenByInvestment::class, 'get']);
Route::get('/admin/delete-citizenship-by-investment/{id}', [CitizenByInvestment::class, 'delete']);
Route::post('/admin/update-citizenship-by-investment', [CitizenByInvestment::class, 'update']);
Route::get('/admin/get-all-citizenship-by-investment', [CitizenByInvestment::class, 'getAll']);
Route::get('/view-citizenship-by-investment/{id}', [CitizenByInvestment::class, 'getCitizenInvPage']);


Route::get('/admin/get-residency-by-investment', [ResidencyByInvestment::class, 'addResidencyByInvestmentPage']);
Route::post('/admin/create-residency-by-investment', [ResidencyByInvestment::class, 'create']);
Route::get('/admin/get-residency-by-investment/{id}', [ResidencyByInvestment::class, 'get']);
Route::get('/admin/delete-residency-by-investment/{id}', [ResidencyByInvestment::class, 'delete']);
Route::post('/admin/update-residency-by-investment', [ResidencyByInvestment::class, 'update']);
Route::get('/admin/get-all-residency-by-investment', [ResidencyByInvestment::class, 'getAll']);
Route::get('/view-residency-by-investment/{id}', [ResidencyByInvestment::class, 'getResidencyInvPage']);



Route::post('/admin/create-residency-by-real-estate', [ResidencyByRealEstate::class, 'create']);
Route::get('/admin/get-residency-by-real-estate/{id}', [ResidencyByRealEstate::class, 'get']);
Route::get('/admin/delete-residency-by-real-estate/{id}', [ResidencyByRealEstate::class, 'delete']);
Route::post('/admin/update-residency-by-real-estate', [ResidencyByRealEstate::class, 'update']);
Route::get('/admin/get-all-residency-by-real-estate', [ResidencyByRealEstate::class, 'getAll']);
Route::get('/admin/get-residency-by-real-estate', [ResidencyByRealEstate::class, 'addResidencyByRealEstatePage']);
Route::get('/view-residency-by-real-estate/{id}', [ResidencyByRealEstate::class, 'getRealEstateInvPage']);





Route::get('/dashboard/get-investment-page/{id}', [InvestmentController::class, 'returnInvestmentPage']);

Route::post('/admin/create-wallet-address', [WalletAddressController::class, 'create']);
Route::post('/user/external-transfer', [UserWalletController::class, 'externalTransfer']);
Route::any('/user/confirm-wallet-details', [UserWalletController::class, 'confirmUserWalletNo']);

Route::any('/user/internal-transfer/create', [UserWalletController::class, 'transferToAnotherUserWalletId']);


Route::post('/admin/create-investment-type', [InvestmentTypeController::class, 'create']);

Route::any('/user/confirm-investment-type/{id}', [InvestmentTypeController::class, 'confirmInvestment']);

Route::get('/admin/get-all-investment-type', [InvestmentTypeController::class, 'getAll']);

Route::get('/admin/inv-type/delete/{id}', [InvestmentTypeController::class, 'delete']);

Route::get('/admin/get-all-wallet-address', [WalletAddressController::class, 'getAll']);

Route::get('/admin/add-account-type', [InvestmentTypeController::class, 'addAccountTyePage']);
Route::get('/admin/add-wallet-address', [UserWalletController::class, 'getAddWalletPage']);

Route::get('/dashboard/get-withdrawal-page', [WalletController::class, 'getWithdrawalPage']);

Route::get('dashboard/get-fund-account', [UserWalletController::class, 'getFundAccount']);
Route::get('dashboard/get-internal-transfer', [UserWalletController::class, 'getInternalTransfer']);
Route::get('dashboard/get-external-transfer', [UserWalletController::class, 'getExternalTransfer']);

Route::any('/user/wallet-info', [UserWalletController::class, 'myWalletDetails']);

Route::post('/admin/fund-account', [UserWalletController::class, 'makeCredit']);

Route::post('/register/get-started', [UserController::class, 'getStarted']);

Route::get('/admin/make-admin/{id}', [UserController::class, 'makeAdmin']);
Route::get('/admin/remove-admin/{id}', [UserController::class, 'removeAdmin']);
Route::get('/admin/delete-user/{id}', [UserController::class, 'delete']);
Route::get('/admin/make-account-officer/{id}', [UserController::class, 'makeAccountOfficer']);
Route::get('/admin/remove-account-officer/{id}', [UserController::class, 'removeAccountOfficer']);


Route::get('/dashboard/get-fund-account/{id}', [UserWalletController::class, 'getFundPage']);

// deposit request
Route::post('/admin/settle-deposit-request/create', [DepositRequestController::class, 'settleDepositRequest']);
Route::post('user/deposit-request/create', [DepositRequestController::class, 'create']);
// Route::get('/admin/deposit-request/get/{id}', [DepositRequestController::class, 'get']);
Route::get('/dashboard/my-deposit-request/{user_id}', [DepositRequestController::class, 'MyDepositRequest']);
Route::get('/admin/deposit-request/get-all', [DepositRequestController::class, 'getPendingRequest']);
Route::get('/admin/delete-deposit-request/{id}', [DepositRequestController::class, 'delete']);

Route::get('/admin/settle-deposit-request/{id}', [DepositRequestController::class, 'settlePage']);
Route::get('/admin/cancel-deposit-request/{id}', [DepositRequestController::class, 'cancelDepositRequest']);


Route::get('/user/get-kyc-page', [KycController::class, 'uploadDocPage']);
Route::post('/user/kyc-document/create', [KycController::class, 'create']);



/// withdrawal request
Route::post('/dashboard/withdrawal-request/create', [WithdrawalRequestController::class, 'create']);
Route::get('/dashboard/withdrawal-request/get/{id}', [WithdrawalRequestController::class, 'get']);
Route::get('/dashboard/my-withdrawal-request/{user_id}', [WithdrawalRequestController::class, 'MyWithdrawalRequest']);
Route::get('/admin/withdrawal-request/get-all', [WithdrawalRequestController::class, 'getAll']);
Route::get('/admin/delete-withdrawal-request/{id}', [WithdrawalRequestController::class, 'delete']);
Route::get('/admin/settle-withdrawal-request/{id}', [WithdrawalRequestController::class, 'settleWithdrawalRequest']);
Route::get('/admin/cancel-withdrawal-request/{id}', [WithdrawalRequestController::class, 'cancelWithdrawalRequest']);


Route::get('/dashboardee/get-wallet-page', [DashboardController::class, 'walletPage']);

Route::get('/admin/get-send-email/{id}', [DashboardController::class, 'getSendEmail']);
Route::get('/admin/get-send-email-to-all', [DashboardController::class, 'getSendEmailToAll']);

Route::post('/admin/send-email-to-all-users', [Mailer::class, 'sendMassMail']);
Route::post('/admin/send-email', [Mailer::class, 'sendSingleMail']);

Route::get('/admin/all-investments', [InvestmentController::class, 'getAll']);
Route::get('/admin/end-inv/{id}', [InvestmentController::class, 'endInv']);
Route::get('/admin/all-transactions', [UserTransactionHistoryController::class, 'getAll']);
Route::get('/user/my-transactions/{id}', [UserTransactionHistoryController::class, 'getUserHistory']);

<?php

namespace App\Http\Controllers\Wallet;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Wallet\WalletController;
use Illuminate\Http\Request;
use App\Models\WithdrawRequest;
use App\Models\User;
use Carbon\Carbon;
use Validator;

class WithdrawalRequestController extends Controller
{
    /**
     * saves withdrawal request
     * 
     * 
     * @param request
     * 
     * @return response
     * 
     */
    public static function save($request){
        $save = new WithdrawRequest;
        $save->user_id = $request['user_id'];
        $save->amount = $request['amount'];
        $save->recieving_wallet_address = $request['recieving_wallet_address'];
        $save->status = 'pending';
        $save->save();
        return $save->id;
     }


       /**
     * creates withdrawal request
     * 
     * 
     * @param request
     * 
     * @return response
     * 
     */
    public function create(Request $request){
        $validator = Validator::make($request->all(),
        [
        'user_id' => 'required',
        'amount' => 'required',
        'recieving_wallet_address' => 'required',
      
        ]);
  
        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        } 
        if(WalletController::checkAmt($request['user_id'], $request['amount'])){
          $user = WithdrawRequest::where(['user_id'=>$request['user_id'], 'status'=>'pending'])->first();
          if(empty($user->id)){
        $create = self::save($request);
        if($create){
           return redirect('/dashboard/wallet-info');
  
        }else{
           return redirect()->back()->with('error', 'Something went wrong, Investment not created. Please try again');
  
        }  }else{
          return redirect()->back()->with('error', 'You have a pending withdrawal request. That one has to be resolved before you place another request');
        }
      }else{
        return redirect()->back()->with('error', 'Insuffient balance');
      }
  
      }


      
    /**
     * gets single deposit request
     * 
     * 
     * @param request
     * 
     * @return response
     * 
     */
    public function get($id){
        $depositrequest = WithdrawRequest::find($id);
        return view('dashboard.wallet.edit-withdrawal-request')->with(['deposit-request'=>$depositrequest]);
      }
  
      /**
       * get many deposit request
       * 
       * 
       * 
       * @return response
       * 
       */
      public function getAll(){
        $allRequest = WithdrawRequest::where(['status'=>'pending'])->orderBy('created_at', 'DESC')->paginate(15);
        return view('user.withdrawalrequest')->with(['user', 'allrequest'=>$allRequest]);
      }
  
  
      /**
       * creates deposit request
       * page
       * 
       * 
       * @return view
       * 
       */
      public function myWithdrawalRequest($user_id){
        return view('dashboard.wallet.my-withdrawal-request');
      }
  
  
       /**
       * deletes deposit request
       * 
       * 
       * @param id
       * 
       * @return response
       * 
       */
      public static function delete($id){
        $delete = WithdrawRequest::where('id', $id)->delete();
        if($delete){
           return redirect()->back()->with('success', 'Withdrawal request deleted successfully');
        }else{
           return redirect()->back()->with('error', 'Something went wrong, withdrawal request not deleted successfully');
        }
      }

       /**
       * settles a withdrawal request
       * 
       * 
       * @return response
       * 
       * @param $id
       */
      public function settleWithdrawalRequest($id){
        $settle = WithdrawRequest::find($id);
        $settle->status = 'settled';
        $settle->updated_at = Carbon::now();
        $settle->save();

        if(WalletController::checkAmt($settle->user_id, $settle->amount)) {
       
         try{
             $data = [
                 'user_id'=>$settle->user_id,
                 'amount'=>$settle->amount,
                 'purpose'=>'Withdrawal for payout',
             ];
         WalletController::debit($data);
     
         }catch(Exception $e){
     
             return redirect()->back()->with('error', $e->message);
     
         }
        // return redirect()->back()->with('success', 'Withdrawal request settled successfully. Thanks');
         return redirect()->back()->with('success', 'Withdrawal request settled successfully. Thanks');
     }else{
      return redirect()->back()->with('error', 'Insufficient balance');
     }

    }


      /**
       * cancel a withdrawal request
       * 
       * 
       * @return response
       * 
       * @param $id
       */
      public function cancelWithdrawalRequest($id){
        $settle = WithdrawRequest::find($id);
        $settle->status = 'cancel';
        $settle->updated_at = Carbon::now();
        $settle->save();
       
         return redirect()->back()->with('success', 'Withdrawal request canceled successfully. Thanks');
     

    }

    

}

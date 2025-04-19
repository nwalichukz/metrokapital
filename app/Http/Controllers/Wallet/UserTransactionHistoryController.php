<?php

namespace App\Http\Controllers\Wallet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserTransactionHistory;
use Auth;

class UserTransactionHistoryController extends Controller
{
    
    /**
     * saves a transaction
     * 
     * @param
     * 
     */
    public static function save($data){
         $save = new UserTransactionHistory;
         $save->user_id = $data['user_id'];
          $save->amount = $data['amount'];
          $save->transaction_type = $data['transaction_type'];
          $save->purpose = $data['purpose'];
        $save->save();
        return $save->id;
    }


     /***
     * returns transaction history
     * 
     * @param $user_id
     * 
     */
    public static function getUserHistory($user_id){
       $transactions = UserTransactionHistory::where('user_id', $user_id)->with(['user'])->orderBy('created_at', 'DESC')->paginate(20);
       return view('dashboard/src/html/my-transactions')->with(['myTransactions'=>$transactions]);
    }


       /***
     * returns transaction history
     * by ID
     * @param id
     * 
     */
    public static function getAll(){
       if(Auth::check()){
        if(Auth::user()->access_level == 'admin'){
     $data = UserTransactionHistory::where('id', '!=', null)->with(['user'])->orderBy('created_at', 'DESC')->paginate(20);
     return view('dashboard/src/html/all-transactions')->with(['transactions'=>$data, 'title'=>'All Transactions']);
        }else{
          return redirect('/get-login');
        }
       }
     }

    /***
     * returns transaction history
     * for today
     * 
     * 
     */
    public static function getHistoryToday(){
      $today = Carbon::today();
       return TransactionHistory::whereDate('created_at', $today)->where('purpose', 'post view bonus')
                                                ->where('transaction_type', 'credit')
                                                ->sum('amount');
      

    }

      /***
     * returns transaction history
     * for this week
     */
    public static function getHistoryThisWeek(){
      $now = Carbon::today();
      $weekstart = $now->startOfWeek();
       return TransactionHistory::whereDate('created_at', '>=', $weekstart)->where('purpose', 'post view bonus')
                                                ->where('transaction_type', 'credit')
                                                ->sum('amount');
      

    }

      /***
     * returns transaction history
     * for this month
     */
    public static function getHistoryThisMonth(){
      $now = Carbon::today();
      $monthstart = $now->startOfMonth();
       return TransactionHistory::whereDate('created_at', '>=', $monthstart)->where('purpose', 'post view bonus')
                                                ->where('transaction_type', 'credit')
                                                ->sum('amount');
      

    }

     /***
     * returns transaction history
     * sum for this year
     */
    public static function getHistoryThisYear (){
      $now = Carbon::today();
      $yearstart = $now->startOfYear();
       return TransactionHistory::whereDate('created_at', '>=', $yearstart)->where('purpose', 'post view bonus')
                                                ->where('transaction_type', 'credit')
                                                ->sum('amount');
      

    }


}

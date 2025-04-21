<?php

namespace App\Http\Controllers\Investment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\InvestmentType;
use Auth, Validator;


class InvestmentTypeController extends Controller
{
    /**
     * saves investment type
     * 
     * 
     * @param request
     * 
     * @return response
     * 
     */

     public static function save($request){
        $save = new InvestmentType;
        $save->parent_name = strtolower($request['label_name']);
        $save->name = $request['account_name'];
        $save->min_amt = $request['min_amount'];
        $save->max_amt = $request['max_amount'];
        $save->earning_percentage = $request['earning_percentage'];
        $save->duration = $request['duratn_in_mnth'];
        $save->description = $request['description'];
        $save->save();
        return $save->id;
     }

     /**
     * creates investment type
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
      'label_name' => 'required',
      'account_name' => 'required',
      'min_amount' => 'required',
      'max_amount' => 'required',
      'earning_percentage' => 'required',
      'duratn_in_mnth' => 'required',
      ]);

      if($validator->fails()){
          return redirect()->back()->withErrors($validator);
      } 
      $create = self::save($request);
      if($create){
         return redirect()->back()->with('success', 'Investment type created successfully');

      }else{
         return redirect()->back()->with('error', 'Something went wrong, Investment not created. Please try again');

      }

    }

     /**
     * getssingle investment type
     * 
     * 
     * @param request
     * 
     * @return response
     * 
     */
    public function get($id){
      $invType = InvestmentType::find($id);
      return view('dashboard.investment.edit-inv-type')->with(['inv-type'=>$invType]);
    }

    /**
     * get many investment type
     * 
     * 
     * 
     * @return response
     * 
     */
    public function getAll(){
      $invAll = InvestmentType::where('id', '!=', NULL)->orderBy('created_at', 'DESC')->paginate(15);
     // $allInv = $invAll->paginate(15);
      //$total = $invAll->count();
      return view('dashboard/src/html/view-plans')->with(['invall'=>$invAll]);
    }

   

    /**
     * creates investment type
     * page
     * 
     * 
     * @return response
     * 
     */
    public function getInvPage(){
      return view('dashboard.investment.inv-type-page');
    }


     /**
     * deletes inv-type
     * 
     * 
     * @param id
     * 
     * @return response
     * 
     */
    public function delete($id){
      $delete = InvestmentType::where('id', $id)->delete();
      if($delete){
         return redirect()->back()->with('success', 'Investment type deleted successfully');
      }else{
         return redirect()->back()->with('error', 'Something went wrong, Investment type not deleted successfully');
      }
    }

     /**
     * updates inv-type
     * 
     * 
     * @param request
     * 
     * @return response
     * 
     */
    public function update(Request $request){
      try{
      $update = InvestmentType::find($id);
      if(!empty($request['name'])){
         $update->name = $request['name'];
      }

      if(!empty($request['min_amt'])){
         $update->min_amt = $request['min_amt'];
      }

      if(!empty($request['max_amt'])){
         $update->max_amt = $request['max_amt'];
      }

      if(!empty($request['earning_percentage'])){
         $update->earning_percentage = $request['earning_percentage'];
      }

      if(!empty($request['possible_earning'])){
         $update->possible_earning = $request['possible_earning'];
      }

      return redirect()->back()->with('status', 'Investment type deleted successfully');
   }catch(exception $e){
      return redirect()->back()->with('status', $e->message);
   }

      
    }


   /**
     * returns user settings page
     * 
     * @return true
     * 
     * @param $settings page
     * 
     */
    public static function addAccountTyePage(){
      
      return view('dashboard/src/html/components/forms/add-account-type');

    }

     /**
     * returns confirm investment page
     * 
     * @return true
     * 
     * @param $settings page
     * 
     */
    public static function confirmInvestment($id){
      
   $inv_type = InvestmentType::find($id);
   return view('dashboard/src/html/components/forms/investment-preview')->with(['inv_type'=>$inv_type]);

    }



}

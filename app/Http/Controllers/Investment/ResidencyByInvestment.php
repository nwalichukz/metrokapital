<?php

namespace App\Http\Controllers\Investment;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Image\ImageController;
use Illuminate\Http\Request;
 use App\Models\ResidencyByInvestmentModel;
 use App\Models\InvestmentImage;
use Validator, Auth;

class ResidencyByInvestment extends Controller
{   

      /**
     * saves citizeship by investment
     * 
     * 
     * @param request
     * 
     * @return response
     * 
     */

     public static function save($request){
      $save = new ResidencyByInvestmentModel;
      $save->country_name = $request['country_name'];
      $save->description = $request['description'];
      $save->save();
      return $save->id;
   }

   
     /**
     * creates citizenship by investment
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
      'country_name' => 'required|min:2',
      'description' => 'required|min:20',
     
      ]);
     // return $request->all();
      if($validator->fails()){
          return redirect()->back()->withErrors($validator);
      } 
      $create = self::save($request);
      if(!empty($request->file('image'))){
        $img = new InvestmentImage;
        $img->rcr_id = $create;
        $img->name = ImageController::uploadPropertyImage($request);
        $img->inv_type = 'rbi'; 
        $img->save();
      }
      if($create){
         return redirect()->back()->with('success', 'Residency by investment created successfully');

      }else{
         return redirect()->back()->with('error', 'Something went wrong, residency by investment not created. Please try again');

      }

    }

      
     /**
     *gets citizen investment page
     * 
     * @return true
     * 
     * @param $settings page
     * 
     */
    public static function get($id){
     $citi_inv = ResidencyByInvestmentModel::where('id', $id)->find($id);
      return view('dashboard/src/html/components/forms/edit-residency-by-investment')->with(['data'=>$citi_inv]);
    

    }

    /**
     *gets citizen investment page
     * 
     * @return true
     * 
     * @param $settings page
     * 
     */
    public static function getResidencyInvPage($id){
      $citi_inv = ResidencyByInvestmentModel::where('id', $id)->find($id);
       return view('landing/citizenship-by-investment-page')->with(['data'=>$citi_inv]);
     
 
     }

   /**gets all citizen investment page
     * 
     * @return true
     * 
     * @param $settings page
     * 
     */
    public static function getAll(){
      If(Auth::user()->access_level == 'admin'){
      $all_inv = ResidencyByInvestmentModel::where('id', '!=', null)->get();
      return view('dashboard/src/html/view-residency-investment')->with(['citizen_inv'=>$all_inv]);
      }else{
        return redirect('get-login');
      }
      

    }

      /**
     *deletes citizen investment page
     * 
     * @return true
     * 
     * @param $settings page
     * 
     */
    public static function delete($id){

      $delete = ResidencyByInvestmentModel::where('id', $id)->delete();
      if($delete){
        return redirect()->back()->with('success', 'Citizenship by investment delete successfully');

     }else{
        return redirect()->back()->with('error', 'Something went wrong, citizenship by investment not deleted. Please try again');

     }

    }

   /**
    * update a user
    * 
    * @param $request
    * 
    */
   public static function update(Request $request){
     if(Auth::check() && Auth::user()->access_level == 'admin'){
     $update = ResidencyByInvestmentModel::find($request['id']);
     if(!empty($request['country_name'])){
     $update->country_name = $request['country_name'];
     }
     if(!empty($request['description'])){
     $update->description = $request['description'];
     }
     $ok = $update->save();
     if($ok){
         return redirect('admin/get-all-residency-by-investment')->with('success', 'Residency investment updated successfully');
     }else{
         return redirect()->back()->with('error', 'Something went wrong citizenship investment not updated successfully. Please try again');
     }
   }else{
     return rediect('/get-login');
         }
   }
  
     /**
     * returns user residency by investment page
     * 
     * @return true
     * 
     * @param $settings page
     * 
     */
    public static function addResidencyByInvestmentPage(){
      
        return view('dashboard/src/html/components/forms/add-residency-investment');
  
      }

}

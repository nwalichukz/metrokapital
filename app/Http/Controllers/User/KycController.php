<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Image\ImageController;
use Illuminate\Http\Request;
use App\Models\Kyc;
use Validator, Auth;

class KycController extends Controller
{   

    /**
     * saves kyc upload documents
     * 
     * 
     * @param request
     * 
     * @return response
     * 
     */

     public static function save($request){
        $save = new Kyc;
        $save->user_id = Auth::user()->id;
        $save->name = $request['name'];
        $save->file_name = ImageController::uploadKyc($request);
        $save->save();
        return $save->id;
     }



        /**
      * creates a user
      *
      * @param Request
      *
      *@return respoonse
      */
      public static function create(Request $request){
        $validator = Validator::make($request->all(),
        [
        'name' => 'required',
        'doc_image' => 'required',
      
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        } 
         return $request->all();
       // return  $request['doc_image'];
         $find = Kyc::where('user_id', Auth::user()->id)->first();
          if(empty($find->id)){
           $create = self::save($request);      

        // referrals    

        if($create){
            return redirect()->back()->with('success', 'Kyc Document submited successfully. It takes about 24 hours to be verified or declined. Thanks');
        }else{
            return redirect()->back()->with('error', 'Something went wrong kyc document not submited successfully. Please try again');
                    }
          
      }else{
        return redirect()->back()->with('error', 'You have submited Kyc document before. Please wait for the admin to attend. If more than 24 hours submited contact admin');
           }

      }


         /**
     * saves kyc upload documents
     * 
     * 
     * @param request
     * 
     * @return response
     * 
     */

     public static function viewUnverifiedKyc(){
        if(Auth::user()->access_level == 'admin'){

        }else{
        return redirect()->back()->with('error', 'Something went wrong you can not perform this operation');
           }
      
     }

        /**
     * saves kyc upload documents
     * 
     * 
     * @param request
     * 
     * @return response
     * 
     */

     public static function verifyKyc($request){
        if(Auth::user()->access_level == 'admin'){

        }else{
        return redirect()->back()->with('error', 'Something went wrong you can not perform this operation');
           }
      
     }


     
      /**
     * returns upload document page
     * 
     * @return true
     * 
     * @param $settings page
     * 
     */
    public static function uploadDocPage(){
      
        return view('dashboard/src/html/components/forms/upload-kyc-documents');
  
      }
}

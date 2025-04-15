<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Wallet\UserWalletController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Referral\ReferralController;
use App\Http\Controllers\Email\Mailer;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserWallet;
use Validator, Auth;

class UserController extends Controller
{
     /**
     * returns register user page
     * 
     * 
     */
    public static function registerPage(){
        return view('user.register');
    }

    /**
     * returns register user page
     * 
     * 
     */
    public static function loginPage(){
        return view('user.login');
    }

    /**
     * saves user data to db
     * @param $reqest
     * @return response
     * 
     */

     public static function save($request){
       $user = new  User;
            $user->name = $request['name'];
            $user->email = $request['email'];
            $user->password = bcrypt($request['password']);
            $user->mobile_number = $request['mobile_number'];
            $user->country = $request['country'];
            $user->access_level = 'admin';
            $user->save();      
        return $user->id;
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
        'email' => 'required|email|unique:users',
        'name' => 'required',
        'password' => 'required|min:6|',
        'confirm_human' => 'required|min:3',
        'mobile_number' => 'required',
        'country' => 'required',    
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        } 

         $three_letters = strtolower(substr($request['name'], 0, 3));
         $lower_letters = strtolower($request['confirm_human']);
         if(!empty($request['confirm_human']) && $lower_letters == $three_letters){
          if(empty($request['name_one'])){
           $create = self::save($request);
            UserWalletController::save($create);

        // referrals
        
       /*   $referral_code = self::getReferralCode($create);
         if($referral_code != null){
         if(!empty($request['referral_code']) && self::checkReferralCode($request['referral_code'])){
          ReferralController::save($referral_code, $request['referral_code']);
                     }
              } */
              
         // Mailer::welcomeMail($request['email'], $request['name']);

        if($create){
            return redirect('get-login')->with('success', 'User created successfully');
        }else{
            return redirect()->back()->with('error', 'Something went wrong user not created successfully');
                    }
          }  
      }else{
        return redirect()->back()->with('error', 'User not created. Make sure you provided correct answer to the confirm human question');
           }

      }

       /**
      * creates a user
      *
      * @param Request
      *
      *@return respoonse
      */
      public static function getStarted(Request $request){
        $validator = Validator::make($request->all(),
        [
        'email' => 'required|email',
       
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        } 

       return redirect('register/'.$request['email']);
       

      }

      /**
       * get a user
       * 
       * @param $id
       * 
       * @return view
       */
      public static function get($id){
        $user = User::find($id);
        return view('user.user-profile')->with(['user'=>$user]);
      }

       /**
       * all users
       * 
       * @param $id
       * 
       * @return view
       */
      public static function getAll(){
        if(Auth::check()){
          if(Auth::user()->user_level=='admin'){
        $users = User::where('id', '!=', NULL)->orderBy('created_at', 'DESC')->paginate(3000);
        return view('user.all-users')->with(['users'=>$users]);
          }else{
            Auth::logout();
            return redirect('login');
          }
        }else{
          return redirect('login');
        }
      }

      /**
       * update a user
       * 
       * @param $request
       * 
       */
      public static function update(Request $request){
        if(Auth::check()){
        $update = User::find($request['id']);
        if(!empty($request['name'])){
        $update->name = $request['name'];
        }
        if(!empty($request['gender'])){
        $update->gender = $request['gender'];
        }
        $ok = $update->save();
        if($ok){
            return redirect()->back()->with('status', 'User updated successfully');
        }else{
            return redirect()->back()->with('status', 'Something went wrong user not updated successfully. Please try again');
        }
      }else{
        return rediect('/login');
            }
      }

      /**
       * get a user
       * 
       * @param $id
       * 
       * @return view
       */
      public static function delete($id){
        if(Auth::check() && Auth::user()->user_level== 'admin'){
        $user = User::where('id', $id)->delete();
        if($user){
            return redirect()->back()->with('status', 'User deleted successfully');
        }else{
            return redirect()->back()->with('status', 'Something went wrong not deleted successfully. Please try again');
        }
      }else{
        return rediect('/login');
      }
      }

      /**
     * checks if referral code is valid
     * 
     * @return true or false
     * 
     * @param $referral_code
     * 
     */
    public static function checkReferralCode($code){
        $check = User::where('referral_code', $code)->first();
        if(!empty($check->referral_code)){
            return true;
        }else{
            return false;
        }
    }
     

    /**
     * returns the user referral code
     * 
     * @return $referral code
     * 
     * @param $user_id
     * 
     */
    public static function getReferralCode($user_id){
        $user = User::where('id', $user_id)->first();
        return $user->referral_code;
    }


       /**
       * get a user
       * 
       * @param $id
       * 
       * @return view
       */
      public static function makeAdmin($id){
        $user = User::find($id);
        if(!empty($user->id)){
          if(Auth::user()->user_level =='admin'){
            $user->user_level = 'admin';
            $user->save();
            return redirect()->back()->with('success', 'User made admin successfully');
          }else{
            return redirect()->back()->with('error', 'You do not have permission to carry out this transaction. Please try again');
          }
        }else{
            return redirect()->back()->with('error', 'Something went wrong user not made admin successfully. Please try again');
        }
      }

      
       /**
       * make account officer
       * 
       * @param $id
       * 
       * @return view
       */
      public static function makeAccountOfficer($id){
        $user = User::find($id);
        if(!empty($user->id)){
          if(Auth::user()->access_level =='admin'){
            $user->account_officer = 'yes';
            $user->save();
            return redirect()->back()->with('success', 'User made acoount officer successfully');
          }else{
            return redirect()->back()->with('error', 'You do not have permission to carry out this operation. Please try again');
          }
        }else{
            return redirect()->back()->with('error', 'Something went wrong user not made account officer successfully. Please try again');
        }
      }

       /**
       * remove account officer
       * 
       * @param $id
       * 
       * @return view
       */
      public static function removeAccountOfficer($id){
        $user = User::find($id);
        if(!empty($user->id)){
          if(Auth::user()->access_level =='admin'){
            $user->account_officer = 'no';
            $user->save();
            return redirect()->back()->with('success', 'User removed as acoount officer successfully');
          }else{
            return redirect()->back()->with('error', 'You do not have permission to carry out this operation. Please try again');
          }
        }else{
            return redirect()->back()->with('error', 'Something went wrong user not removed as account officer successfully. Please try again');
        }
      }




       /**
       * get a user
       * 
       * @param $id
       * 
       * @return view
       */
      public static function removeAdmin($id){
        $user = User::find($id);
        if(!empty($user->id)){
          if($user->user_level =='admin'){
            $user->user_level = 'user';
            $user->save();
            return redirect()->back()->with('success', 'User admin previledge revoked successfully');
          }else{
            return redirect()->back()->with('error', 'You do not have permission to carry out this transaction. Please try again');
          }
        }else{
            return redirect()->back()->with('error', 'Something went wrong user not made admin successfully. Please try again');
        }
      }


         /**
* This method updates the password
*
* for the users
*
*/
public static function changePassword(Request $request){
    $data = $request->all();

  $validation = Validator::make($request->all(),
    [ "user_id" => "required",
      "old_password" =>"required|string",
      "new_password" => "required|min:6",
    ]);
  if($validation->fails()){
    return response()->json([
        'status' => 403,
        'message' => $validation->errors(),
    ]);
  }

    $confirm = User::where('id', $data['user_id'])->first();
    if(password_verify($data['old_password'], $confirm->password)){
      $update = User::find($data['user_id']);
      $update->password = bcrypt($data['new_password']);
      $update->save();
       return redirect()->back()->with([
            'status' => 'success',
            'success' => 'Password updated successfully']);
    }else{
      return redirect()->back()->with([
        'status' => 'success',
        'error' => 'Password updated successfully']);
    }
}

 /**
     * returns the user_id of a referrer
     * 
     * @return true string
     * 
     * @param $referral_code
     * 
     */
    public static function getUserId($code){
        $user = User::where('referral_code', $code)->first();
        if(!empty($user->id)){
        return $user->id;
        }else{
            return null;
        }
    }

     /**
     * searches users
     * 
     * @return true
     * 
     * @param $search term
     * 
     */
    public static function searchUser(Request $request){
      $validator = Validator::make($request->all(),
        [
        'term' => 'required',
     
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }

        $user = User::where('email', $request['term'])
                     ->orWhere('name', $request['term'])->first();
        if(!empty($user->id)){
        return view('user.single-user')->with(['user'=>$user]);
        }else{
            return redirect()->back()->with('error', 'User not found. Make sure the name or email is spelt correctly and try again');
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
    public static function userProfileSetting($id){
      return view('dashboard/src/html/user-profile-regular');

    }

     /**
     * returns user settings page
     * 
     * @return true
     * 
     * @param $settings page
     * 
     */
    public static function userSecuritySetting($id){
      return view('dashboard/src/html/user-profile-setting');

    }

       /**
     * returns user settings page
     * 
     * @return true
     * 
     * @param $settings page
     * 
     */
    public static function userList(){
      $user = User::all();
      return view('dashboard/src/html/user-list')->with(['users'=>$user]);

    }


    /***
     * returns account officer
     * by ID
     * @param id
     * 
     */
    public static function getAccountOfficer(){
      if(Auth::check()){
       if(Auth::user()->access_level == 'admin'){
    $data = User::where('id', '!=', 'null')->orderBy('created_at', 'DESC')->paginate(20);
    return view('dashboard/src/html/view-account-officer')->with(['user'=>$data]);
       }else{
         return redirect('/get-login');
       }
      }
    }




}

<?php

namespace App\Http\Controllers\Image;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use Intervention\Image\Laravel\Facades\Image;
use Intervention\Image\Facades\Image;

class ImageController extends Controller
{
    /**
     * upload the documents
     * 
     * returns the uploaded file
     * 
     */
    public static function uploadKyc($request){
        $file = $request['doc_image'];
        $filename = mt_rand().time().'.'.'png';
        $file = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '',  $file)); // decode the file
        $upload = Image::make($file)->resize(180, 180, function ($constraint){
         $constraint->aspectRatio();
       })->stream();
       $upload = $upload->__toString();
      // $s3 = Storage::disk('s3');
         $filepath = 'images/Kyc/'.$filename;
          $upload->save($filepath);
          return $filepath;

    }


     /**
     * upload the avatar image
     * 
     * returns the image file
     * 
     */
    public static function uploadAvatar(){
        if($request->hasFile('doc_image')){

            $doc_img = $request->file('doc_image');
            $filename = time() . '.' . $doc_img->getClientOriginalExtension();
            $image = Image::read($doc_img);
            // Resize image
            $image->resize(400, 300, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('images/kyc/' . $filename));
            return $filename;
            }

    }

}

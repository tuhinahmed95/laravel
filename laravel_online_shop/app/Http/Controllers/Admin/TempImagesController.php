<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TempImage;

class TempImagesController extends Controller
{
    public function create(Request $request){ 
        $image = $request->image;

        if(!empty($image)){ 
            $ext = $image->getClientOriginalExtention();
            $newName = time().'.'.$ext;

            $tempImage = new TempImage();
            
             $tempImage-> name = $newName;

             $newName->save();
        }

    }
}

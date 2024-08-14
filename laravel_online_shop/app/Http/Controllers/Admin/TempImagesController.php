<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TempImage;

class TempImagesController extends Controller
{
    public function create(Request $request){ 
        $image = $request->file('image'); 
    
        if(!empty($image)){ 
            $ext = $image->getClientOriginalExtension(); // ফাইলের এক্সটেনশন বের করুন
            $newName = time().'.'.$ext; // নতুন নাম তৈরি করুন
    
            $tempImage = new TempImage();
            $tempImage->name = $newName; // টেম্প ইমেজের নাম সেট করুন
    
            $tempImage->save(); // ডাটাবেসে নতুন রেকর্ড সংরক্ষণ করুন
    
            // ইমেজটিকে পাবলিক ডিরেক্টরিতে সংরক্ষণ করুন
            $image->move(public_path('/temp'), $newName);
    
            // সফল হলে JSON রেসপন্স প্রদান করুন
            return response()->json([ 
                'status' => true,
                'image_id' => $tempImage->id, 
                'message' => 'Image uploaded successfully'
            ]);
        }
    
        return response()->json([ 
            'status' => false,
            'message' => 'No image uploaded'
        ]);
    }
    
}

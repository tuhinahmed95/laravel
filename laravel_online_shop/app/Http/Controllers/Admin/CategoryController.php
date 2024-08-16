<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;
use App\Models\TempImage;
use Illuminate\Support\Facades\File;
use Image;
use Illuminate\Support\Arr;


class CategoryController extends Controller
{
    public function index(Request $request){ 
        $categories = Category::latest();

        if(!empty($request->get('keyword'))){ 
            $categories = $categories->where('name','like','%'.$request->get('keyword').'%');

        }
        $categories = $categories->paginate(10);
        return view('admin.category.list', compact('categories'));
    }



    public function create(){ 
        return view('admin.category.create');
    }



    public function store(Request $request){ 
        $validator = Validator::make($request->all(),[ 
            'name'=> 'required',
            'slug'=> 'required|unique:categories',
        ]);

        if($validator->passes()){ 

            $category = new Category();

            $category->name = $request->name;
            $category->slug = $request->slug;
            $category->status = $request->status;
            $category->save();

            // save image here

            if (!empty($request->image_id)) { 
                $tempImage = TempImage::find($request->image_id);
                
                $extArry = explode('.', $tempImage->name);
                $ext = Arr::last($extArry); 
            
                $newImageName = $category->id . '.' . $ext;
                
                $sPath = public_path() . '/temp/' . $tempImage->name;
                $dPath = public_path() . '/uploads/category/' . $newImageName;
                
                File::copy($sPath, $dPath);
            
                $thumbPath = public_path() . '/uploads/category/thumb/' . $newImageName;
                
                $img = Image::make($sPath);
                $img->resize(450, 600); 
                $img->save($thumbPath); 
            
                $category->image = $newImageName;
                $category->save();
            }
            

            $request->session()->flash('success','Category added succesfully');

            return response()->json([ 
                'status' => true,
                'message' => 'Category added succesfully'
            ]);

        } else{ 
            return response()->json([ 
                'status' => false,
                'errors' => $validator->errors()
            ]);
        }
    }



    public function edit($categoryId, Request $request){ 
        $category = Category::find($categoryId);
        if(empty($category)) { 
            return redirect()->route('categories.index');
        }

        return view('admin.category.edit',compact('category'));
    }

    public function update(){ 
        
    }

    public function destroy(){ 
        
    }
}

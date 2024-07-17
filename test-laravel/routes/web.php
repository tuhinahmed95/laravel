<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/post{id?}/comment{commentid}', function (string $id =null, string $comment = null) {
    if($id){ 
         return "<h1>Post Id : ". $id ."</h1>&& <h2> Second Post Id:". $comment ."</h2>";
    }else{ 
        return "<h1>Not Found Id</h1>";
    }
})->where('id','[0-9]+')->whereAlpha('commentid','[a-zA-Z]+1');


// constaints
// Route::get('/post/{id}', function (string $id){ 
//     if($id){ 
//         return "<h1>Post Id : ". $id ."</h1>";
//     }else{ 
//         return "<h1>Post Id Not Found</h1>";
//     }
// })->where('id', '[a-zA-Z]+');


// Route::view('post','/post');

// Route::get('/post/firstpost', function () {
//     return view('firstpost');
// });


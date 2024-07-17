<?php

use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/post/{id}/comment/{commentid}', function (string $id, string $comment ) {
//     if($id){ 
//          return "<h1>Post Id : ". $id ."</h1> <h2> Second Post Id:". $comment ."</h2>";
//     }else{ 
//         return "<h1>Not Found Id</h1>";
//     }
// })->where('id','[0-9]+')->whereAlpha('commentid','[a-zA-Z]+1');


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


// name route
// Route::get('/page/postssssss', function () {
//     return view('post');
// })->name('mypost');

// Route::get('/test', function () {
//     return view('firstpost');
// });
// Route::redirect('/firstpost','/test');


// group routes
Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/page')->group(function(){ 
    Route::get('/post', function () {
        return view('post');
    })->name('mypost');
    
    Route::get('/firstpost', function () {
        return view('firstpost');
    });

    Route::get('/post/firstpost', function () {
        return view('firstpost');
    });
});

// error page er jonno fallback use
Route::fallback(function(){ 
    return "<h1>page not found</h1>";
});

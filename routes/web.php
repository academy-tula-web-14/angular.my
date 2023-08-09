<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\About;
use App\Http\Controllers\Gallery;
use App\Http\Controllers\Collect;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return "Home page"; //view('welcome');
});

// Route::get('/about', function(){
//     return "About page";
// });
Route::get('/about', [About::class, 'index']);

//Route::get('/collect', [Collect::class, "index"]);

// Route::get('/gallery/{id?}', function($id = null){
//     return "Gallery page " . $id;
// })->where('id', '[0-9]+');

Route::get('/gallery/{id?}', [Gallery::class, 'show']);


Route::get('/services', function(){
    return "Services page";
});

Route::get('/contacts', function(){
    return "Contacts page";
});

// Route::get('/news/{category?}/{post?}', function($catId, $postId){
//     return "News page";
// })->where('category', '[a-zA-Z0-9]+')->where('post', '[0-9]+');

// Route::get('/news/{category?}/{post?}', function($catId, $postId){
//     return "News page";
// })->whereAlphaNumeric('category')->whereNumber('post');


// Route::get('blog/{id}', function($id){
//     return $id;
// })->whereNumber('id');

// Route::get('blog/all', function(){
//     return 'page all';
// });

// Route::prefix('blog')->group(function(){
//     Route::get('blog/{id}', function($id){
//         return $id;
//     })->whereNumber('id');
    
//     Route::get('blog/all', function(){
//         return 'page all';
//     });
// });

// Route::get("abcde", function(){
//     return "wow!";
// })->name("wow");

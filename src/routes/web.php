<?php


use Illuminate\Support\Facades\Route;


use Illuminate\Support\Facades\DB;
use App\Http\Controllers\IndexController;





Route::get('/', function () {
    return view('welcome');
});

Route::get('/greeting', function () {
    return 'Hello World';

});

/*Route::get('/user', [UserController::class, 'index']);

});*/

/*Route::get('/', function () {
    $visited = DB::select('select * from title ');
    return view('Database', ['visited' => $visited] );
});*/
/*Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'User - '.$postId.'coment - '.$commentId;
});*/
/*Route::get('/user/{name?}', function ($name = 'John') {
    return $name;
});*/
/*Route::get('/user/{id}/{name}', function ($id = 1, $name = 'Mishail') {
    return 'nambered - '.$id.'name - '.$name;
})->where(['id' => '[0-9]+', 'name' => '[a-z]+']);*/


//Route::get('/', [IndexController::class, 'index']);


/*Route::get("/{id}/{name?}", function ($id, $name='ttt'){
    echo $id .' - '.$name;
})->Where(['id'=>'[0-9]+', 'name'=>'[a-z]+']);*/

/*Route::match(['get', 'post'],'/aaa', function (){
    echo 'hello !!';
});*/

//Route::fallback(function () {
//    echo 12345;
//});

//Route::group(['prefix'=>'post'], function (){
//    Route::get('/', function (){
//        return "<a href='".\route('post_id',['id'=>1])."'>post_id</a>";
//    })->name('post');
//
//    Route::get('/id', function (){
//        return "<a href='".\route('post')."'>post</a>";
//    })->name('post_id');
//});





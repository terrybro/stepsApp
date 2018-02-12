<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  $topics = App\Topic::all();
  $lessons = App\Lesson::all();

  return view('welcome', compact('topics', 'lessons'));
});



Route::get('/lessons/{id}', function ($id) {

  $topical = App\Topic::find($id);

  $topics = App\Topic::all();
  $lessons = App\Lesson::all();

  return view('lessons', compact('topical', 'topics', 'lessons'));

});

Route::get('/lesson/{id}', function ($id) {

  $less = App\Lesson::find($id);

  $topics = App\Topic::all();
  $lessons = App\Lesson::all();

  return view('lesson', compact('less', 'topics', 'lessons'));

});









Route::post('/lessons', 'PostsController@store');




/*
Route::get('products', function () {
    return response(['Product 1', 'Product 2', 'Product 3'],200);
});

Route::get('products/{product}', function ($productId) {
    return response()->json(['productId' => "{$productId}"], 200);
});


Route::post('products', function() {
    return  response()->json([
            'message' => 'Create success'
        ], 201);
});

Route::put('products/{product}', function() {
    return  response()->json([
            'message' => 'Update success'
        ], 200);
});

Route::delete('products/{product}',function() {
    return  response()->json(null, 204);
});
*/

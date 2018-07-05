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

use Illuminate\Http\Request;

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    $quizzes = App\Quiz::orderby('created_at', 'asc')->get();
    return view('quiz', [
        'quizzes' => $quizzes
    ]);
});

Route::post('/quiz', function (Request $request) {
    $quiz = new \App\Quiz;
    $quiz->name = $request->name;
    $quiz->active = true;
    $quiz->save();

    return redirect('/');
});
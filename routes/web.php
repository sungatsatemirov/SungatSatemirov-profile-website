<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB ;
use App\Http\Controllers\BlogController ; 
use App\Models\Post;
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
    return view('first');
})->name('firstPage');
Route::get('/projects', function () {
    return view('second');
})->name('secondPage');
Route::get('/contacts', function () {
    return view('third');
})->name('thirdPage');
Route::get('/post/create' , function(){
    DB::table('posts')->insert([
        'title' => 'NewPost' ,
        'body' => 'You must ensure that all work completed for this course is your
        own work. Any evidence of plagiarism, data falsification,
        fabrication, collusion, self-plagiarism, and/or other forms of
        academic misconduct will be penalized.'

    ]);
});
Route::get('/post' ,[BlogController::class , 'index'] );


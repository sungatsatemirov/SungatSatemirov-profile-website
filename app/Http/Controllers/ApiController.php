<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ApiController ;
use App\Models\Post ;
class ApiController extends Controller
{
    /*
    This function return all posts rows
    */
    public function index(Request $request){
        $posts = Post::all();

        return response($posts , 200);
    }
    /*
    Return post with post_id */

    public function get_post(Request $request){
        $post = Post::find($request -> id);

        if($post == null) {
            return response(['message' => 'There is no post'] , 404);
        }

        return response($post , 200);
    }
}

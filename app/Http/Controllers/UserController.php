<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $post = Post::paginate(10);

        return view('index',
        ['Post' => $post]);
    }


}
//public function index(){

   // $posts = Post::simplePaginate('5');
   // return view("index",[
       // 'posts' => $posts,
   // ]);

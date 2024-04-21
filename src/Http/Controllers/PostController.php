<?php

namespace Smile00112\TestPackage\Http\Controllers;

use App\Http\Controllers\Controller;
use Smile00112\TestPackage\Models\Post;

class PostController extends Controller
{
   public function index()
   {
//       Post::create(
//          ['title' => 'test 3'],
//       );
       $posts = Post::all();

       return view('testPackage::index', [
           'posts' => $posts,
       ]);
   }
}

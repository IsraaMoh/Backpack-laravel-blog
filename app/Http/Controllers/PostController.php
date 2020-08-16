<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function getAllpost() {
        $posts = Post::get()->toJson(JSON_PRETTY_PRINT);
        return response($posts, 200);
      }


      // get the body of the post
      public function getpost($id) {
        if (Post::where('id', $id)->exists()) {
            $post = Post::where('id', $id)->get('body')->toJson(JSON_PRETTY_PRINT);
            return response($post, 200);
          } else {
            return response()->json([
              "message" => "Post not found"
            ], 404);
          }
      }
}

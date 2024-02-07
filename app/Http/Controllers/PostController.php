<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function post() {
        $posts = Post::all();
        return view('ShowPost', compact('posts'));
    }

    public function addPost() {
        return view('AddPost');
    }


    public function storePost(Request $request) {
        // dd($request->all());
        Post::create([
            'title' => $request -> title_post,
            'category' => $request -> category_post,
            'description' => $request -> description_post,
            'filename' => $request -> filename,
        ]);

        return redirect('/');
    }

    public function destroy($post_id) {
        $delPost = Post::findorfall($post_id);
        $delPost->delete();
    }

    public function editPost($post_id)
    {
        $editpost = Post::findorfail($post_id);
        return view('EditPost', compact('editpost'));
    }

}

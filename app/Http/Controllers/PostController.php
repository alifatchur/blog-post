<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::active()->get();

        $view_data = [
            'posts' => $posts,
        ];

        // return view('auth.admin.data-posts', $view_data);
        return view('posts', $view_data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::where('id', $id)->first();
        $comments = $post->comments()->get();
        $total_comments = $post->total_comments();

        $selected_data = [
            'post' => $post,
            'comments' => $comments,
            'total_comments' => $total_comments
        ];
        return view('post', $selected_data);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostAdminController extends Controller
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

        return view('auth.admin.data-posts', $view_data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.admin.data-post-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $title = $request->title;
        $content = $request->content;

        Post::create([
                    'title' => $title,
                    'content' => $content,
                ]);

        return redirect('data-posts');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::where('id', $id)->first();

        $selected_data = [
            'post' => $post
        ];
        // return view('post-edit', $selected_data);
        return view('auth.admin.data-post-edit', $selected_data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $title = $request->title;
        $content = $request->content;
        $slug = str_replace(' ', '-', $title);

        Post::where('id', $id)
                ->update([
                    'title' => $title,
                    'content' => $content,
                    'slug' => $slug
                ]);

        return redirect('data-posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::where('id', $id) ->delete();

        return redirect('data-posts');
    }
}

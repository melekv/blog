<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;

class PostController extends Controller
{
    public function index() {
        $posts = Posts::latest()->take(9)->get();
        return view('pages.home', ['posts' => $posts]);
    }

    public function show($id) {
        $post = \App\Posts::where('id', $id)->first();
        return view('pages.post', ['post' => $post]);
    }

    public function create() {
        return view('pages.new_post');
    }

    public function store(Request $request) {
        $post = new Posts();

        $validatedData = $request->validate([
            'inputTitle' => 'required'
        ]);

        $post->title = $request->input('inputTitle');
        $post->content = $request->input('inputContent');

        $imageName = $request->file('image')->getClientOriginalName();
        $image = $request->file('image')->storeAs('/images/posts/', $imageName, 'my_upload');

        $post->image = $imageName;
        $post->save();

        return back()->with('success', 'Zapisano!');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index() {
        $posts = Post::latest()->with(['user', 'likes'])->paginate(3);
        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    public function store(Request $request) {

        $this->validate($request, [
            'body' => 'required'
        ]);

        $request->user()->posts()->create($request->only('body'));

        return back();
        // Post::create([
        //     'body' => $request->body,
        //     'user_id' => auth()->id()
        // ])
    }

    public function destroy(Post $post) {

        $post->delete();

        return back();
    }

    public function edit(Post $post) {

        return view('posts.edit', ['post' => $post]);
    }

    public function update(Post $post)
    {
        request()->validate([
            'content' => 'required',
        ]);

        $post->update([
            'body' => request('content'),
        ]);

        return redirect('/posts');
    }

    // Post Details
    public function detail(Request $request, $slug, $postId) {

        $detail = Post::find($postId);
        return view('detail', ['detail'=>$detail]);
    }

    // comment add
    function save_comment(Request $request,$slug,$id){
        $request->validate([
            'comment'=>'required'
        ]);
        $data=new Comment;
        $data->user_id=$request->user()->id;
        $data->post_id=$id;
        $data->comment=$request->comment;
        $data->save();
        return redirect('detail/'.$slug.'/'.$id)->with('success','Comment has been submitted.');
    }
}


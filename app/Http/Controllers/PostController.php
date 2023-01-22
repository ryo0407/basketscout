<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Playerinfo;
use App\Picinfo;
use App\Post;
use App\Reason;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vals = Post::query()->join('users', 'posts.user_id', '=', 'users.id')->get();
     
        return view ('posts.index',[
            'vals' => $vals,
        ]);
    }

    public function past()
    {
        // (TODO) user_id Auth入れる
        // $val = Post::orderby('created_at', 'DESC')->where('user_id', Auth::id())->get();

        $user = User::find(Auth::id());
        return view ('posts.past',[
            // 'vals' => $val,
            'user' => $user,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post;
        $post->user_id = Auth::id();
        $post->position = $request->position;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
        return redirect()->route('posts.index');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $val = Post::find($id);

        return view ('posts.show',[
            'val' => $val,
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $val = Post::find($id);

        return view ('posts.edit',[
            'val' => $val,
        ]);
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
        $post = new Post;
        $post->user_id = Auth::id();
        $post->position = $request->position;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
        return redirect()->route('posts.past');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $val = Post::find($id)->delete();    

        return redirect()->route('posts.past');
    }
}

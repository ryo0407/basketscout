<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePost;
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

    
    public function index(Request $request)
    {
        $count = 6;
        $query = Post::query();
        $keyword = $this->escape($request->input('keyword'));
        $keywords = $this->pregSplit($keyword);

        if(!empty($keywords)) {
            foreach ($keywords as $keyword) {
                $query
                    ->where('title', 'like', "%$keyword%")
                    ->orWhere('position', 'like', "%$keyword%")
                    ->orWhereHas('user', function($query) use ($keyword) {
                        $query->where('name', 'like', "%$keyword%" );
                    });
            }
        }
        $vals= $query->limit($count)->get()
        ->load('user');
      

        $player = Playerinfo::where('user_id',Auth::id())->first();
        $pic = Picinfo::where('user_id',Auth::id())->first();
       

        return view ('posts.index',[
            'vals' => $vals,
            'player' => $player,
            'pic' => $pic,
            'keyword' => $keyword,
            
        ]);
    }

    //検索機能

    private function escape(string $value = null)
    {
        if(!$value) {
            return $value;
        }
        return str_replace(
            ['\\', '%', '_'],
            ['\\\\', '\\%', '\\_'],
            $value
        );
    }

    private function pregSplit($keyword)
    {
        $keyword = mb_convert_kana( $keyword, "s" );
        return preg_split('/[\p{Z}\p{Cc}]++/u', $keyword, -1, PREG_SPLIT_NO_EMPTY);
    }

    public function searchQuery($query, $keywords = null, $count)
    {
        if(!empty($keywords)) {
            foreach ($keywords as $keyword) {
                $query
                    ->where('title', 'like', "%$keyword%")
                    ->orWhere('position', 'like', "%$keyword%")
                    ->orWhereHas('user', function($query) use ($keyword) {
                        $query->where('name', 'like', "%$keyword%" );
                    });
            }
        }
        return $query->offset($count)->limit(6)->get()
        ->load('user');
    }


    public function infiniteScroll(Request $request){

        $count = $request->count*6;
  
        $query = Post::query();
        $keyword = $this->escape($request->input('keyword'));
        $keywords = $this->pregSplit($keyword);
        if(!empty($keywords)) {
            foreach ($keywords as $keyword) {
                $query
                    ->where('title', 'like', "%$keyword%")
                    ->orWhere('position', 'like', "%$keyword%")
                    ->orWhereHas('user', function($query) use ($keyword) {
                        $query->where('name', 'like', "%$keyword%" );
                    });
            }
        }
        $vals= $query->offset($count)->limit(6)->get()
        ->load('user');

    $counts = $count+6;
        return array($counts, $vals);
    }
    //過去の投稿

    public function past()
    {
        $posts = Post::where('user_id', Auth::id())->get(); 
        $user = User::find(Auth::id());
        $player = Playerinfo::where('user_id', Auth::id())->first(); 
       

        return view ('posts.past',[

            'posts' => $posts,
            'user' => $user,
            'player' => $player,
        
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
    public function store(CreatePost $request)
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
        $player = Playerinfo::where('user_id', $val->user_id)->first();
        $user = User::where('id', $val->user_id)->first();
        $pic = Reason::where('pic_id', Auth::id())->where('player_id', $val->user_id)->first();
        

      
        

        return view ('posts.show',[
            'val' => $val,
            'player' => $player,
            'user' => $user,
            'pic' =>  $pic,
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
    public function update(CreatePost $request, $id)
    {
        $post = new Post;
        $record = $post->find($id);
        $record->user_id = Auth::id();
        $record->position = $request->position;
        $record->title = $request->title;
        $record->body = $request->body;
        $record->save();
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

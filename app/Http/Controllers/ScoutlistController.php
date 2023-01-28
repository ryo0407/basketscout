<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\User;
use App\Playerinfo;
use App\Picinfo;
use App\Post;
use App\Reason;

class ScoutlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query=Reason::query();
        $scout_player=$query->select('reasons.id as reason_id', 'reasons.player_id', 'reasons.pic_id', 'reasons.scout_flg', 'users.id as usr_id', 'users.name','picinfos.user_id','picinfos.team_name' )
        ->join('users', 'reasons.pic_id', '=', 'users.id')
        ->join('picinfos', 'reasons.pic_id', '=', 'picinfos.user_id')
        ->where('player_id', Auth::id())
        ->get();

        
      return view('scoutlists.get_scout',[
        'scout_player' =>  $scout_player,
      ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reason = Reason::where('id', $id)->first();
        $val = Picinfo::where('user_id', $reason->pic_id)->first();
        $user = User::where('id', $reason->pic_id)->first();

        

        return view('scoutlists.scout_detail',[
            'val' => $val,
            'user' => $user,
            'reason' => $reason,

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
        $reason = Reason::find($id);
        $reason->scout_flg = 1;
        $reason->save();

        return redirect()->route('scoutlists.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function delete($id)
    { 
        
        $reason = Reason::find($id);
        $reason->scout_flg = 2;
        $reason->save();

        return redirect()->route('scoutlists.index');

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Playerinfo;
use App\Picinfo;
use App\Post;
use App\Reason;

use App\Http\Requests\CreatePlayer;
use App\Http\Requests\CreateScout;

class UserController extends Controller
{

//新規選手登録
    public function createnewplayer() {
        return view('playerregister.newplayer_register');
    }

    public function createnewplayerregister(CreatePlayer $request) {

        $pnew = new Playerinfo;
        $pnew->user_id = Auth::id();
        $pnew->team_name = $request->team_name;
        $pnew->height = $request->height;
        $pnew->weight = $request->weight;
        $pnew->main_position = $request->main_position;
        $pnew->strong_point = $request->strong_point;
        if(!empty($request->profile_photo)){
            $path = $request->profile_photo->store('public');
            $file_name = basename($path);
            $pnew->profile_photo = $file_name;
        };
        $pnew->save();
        
        return redirect()->route('posts.index');
    }

//選手カード編集
    public function editcard($id) {
        $editplayer = Playerinfo::find($id);

        return view ('playeredit.playercard_edit_form',[
            'editplayer' => $editplayer,
        ]);
       
    }

    public function editcardform(CreatePlayer $request, $id) {

        
        $pnew = new Playerinfo;
        $record = $pnew->find($id);
        $record->user_id = Auth::id();
        $record->team_name = $request->team_name;
        $record->height = $request->height;
        $record->weight = $request->weight;
        $record->main_position = $request->main_position;
        $record->strong_point = $request->strong_point;
        if(!empty($request->profile_photo)){
            $path = $request->profile_photo->store('public');
            $file_name = basename($path);
            $record->profile_photo = $file_name;
        };
        $record->save();
        
        return redirect()->route('posts.index');
    }

//スカウト情報新規登録
    public function createnewscout() {
        return view('scout_register.scout_register_form');
    }

    public function createscoutregister(CreateScout $request) {

        $snew = new Picinfo;
        $snew->user_id = Auth::id();
        $snew->team_name = $request->team_name;
        $snew->active_place = $request->active_place;
        $snew->team_address = $request->team_address;
        $snew->save();
        
        return redirect()->route('posts.index');
    }

//スカウト情報編集

public function editscout($id) {
    $editscout = Picinfo::find($id);

    return view ('scoutedit.scout_edit',[
        'editscout' => $editscout,
    ]);
   
}

public function editscoutform(CreateScout $request, $id) {

    $snew = new Picinfo;
    $record = $snew->find($id);
    $record->user_id = Auth::id();
    $record->team_name = $request->team_name;
    $record->active_place = $request->active_place;
    $record->team_address = $request->team_address;
    $record->save();
    
    
    return redirect()->route('posts.index');
}

public function mypage() {
    $player = Playerinfo::where('user_id',Auth::id())->first();

    return view('mypage.mypage')->with(['player' => $player]);
}
}

@extends('layouts.app')
@section('content')

<!--  選手ページからの選手・投稿詳細画面 -->


<h1 class="text-center m-5 border-bottom p-1">選手詳細</h1> 

<div class="table table-bordered w-75 p-3 mx-auto m-5">

    <div class="row">
            <div class="col-5 border card-img my-auto">
                @if($player['profile_photo'] == null)
                <div class=" text-center ">画像が設定されてません</div>
                @else
                <img src="{{ asset('storage/'.$player['profile_photo']) }}" class="card-img mx-auto" alt="...">
                @endif
            </div>
            <div class="col-7 border">
                <div class="row text-break boder">
                    <div class="col-4 ">
                        <div class="row">
                            <div class="col border  py-3 text-center">
                                名前
                            </div>
                        </div>
                    </div>
                    <div class="col-8 ">
                        <div class="row">
                            <div class="col border  py-3">
                                {{ $user->name }}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row text-break boder">
                    <div class="col-4 ">
                        <div class="row">
                            <div class="col border  py-3 text-center">
                                チーム名
                            </div>
                        </div>
                    </div>
                    <div class="col-8 ">
                        <div class="row">
                            <div class="col border  py-3">
                                {{ $player['team_name']}}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row text-break boder">
                    <div class="col-4 ">
                        <div class="row">
                            <div class="col border  py-3 text-center">
                                ポジション
                            </div>
                        </div>
                    </div>
                    <div class="col-8 ">
                        <div class="row">
                            <div class="col border  py-3">
                                {{ $player['main_position']}}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row text-break boder">
                    <div class="col-4 ">
                        <div class="row">
                            <div class="col border  py-3 text-center">
                                身長
                            </div>
                        </div>
                    </div>
                    <div class="col-8 ">
                        <div class="row">
                            <div class="col border  py-3">
                                {{ $player['height']}}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row text-break boder">
                    <div class="col-4 ">
                        <div class="row">
                            <div class="col border  py-3 text-center">
                                体重
                            </div>
                        </div>
                    </div>
                    <div class="col-8 ">
                        <div class="row">
                            <div class="col border  py-3">
                                {{ $player['weight']}}
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row text-break boder">
                        <div class="col-12 ">
                            <div class="row">
                                <div class="col border  py-3 text-center">
                                    大会成績　/ 自己PR
                                </div>  
                            </div>
                        </div>
                                <p class="text-break"> {{ $player['strong_point']}}</p>     
                </div>
                
                
            </div>
    </div>
</div>    



<h1 class="text-center m-5 border-bottom p-1">投稿詳細</h1>

<div class="table table-bordered w-75 p-3 mx-auto my-5 text-break">

        <div class="col my-5">
            投稿日
        </div>
        <div class="col my-5 mx-3">
            {{$val['created_at']->format('Y年m月d日')}}
        </div>
    

        <div class="col my-5">
            その日担当したポジション
        </div>
        <div class="col my-5 mx-3">
            {{ $val['position'] }}
        </div>


        <div class="col my-5">
            タイトル
        </div>
        <div class="col my-5 mx-3">
            {{ $val['title'] }}
        </div>


        <div class="col my-5">
            内容
        </div>
        <div class="col my-5 mx-3">
             {{ $val['body'] }}
        </div>
</div>


@if( $val['user_id'] == Auth::id() )
<div class="d-grid gap-2 col-4 mx-auto my-5">
    <a href="{{ route('posts.edit', $val['id']) }}" button class="btn btn-success col my-3" type="button">投稿を編集する</a>
    <form method="POST" action="{{ route('posts.destroy', $val['id']) }}">
        @csrf
        @method('delete')
        <input type="submit" class="btn btn-danger col my-3" value="削除する">
    </form>
    <a href="{{ route('posts.past')}}" button class="btn btn-secondary col my-3" type="button">戻る</a>
</div>

@else
<div class="d-grid gap-2 col-4 mx-auto my-5">
    <a href="{{ route('posts.index')}}" button class="btn btn-secondary col my-5" type="button">戻る</a>
</div>
@endif

@if(Auth::user()->role == 1) 
@if(!isset($pic['scout_flg']))
<div class="d-grid gap-2 col-4 mx-auto my-5">
<form method="GET" action="{{ route('scouts.edit', $val['user_id']) }}">
        @csrf
        <input type="submit" class="btn btn-primary col my-1" value="スカウトする">
    </form>
</div>
@endif
@endif

@endsection
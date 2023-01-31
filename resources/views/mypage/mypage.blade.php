@extends('layouts.app')
@section('content')

@if(!$player && Auth::user()->role == 0)
    <div class="w-50 p-3 mx-auto my-5 bg-white text-center">
        選手登録がまだなされていません。
    </div>
    <div class="d-grid gap-2 col-2 mx-auto my-5">
        <a href="{{route('create.newplayer') }}" button class="btn btn-success col my-5" type="button">新規選手登録はこちら</a>
    </div>
    @else


    <h1 class="text-center m-5 border-bottom p-1">あなたの選手カード</h1> 


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
                                {{Auth::user()->name}}
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

    <div class="d-grid gap-2 col-2 mx-auto my-5">
        <a href="{{ route('edit.card', $player['id']) }}" button class="btn btn-success col my-5" type="button">編集</a>
    </div>
  

    @endif



@endsection
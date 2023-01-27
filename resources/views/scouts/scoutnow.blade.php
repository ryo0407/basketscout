@extends('layouts.app')
@section('content')

<h1 class="text-center m-5 border-bottom p-1">スカウト状況</h1>


@foreach($scout_player as $sp)
<div class="table table-bordered w-75 p-3 mx-auto m-5">

<div class="row">
        <div class="col-5 border card-img mx-auto my-auto">
                <img src="{{ $sp['profile_photo'] ? asset('storage/'.$sp['profile_photo']) : 'storage/images/Unknown_person.jpg'}}" class="card-img" alt="...">
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
                        {{$sp['name']}}
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
                        {{ $sp['team_name']}}
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
                        {{ $sp['main_position']}}
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
                        {{ $sp['height']}}
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
                        {{ $sp['weight']}}
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
                        <p class="text-break"> {{ $sp['strong_point']}}</p>     
            </div>

        </div>
</div>
</div>  

@if($sp['scout_flg'] == 0)
<div class="bg-white w-75 p-3 mx-auto mb-5 text-center">
        まだ選手に受理されてません
    </div>
@elseif($sp['scout_flg'] == 1)
<div class="bg-white w-75 p-3 mx-auto mb-5 text-center">
        スカウトが承諾されました。<br>
        選手からの連絡をお待ちください。
    </div>
@else
<div class="bg-white w-75 p-3 mx-auto mb-5 text-center">
        スカウトが受理されませんでした。
    </div>
@endif

@endforeach


@endsection
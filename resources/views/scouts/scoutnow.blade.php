@extends('layouts.app')
@section('content')

<h1 class="text-center m-5 border-bottom p-1">スカウト状況</h1>

<div class="container w-25 p-3 mx-auto mb-5">
@foreach($scout_player as $sp)
    <div class="card">
        <img src="storage/images/Unknown_person.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-title">Name <br> {{ $sp['name'] }}</p>
                <p class="card-title">タイトル</p>
                <p class="card-text">ポジション</p>
                <p class="card-text">チーム名</p>
                <a href="/postdetail_scoutnow" class="btn btn-primary text-center">投稿詳細</a>
            </div>
            <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
            </div>
    </div>

    <div class="bg-white w-75 p-3 mx-auto mb-5 text-center">
        まだ選手に受理されてません
    </div>

</div>
@endforeach

<div class="container w-25 p-3 mx-auto mb-5">

    <div class="card">
        <img src="storage/images/Unknown_person.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-title">Name</p>
                <p class="card-title">タイトル</p>
                <p class="card-text">ポジション</p>
                <p class="card-text">チーム名</p>
                <a href="/postdetail_scoutnow" class="btn btn-primary text-center">投稿詳細</a>
            </div>
            <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
            </div>
    </div>

    <div class="bg-white w-75 p-3 mx-auto mb-5 text-center">
        スカウトが受理されました<br>
        早速メールして選手とコンタクトを取りましょう
    </div>

</div>



@endsection
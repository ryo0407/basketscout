@extends('layouts.app')
@section('content')

    <img src="storage/images/25315130_l.png" class="img-fluid" alt="...">



    <h1 class="text-center m-5 border-bottom p-1">Basketball player リスト</h1> 

    <div class="input-group w-50 p-3 mx-auto mb-5">
        <input type="text" class="form-control ">
        <span class="input-group-btn">
            <button class="btn btn-primary" type="submit">検索</button>
        </span>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4 mx-5">
        <div class="col mb-5">
            <div class="card">
            <img src="storage/images/Unknown_person.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-title">Name</p>
                <p class="card-title">タイトル</p>
                <p class="card-text">ポジション</p>
                <p class="card-text">チーム名</p>
                <a href="/post_detail" class="btn btn-primary text-center">投稿詳細</a>
            </div>
            <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
            </div>
            </div>
        </div>
        
        <div class="col mb-5">
            <div class="card">
            <img src="storage/images/Unknown_person.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-title">Name</p>
                <p class="card-title">タイトル</p>
                <p class="card-text">ポジション</p>
                <p class="card-text">チーム名</p>
                <a href="/post_detail" class="btn btn-primary text-center">投稿詳細</a>
            </div>
            <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
            </div>
            </div>
        </div>

        <div class="col mb-5">
            <div class="card">
            <img src="storage/images/Unknown_person.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-title">Name</p>
                <p class="card-title">タイトル</p>
                <p class="card-text">ポジション</p>
                <p class="card-text">チーム名</p>
                <a href="/post_detail" class="btn btn-primary text-center">投稿詳細</a>
            </div>
            <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
            </div>
            </div>
        </div>

        <div class="col mb-5">
            <div class="card">
            <img src="storage/images/Unknown_person.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-title">Name</p>
                <p class="card-title">タイトル</p>
                <p class="card-text">ポジション</p>
                <p class="card-text">チーム名</p>
                <a href="/post_detail" class="btn btn-primary text-center">投稿詳細</a>
            </div>
            <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
            </div>
            </div>
        </div>

    </div>
@endsection
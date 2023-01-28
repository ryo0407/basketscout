@extends('layouts.app')
@section('content')

<h1 class="text-center m-5 border-bottom p-1">あなたの投稿リスト</h1> 


    
<div class="row row-cols-1 row-cols-md-3 g-4 mx-5">

    @foreach($posts as $post)
        <div class="col mb-5">
            <div class="card">
                @if($player['profile_photo'] == null)
                 <message class="text-center py-5 border">画像が設定されてません</message>
                @else
                <img src="{{ asset('storage/'.$player['profile_photo']) }}" class="card-img" alt="...">
                @endif

                <div class="card-body">
                    <p class="card-title"> {{ $user['name'] }}</p>
                    <p class="card-title">タイトル {{ $post['title'] }}</p>
                    <p class="card-text">ポジション {{ $post['position'] }}</p>
                    <p class="card-text">チーム名  {{ $player['team_name'] }}</p>
                    <a href="{{ route('posts.show',$post['id']) }}" class="btn btn-primary text-center">投稿詳細</a>
                </div>
                <div class="card-footer">
                    <small class="text-muted">{{ $post['created_at'] }}</small>
                </div>
            </div>
        </div>
    @endforeach

</div>

@endsection
@extends('layouts.app')
@section('content')

<h1 class="text-center m-5 border-bottom p-1">あなたの投稿リスト</h1> 
<div class="d-grid gap-2 col-2 mx-auto my-5">
    <a href="" button class="btn btn-danger col py-2 my-5" type="button">新規投稿</a>
</div>

    
<div class="row row-cols-1 row-cols-md-3 g-4 mx-5">

    @foreach($user->post as $subvalue)
        <div class="col mb-5">
            <div class="card">
            <img src="storage/images/Unknown_person.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-title">{{ $user->name }}</p>
                <p class="card-title">タイトル {{ $subvalue['title'] }}</p>
                <p class="card-text">ポジション {{ $subvalue['position'] }}</p>
                <p class="card-text">チーム名</p>
                <a href="{{ route('posts.show',$subvalue['id']) }}" class="btn btn-primary text-center">投稿詳細</a>
            </div>
            <div class="card-footer">
            <small class="text-muted">{{ $subvalue['created_at'] }}</small>
            </div>
            </div>
        </div>
    @endforeach

</div>

@endsection
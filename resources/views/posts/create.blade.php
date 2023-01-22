@extends('layouts.app')
@section('content')

<h1 class="text-center m-5 border-bottom p-1">新規選手投稿フォーム</h1>


<form method="POST" action="/posts" class="container w-50 p-3 mx-auto mb-5">
@csrf
  <div class="mb-3">
    <label class="form-label">名前</label>
    <div class="col my-5 mx-3">
            
    </div>
    
  </div>

  <div class="mb-3">
    <label class="form-label">チーム名</label>
    <div class="col my-5 mx-3">
            
    </div>
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">ポジション</label>
    <input type="text" name="position" class="form-control">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">タイトル</label>
    <input type="text" name="title" class="form-control">
  </div>


  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">内容</label>
    <textarea name="body" class="form-control" rows="5"></textarea>
  </div>

  <div class="d-grid gap-2 col-4 mx-auto my-5">
    <input type="submit" class="btn btn-primary col my-3" value="投稿する">
    <a href="{{ route('posts.index') }}" button class="btn btn-secondary col my-3" type="button">戻る</a>
  </div>

</form>





@endsection
@extends('layouts.app')
@section('content')

<h1 class="text-center m-5 border-bottom p-1">選手投稿編集フォーム</h1>

<div class = 'panel-body w-50 p-3 mx-auto mb-5'>
                            @if($errors->any())
                            <div class = 'alert alert-danger'>
                                <ul>
                                    @foreach($errors->all() as $message)
                                    <li>{{ $message}}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
</div>


<form method="POST" action="{{ route('posts.update', $val['id']) }}" class="container w-50 p-3 mx-auto mb-5">
@csrf
@method('patch')


  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">ポジション</label>
    <input type="text" name="position" class="form-control" value="{{ $val['position'] }}" >
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">タイトル</label>
    <input type="text" name="title" class="form-control" value="{{ $val['title'] }}" >
  </div>


  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">内容</label>
    <textarea class="form-control"  name="body" rows="5">{{ $val['body'] }}</textarea>
  </div>

  <div class="d-grid gap-2 col-4 mx-auto my-5">
    <input type="submit" class="btn btn-primary col my-3" value="更新する">
    <a href="/posts" button class="btn btn-secondary col my-3" type="button">戻る</a>
  </div>

</form>





@endsection
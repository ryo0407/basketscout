@extends('layouts.app')
@section('content')

<h1 class="text-center m-5 border-bottom p-1">新規選手投稿フォーム</h1>

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


<form method="POST" action="{{route('posts.store') }}" class="container w-50 p-3 mx-auto mb-5">
@csrf


  <div class="mb-3">
    <label for="position" class="form-label">ポジション</label>
      <select name="position" class="form-control">
      @foreach(\Position::P_LIST as $value)
      @if($value == old('position'))
      <option value="{{ $value }}" selected>{{ $value }}</option>
      @endif
      <option value="{{ $value }}">{{ $value }}</option>
      @endforeach
    </select>
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">タイトル</label>
    <input type="text" name="title" class="form-control" value="{{ old('title') }}">
  </div>


  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">内容</label>
    <textarea name="body" class="form-control" rows="5">{{ old('body') }}</textarea>
  </div>

  <div class="d-grid gap-2 col-4 mx-auto my-5">
    <input type="submit" class="btn btn-primary col my-3" value="投稿する">
    <a href="{{ route('posts.index') }}" button class="btn btn-secondary col my-3" type="button">戻る</a>
  </div>

</form>


@endsection
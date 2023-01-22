@extends('layouts.app')
@section('content')

<h1 class="text-center m-5 border-bottom p-1">新規ユーザー登録（スカウト）</h1>


<form class="container w-50 p-3 mx-auto my-5 bg-white">
@csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">チーム名</label>
    <div class="w-50 p-3 mx-auto my-5"></div>
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">チーム住所</label>
    <div class="w-50 p-3 mx-auto my-5"></div>
  </div>

</form>

<div class="d-grid gap-2 col-4 mx-auto my-5">
    <a href="" button class="btn btn-primary col my-5" type="button">この内容で確定する</a>
    <a href="newscout_register" button class="btn btn-secondary col my-3" type="button">戻る</a>
</div>

@endsection
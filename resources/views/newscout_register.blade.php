@extends('layouts.app')
@section('content')

<h1 class="text-center m-5 border-bottom p-1">新規ユーザー登録（スカウト）</h1>


<form class="container w-50 p-3 mx-auto mb-5">
@csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">チーム名</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">チーム住所</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>  

</form>

<div class="d-grid gap-2 col-4 mx-auto my-5">
    <a href="newscout_confirm" button class="btn btn-primary col my-5" type="button">送信</a>
    <a href="" button class="btn btn-secondary col my-3" type="button">ログイン画面に戻る</a>
</div>

@endsection
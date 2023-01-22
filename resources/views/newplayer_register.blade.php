@extends('layouts.app')
@section('content')

<h1 class="text-center m-5 border-bottom p-1">あなたの選手カード編集フォーム</h1>


<form class="container w-50 p-3 mx-auto mb-5">
@csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">プロフィール写真</label>
    <div>
    <img src="" class="img-fluid" alt="...">
    </div>
    <div>
    <input type="file" class="" id="exampleInputEmail1">
    </div>
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">名前</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">チーム名</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">ポジション</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">身長</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">単位　cm</div>
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">体重</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">単位　kg</div>
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>


  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">大会成績・自己PR</label>
    <textarea class="form-control" rows="5"></textarea>
  </div>

</form>

<div class="d-grid gap-2 col-4 mx-auto my-5">
    <a href="newplayer_confirm" button class="btn btn-primary col my-5" type="button">送信</a>
    <a href="" button class="btn btn-secondary col my-3" type="button">ログイン画面に戻る</a>
</div>




@endsection
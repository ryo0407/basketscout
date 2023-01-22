@extends('layouts.app')
@section('content')

<h1 class="text-center m-5 border-bottom p-1">スカウトフォーム</h1>

<form method="POST" action="{{ route('scouts.update', $user_id) }}"class="container w-50 p-3 mx-auto mb-5">
@csrf
@method('patch')
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">担当者名</label>
    
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">スカウトチーム名</label>
    
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">活動場所</label>
   
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>

  </div>


  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">スカウト理由</label>
    <textarea name="scout_reason"  class="form-control" rows="5"></textarea>
  </div>

  <div class="d-grid gap-2 col-4 mx-auto my-5">
    <button type="submit" class="btn btn-primary col my-3">送信する</button>
    <a href="/post_detail" button class="btn btn-secondary col my-5" type="button">戻る</a>
</div>

</form>






@endsection
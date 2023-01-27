@extends('layouts.app')
@section('content')

<h1 class="text-center m-5 border-bottom p-1">スカウト情報登録</h1>

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


<form method="post" action="{{ route('create.newscout') }}" class="container w-50 p-3 mx-auto mb-5">
@csrf

  <div class="mb-5">
    <label for="exampleInputEmail1" class="form-label">チーム名</label>
    <input type="text" name="team_name" class="form-control" value="{{ old('team_name') }}">
  </div>

  <div class="mb-5">
    <label for="exampleInputEmail1" class="form-label">活動場所</label>
    <input type="text" name="active_place" class="form-control" value="{{ old('active_place') }}">
  </div>

  <div class="mb-5">
    <label for="exampleInputEmail1" class="form-label">チームアドレス</label>
    <input type="text" name="team_address" class="form-control" value="{{ old('team_address') }}">
  </div>


  <div class="d-grid gap-2 col-4 mx-auto my-5">
    <input type="submit" class="btn btn-primary col my-3" value="送信する">
    <a href="/posts" button class="btn btn-secondary col my-3" type="button">戻る</a>
</div>

</form>






@endsection
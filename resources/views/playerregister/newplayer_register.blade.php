@extends('layouts.app')
@section('content')

<h1 class="text-center m-5 border-bottom p-1">あなたの新規選手カードフォーム</h1>

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


<form method="post" action="{{ route('create.newplayer') }}" enctype="multipart/form-data" class="container w-50 p-3 mx-auto mb-5">
@csrf
  <div class="mb-5">
    <label class="form-label">プロフィール写真</label>
    <div>
    <input type="file" name="profile_photo" class="" >
    </div>
  </div>


  <div class="mb-5">
    <label for="exampleInputEmail1" class="form-label">チーム名</label>
    <input type="text" name="team_name" class="form-control" value="{{ old('team_name') }}">
  </div>

  <div class="mb-5">
    <label for="main_position" class="form-label">ポジション</label>
    <select name="main_position" class="form-control">
      @foreach(\Position::P_LIST as $value)
      @if($value == old('position'))
      <option value="{{ $value }}" selected>{{ $value }}</option>
      @endif
      <option value="{{ $value }}">{{ $value }}</option>
      @endforeach
    </select>
  </div>

  <div class="mb-5">
    <label for="exampleInputEmail1" class="form-label">身長</label>
    <input type="text" name="height" class="form-control" value="{{ old('height') }}">
    <div id="emailHelp" class="form-text">単位　cm</div>
  </div>

  <div class="mb-5">
    <label for="exampleInputEmail1" class="form-label">体重</label>
    <input type="text" name="weight"  class="form-control" value="{{ old('weight') }}">
    <div id="emailHelp" class="form-text">単位　kg</div>
  </div>


  <div class="mb-5">
    <label for="exampleInputEmail1" class="form-label">大会成績・自己PR</label>
    <textarea name="strong_point" class="form-control" rows="5" >{{ old('strong_point') }}</textarea>
  </div>

  <div class="d-grid gap-2 col-4 mx-auto my-5">
    <input type="submit" class="btn btn-primary col my-3" value="送信する">
    <a href="/posts" button class="btn btn-secondary col my-3" type="button">戻る</a>
</div>

</form>






@endsection
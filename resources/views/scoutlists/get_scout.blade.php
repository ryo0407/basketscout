@extends('layouts.app')
@section('content')

<h1 class="text-center m-5 border-bottom p-1">スカウト一覧</h1>

@if($scout_player->isEmpty())
<div class="container w-50 p-3 mx-auto mb-5 text-center">
現在スカウトはありません
</div>
@else()
<table class="table w-75 p-3 mb-5 mx-auto">
  <thead class="table-dark">
    <tr>
      <th scope="col-3">#</th>
      <th scope="col-3">スカウトチーム名</th>
      <th scope="col-3">担当者名</th>
      <th scope="col-3">スカウト状態</th>
      <th scope="col-3">詳細</th>
    </tr>
  </thead>
  @foreach($scout_player as $sp)
  
  <tbody>
    <tr>
      <th scope="row text-break">1</th>
      <td>{{ $sp['team_name'] }}</td>
      <td>{{ $sp['name'] }}</td>
      @if($sp['scout_flg'] == 0)
      <td>未承諾</td>
      @elseif($sp['scout_flg'] == 1)
      <td>承諾しました</td>
      @else
      <td>お断りしました</td>
      @endif
      <td><a class="btn btn-primary mx-auto" href="{{ route('scoutlists.show',$sp['reason_id']) }}" role="button">詳細</a></td>
    </tr>
  </tbody>
  @endforeach
</table>
@endif

@endsection
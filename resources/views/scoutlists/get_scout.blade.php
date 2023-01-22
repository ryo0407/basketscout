@extends('layouts.app')
@section('content')

<h1 class="text-center m-5 border-bottom p-1">スカウト一覧</h1>

<div class="container w-50 p-3 mx-auto mb-5 text-center">
現在スカウトはありません
</div>

<table class="table w-75 p-3 mb-5 mx-auto">
  <thead class="table-dark">
    <tr>
      <th scope="col-3">#</th>
      <th scope="col-3">スカウトチーム名</th>
      <th scope="col-3">担当者名</th>
      <th scope="col-3">詳細</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row text-break">1</th>
      <td></td>
      <td></td>
      <td><a class="btn btn-primary mx-auto" href="/scout_detail" role="button">詳細</a></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td></td>
      <td></td>
      <td><a class="btn btn-primary" href="/scout_detail" role="button">詳細</a></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td></td>
      <td></td>
      <td><a class="btn btn-primary" href="/scout_detail" role="button">詳細</a></td>
    </tr>
  </tbody>
</table>
@endsection
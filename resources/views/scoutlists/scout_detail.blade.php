@extends('layouts.app')
@section('content')

<h1 class="text-center m-5 border-bottom p-1">スカウト詳細</h1> 


<div class="table table-bordered w-75 p-3 mx-auto my-5 text-break">
    
        <div class="col my-5">
            スカウトチーム名
        </div>
        <div class="col my-5 mx-3">
        {{ $val['team_name'] }}
        </div>
    
   
        <div class="col my-5">
            担当者
        </div>
        <div class="col my-5 mx-3">
        {{ $user->name }}
        </div>
   

        <div class="col my-5">
            メールアドレス
        </div>
        <div class="col my-5 mx-3">
        {{ $user->email }}
        </div>


        <div class="col my-5">
            内容
        </div>
        <div class="col my-5 mx-3">
        {{ $reason->scout_reason }}
        </div>
       
</div>
<div class="d-grid gap-2 col-4 mx-auto my-5">
        @if($reason->scout_flg == 1 || $reason->scout_flg == 2)
            <a href="{{ route('scoutlists.index') }}" button class="btn btn-secondary col my-3" type="button">TOPに戻る</a>
        @else
            <a href="{{ route('scoutlists.edit', $reason->id ) }}" button class="btn btn-primary col my-3" type="button" onclick="return confirm('本当に受理しますか？')">スカウトを受理する</a>
            <a href="{{ route('scoutlists.delete', $reason->id ) }}" button class="btn btn-danger col my-3" type="button" onclick="return confirm('本当にお断りしますか？')">お断りする</a>
            <a href="{{ route('scoutlists.index') }}" button class="btn btn-secondary col my-3" type="button">TOPに戻る</a>
        @endif
</div>




@endsection
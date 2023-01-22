@extends('layouts.app')
@section('content')

<h1 class="text-center m-5 border-bottom p-1">スカウト詳細</h1> 


<div class="table table-bordered w-75 p-3 mx-auto my-5 text-break">
    
        <div class="col my-5">
            スカウトチーム名
        </div>
        <div class="col my-5 mx-3">
            
        </div>
    
   
        <div class="col my-5">
            担当者
        </div>
        <div class="col my-5 mx-3">
            
        </div>
   

        <div class="col my-5">
            メールアドレス
        </div>
        <div class="col my-5 mx-3">
            
        </div>


        <div class="col my-5">
            内容
        </div>
        <div class="col my-5 mx-3">
            あああああああああああああああああああああああああああああああああああああああああああ
            あああああああああああああああああああああああああああああああああああああああああああああ
            ああああああああああああああああああああああああああああああああああああああああああああああ
            ああああああああああああああああああああああああああああああああああああああああああああああ
            あああああああああああああああああああああああああああああああああああああああああああああああ
        </div>
       
</div>

<div class="d-grid gap-2 col-4 mx-auto my-5">
    <a href="/scoutsend_complete" button class="btn btn-primary col my-3" type="button">スカウトを受理する</a>
    <a href="/scoutdelete_confirm" button class="btn btn-danger col my-3" type="button">お断りする</a>
    <a href="/top_player" button class="btn btn-secondary col my-3" type="button">TOPに戻る</a>
</div>


@endsection
@extends('layouts.app')
@section('content')

<img src="storage/images/background-gf23dc940b_1920.jpg" class="img-fluid" alt="...">
@if(Auth::user()->role == 0)

    @if($player == null)

    選手登録がまだなされていません。
    <div class="d-grid gap-2 col-2 mx-auto my-5">
        <a href="{{route('create.newplayer') }}" button class="btn btn-success col my-5" type="button">新規選手登録はこちら</a>
    </div>
    @else


    <h1 class="text-center m-5 border-bottom p-1">あなたの選手カード</h1> 


    <div class="table table-bordered w-75 p-3 mx-auto m-5">

        <div class="row">
                <div class="col-5 border card-img mx-auto my-auto">
                        <img src="{{ $player['profile_photo'] ? asset('storage/'.$player['profile_photo']) : 'storage/images/Unknown_person.jpg'}}" class="card-img" alt="...">
                </div>
                <div class="col-7 border">
                    <div class="row text-break boder">
                        <div class="col-4 ">
                            <div class="row">
                                <div class="col border  py-3 text-center">
                                    名前
                                </div>
                            </div>
                        </div>
                        <div class="col-8 ">
                            <div class="row">
                                <div class="col border  py-3">
                                {{Auth::user()->name}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row text-break boder">
                        <div class="col-4 ">
                            <div class="row">
                                <div class="col border  py-3 text-center">
                                    チーム名
                                </div>
                            </div>
                        </div>
                        <div class="col-8 ">
                            <div class="row">
                                <div class="col border  py-3">
                                {{ $player['team_name']}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row text-break boder">
                        <div class="col-4 ">
                            <div class="row">
                                <div class="col border  py-3 text-center">
                                    ポジション
                                </div>
                            </div>
                        </div>
                        <div class="col-8 ">
                            <div class="row">
                                <div class="col border  py-3">
                                {{ $player['main_position']}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row text-break boder">
                        <div class="col-4 ">
                            <div class="row">
                                <div class="col border  py-3 text-center">
                                    身長
                                </div>
                            </div>
                        </div>
                        <div class="col-8 ">
                            <div class="row">
                                <div class="col border  py-3">
                                {{ $player['height']}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row text-break boder">
                        <div class="col-4 ">
                            <div class="row">
                                <div class="col border  py-3 text-center">
                                    体重
                                </div>
                            </div>
                        </div>
                        <div class="col-8 ">
                            <div class="row">
                                <div class="col border  py-3">
                                {{ $player['weight']}}
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row text-break boder">
                        <div class="col-12 ">
                            <div class="row">
                                <div class="col border  py-3 text-center">
                                    大会成績　/ 自己PR
                                </div>  
                            </div>
                        </div>
                                <p class="text-break"> {{ $player['strong_point']}}</p>     
                    </div>

                </div>
        </div>
    </div>  

    <div class="d-grid gap-2 col-2 mx-auto my-5">
        <a href="{{ route('edit.card', $player['id']) }}" button class="btn btn-success col my-5" type="button">編集</a>
    </div>
  

    @endif

@else

    @if($pic == null)

    スカウト登録がまだなされていません。
    <div class="d-grid gap-2 col-2 mx-auto my-5">
        <a href="{{route('create.newscout') }}" button class="btn btn-success col my-5" type="button">新規スカウト登録はこちら</a>
    </div>

    @else

    <h1 class="text-center m-5 border-bottom p-1">担当者情報</h1> 

    <div class="table table-bordered w-75 p-3 mx-auto m-5">

        <div class="row">
                <div class="col-12 border">
                    <div class="row text-break boder">
                        <div class="col-4 ">
                            <div class="row">
                                <div class="col border  py-3 text-center">
                                    担当者名
                                </div>
                            </div>
                        </div>
                        <div class="col-8 ">
                            <div class="row">
                                <div class="col border  py-3">
                                    {{Auth::user()->name}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row text-break boder">
                        <div class="col-4 ">
                            <div class="row">
                                <div class="col border  py-3 text-center">
                                    チーム名
                                </div>
                            </div>
                        </div>
                        <div class="col-8 ">
                            <div class="row">
                                <div class="col border  py-3">
                                {{ $pic['team_name']}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row text-break boder">
                        <div class="col-4 ">
                            <div class="row">
                                <div class="col border  py-3 text-center">
                                    活動場所
                                </div>
                            </div>
                        </div>
                        <div class="col-8 ">
                            <div class="row">
                                <div class="col border  py-3">
                                {{ $pic['active_place']}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row text-break boder">
                        <div class="col-4 ">
                            <div class="row">
                                <div class="col border  py-3 text-center">
                                    チーム住所
                                </div>
                            </div>
                        </div>
                        <div class="col-8 ">
                            <div class="row">
                                <div class="col border  py-3">
                                {{ $pic['team_address']}}
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
        </div>
    </div>  

    <div class="d-grid gap-2 col-2 mx-auto my-5">
        <a href="{{ route('edit.scout', $pic['id']) }}" button class="btn btn-success col my-5" type="button">編集</a>
    </div>
    @endif
@endif



<h1 class="text-center m-5 border-bottom p-1">Basketball player リスト</h1> 

<div class="d-grid gap-2 col-2 mx-auto my-5">
    <a href="{{ route('posts.create') }}" button class="btn btn-danger col py-2 my-5" type="button">新規投稿</a>
</div>

<form action="{{ route('posts.index') }}" method="get">
@csrf

<input type="hidden" id="count" value="6">

<div class="input-group w-50 p-3 mx-auto mb-5">
    <input type="text" class="form-control" name="keyword" id="keyword" value="">
    <span class="input-group-btn">
        <button class="btn btn-primary" type="submit">検索</button>
    </span>
</div>
</form>


<div class="row row-cols-1 row-cols-md-3 g-4 mx-5" id="content">

    @foreach($vals as $val)

        <div class="col mb-5">
            <div class="card">

            <div class="card-body">
                    <p class="card-title">名前：{{ $val['user']['name']}}</p>
                    <p class="card-title">タイトル：{{ $val['title']}}</p>
                    <p class="card-text">ポジション：{{ $val['position']}}</p>
                    <p class="card-text">チーム名：{{ $pic['team_name'] }}</p>
                    <a href="{{ route('posts.show',$val['id']) }}" class="btn btn-primary text-center">投稿詳細</a>
                </div>
                <div class="card-footer">
                    <small class="text-muted">{{ $val['created_at']}}</small>
                </div>
            </div>
        </div>

    @endforeach  

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(function(){

    // スクロールされた時に実行
    $(window).on("scroll", function () {
        // スクロール位置
        const bodyHeight = $(document).innerHeight();
        const windowHeight = window.innerHeight;

        let st = $(window).scrollTop();
        const bottom = bodyHeight - windowHeight - st;
        // 画面最下部にスクロールされている場合
        if (bottom <= 1) {
            // ajaxコンテンツ追加処理
            ajax_add_content()
        }
    });

    // ajaxコンテンツ追加処理
    function ajax_add_content() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
            // ajax post送信するために必要
        });
        // 追加コンテンツ
        var add_content = "";
        // コンテンツ件数
        var count = $("#count").val();
        var keyword = $("#keyword").val();
        // ajax処理
        $.post({
            type: "post",
            datatype: "json",
            url: "/infinite_scroll",
            data:{
                 counts : count,
                 keyword : keyword,
                 }
        }).done(function(data){
            // コンテンツ生成
            console.log(data);
            $.each(data[1],function(key, val){
                add_content = 
            
         ` <div class="col mb-5">
                <div class="card">

                    <div class="card-body">
                        <p class="card-title">名前：${val.user.name}</p>
                        <p class="card-title">タイトル：${val.title}</p>
                        <p class="card-text">ポジション：${val.position}</p>
                        <p class="card-text">チーム名 <br></p>
                        <a href="/post_detail/${val.id}" class="btn btn-primary text-center">投稿詳細</a>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">${val.created_at}</small>
                    </div>

                </div>
            </div>`;

                $("#content").append(add_content);
            });
            // 取得件数を加算してセット
            console.log(data[1]);
            $("#count").val(data[1]);
        }).fail(function(e){
            console.log(e);
        })
    }
});
</script>
@endsection
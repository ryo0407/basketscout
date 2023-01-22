@extends('layouts.app')
@section('content')

<img src="storage/images/background-gf23dc940b_1920.jpg" class="img-fluid" alt="...">

<h1 class="text-center m-5 border-bottom p-1">あなたの選手カード</h1> 

<div class="table table-bordered w-75 p-3 mx-auto m-5">
    <div class="row">
        <div class="col border">
            id 0001
        </div>
    </div>
    <div class="row">
            <div class="col-5 border card-img mx-auto my-auto">
                    <img src="storage/images/Unknown_person.jpg" class="card-img" alt="...">
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
                                lkjdfkbvkldfbvkmjadklfbjnkladnfblkjndaslkfbnakldfbmvalknfvbadlkfnblkdaf
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
                                lkjdfkbvkldfbvkmjadklfbjnkladnfblkjndaslkfbnakldfbmvalknfvbadlkfnblkdaf
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
                                lkjdfkbvkldfbvkmjadklfbjnkladnfblkjndaslkfbnakldfbmvalknfvbadlkfnblkdaf
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
                                lkjdfkbvkldfbvkmjadklfbjnkladnfblkjndaslkfbnakldfbmvalknfvbadlkfnblkdaf
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
                                lkjdfkbvkldfbvkmjadklfbjnkladnfblkjndaslkfbnakldfbmvalknfvbadlkfnblkdaf
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row text-break boder">
                    <div class="col-4 ">
                        <div class="row">
                            <div class="col border  py-3 text-center">
                                メールアドレス
                            </div>
                        </div>
                    </div>
                    <div class="col-8 ">
                        <div class="row">
                            <div class="col border  py-3">
                                lkjdfkbvkldfbvkmjadklfbjnkladnfblkjndaslkfbnakldfbmvalknfvbadlkfnblkdaf
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row text-break boder">
                            <div class="col border  py-3 text-center">
                                大会成績　/ 自己PR
                            </div>  
                            <p class="text-break">mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm</p>     
                </div>

            </div>
    </div>
</div>    

<div class="d-grid gap-2 col-2 mx-auto my-5">
    <a href="/playercard_edit_form" button class="btn btn-success col my-5" type="button">編集</a>
</div>



<h1 class="text-center m-5 border-bottom p-1">Basketball player リスト</h1> 

<div class="d-grid gap-2 col-2 mx-auto my-5">
    <a href="{{ route('posts.create') }}" button class="btn btn-danger col py-2 my-5" type="button">新規投稿</a>
</div>

<div class="input-group w-50 p-3 mx-auto mb-5">
    <input type="text" class="form-control ">
    <span class="input-group-btn">
        <button class="btn btn-primary" type="submit">検索</button>
    </span>
</div>


<div class="row row-cols-1 row-cols-md-3 g-4 mx-5">

@foreach($vals as $val)
    <div class="col mb-5">
        <div class="card">
        <img src="storage/images/Unknown_person.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-title">{{ $val['name']}}</p>
                <p class="card-title">タイトル：{{ $val['title']}}</p>
                <p class="card-text">ポジション：{{ $val['position']}}</p>
                <p class="card-text">チーム名</p>
                <!-- <a href="/posts/{{$val['id']}}" class="btn btn-primary text-center">投稿詳細</a> -->
                <a href="{{ route('posts.show',$val['id']) }}" class="btn btn-primary text-center">投稿詳細</a>
            </div>
            <div class="card-footer">
            <small class="text-muted">{{ $val['created_at']}}</small>
            </div>
        </div>
    </div>
@endforeach   

@endsection
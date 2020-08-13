@extends('layouts.app')

@section('content')
    <header style="background-color:skyblue">保育・教育業界から次のステップへ</br>～保育・教育業界から異業種への転経験投稿サイト～
           <div class = "text center">
            <nav id="global_navi">
                <ul>
                    <li class="current"><a href="posts.welcome">ホーム</a></li>
                    <li><a href="posts.index">投稿一覧</a></li>
                    <li><a href="">ログイン</a></li>
                    <li><a href="signup.get">会員登録</a></li>
                </ul>
            </nav>
            </div>
    </header>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-2" style="background-color:red;">Red</div>
    <div class="col-sm-8" style="background-color:blue;">Blue</div>
    <div class="col-sm-2" style="background-color:yellow;">Yellow</div>
  </div>
</div>
@endsection
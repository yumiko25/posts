@extends('layouts.app')

@section('content')
 @if (Auth::check())
        <div class="row">
        {{-- 投稿一覧 --}}
            @include('posts.index')
        </div>
@else
    <header style="background-color:skyblue">
        <h1>保育・教育業界から次のステップへ</br>～保育・教育業界から異業種への転経験投稿サイト～</h1>
           <div class = "row">
                <div class="gnavi__inner">
                <nav id="global_navi">
                    <ul>
                        <li class="current"><a href="/">ホーム</a></li>
                        <li><a href="home">投稿一覧</a></li>
                        <li><a href="login">ログイン</a></li>
                        <li><a href="signup">会員登録</a></li>
                    </ul>
                 </div> 
                 </nav>
            </div>
    </header>
    <div class="row">
            <aside class="col-sm-4">
                <h3>ホームページの概要</h3>
            </aside>
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">あき</h3>
                    </div>
                    <div class="card-body">
                       ４年目保育士
                    </div>
                </div>
            </div>
    </div>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-2" style="background-color:red;">Red</div>
    <div class="col-sm-8" style="background-color:blue;">Blue</div>
    <div class="col-sm-2" style="background-color:yellow;">Yellow</div>
  </div>
</div>
@endif
@endsection
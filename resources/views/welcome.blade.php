@extends('layouts.app')

@section('content')
 @if (Auth::check())
        <div class="row">
        {{-- 投稿一覧 --}}
            @include('posts.posts')
        </div>
@else
    <header style="background-color:skyblue">保育・教育業界から次のステップへ</br>～保育・教育業界から異業種への転経験投稿サイト～
           <div class = "text center">
            <nav id="global_navi">
                <ul>
                    <li class="current"><a href="posts.welcome">ホーム</a></li>
                    <li><a href="posts.index">投稿一覧</a></li>
                    <li><a href="login">ログイン</a></li>
                    <li><a href="signup.get">会員登録</a></li>
                </ul>
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
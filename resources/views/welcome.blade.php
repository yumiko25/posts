@extends('layouts.app')

@section('content')
 @if (Auth::check())
        <div class="row">
        {{-- 投稿一覧 --}}
            @include('posts.index')
        </div>
@else
  <div class="content">
            <div class="title">
                保育・教育業界から次のステップへ</br>～保育・教育業界から異業種への転職経験投稿サイト～
            </div>
 
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
@endif
@endsection
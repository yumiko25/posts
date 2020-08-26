@extends('layouts.app')

@section('content')

<h1>投稿一覧</h1>

  <div class="form-group">  
    <form action="{{ route('home') }}" method="get">
      <input type="text" class="form-control" name="cond_title" placeholder="検索したいキーワードを入力してください">
    </form>
    　<input type="submit" value="検索" class="btn btn-info">
　</div>
　
 <!--<div class="container-fluid">-->
 <!--       <div class="row">-->
 <!--           <div class="col-sm-4" style="padding:20px 0; padding-left:0px;">-->
 <!--           <form class="form-inline" action="{{url('/home')}}">-->
 <!--             <div class="form-group">-->
 <!--             <input type="text" name="keyword" value="" class="form-control" placeholder="検索したいキーワードを入力してください">-->
 <!--             </div>-->
 <!--             <input type="submit" value="検索" class="btn btn-info">-->
 <!--           </form>-->
 <!--           </div>-->
             
           
    <!--    </div>-->
    <!--</div>-->
    
   
    @if (count($posts) > 0)
        <table class="table table-striped">
            <thead>
                <!--色指定-->
                <tr class ="table-primary">
                    <th>タイトル</th>
                    <th>名前</th>
                    <th>前職→現職</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr>
                    {{-- メッセージ詳細ページへのリンク --}}
                    <td>{!! link_to_route('posts.show', $post->title, ['post' => $post->id]) !!}</td>
                    <td>{{ $post->name }}</td>
                    <td>{{ $post->work }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    
    {{-- ページネーションのリンク --}}
    {{ $posts->links() }}

    
    {{-- 新規投稿作成ページへのリンク --}}
    {!! link_to_route('posts.create', '新規投稿', [], ['class' => 'btn btn-primary']) !!}
    
    <div class="secondary">
    <span class="secondary-title">お願い</span>
    <p>投稿を作成する際には、会員登録・ログインをお願いします。</p>
</div>

@endsection
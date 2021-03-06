@extends('layouts.app')

@section('content')
<div class="text-center">
<h1>投稿一覧</h1>
</div>

    <div class = "row">
      <div class="col-md-6 m-auto">
          <div class="form-group">  
            <form action="{{ route('home') }}" method="get">
              <input type="text" class="form-control" name="cond_title" value="{{ ($cond_title) }}"  placeholder="検索したいキーワードを入力してください">
        　     <input type="submit" value="検索" class="btn btn-info">
            </form>
    　     </div>
　    </div>
  
   
        <div class="col-md-10 m-auto">
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
        </div>
      
            <div class="col-md-6 m-auto">     
                <div class="secondary">
                    <span class="secondary-title">お願い</span>
                    <p>投稿を作成する際には、会員登録・ログインをお願いします。</p>
                </div>
            </div>
    </div>
@endsection
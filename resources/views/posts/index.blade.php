@extends('layouts.app')

@section('content')

<h1>投稿一覧</h1>

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
                     @auth
                        @if( ( $post->user_id ) === ( Auth::user()->id ) )
                            <td><a href="{{ route('posts.edit') }}?id={{ $post->id }}">編集</a></td>
                            <td><a href="{{ route('posts.delete') }}?id={{ $post->id }}">削除</a></td>
                        @endif
                    @endauth
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    
    {{-- ページネーションのリンク --}}
    {{ $posts->links() }}

    
    {{-- 新規投稿作成ページへのリンク --}}
    {!! link_to_route('posts.create', '新規投稿', [], ['class' => 'btn btn-primary']) !!}


@endsection
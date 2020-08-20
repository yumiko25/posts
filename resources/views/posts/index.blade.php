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
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    
   
    
    {{-- 新規投稿作成ページへのリンク --}}
    {!! link_to_route('posts.create', '新規投稿', [], ['class' => 'btn btn-primary']) !!}


@endsection
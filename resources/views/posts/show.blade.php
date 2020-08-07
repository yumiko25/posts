@extends('layouts.app')

@section('content')

<h1>title = {{ $post->title }}</h1>

    <table class="table table-bordered">
        <tr>
            <th>タイトル</th>
            <td>{{ $post->title }}</td>
        </tr>
        <tr>
            <th>ニックネーム</th>
            <td>{{ $post->name }}</td>
        </tr>
        <tr>
            <th>前職→現職</th>
            <td>{{ $post->work }}</td>
        </tr>
        <tr>
            <th>転職をして良かったこと</th>
            <td>{{ $post->good_thing_content }}</td>
        </tr>
        <tr>
            <th>転職をして気になったこと</th>
            <td>{{ $post->bad_thing_content }}</td>
        </tr>
        <tr>
            <th>アドバイス</th>
            <td>{{ $post->advice }}</td>
        </tr>
    </table>
    
    {{-- 投稿編集ページへのリンク --}}
    {!! link_to_route('posts.edit', 'この投稿を編集', ['post' => $post->title], ['class' => 'btn btn-light']) !!}

    {{-- 投稿削除フォーム --}}
    {!! Form::model($post, ['route' => ['posts.destroy', $post->title], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
    
@endsection
@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>{{ $post->title }}</h1>
    </div>       
    <div class="row">
         <div class="col-md-10 m-auto">
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
    @auth
        @if(Auth::user()->id === $post->user_id)
                {!! link_to_route('posts.edit', 'この投稿を編集', ['post' => $post->id], ['class' => 'btn btn-light']) !!}
        @csrf
        @endif
    @endauth
 
    
    {{-- 投稿削除フォーム --}}
    @auth
        @if(Auth::user()->id === $post->user_id)
    	    {!! Form::model($post, ['route' => ['posts.destroy', $post->id], 'method' => 'delete']) !!}
        @csrf
            {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        @endif
    @endauth
        </div>
     </div>    
         
@endsection
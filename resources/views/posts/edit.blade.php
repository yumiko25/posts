@extends('layouts.app')

@section('content')

<h1>{{ $post->title }} の編集</h1>

    <div class="row">
        <div class="col-6">
            {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'put']) !!}

                <div class="form-group">
                    {!! Form::label('title', 'タイトル:') !!}
                    {!! Form::text('title', null, ['class' => 'form-control']) !!}
                    
                    {!! Form::label('name', 'ニックネーム:') !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    
                    {!! Form::label('work', '前職→現職:') !!}
                    {!! Form::text('work', null, ['class' => 'form-control']) !!}
                    
                    {!! Form::label('good_thing_content', '転職をして良かったこと:') !!}
                    {!! Form::text('good_thing_content', null, ['class' => 'form-control']) !!}
                    
                    {!! Form::label('bad_thing_content', '転職をして気になったこと:') !!}
                    {!! Form::text('bad_thing_content', null, ['class' => 'form-control']) !!}
                    
                    {!! Form::label('advice', 'アドバイス:') !!}
                    {!! Form::text('advice', null, ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('更新', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>

@endsection
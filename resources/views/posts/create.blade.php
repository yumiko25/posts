@extends('layouts.app')

@section('content')
<div class="text-center">
    <h1>投稿の作成</h1>
 </div>
    <div class="row">
        <!--<div class="col-10 m-auto">-->
        <div class="col-sm-9 offset-sm-3">
            {!! Form::model($post, ['route' => 'posts.store']) !!}

                <div class="form-group">
                    {!! Form::label('title', 'タイトル:') !!}
                    {!! Form::text('title', null, ['class' => 'form-control']) !!}
                </div>  
                <div class="form-group">
                    {!! Form::label('name', 'ニックネーム:') !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">   
                    {!! Form::label('work', '前職→現職:') !!}
                    {!! Form::text('work', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">    
                    {!! Form::label('good_thing_content', '転職をして良かったこと:') !!}
                    {!! Form::textarea('good_thing_content', null, ['class' => 'form-control', 'size' => '15x3']) !!}
                   
                </div>
                <div class="form-group">    
                    {!! Form::label('bad_thing_content', '転職をして気になったこと:') !!}
                    {!! Form::text('bad_thing_content', null, ['class' => 'form-control', 'size' => '15x3']) !!}
                </div>
                <div class="form-group">    
                    {!! Form::label('advice', 'アドバイス:') !!}
                    {!! Form::text('advice', null, ['class' => 'form-control', 'size' => '15x3']) !!}
                </div>
               
                {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>

@endsection
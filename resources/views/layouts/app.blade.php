<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>保育・教育業界から次のステップへ</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="保育・教育業界から異業種の仕事に転職した経験談を投稿する投稿サイトです。これから転職を目指している方に向けて、保育士や幼稚園教諭・教師から異業種に転職した転職方法や経験談・アドバイスなどを詳しく教えて下さい。">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <link href="{{asset('css/styles.css')}}" rel="stylesheet">
        <link rel="shortcut icon" href="{{ asset('/img/hoikushi-hiyoko.png') }}">
    </head>
    
    <body>
       {{-- ナビゲーションバー --}}
        @include('commons.navbar')

        <div class="container">
            {{-- エラーメッセージ --}}
            @include('commons.error_messages')

            @yield('content')
        </div>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    </body>
</html>
    
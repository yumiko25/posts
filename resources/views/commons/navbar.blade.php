 <header class="mb-4">
            <nav class="navbar navbar-expand-sm navbar-light" style="background-color: #e3f2fd;">
                <a class="navbar-brand" href="/">保育・教育業界から次のステップへ</a>
                
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="nav-bar">
                    <ul class="navbar-nav mr-auto"></ul>
                     <ul class="navbar-nav navbar-right">
                         @if (Auth::check())
                         <li class="nav-item">{!! link_to_route('posts.index', '投稿一覧', [], ['class' => 'nav-link']) !!}</li>
                         <li class="nav-item">{!! link_to_route('posts.create', '新規作成', [], ['class' => 'nav-link']) !!}</li>
                             <li class="nav-item dropdown">
                                  <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }}</a>
                                  <ul class="dropdown-menu dropdown-menu-right">
                                       <li class="dropdown-divider"></li>
                                       {{-- ログアウトへのリンク --}}
                           　           <li class="dropdown-item">{!! link_to_route('logout.get', 'ログアウト') !!}</li>
                           　      </ul>
                              </li>
                         @else                
                                       {{-- ユーザ登録ページへのリンク --}}
                                       <li>{!! link_to_route('signup.get', '会員登録', [], ['class' => 'nav-link']) !!}</li>
                                       {{-- ログインページへのリンク --}}
                                       <li>{!! link_to_route('login', 'ログイン', [], ['class' => 'nav-link']) !!}</li>
                                       {{-- 投稿一覧 --}}
                                       <li>{!! link_to_route('home', '投稿一覧', [], ['class' => 'nav-link']) !!}</li>
                        @endif
                    </ul>
                </div>
            </nav>
        </header>
        
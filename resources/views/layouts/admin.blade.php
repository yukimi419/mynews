<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="uft-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token()}}">
        <title>@yield('title')</title>
        <script src="{{ secure_asset('js/app.js') }}" defer></script>
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
        <!-- asset()はpublicディレクトリのパスを返す -->
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('css/admin.css') }}" rel="stylesheet">
    </head>
    
    <body>
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-dark navbar-laravel">
                <div class="container">
                    <!-- //{{ url('/') }} はweb.php内の/を参照 -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <!-- configディレクトリ内のapp.php内の項目nameを参照する。nameにデータが無い場合はLaravelと表示 -->
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggle-icon"> </span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side -->
                        <ul class="navbar-nav mr-auto">
                            
                        </ul>
                        
                        <!-- Right Side -->
                        <ul class="navbar-nav ml-auto">
                            @guest
                                <li>
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        <!-- //Auth::user() でログインユーザー情報を取得、//user()->name でログインユーザー情報を表示 -->
                                        {{ Auth::user()->name }} <span class="caret"></span>    
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                            {{ __('logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
            <main class="py-4">
                @yield('content')
            </main>
        </div>
    </body>
</html>
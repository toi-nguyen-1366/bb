<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{env('COMPANY_NAME')}}</title>

    <!-- Styles -->
    <link href="/public/frontend/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="/admin">{{WEB_MAKER_SOFTWARE}}</a>
                </div>
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    {{-- <ul class="nav navbar-nav navbar-right">
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Đăng nhập</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Đăng xuất
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul> --}}
                </div>
            </div>
            {{-- <footer class=main-footer style="margin-left: 0px;position: fixed;bottom: 0px;width: 100%;background: #fff;padding: 15px;color: #444;border-top: 1px solid #d2d6de;text-align: center;">
              <strong>Website được thiết kế bởi <a href={{WEB_MAKER_URL}} target=_blank>{{WEB_MAKER_NAME}}</a></strong> sử dụng phần mềm {{WEB_MAKER_SOFTWARE}} - Điện thoại/Zalo hỗ trợ: <a href=tel:{{WEB_MAKER_PHONE_URL}} target=_blank>{{WEB_MAKER_PHONE}}</a> - Email: <a href=mailto:{{WEB_MAKER_EMAIL}} target=_blank>{{WEB_MAKER_EMAIL}}</a>
            </footer> --}}
        </nav>

        @yield('content')
    </div>
    <!-- Scripts -->
    <script src="js/app.js"></script>
</body>
</html>

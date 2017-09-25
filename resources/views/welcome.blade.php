<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="#">
                    @if (Session::has('flash_message'))
                        <div class="alert alert-{{ Session::get('flash_message_type') }}">
                            {{ Session::get('flash_message') }}
                        </div>
                    @endif

                    @if (session()->has('flash_message'))
                        <div class="alert alert-{{ session('flash_message_type') }}">
                            {{ session('flash_message') }}
                        </div>
                    @endif
                </div>
                <div class="title m-b-md">
                    Laravel
                </div>
            </div>
        </div>
        <div class="">
            @if(empty($people))
                <div class="#">No People</div>
            @else
                @foreach ($people as $person)
                <li>{{$person}}</li>
                @endforeach
            @endif
        </div>
    </body>
</html>

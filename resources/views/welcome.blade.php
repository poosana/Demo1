<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            body {
                font-family: 'itim', sans-serif;
                background-color: rgb(219, 204, 189);
            }
            img {
                display: block;
                margin-left: auto;
                margin-right: auto;
                width: 100%;
            }
            .center {
            margin: 0;
            position: absolute;
            top: 60%;
            left: 50%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            }
            .btn-outline-home {
            color: rgb(175, 143, 110);
            border-color: rgb(175, 143, 110);
            }
            .btn-outline-home:hover {
            color: #fff;
            background-color: rgb(175, 143, 110);
            border-color: rgb(175, 143, 110);
            }
            .btn-outline-home:focus, .btn-outline-home.focus {
            box-shadow: 0 0 0 0.2rem rgb(192, 166, 140);
            }
            .btn-outline-home.disabled, .btn-outline-home:disabled {
            color: rgb(175, 143, 110);
            background-color: transparent;
            }
            .btn-outline-home:not(:disabled):not(.disabled):active, .btn-outline-home:not(:disabled):not(.disabled).active, .show > .btn-outline-home.dropdown-toggle {
            color: #fff;
            background-color: rgb(175, 143, 110);
            border-color: rgb(175, 143, 110);
            }
            .btn-outline-home:not(:disabled):not(.disabled):active:focus, .btn-outline-home:not(:disabled):not(.disabled).active:focus, .show > .btn-outline-home.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.2rem rgb(192, 166, 140);
            }
        </style>
    </head>
    <body class="antialiased" >
            <div class = "logo">
                <svg width="1000" height="200">
                    <img src="{{URL::asset('/image/Logo/Meow Shop.png')}}" alt="Meow Shop Logo" style="width:600px">
                </svg>
            </div>

            <div class="center">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="btn btn-lg btn-outline-home">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-lg btn-outline-home " >Log in</a>
                        &emsp;&emsp;&emsp;&emsp;
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-lg btn-outline-home">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </body>
</html>

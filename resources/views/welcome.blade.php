<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .ascii-art {
                font-family: monospace;
                white-space: pre;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif


            <div class="content">
                <div class="ascii-art">
_____ _   _ ____    _    _   _           _   _  ___  _   _ ____  _   _ __  __    _    _   _ ____
| ____| | | / ___|  / \  | \ | |         | | | |/ _ \| | | / ___|| | | |  \/  |  / \  | \ | |  _ \
 |  _| | |_| \___ \ / _ \ |  \| |         | |_| | | | | | | \___ \| |_| | |\/| | / _ \ |  \| | | | |
 | |___|  _  |___) / ___ \| |\  |         |  _  | |_| | |_| |___) |  _  | |  | |/ ___ \| |\  | |_| |
|_____|_| |_|____/_/   \_\_| \_|         |_| |_|\___/ \___/|____/|_| |_|_|  |_/_/   \_\_| \_|____/
                </div>

                <div class="links">
                    <a href="mailto:houshmand2007@gmail.com">e-Mail</a>
                    <a href="tel:989123471655">Tel</a>
                    <a href="https://www.linkedin.com/in/ehsan-houshmand-85925787">Linkedin</a>
                    <a href="https://github.com/ehsanhoushmand">GitHub</a>
                    <a href="https://stackoverflow.com/users/9229618/ehsan-houshmand">Stack Overflow</a>
                </div>
            </div>
        </div>
    </body>
</html>

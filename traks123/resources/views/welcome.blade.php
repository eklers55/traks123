<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GODIGASAMAKSA</title>

  <!-- theme -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Theme CSS -->
  <link rel="stylesheet" href="{{ URL::asset('css/freelancer.min.css') }}">
        <style>
            html, body {
                background-image: url('{{ asset('background.jpg')}}');
                background-color: rgba(255, 255, 255, 0.9);
                background-blend-mode: lighten;
                color: #1C1919;
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
                font-size: 140px;
            }

            .links > a {
                color: #1C1919;
                padding: 0 25px;
                font-size: 20px;
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
                    @auth
                        <a href="{{ url('/atalgojums') }}">Godīga Samaksa</a>
                    @else
                        <a href="{{ route('login') }}">Ieiet</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Reģistrēties</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    GODĪGA SAMAKSA
                </div>

                
            </div>
        </div>
    </body>
</html>

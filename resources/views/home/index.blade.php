<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/style.css') }}">
    <title>HRM</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

</head>

</head>

<body>
    <div class="container">
        <div class="header">
            <img src="images/logo.png" class="logo">
            <nav>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Community</a></li>
                    <li><a href="">Contact</a></li>

                    <li><a href=""> @auth
                                <a href="{{ url('/home') }}" class="btn" id="btn1">Home</a>
                            @else
                                <a href="{{ route('login') }}" class="btn" id="btn2"
                                    style="font-weight: bold; color:rgb(0, 153, 255); font-size: 18px; padding: 5px 10px; border:1px solid rgb(98, 0, 255);">Login</a>
                        </li>
                        <li><a href="">
                                @if (Route::has('login'))

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="btn" id="btn2"
                                            style="font-weight: bold; color:rgb(0, 153, 255); font-size: 18px; padding: 5px 10px; border:1px solid rgb(98, 0, 255);">Register</a>
                                    @endif
                                @endauth
                            @endif
                        </a></li>


                </ul>
            </nav>

        </div>

        <div class="content">
            <div class="text">
                <br><br><br>
                <h1>Greate history Bright future. <br></h1>
            </div>
        </div>
        <img src="images/logo.png"
            style="height: 50%; width: 25%; top: 55%; left: 70%; transform: translate(-50%,-50%);
    position: absolute;">

    </div>
</body>

</html>
</div>

</body>

</html>

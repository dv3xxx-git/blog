<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

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
                        <a href="{{ url('/login') }}">Sign in</a>
                        <a href="{{ url('/register') }}">Sign Up</a>
                    @endif
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('create_paste') }}" method="post">
              {{csrf_field()}}
              <textarea name="name" placeholder="Введите пасту" id="name"> </textarea>
              <select name="Time">
                <option value="s1">Never</option>
                <option value="s2">10 минут</option>
                <option value="s3">1 час</option>
                <option value="s4">3 часа</option>
                <option value="s5">1 день</option>
                <option value="s6">1 неделя</option>
                <option value="s7">1 месяц</option>
              </select>
              <select name="PastePriv">
                <option value="p1">общий доступ</option>
                <option value="p2">По ссылке</option>
                <option value="p3">Приватный</option>
              <select>
              <input type="text" name="Pname" placeholder="введите название пасты" id="Pname"></input>
              <button type="submit" class="btn btn-success">Добавить пасту</button>
            </form>

        </div>
    </body>
</html>

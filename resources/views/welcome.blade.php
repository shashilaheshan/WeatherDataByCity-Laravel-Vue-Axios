<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{csrf_token()}}">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                /*margin: 0;*/
            }

            /*.full-height {*/
                /*height: 100vh;*/
            /*}*/

            /*.flex-center {*/
                /*align-items: center;*/
                /*display: flex;*/
                /*justify-content: center;*/
            /*}*/

            /*.position-ref {*/
                /*position: relative;*/
            /*}*/

            /*.top-right {*/
                /*position: absolute;*/
                /*right: 10px;*/
                /*top: 18px;*/
            /*}*/


            /*.title {*/
                /*font-size: 84px;*/
            /*}*/

            /*.links > a {*/
                /*color: #636b6f;*/
                /*padding: 0 25px;*/
                /*font-size: 13px;*/
                /*font-weight: 600;*/
                /*letter-spacing: .1rem;*/
                /*text-decoration: none;*/
                /*text-transform: uppercase;*/
            /*}*/

            /*.m-b-md {*/
                /*margin-bottom: 30px;*/
            /*}*/
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
             <div id="app">
                 <Weather></Weather>
             </div>

            </div>
        </div>
    <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>

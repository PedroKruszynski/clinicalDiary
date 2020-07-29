<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">

    </head>

    <body>
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex justify-content-center align-items-center">
                        <img class="img-fluid"
                             id="logo"
                             src="data:image/svg+xml;base64,PHN2ZyBpZD0iQ2FwYV8xIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCA1MTAuNDQ3IDUxMC40NDciIGhlaWdodD0iNTEyIiB2aWV3Qm94PSIwIDAgNTEwLjQ0NyA1MTAuNDQ3IiB3aWR0aD0iNTEyIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxnIGlkPSJYTUxJRF8zNzNfIj48cGF0aCBpZD0iWE1MSURfMjA2XyIgZD0ibTEzOS4yMjQgNTEwLjQ0N2gtNi4zMzNjLTQwLjYyIDAtNzMuNjY3LTMzLjA0Ny03My42NjctNzMuNjY3czMzLjA0Ny03My42NjcgNzMuNjY3LTczLjY2N2g1MHYtNDcuNTYzaDMwdjQ3LjU2M2gxMDkuMzMzYzI4LjY1MSAwIDUyLjQyNS0xNy43NDkgNTkuMTU3LTQ0LjE2NWwyOS4wNzEgNy40MDhjLTEwLjE3NiAzOS45My00NS42MzIgNjYuNzU3LTg4LjIyOCA2Ni43NTdoLTEwOS4zMzR2NDMuNjY3YzAgNDAuNjItMzMuMDQ2IDczLjY2Ny03My42NjYgNzMuNjY3em0tNi4zMzQtMTE3LjMzNGMtMjQuMDc4IDAtNDMuNjY3IDE5LjU4OS00My42NjcgNDMuNjY3czE5LjU4OSA0My42NjcgNDMuNjY3IDQzLjY2N2g2LjMzM2MyNC4wNzggMCA0My42NjctMTkuNTg5IDQzLjY2Ny00My42Njd2LTQzLjY2N3oiIGZpbGw9IiMwMDY1YTMiLz48cGF0aCBpZD0iWE1MSURfMTY4OV8iIGQ9Im0zODEuMzggMzE4Ljk0OGMtNi43MzIgMjYuNDE2LTMwLjUwNSA0NC4xNjUtNTkuMTU3IDQ0LjE2NWgtMTA5LjMzM3YtNDcuNTYzaC0xNS42Njd2MTY2LjU2NWM5LjgwMS0xMi41MTEgMTUuNjY3LTI4LjI0NyAxNS42NjctNDUuMzM2di00My42NjdoMTA5LjMzM2M0Mi41OTYgMCA3OC4wNTItMjYuODI3IDg4LjIyOC02Ni43NTd6IiBmaWxsPSIjMDAzMTdlIi8+PGNpcmNsZSBpZD0iWE1MSURfMTk0XyIgY3g9IjM5OC44OSIgY3k9IjI4NS40NDciIGZpbGw9IiMwMDMxN2UiIHI9IjM3LjMzMyIvPjxwYXRoIGlkPSJYTUxJRF8xOTZfIiBkPSJtMzk4Ljg5IDMzNy43OGMtMjguODU2IDAtNTIuMzMzLTIzLjQ3Ny01Mi4zMzMtNTIuMzMzIDAtMjguODU3IDIzLjQ3Ny01Mi4zMzQgNTIuMzMzLTUyLjMzNCAyOC44NTcgMCA1Mi4zMzMgMjMuNDc3IDUyLjMzMyA1Mi4zMzQuMDAxIDI4Ljg1Ny0yMy40NzYgNTIuMzMzLTUyLjMzMyA1Mi4zMzN6bTAtNzQuNjY3Yy0xMi4zMTQgMC0yMi4zMzMgMTAuMDE5LTIyLjMzMyAyMi4zMzQgMCAxMi4zMTQgMTAuMDE5IDIyLjMzMyAyMi4zMzMgMjIuMzMzIDEyLjMxNSAwIDIyLjMzMy0xMC4wMTkgMjIuMzMzLTIyLjMzMy4wMDEtMTIuMzE1LTEwLjAxOC0yMi4zMzQtMjIuMzMzLTIyLjMzNHoiIGZpbGw9IiM4YThhYTkiLz48cGF0aCBpZD0iWE1MSURfMTcxXyIgZD0ibTE5Ny4yMjQgMzMwLjU1MWMtNzMuODg4IDAtMTM0LTYwLjExMi0xMzQtMTM0di0xMzEuOTFjMC0yNi41NDUgMjEuNTk2LTQ4LjE0MSA0OC4xNC00OC4xNDFoMTQuNTU0djMwaC0xNC41NTRjLTEwLjAwMiAwLTE4LjE0IDguMTM4LTE4LjE0IDE4LjE0MXYxMzEuOTFjMCA1Ny4zNDYgNDYuNjU0IDEwNCAxMDQgMTA0czEwNC00Ni42NTQgMTA0LTEwNHYtMTMwLjFjMC0xMC4wMDItOC4xMzgtMTguMTQtMTguMTQtMTguMTRoLTE0LjgzMnYtMzBoMTQuODMyYzI2LjU0NCAwIDQ4LjE0IDIxLjU5NiA0OC4xNCA0OC4xNHYxMzAuMWMwIDczLjg4Ny02MC4xMTMgMTM0LTEzNCAxMzR6IiBmaWxsPSIjYmRiZGQyIi8+PHBhdGggaWQ9IlhNTElEXzE3MDFfIiBkPSJtMjgzLjA4MyAxOC4zMTJoLTE0LjgzMnYzMGgxNC44MzJjMTAuMDAyIDAgMTguMTQgOC4xMzggMTguMTQgMTguMTR2MTMwLjFjMCA1Ny4zNDYtNDYuNjU0IDEwNC0xMDQgMTA0djMwYzczLjg4OCAwIDEzNC02MC4xMTIgMTM0LTEzNHYtMTMwLjFjLjAwMS0yNi41NDUtMjEuNTk1LTQ4LjE0LTQ4LjE0LTQ4LjE0eiIgZmlsbD0iI2FiYWJjNSIvPjxwYXRoIGlkPSJYTUxJRF8zMTBfIiBkPSJtMjQ0LjkxOCAwYy0xNy4zNjkgMC0zMS41IDE0LjEzMS0zMS41IDMxLjVzMTQuMTMxIDMxLjUgMzEuNSAzMS41aDMwLjgzM3YtNjN6IiBmaWxsPSIjMDAzMTdlIi8+PHBhdGggaWQ9IlhNTElEXzE3Ml8iIGQ9Im0xNDkuMjUxIDBoLTMwLjgzM3Y2M2gzMC44MzNjMTcuMzY5IDAgMzEuNS0xNC4xMzEgMzEuNS0zMS41cy0xNC4xMy0zMS41LTMxLjUtMzEuNXoiIGZpbGw9IiMwMDY1YTMiLz48L2c+PC9zdmc+" />   
                             <p>
                                Clinical Diary    
                            </p> 
                    </div>
                   <div class="col-lg-12">
                        @auth
                            <a href="{{ url('/home') }}">
                                Home
                            </a>
                        @else
                            <a href="{{ route('login') }}">
                                Login
                            </a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">
                                    Cadastrar
                                </a>
                            @endif
                        @endauth
                   </div>
                </div>
            </div>
        </div>
    </body>
</html>

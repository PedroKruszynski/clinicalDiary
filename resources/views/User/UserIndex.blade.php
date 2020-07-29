@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row">
        <div class="offset-10">
            <a href="{{ route('user.createAndAlterView') }}"
               class="d-flex flex-column justify-content-center align-items-center decorationA">
                <img class="img-fluid"
                     title="Criar Usuário"
                     id="img-plus"
                     src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTExLjk5NyA1MTEuOTk3IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTEuOTk3IDUxMS45OTc7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxnPg0KCTxnPg0KCQk8Zz4NCgkJCTxwYXRoIGQ9Ik00NTYuNTg0LDEwNi40OTNsLTE3MS4xNy05OC42NWMtMTguMTQ1LTEwLjQ1Ny00MC42ODctMTAuNDU3LTU4LjgzLDBsLTE3MS4xNzEsOTguNjUNCgkJCQljLTE4LjE0MywxMC40NTYtMjkuNDE0LDI5Ljk0My0yOS40MTQsNTAuODU2djE5Ny4zYzAsMjAuOTEzLDExLjI3MSw0MC40LDI5LjQxNSw1MC44NTVsMTcxLjE3LDk4LjY1DQoJCQkJYzE4LjE0NSwxMC40NTcsNDAuNjgzLDEwLjQ1OSw1OC44MywwbDE3MS4xNzEtOTguNjVjMTguMTQzLTEwLjQ1NiwyOS40MTQtMjkuOTQzLDI5LjQxNC01MC44NTZ2LTE5Ny4zDQoJCQkJQzQ4NS45OTksMTM2LjQzNSw0NzQuNzI4LDExNi45NDgsNDU2LjU4NCwxMDYuNDkzeiBNNDQ1LjkyNCwzNTQuNjQ4YzAsNi42NjYtMy41OTMsMTIuODc5LTkuMzc3LDE2LjIxMmwtMTcxLjE3Miw5OC42NQ0KCQkJCWMtNS43ODIsMy4zMzQtMTIuOTY5LDMuMzM0LTE4Ljc1MywwTDc1LjQ1MSwzNzAuODZjLTUuNzg0LTMuMzMzLTkuMzc3LTkuNTQ1LTkuMzc3LTE2LjIxMnYtMTk3LjMNCgkJCQljMC02LjY2NywzLjU5My0xMi44OCw5LjM3Ny0xNi4yMTNsMTcxLjE3Mi05OC42NWM1Ljc4LTMuMzMzLDEyLjk2OS0zLjMzNCwxOC43NTMsMGwxNzEuMTcxLDk4LjY1DQoJCQkJYzUuNzg0LDMuMzM0LDkuMzc3LDkuNTQ2LDkuMzc3LDE2LjIxM1YzNTQuNjQ4eiIvPg0KCQkJPHBhdGggZD0iTTMzNi4xNTEsMjM1Ljk5N2gtNjAuMTEzdi02MC4wMDZjMC0xMS4wNDctOC45NzEtMjAuMDAyLTIwLjAzOC0yMC4wMDJjLTExLjA2NywwLTIwLjAzOCw4Ljk1NS0yMC4wMzgsMjAuMDAydjYwLjAwNg0KCQkJCWgtNjAuMTEzYy0xMS4wNjcsMC0yMC4wMzgsOC45NTUtMjAuMDM4LDIwLjAwMmMwLDExLjA0Nyw4Ljk3MSwyMC4wMDIsMjAuMDM4LDIwLjAwMmg2MC4xMTF2NjAuMDA2DQoJCQkJYzAsMTEuMDQ3LDguOTcxLDIwLjAwMiwyMC4wMzgsMjAuMDAyYzExLjA2NywwLDIwLjAzOC04Ljk1NSwyMC4wMzgtMjAuMDAydi02MC4wMDZoNjAuMTEzYzExLjA2NywwLDIwLjAzOC04Ljk1NSwyMC4wMzgtMjAuMDAyDQoJCQkJQzM1Ni4xODcsMjQ0Ljk1MiwzNDcuMjE2LDIzNS45OTcsMzM2LjE1MSwyMzUuOTk3eiIvPg0KCQk8L2c+DQoJPC9nPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPC9zdmc+DQo=">
                <p>Criar Usuário</p>
            </a>
        </div>
    </div>

    <div class="container my-3">
        <div class="col-12">

            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <td>
                            Nome
                        </td>
                        <td>
                            Email
                        </td>
                        <td>
                            Editar
                        </td> 
                        <td>
                            Excluir
                        </td> 
                    </tr>
                </thead>
                <tbody>
                    @if(isset($users))
                        @foreach ($users as $user)
                            <tr>
                                <td>
                                    {{$user->name}}
                                </td>
                                <td>
                                    {{$user->email}}
                                </td>
                                <td class="centerImage">
                                    <form action="{{ route('user.createAndAlterView', $user->id) }}"
                                          id="editForm{{$user->id}}"
                                          method="GET">
                                      @CSRF
                                      <a type="submit" role="button" onclick="$('#editForm{{$user->id }}').submit()">
                                          <img class="img-fluid imgTableIndex"
                                               src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgMzgzLjk0NyAzODMuOTQ3IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCAzODMuOTQ3IDM4My45NDc7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxnPg0KCTxnPg0KCQk8Zz4NCgkJCTxwb2x5Z29uIHBvaW50cz0iMCwzMDMuOTQ3IDAsMzgzLjk0NyA4MCwzODMuOTQ3IDMxNi4wNTMsMTQ3Ljg5MyAyMzYuMDUzLDY3Ljg5MyAJCQkiLz4NCgkJCTxwYXRoIGQ9Ik0zNzcuNzA3LDU2LjA1M0wzMjcuODkzLDYuMjRjLTguMzItOC4zMi0yMS44NjctOC4zMi0zMC4xODcsMGwtMzkuMDQsMzkuMDRsODAsODBsMzkuMDQtMzkuMDQNCgkJCQlDMzg2LjAyNyw3Ny45MiwzODYuMDI3LDY0LjM3MywzNzcuNzA3LDU2LjA1M3oiLz4NCgkJPC9nPg0KCTwvZz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjwvc3ZnPg0K">
                                      </a>
                                  </form>
                                </td>
                                <td class="centerImage">
                                    <form action="{{ route('user.delete', $user->id) }}"
                                          id="deleteForm{{$user->id}}"
                                          method="POST">
                                        @CSRF
                                        @METHOD('DELETE')
                                        <a type="submit" role="button" onclick="$('#deleteForm{{$user->id }}').submit()">
                                            <img class="img-fluid imgTableIndex"
                                                 src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjUxMnB0IiB2aWV3Qm94PSItNTcgMCA1MTIgNTEyIiB3aWR0aD0iNTEycHQiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0ibTE1Ni4zNzEwOTQgMzAuOTA2MjVoODUuNTcwMzEydjE0LjM5ODQzOGgzMC45MDIzNDR2LTE2LjQxNDA2M2MuMDAzOTA2LTE1LjkyOTY4Ny0xMi45NDkyMTktMjguODkwNjI1LTI4Ljg3MTA5NC0yOC44OTA2MjVoLTg5LjYzMjgxMmMtMTUuOTIxODc1IDAtMjguODc1IDEyLjk2MDkzOC0yOC44NzUgMjguODkwNjI1djE2LjQxNDA2M2gzMC45MDYyNXptMCAwIi8+PHBhdGggZD0ibTM0NC4yMTA5MzggMTY3Ljc1aC0yOTAuMTA5Mzc2Yy03Ljk0OTIxOCAwLTE0LjIwNzAzMSA2Ljc4MTI1LTEzLjU2NjQwNiAxNC43MDcwMzFsMjQuMjUzOTA2IDI5OS45MDYyNWMxLjM1MTU2MyAxNi43NDIxODggMTUuMzE2NDA3IDI5LjYzNjcxOSAzMi4wOTM3NSAyOS42MzY3MTloMjA0LjU0Mjk2OWMxNi43NzczNDQgMCAzMC43NDIxODgtMTIuODk0NTMxIDMyLjA5Mzc1LTI5LjY0MDYyNWwyNC4yNTM5MDctMjk5LjkwMjM0NGMuNjQ0NTMxLTcuOTI1NzgxLTUuNjEzMjgyLTE0LjcwNzAzMS0xMy41NjI1LTE0LjcwNzAzMXptLTIxOS44NjMyODIgMzEyLjI2MTcxOWMtLjMyNDIxOC4wMTk1MzEtLjY0ODQzNy4wMzEyNS0uOTY4NzUuMDMxMjUtOC4xMDE1NjIgMC0xNC45MDIzNDQtNi4zMDg1OTQtMTUuNDA2MjUtMTQuNTAzOTA3bC0xNS4xOTkyMTgtMjQ2LjIwNzAzMWMtLjUyMzQzOC04LjUxOTUzMSA1Ljk1NzAzMS0xNS44NTE1NjIgMTQuNDcyNjU2LTE2LjM3NSA4LjQ4ODI4MS0uNTE1NjI1IDE1Ljg1MTU2MiA1Ljk0OTIxOSAxNi4zNzUgMTQuNDcyNjU3bDE1LjE5NTMxMiAyNDYuMjA3MDMxYy41MjczNDQgOC41MTk1MzEtNS45NTMxMjUgMTUuODQ3NjU2LTE0LjQ2ODc1IDE2LjM3NXptOTAuNDMzNTk0LTE1LjQyMTg3NWMwIDguNTMxMjUtNi45MTc5NjkgMTUuNDQ5MjE4LTE1LjQ1MzEyNSAxNS40NDkyMThzLTE1LjQ1MzEyNS02LjkxNzk2OC0xNS40NTMxMjUtMTUuNDQ5MjE4di0yNDYuMjEwOTM4YzAtOC41MzUxNTYgNi45MTc5NjktMTUuNDUzMTI1IDE1LjQ1MzEyNS0xNS40NTMxMjUgOC41MzEyNSAwIDE1LjQ1MzEyNSA2LjkxNzk2OSAxNS40NTMxMjUgMTUuNDUzMTI1em05MC43NTc4MTItMjQ1LjMwMDc4Mi0xNC41MTE3MTggMjQ2LjIwNzAzMmMtLjQ4MDQ2OSA4LjIxMDkzNy03LjI5Mjk2OSAxNC41NDI5NjgtMTUuNDEwMTU2IDE0LjU0Mjk2OC0uMzA0Njg4IDAtLjYxMzI4Mi0uMDA3ODEyLS45MjE4NzYtLjAyMzQzNy04LjUxOTUzMS0uNTAzOTA2LTE1LjAxOTUzMS03LjgxNjQwNi0xNC41MTU2MjQtMTYuMzM1OTM3bDE0LjUwNzgxMi0yNDYuMjEwOTM4Yy41LTguNTE5NTMxIDcuNzg5MDYyLTE1LjAxOTUzMSAxNi4zMzIwMzEtMTQuNTE1NjI1IDguNTE5NTMxLjUgMTUuMDE5NTMxIDcuODE2NDA2IDE0LjUxOTUzMSAxNi4zMzU5Mzd6bTAgMCIvPjxwYXRoIGQ9Im0zOTcuNjQ4NDM4IDEyMC4wNjI1LTEwLjE0ODQzOC0zMC40MjE4NzVjLTIuNjc1NzgxLTguMDE5NTMxLTEwLjE4MzU5NC0xMy40Mjk2ODctMTguNjQwNjI1LTEzLjQyOTY4N2gtMzM5LjQxMDE1NmMtOC40NTMxMjUgMC0xNS45NjQ4NDQgNS40MTAxNTYtMTguNjM2NzE5IDEzLjQyOTY4N2wtMTAuMTQ4NDM4IDMwLjQyMTg3NWMtMS45NTcwMzEgNS44NjcxODguNTg5ODQ0IDExLjg1MTU2MiA1LjM0Mzc1IDE0LjgzNTkzOCAxLjkzNzUgMS4yMTQ4NDMgNC4yMzA0NjkgMS45NDUzMTIgNi43NSAxLjk0NTMxMmgzNzIuNzk2ODc2YzIuNTE5NTMxIDAgNC44MTY0MDYtLjczMDQ2OSA2Ljc1LTEuOTQ5MjE5IDQuNzUzOTA2LTIuOTg0Mzc1IDcuMzAwNzgxLTguOTY4NzUgNS4zNDM3NS0xNC44MzIwMzF6bTAgMCIvPjwvc3ZnPg==">
                                        </a>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @else   
                        <tr>
                            <td colspan="5"
                                class="text-center">
                                    Nenhum usuário cadastrado
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>

        </div>
    </div>

</div>

@endsection

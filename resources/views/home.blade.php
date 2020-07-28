@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-6 my-2">
                        <a href="{{ route('doctor.index') }}">
                            <img class="img-fluid imageCrud"
                                 src="data:image/svg+xml;base64,PHN2ZyBpZD0iQ2FwYV8xIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCA1MTIgNTEyIiBoZWlnaHQ9IjUxMiIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHdpZHRoPSI1MTIiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGc+PGNpcmNsZSBjeD0iMjk2IiBjeT0iMTgwIiByPSIxMCIvPjxjaXJjbGUgY3g9IjIxNiIgY3k9IjE4MCIgcj0iMTAiLz48cGF0aCBkPSJtMjU2IDI4MGMxNi45MTkgMCAzMi4wNzctMTAuNzE2IDM3LjcxOC0yNi42NjYgMS44NDEtNS4yMDctLjg4Ny0xMC45MjEtNi4wOTQtMTIuNzYyLTUuMjA0LTEuODM5LTEwLjkyLjg4Ny0xMi43NjIgNi4wOTQtMi44MiA3Ljk3Ni0xMC40MDEgMTMuMzM0LTE4Ljg2MiAxMy4zMzRzLTE2LjA0Mi01LjM1OC0xOC44NjItMTMuMzM0Yy0xLjg0MS01LjIwNy03LjU1NS03LjkzMy0xMi43NjItNi4wOTQtNS4yMDcgMS44NDEtNy45MzUgNy41NTUtNi4wOTQgMTIuNzYyIDUuNjQxIDE1Ljk1IDIwLjc5OSAyNi42NjYgMzcuNzE4IDI2LjY2NnoiLz48Y2lyY2xlIGN4PSIzNTYiIGN5PSI1MDIiIHI9IjEwIi8+PHBhdGggZD0ibTQwMSA0OTJjLTUuNTIzIDAtMTAgNC40NzgtMTAgMTBzNC40NzcgMTAgMTAgMTBoMzVjNS41MjMgMCAxMC00LjQ3OCAxMC0xMHYtODIuNjJjMC00NC44MjEtMzIuOTg4LTgyLjc2NC03Ny4yNzItODkuMDg5bC00MC4xNzgtNS43MzljLTEwLjg4NC0xLjU2NC0xOS44MDQtOS43NTgtMjIuMDE3LTIwLjc3NSAyMS4wNzctMTMuODY0IDQwLjI5NC0zNi4xNTMgNTQuOTQ2LTYzLjc3N2g0LjUyMWMyMi4wNTYgMCA0MC0xNy45NDQgNDAtNDAgMC0xNC45NS04LjUzMi0yOC41MjMtMjEuNS0zNS4zMTYgMCAwIDEuNS0zNC41MzkgMS41LTM0LjY4NCAwLTcxLjY4My01OC4zMTgtMTMwLTEzMC0xMzBzLTEzMCA1OC4zMTctMTMwIDEzMGMwIC4xNDUuMDAzLjI5LjAwOS40MzVsMS40OSAzNC4yNDljLTEyLjk2NyA2Ljc5My0yMS40OTkgMjAuMzY2LTIxLjQ5OSAzNS4zMTYgMCAyMi4wNTYgMTcuOTQ0IDQwIDQwIDQwaDQuNTIxYzE0LjY1MyAyNy42MjYgMzMuODcxIDQ5LjkxNSA1NC45NDYgNjMuNzc3LTIuMTk5IDEwLjkzOC0xMS4wODIgMTkuMjAzLTIyLjAwOSAyMC43NzRsLTQwLjE4MiA1Ljc0Yy00NC4zNjMgNi4zMzUtNzcuMjc2IDQ0LjM0My03Ny4yNzYgODkuMDg5djgyLjYyYzAgNS41MjIgNC40NzcgMTAgMTAgMTBoMjM1YzUuNTIzIDAgMTAtNC40NzggMTAtMTBzLTQuNDc3LTEwLTEwLTEwaC00NXYtNzguNDkzbDU1LjkwMi02OS44ODdjMS4yNTcuMjg4IDIuNTI2LjU0NSAzLjgxNS43MjlsMjAuMjgzIDIuODk4djY2LjQ3M2MtMTEuNjM5IDQuMTI4LTIwIDE1LjI0My0yMCAyOC4yOCAwIDE2LjU0MiAxMy40NTggMzAgMzAgMzBzMzAtMTMuNDU4IDMwLTMwYzAtMTMuMDM2LTguMzYxLTI0LjE1Mi0yMC0yOC4yOHYtNjMuNjEzYzM0LjIxMyA0LjkzOSA2MCAzNC43IDYwIDY5LjI3M3Y3Mi42MnptLTE0NS05OC4wMDktNDcuNDA0LTU5LjI2M2M2Ljk1NS01LjUyNyAxMi4xNDctMTIuOTMyIDE0Ljk3NS0yMS4zMjcgMTAuNjcyIDQuMzc3IDIxLjUzMyA2LjU5OSAzMi40MjkgNi41OTlzMjEuNzU2LTIuMjIzIDMyLjQyOC02LjU5OGMyLjgzIDguNDAyIDguMDIzIDE1LjgxMSAxNC45NzQgMjEuMzM0em0wLTM3My45OTFjNjAuNTg0IDAgMTA5Ljg4NiA0OS4yMjkgMTEwIDEwOS43ODdsLTEuMjQxIDI4LjUxMmMtMTAuOTI0LTMuOTcyLTE4Ljc1OS0xNC40NjctMTguNzU5LTI2LjcyOXYtMS41N2MwLTUuNTIyLTQuNDc3LTEwLTEwLTEwaC0zNS4yNmMtMjMuNzg1IDAtNDUuMTY1LTEzLjIwOS01NS43OTYtMzQuNDcyLTIuMDc0LTQuMTQ4LTYuNzMtNi4zMjQtMTEuMjQyLTUuMjYxLTQuNTEzIDEuMDY2LTcuNzAyIDUuMDk1LTcuNzAyIDkuNzMzIDAgMTYuNTQyLTEzLjQ1OCAzMC0zMCAzMGgtMjBjLTUuNTIzIDAtMTAgNC40NzgtMTAgMTB2MS41N2MwIDEyLjI2OC03Ljg0NCAyMi43NjgtMTguNzU2IDI2LjczNWwtMS4yNDQtMjguNTE4Yy4xMTQtNjAuNTU4IDQ5LjQxNi0xMDkuNzg3IDExMC0xMDkuNzg3em0tOTAuNDEgMjA1LjU1OWMtMS42ODgtMy40MDQtNS4xNi01LjU1OS04Ljk2LTUuNTU5aC0xMC42M2MtMTEuMDI4IDAtMjAtOC45NzItMjAtMjAgMC0xNS45MjUgMTUuMTc3LTE4Ljk5NiAxNy4yNDgtMjAuMzQzIDIxLjIzMS0yLjQ5OCAzOC4zMy0xOC44MTQgNDIuMDE1LTM5LjY1N2gxMC43MzdjMTkuMDg0IDAgMzUuNzA2LTEwLjc0OCA0NC4xMy0yNi41MDggMTUuMzM0IDE2LjcxOSAzNy4wOCAyNi41MDggNjAuNjEgMjYuNTA4aDI1Ljk5N2MzLjY4MyAyMC44MjggMjAuNzY2IDM3LjEzNyA0Mi4wMDggMzkuNjUyIDIuMDE1IDEuMzE0IDE3LjI1NSA0LjQ5NCAxNy4yNTUgMjAuMzQ4IDAgMTEuMDI4LTguOTcyIDIwLTIwIDIwaC0xMC42M2MtMy44IDAtNy4yNzIgMi4xNTQtOC45NiA1LjU1OS0xNy41OTcgMzUuNTAxLTUwLjc1MyA3NC40NDEtOTAuNDEgNzQuNDQxLTM5LjU0MiAwLTcyLjU0NS0zOC4zOTgtOTAuNDEtNzQuNDQxem0tNzkuNTkgMjY2LjQ0MXYtNzIuNjJjMC0zNC41NzIgMjUuNzg1LTY0LjMzMSA2MC02OS4yNzJ2MzAuODk4Yy0yMi43OTUgNC42NDYtNDAgMjQuODQ3LTQwIDQ4Ljk5NHYzMmMwIDUuNTIyIDQuNDc3IDEwIDEwIDEwaDIwYzUuNTIzIDAgMTAtNC40NzggMTAtMTBzLTQuNDc3LTEwLTEwLTEwaC0xMHYtMjJjMC0xNi41NDIgMTMuNDU4LTMwIDMwLTMwczMwIDEzLjQ1OCAzMCAzMHYyMmgtMTBjLTUuNTIzIDAtMTAgNC40NzgtMTAgMTBzNC40NzcgMTAgMTAgMTBoMjBjNS41MjMgMCAxMC00LjQ3OCAxMC0xMHYtMzJjMC0yNC4xNDYtMTcuMjA1LTQ0LjM0OC00MC00OC45OTR2LTMzLjc1OGwyMC4yOS0yLjg5OWMxLjI4Ni0uMTg1IDIuNTUyLS40NCAzLjgwNS0uNzI3bDU1LjkwNSA2OS44ODV2NzguNDkzem0yNzAtNDBjLTUuNTE0IDAtMTAtNC40ODYtMTAtMTBzNC40ODYtMTAgMTAtMTAgMTAgNC40ODYgMTAgMTAtNC40ODYgMTAtMTAgMTB6Ii8+PC9nPjwvc3ZnPg==">
                        </a>
                    </div>
                    <div class="col-lg-3 col-6 my-2">
                        <a href="">
                            <img class="img-fluid imageCrud"
                                 src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGQ9Ik0yNTYsMGMtNzQuNDM5LDAtMTM1LDYwLjU2MS0xMzUsMTM1czYwLjU2MSwxMzUsMTM1LDEzNXMxMzUtNjAuNTYxLDEzNS0xMzVTMzMwLjQzOSwwLDI1NiwweiBNMjU2LDI0MA0KCQkJYy01Ny44OTcsMC0xMDUtNDcuMTAzLTEwNS0xMDVjMC01Ny44OTcsNDcuMTAzLTEwNSwxMDUtMTA1YzU3Ljg5NywwLDEwNSw0Ny4xMDMsMTA1LDEwNUMzNjEsMTkyLjg5NywzMTMuODk3LDI0MCwyNTYsMjQweiIvPg0KCTwvZz4NCjwvZz4NCjxnPg0KCTxnPg0KCQk8cGF0aCBkPSJNMjk3LjgzMywzMDFoLTgzLjY2N0MxNDQuOTY0LDMwMSw3Ni42NjksMzMyLjk1MSwzMSw0MDEuNDU4VjUxMmg0NTBWNDAxLjQ1OEM0MzUuMzk3LDMzMy4wNSwzNjcuMTIxLDMwMSwyOTcuODMzLDMwMXoNCgkJCSBNNDUxLjAwMSw0ODJINDUxSDYxdi03MS4zNjNDOTYuMDMxLDM2MC42ODMsMTUyLjk1MiwzMzEsMjE0LjE2NywzMzFoODMuNjY3YzYxLjIxNSwwLDExOC4xMzUsMjkuNjgzLDE1My4xNjcsNzkuNjM3VjQ4MnoiLz4NCgk8L2c+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8L3N2Zz4NCg==">
                        </a>
                    </div>
                    <div class="col-lg-3 col-6 my-2">
                        <a href="{{ route('patient.index') }}">
                            <img class="img-fluid imageCrud"
                                 src="data:image/svg+xml;base64,PHN2ZyBpZD0iQ2FwYV8xIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCA1MTIgNTEyIiBoZWlnaHQ9IjUxMiIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHdpZHRoPSI1MTIiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGc+PHBhdGggZD0ibTM2NiAzMDBoLTQ1di0zMC4xODVjMzAuMTczLTIwLjc1IDUwLTU1LjUwOCA1MC05NC44MTV2LTEwMGMwLTQxLjM1NS0zMy42NDUtNzUtNzUtNzVoLTEzMGMtMzUuODQxIDAtNjUgMjkuMTU5LTY1IDY1IDAgMjYuOTg2IDE2LjUzMyA1MC4xNzcgNDAgNTkuOTkzdjUwLjAwN2MwIDM5LjMwNyAxOS44MjcgNzQuMDY1IDUwIDk0LjgxNXYzMC4xODVoLTQ1Yy01Mi4zODMgMC05NSA0Mi42MTctOTUgOTV2MTAyYzAgOC4yODQgNi43MTYgMTUgMTUgMTVoMzgwYzguMjg0IDAgMTUtNi43MTYgMTUtMTV2LTEwMmMwLTUyLjM4My00Mi42MTctOTUtOTUtOTV6bS0yMDAtMjcwaDEzMGMyNC44MTMgMCA0NSAyMC4xODcgNDUgNDV2MjQuNjkxYy0yMC41NTItMS43MTgtMzkuNjQ0LTEwLjU0OC01NC4zOTQtMjUuMjk4LTIuODEyLTIuODEzLTYuNjI3LTQuMzkzLTEwLjYwNi00LjM5M3MtNy43OTQgMS41OC0xMC42MDYgNC4zOTRjLTE2LjUxMyAxNi41MTItMzguNDY3IDI1LjYwNi02MS44MiAyNS42MDZoLTM3LjU3NGMtMi4zNzYgMC00LjY5Ni0uMjQtNi45NC0uNjk0LS4wMzktLjAwOC0uMDc5LS4wMTQtLjExOC0uMDIyLTE1LjkyOC0zLjI3NC0yNy45NDItMTcuNDAyLTI3Ljk0Mi0zNC4yODQgMC0xOS4yOTkgMTUuNzAxLTM1IDM1LTM1em01IDE0NXYtNDVoMzIuNTc0YzI2LjU5NSAwIDUxLjg0Mi04Ljc4MiA3Mi40MjYtMjQuOTc0IDE4LjY1NyAxNC42NzUgNDEuMTUgMjMuMjM5IDY1IDI0LjcxOXY0NS4yNTVjMCA0Ni44NjktMzguMTMxIDg1LTg1IDg1cy04NS0zOC4xMzEtODUtODV6bTg1IDExNWMxMi4yIDAgMjMuOTU5LTEuOTE3IDM1LTUuNDUydjMwLjQ1MmMwIDguMjg0IDYuNzE2IDE1IDE1IDE1aDYwYzM1Ljg0MSAwIDY1IDI5LjE1OSA2NSA2NXY0NS44NTZsLTUwLTI5LjIzMXYtMTYuNjI1YzAtOC4yODQtNi43MTYtMTUtMTUtMTUtNy45ODUgMC0xNC40OTQgNi4yNDQtMTQuOTU1IDE0LjExM2wtMTMwLjMzMy03Ni4xOTVjLjE4Ni0uOTQ0LjI4OS0xLjkxOS4yODktMi45MTh2LTMwLjQ1MmMxMS4wNCAzLjUzNSAyMi43OTkgNS40NTIgMzQuOTk5IDUuNDUyem0tMTc1IDEwNWMwLTMzLjY0NyAyNS43LTYxLjQwMiA1OC41MDEtNjQuNjc0bDcxLjgwMSA4MS42NzRoLTEwLjMwMmMtMjcuNTcgMC01MCAyMi40My01MCA1MCAwIDcuMTA5IDEuNTAxIDEzLjg3MSA0LjE4NyAyMGgtNzQuMTg3em0xMDAgNjdjMC0xMS4wMjggOC45NzItMjAgMjAtMjBoMzYuNjc2bDM1LjE2NSA0MGgtNzEuODQxYy0xMS4wMjggMC0yMC04Ljk3Mi0yMC0yMHptMTMxLjc4NiAyMC0xMzMuNjI3LTE1MmgyLjc3OGwyNDkuMDYzIDE0NS42MDZ2Ni4zOTR6Ii8+PC9nPjwvc3ZnPg==">
                        </a>
                    </div>
                    <div class="col-lg-3 col-6 my-2">
                        <a href="">
                            <img class="img-fluid imageCrud"
                                 src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGQ9Ik00NTIsNDBoLTI0VjBoLTQwdjQwSDEyNFYwSDg0djQwSDYwQzI2LjkxNiw0MCwwLDY2LjkxNiwwLDEwMHYzNTJjMCwzMy4wODQsMjYuOTE2LDYwLDYwLDYwaDM5Mg0KCQkJYzMzLjA4NCwwLDYwLTI2LjkxNiw2MC02MFYxMDBDNTEyLDY2LjkxNiw0ODUuMDg0LDQwLDQ1Miw0MHogTTQ3Miw0NTJjMCwxMS4wMjgtOC45NzIsMjAtMjAsMjBINjBjLTExLjAyOCwwLTIwLTguOTcyLTIwLTIwVjE4OA0KCQkJaDQzMlY0NTJ6IE00NzIsMTQ4SDQwdi00OGMwLTExLjAyOCw4Ljk3Mi0yMCwyMC0yMGgyNHY0MGg0MFY4MGgyNjR2NDBoNDBWODBoMjRjMTEuMDI4LDAsMjAsOC45NzIsMjAsMjBWMTQ4eiIvPg0KCTwvZz4NCjwvZz4NCjxnPg0KCTxnPg0KCQk8cmVjdCB4PSI3NiIgeT0iMjMwIiB3aWR0aD0iNDAiIGhlaWdodD0iNDAiLz4NCgk8L2c+DQo8L2c+DQo8Zz4NCgk8Zz4NCgkJPHJlY3QgeD0iMTU2IiB5PSIyMzAiIHdpZHRoPSI0MCIgaGVpZ2h0PSI0MCIvPg0KCTwvZz4NCjwvZz4NCjxnPg0KCTxnPg0KCQk8cmVjdCB4PSIyMzYiIHk9IjIzMCIgd2lkdGg9IjQwIiBoZWlnaHQ9IjQwIi8+DQoJPC9nPg0KPC9nPg0KPGc+DQoJPGc+DQoJCTxyZWN0IHg9IjMxNiIgeT0iMjMwIiB3aWR0aD0iNDAiIGhlaWdodD0iNDAiLz4NCgk8L2c+DQo8L2c+DQo8Zz4NCgk8Zz4NCgkJPHJlY3QgeD0iMzk2IiB5PSIyMzAiIHdpZHRoPSI0MCIgaGVpZ2h0PSI0MCIvPg0KCTwvZz4NCjwvZz4NCjxnPg0KCTxnPg0KCQk8cmVjdCB4PSI3NiIgeT0iMzEwIiB3aWR0aD0iNDAiIGhlaWdodD0iNDAiLz4NCgk8L2c+DQo8L2c+DQo8Zz4NCgk8Zz4NCgkJPHJlY3QgeD0iMTU2IiB5PSIzMTAiIHdpZHRoPSI0MCIgaGVpZ2h0PSI0MCIvPg0KCTwvZz4NCjwvZz4NCjxnPg0KCTxnPg0KCQk8cmVjdCB4PSIyMzYiIHk9IjMxMCIgd2lkdGg9IjQwIiBoZWlnaHQ9IjQwIi8+DQoJPC9nPg0KPC9nPg0KPGc+DQoJPGc+DQoJCTxyZWN0IHg9IjMxNiIgeT0iMzEwIiB3aWR0aD0iNDAiIGhlaWdodD0iNDAiLz4NCgk8L2c+DQo8L2c+DQo8Zz4NCgk8Zz4NCgkJPHJlY3QgeD0iNzYiIHk9IjM5MCIgd2lkdGg9IjQwIiBoZWlnaHQ9IjQwIi8+DQoJPC9nPg0KPC9nPg0KPGc+DQoJPGc+DQoJCTxyZWN0IHg9IjE1NiIgeT0iMzkwIiB3aWR0aD0iNDAiIGhlaWdodD0iNDAiLz4NCgk8L2c+DQo8L2c+DQo8Zz4NCgk8Zz4NCgkJPHJlY3QgeD0iMjM2IiB5PSIzOTAiIHdpZHRoPSI0MCIgaGVpZ2h0PSI0MCIvPg0KCTwvZz4NCjwvZz4NCjxnPg0KCTxnPg0KCQk8cmVjdCB4PSIzMTYiIHk9IjM5MCIgd2lkdGg9IjQwIiBoZWlnaHQ9IjQwIi8+DQoJPC9nPg0KPC9nPg0KPGc+DQoJPGc+DQoJCTxyZWN0IHg9IjM5NiIgeT0iMzEwIiB3aWR0aD0iNDAiIGhlaWdodD0iNDAiLz4NCgk8L2c+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8L3N2Zz4NCg==">
                        </a>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

@endsection

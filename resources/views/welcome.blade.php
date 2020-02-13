@extends('layouts.app')

@section('content')

        <!-- Styles -->
        <style>
            html, body {
                background-color: white;
                color: black;
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
                color: white;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .versioninfo {
                color: white;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
            }

            .framwork_title {
                font-weight: 600;
                padding-top: 20px;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <section class="hero">
        <figure class="image">
            <img src="Image-dev.jpg">
        </figure>
    </section>
     <div class="container"><br>
     <h1>Lorem</h1>
     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus voluptates est totam maiores laborum voluptate? Ipsam incidunt id recusandae minima?</p                    ><p>At, sit voluptas cupiditate quo suscipit culpa iste itaque consequatur delectus corporis a, error sint assumenda quisquam earum! Quos, quidem?</p>
     <p>Nobis et debitis vel modi impedit rem amet recusandae fuga, laboriosam eaque velit ipsum consequuntur? Consequatur cupiditate facilis dignissimos nesciunt.</p>
     </div>
            @if (Route::has('login'))
                <div class="top-center links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else

                    @endif
                </div>
            @endif
                </div>


    @endsection

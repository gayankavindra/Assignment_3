<!doctype html>
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
                background-color: black;
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
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
            
            <div class="content">
            <br>
                <div class="title m-b-md" style="font-family:courier;">
                    Student information system

                  </div>
                  
                

                <div class="links">
                <img src="https://2.bp.blogspot.com/-q_ybNnQQTh8/VHcfL-1j0jI/AAAAAAAAFPk/JO2dD69ANLM/s1600/students.png"alt="gayan" style="width:30%;">
              
                <h2>Members in Group No 04</h2>
                
                    <a href="https://github.com/MReekan">M. Reekan(SE/2014/027)</a><br>
                    <a href="https://github.com/gayankavindra">G.K.H. Uluwatta(SE/2014/028)</a><br>
                    <a href="https://github.com/RuwanSudheera">R.A.R.S. Wimalasena(SE/2014/029)</a><br>
                    <a href="https://github.com/Pubuduboteju">W.P.A. Boteju(SE/2014/031)</a><br>
                    <a href="https://github.com/YasiruUOK">W.A.Y. Kavinda(SE/2014/036)</a><br>
                    <a href="https://github.com/Niroshan82">K. Niroshan(SE/2014/039)</a><br>
                    <a href="https://github.com/BPavitran">B. Pavitran(SE/2014/027)</a><br>
                    
                </div>
            </div>
        </div>
        
    </body>
</html>

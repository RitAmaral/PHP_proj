<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
        
        html{
            text-align: center;
            margin: auto;
            background-color: #FFF1FC;
        }

        h1{
            font-size: 60px;
            color: #191970;
            padding-top: 40px;
        }
        /* Design do botão login */
        .login{
            position:fixed;
            top:0;
            right:0;
            padding: 20px;
            text-decoration: none;
        }

        .btnlogin{
            font-size:20px;
            border: 2px solid #191970;
            text-decoration: none;
            color: #fff;
            background-color: #191970;
            padding: 7px;
            border-radius: 5px;
            margin-right: 10px;
        }

        .btnlogin:hover{
            box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
        }
        /* Design do Botão registar */
        .btnregister{
            font-size:20px;
            border: 2px solid #7BC493;
            text-decoration: none;
            color: #fff;
            background-color: #7BC493;
            padding: 7px;
            border-radius: 5px; 
        }

        .btnregister:hover{
            box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
        }
        /* Design do botão para ir à homepage dos Users */
        .btnuser{
            font-size:20px;
            border: 2px solid #EB93C6;
            text-decoration: none;
            color: #fff;
            background-color: #EB93C6;
            padding: 7px;
            border-radius: 5px;
            animation: wiggle1 2s linear infinite;
            position: absolute;
            margin-left: -75px;
        }

        @keyframes wiggle1 {
            0%, 7% {transform: rotateZ(0);}
            15% {transform: rotateZ(-15deg);}
            20% {transform: rotateZ(10deg);}
            25% {transform: rotateZ(-10deg);}
            30% {transform: rotateZ(6deg);}
            35% {transform: rotateZ(-4deg);}
            40%, 100% {transform: rotateZ(0);}
        }

        .btnuser:hover{
            box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
        }
        /* Design do botão para ir à homepage dos Empregados */
        .btnempregado{
            font-size:20px;
            border: 2px solid #AF5EC4;
            text-decoration: none;
            color: #fff;
            background-color: #AF5EC4;
            padding: 7px;
            border-radius: 5px;
            animation: wiggle2 2s linear infinite;
            position: absolute;
            margin-left: -95px;
        }

        @keyframes wiggle2 {
            0%, 7% {transform: rotateZ(0);}
            15% {transform: rotateZ(15deg);}
            20% {transform: rotateZ(-10deg);}
            25% {transform: rotateZ(10deg);}
            30% {transform: rotateZ(-6deg);}
            35% {transform: rotateZ(4deg);}
            40%, 100% {transform: rotateZ(0);}
        }

        .btnempregado:hover{
            box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
        }
        /* Design da animação do círculo/bola */
        .circles{
            width: 50px;
            height: 50px;
            border-radius: 50px;
            background-color: #191970;
            position: relative;
            animation-name: circle;
            animation-duration: 4s;
            animation-iteration-count: infinite;
        }

        @keyframes circle {
            0%   {background-color:#191970; left:-75px; top:0px;}
            25%  {background-color:#EB93C6; left:75px; top:0px;}
            50%  {background-color:#AF5EC4; left:75px; top:75px;}
            75%  {background-color:#7BC493; left:-75px; top:75px;}
            100% {background-color:##191970; left:-75px; top:0px;}
        }
        /* Design da animação da barra em baixo do Welcome */
        .grower {
            width: 200px;
            height: 5px;
            background: #191970;
            position: relative;
            margin-left: auto;
            margin-right: auto;
            animation-name: grow;
            animation-duration: 2s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes grow {
            0% {transform: scaleX(1);}
            50% {
                transform: scaleX(1.8);
                background: #191970;
            }
        }
        /* Design do hover quando passamos em cima do texto "Escolhe a página a que quer aceder" */
        .escolhe{
            transition: width 2s;
        }
        .escolhe:hover{
            background-color:#FFF775;
            padding: 1px;
            font-weight: bold;
        }

        /* Design do Sol */
        :root {
            overflow: hidden; /* hides any part of the sun below the horizon */
            background-color: lightblue;
            display: flex;
            justify-content: center; /* centers the sun in the background */
        }

        .sun {
            background-color: #FFF775;
            border-radius: 50%; /* creates a circular background */
            height: 100vh; /* makes the sun the size of the viewport */
            aspect-ratio: 1 / 1;
            animation: 4s linear 0s infinite alternate sun-rise;
        }

        @keyframes sun-rise {
            from {
                /* pushes the sun down past the viewport */
                transform: translateY(110vh);
            }
            to {
                /* returns the sun to its default position */
                transform: translateY(0);
            }
        }

        </style>
    </head>
    <body class="antialiased"> 

            @if (Route::has('login'))
                <div class="login">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="btnlogin">Log in</a> <!--botão login-->

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btnregister">Register</a> <!--botão registar-->
                        @endif
                    @endauth
                </div>
            @endif

            <div class="jumbotron">
                <h1 class="display-4">Welcome!</h1>
    
                <div class="grower"></div> <!--animação da barra grower-->
                <br>
                <hr class="my-4">
                
            </div>
            <br>
            <div class="escolhe">
                <p>Escolha a página a que quer aceder: </p>
            </div>
            <br>
            <div>
                <a type='button' class="btnuser" href="{{route('user.index')}}">User homepage</a> <!--botão user-->
            </div>

            <br>
            <br>
            <br>
            <br>
            <center><div class="circles"></div></center> <!--animação da bola-->
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>

            <div>
                <a type='button' class="btnempregado" href="{{route('empregado.index')}}">Empregado homepage</a> <!--botão empregado-->
            </div>

            <br>
            <br>
            <br>
            <div class="sun"></div> <!-- animação do sol -->

    </body>
</html>

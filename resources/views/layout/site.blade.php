<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('titulo')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway';
                font-weight: 100;
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
                border: 1px solid;
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
            .menu {
                background-image: linear-gradient(to bottom, #043144, #01668F);
                color: #fff;
                font-family: 'Raleway';
                font-weight: 100;
                height: 100px;
                margin: 0;
                display: block;
            }
            .menu-links{
              display: block;
              height: 100px;
              width: 40%;
              margin-top: -20px;
              text-align: right;
            }
            .menu-links > a{
              font-family: 'Raleway';
              color: #fff;
              font-size: 20px;
              font-weight: 300;
              letter-spacing: .1rem;
              line-height: 100px;
              text-decoration: none;
              text-transform: uppercase;
              margin-right: 20px;
            }
            .menu span {
              font-size: 40px;
              margin: 10px;
              line-height: 100px;
            }
            .search{
              width: 100%;
              height: 500px;
              line-height: 500px;
              text-align: center;
            }
            .search input{
              height: 50px;
              width: 500px;
              border-radius: 8px;
              border: 1px solid #636b6f;
            }
            .search button{
              height: 50px;
              width: 50px;
              border-radius: 8px;
            }
        </style>
    </head>
    <body>
      <div class="menu">
        <span>TEDStock</span>
        <div class="top-right menu-links">
          <a href="{{ url('/')}}">HOME</a>
          <a href="{{ url('/')}}">ENTRAR</a>
        </div>
      </div>
        <div class="flex-center position-ref">
            <div class="content">
              @yield('conteudo')
            </div>
        </div>
    </body>
</html>

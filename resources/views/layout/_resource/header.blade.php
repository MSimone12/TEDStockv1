<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">


      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>@yield('titulo')</title>
    </head>

    <body>
      <nav class="light-blue cyan darken-4">
        <div class="nav-wrapper">
          <a href="/" class="brand-logo" style="margin-left:10%;">TEDStock</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            @if (Auth::guest())
                <li><a href="{{ url('/login') }}">Entrar</a></li>
                <li><a href="{{ url('/register') }}">Registrar</a></li>
            @else
                <li class="dropdown">
                    <a href="#" class="dropdown-button" data-activates="dropdown1" role="button" aria-expanded="false">
                        {{ Auth::user()->nome }} <span class="caret"></span>
                    </a>

                  <ul class="dropdown-content" id="dropdown1">
                        <li>
                            <a href="{{ url('/logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            @endif
          </ul>
      </div>
      </nav>

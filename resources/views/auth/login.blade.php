@extends('layout.site')

@section('titulo', 'TEDStock | Login')

@section('conteudo')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <h3 class="center">Login</h3>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="input-field">
                            <label>E-Mail</label>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="input-field">
                            <label>Senha</label>
                                <input id="senha" type="password" class="form-control" name="senha" required>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                       Lembrar de mim
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="switch">
                          <label>
                            Off
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}>
                            <span class="lever"></span>
                            On
                          </label>
                        </div>

                        <div class="input-field">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                  Entrar
                                </button>

                                <a class="btn" href="{{ url('/senha/reset') }}">
                                    Esqueceu sua senha?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

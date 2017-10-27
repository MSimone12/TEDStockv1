@extends('layout.site')

@section('titulo', 'TEDStock | Download')


@section('conteudo')
  <div class="container center">
    <h3 class="center">Download</h3>
    <div class="card hoverable" style="width: 500px; margin: auto;">
      <div class="card-image waves-effect waves-block waves-light">
        <img class="activator" src="{{asset($imagens->imagem)}}" style="width: 500px;">
      </div>
      <div class="card-content">
        <span class="card-title activator grey-text text-darken-4">
          {{$imagens->nome}}
          <i class="material-icons right">more_vert</i>
        </span>
      </div>
      <div class="card-reveal">
        <span class="card-title grey-text text-darken-4">{{$imagens->nome}}
          <i class="material-icons right">close</i>
        </span>
        <br><br>
        <a href="/download/{{$imagens->id}}/psd" class="btn green" style="width: 300px;">Download PSD</a><br><br>
        <a href="/download/{{$imagens->id}}/png" class="btn green" style="width: 300px;">Download PNG</a><br><br>
        <a href="/download/{{$imagens->id}}/fla" class="btn green" style="width: 300px;">Download FLA</a><br><br>
        <a href="/download/{{$imagens->id}}/ai" class="btn green" style="width: 300px;">Download AI</a><br><br>
        <a href="/download/{{$imagens->id}}/swf" class="btn green" style="width: 300px;">Download SWF</a><br>
      </div>
    </div>
  </div>

@endsection

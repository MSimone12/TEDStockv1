@extends('layout.site')

@section('titulo', 'TEDStock')

@section('conteudo')
  <div class="container" style="height: 670px;">
    <h3 class="center">Imagens</h3>
    <div class="row" style="height: 545px; overflow-y: scroll;">
      @foreach($imagens as $imagem)
        <div class="col s4">
          <div class="card small" style="height: 250px;">
            <div class="card-image" class="col s4">
              <img src="{{asset($imagem->imagem)}}" alt="" class="col s12">
              <span class="card-title black-text">{{$imagem->nome}}</span>
            </div>
            <div class="card-content">
              <p>{{$imagem->tags}}</p>
            </div>
            <div class="card-action">
              <a href="{{route('download',$imagem->id)}}" class="btn cyan waves-effect">Download</a>
              <a href="{{route('editar',$imagem->id)}}" class="btn deep-green waves-effect">Editar</a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      <div class="row">
        <a class="btn blue col s12" href="{{route('adicionar')}}">Adicionar</a>
      </div>
@endsection

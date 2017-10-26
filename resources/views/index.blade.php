@extends('layout.site')

@section('titulo', 'TEDStock')

@section('conteudo')
  <div class="container">
    <h3 class="center">Imagens</h3>
    <div class="row">
      <table>
        <thead>
          <tr>
            <th>Imagem</th>
            <th>Nome</th>
            <th>Tags</th>
            <th>Ação</th>
          </tr>
        </thead>
        <tbody>
          @foreach($imagens as $imagem)
          <input type="hidden" name="path" value="{{$imagem->path}}">
            <tr>
              <td><img src="{{asset($imagem->imagem)}}" width="120" alt=""></td>
              <td>{{$imagem->nome}}</td>
              <td>{{$imagem->tags}}</td>
              <td><a href="{{route('download',$imagem->id)}}" class="btn deep-green">Download</a></td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="row">
      <a class="btn blue" href="{{route('adicionar')}}">Adicionar</a>
    </div>
  </div>
@endsection

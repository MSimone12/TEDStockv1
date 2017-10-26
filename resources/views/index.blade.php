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
            <tr>
              <td><img src="{{$registro->path}}" width="120" alt=""></td>
              <td>{{$registro->nome}}</td>
              <td>{{$registro->tags}}</td>
              <td><a href="{{$registro->path}}" class="btn deep-green" download></a></td>
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

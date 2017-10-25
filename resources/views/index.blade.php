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
        </tbody>
      </table>
    </div>
    <div class="row">
      <a class="btn blue" href="">Adicionar</a>
    </div>
  </div>
@endsection

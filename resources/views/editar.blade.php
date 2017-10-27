@extends('layout.site')

@section('titulo', 'TEDStock | Editar')

@section('conteudo')
  <div class="container">
    <h3 class="center">Editar</h3>
    <div class="row">
      <form class="" action="{{route('atualizar',$imagens->id)}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="put">
        @include('layout._form')

        <button class="btn deep-orange">Atualizar</button>
      </form>
    </div>
  </div>
@endsection

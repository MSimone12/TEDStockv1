<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Imagens;

class ImagensController extends Controller
{
    public function index(){
      $imagens = Imagens::all();
      return view('index',compact('imagens'));
    }
    public function adicionar(){
      return view('adicionar');
    }
    public function salvar(Request $req){
      $dados = $req->all();
      if ($req->hasFile('imagem')) {
        $imagem = $req->file('imagem');
        $dir = "img/";
        $name = $imagem->getClientOriginalName();
        $imagem->move($dir, $name);
        $dados['imagem'] = $dir.$name;
      }
      Imagens::create($dados);

      return redirect()->route('index');
    }
    public function editar($id){
      $imagens = Imagens::find($id);
      return view('editar',compact('imagens'));
    }
    public function download($id){
      $imagens = Imagens::find($id);
      return view('download',compact('imagens'));
    }
    public function downloadTipo($tipo){
      $imagens = Imagens::find($id);

      response()-download($imagens->path.'/'.'fontes/'.$tipo.'/'.substr($imagens->imagem,4,-3).$tipo);

      redirect()->Request::url()."/".$tipo;
    }
}

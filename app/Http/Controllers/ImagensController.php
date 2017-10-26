<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
    public function salvar(){
      return view('salvar');
    }
    public function editar(){
      return view('editar');
    }
}

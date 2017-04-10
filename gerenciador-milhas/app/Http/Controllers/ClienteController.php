<?php namespace GerenciadorMilhas\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;

class ClienteController extends Controller {

    public function lista(){

      $clientes = DB::select('select * from cliente');

      return view('clientes.listagem')->with('clientes', $clientes);

}
      public function detalhes(){
        $id = Request::route('id');

        $resposta = DB::select('select * from cliente where id = ?', [$id]);

        if(empty($resposta)){
          return "Esse cliente não existe";
        }
        return view('clientes.detalhes')->with('cliente', $resposta[0]);

        }
}

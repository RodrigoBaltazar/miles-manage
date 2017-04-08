<?php namespace GerenciadorMilhas\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;

class ClienteController extends Controller {

    public function lista(){

      $clientes = DB::select('select * from cliente');

      return view('listagem')->with('clientes', $clientes);

}
      public function detalhes(){
        $id = Request::input('id');

        $resposta = DB::select('select * from cliente where id = ?', [$id]);

        if(empty($resposta)){
          return "Esse cliente não existe";
        }
        return view('detalhes')->with('cliente', $resposta[0]);

        }
}

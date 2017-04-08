<?php namespace GerenciadorMilhas\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ClienteController extends Controller {

    public function lista(){

      $clientes = DB::select('select * from cliente');

      return view('listagem')->with('clientes', $clientes);

        }
}

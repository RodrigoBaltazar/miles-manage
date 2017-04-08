<?php namespace GerenciadorMilhas\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller {

    public function lista(){

      $html = '<h1>Listagem de produtos com Laravel</h1>';
      $html .= '<ul>';

      $clientes = DB::select('select * from cliente');

      foreach ($clientes as $c){
        $html .= '<li> Nome: '. $c->nome .'</li>';
          }
        $html .= '/<ul>';
        return $html;
        }
}

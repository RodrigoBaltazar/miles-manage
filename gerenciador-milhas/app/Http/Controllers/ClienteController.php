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

        public function novo(){
          return view('clientes.formulario');
        }

        public function adiciona(){
          $id = Request::input('id');
          $nome = Request::input('nome');
          $data_nascimento = Request::input('data_nascimento');
          $cpf = Request::input('cpf');
          $endereco = Request::input('endereco');
          $complemento = Request::input('complemento');
          $bairro = Request::input('bairro');
          $cep = Request::input('cep');
          $cidade = Request::input('cidade');
          $telefone = Request::input('telefone');
          $celular = Request::input('celular');
          $saldo = Request::input('saldo');
          $email = Request::input('email');

          DB::insert('insert into cliente values (?, ?, ?, ?, ?,
                                                  ?, ?, ?, ?, ?, ?, ?, ?)',
                                                  array($id, $nome, $data_nascimento, $cpf, $endereco,
                                                        $complemento, $bairro, $cep, $cidade, $telefone,
                                                       $celular, $saldo, $email));
          return redirect('/clientes')->withInput(Request::only('nome'));

        }
}

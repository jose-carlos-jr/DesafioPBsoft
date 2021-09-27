<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Dflydev\DotAccessData\Data;
use Illuminate\Console\Scheduling\Event;

use function GuzzleHttp\Promise\all;

class CadastrarController extends Controller
{
    public function insertform()
    {
        return view(view: 'Cadastrar');
    }

    public function insert(Request $request)
    {
        $nome = $request->input('nome');
        $categoria = $request->input('categoria');
        $quantidade = $request->input('quantidade');
        $preco = $request->input('preco');
        $descricao = $request->input('descricao');

        $data=array('nome'=>$nome,"categoria"=>$categoria,"quantidade"=>$quantidade, "preco"=>$preco,"descricao"=>$descricao);

        DB:: table('produto')->insert($data);

        return redirect('/listar');

    } 


}

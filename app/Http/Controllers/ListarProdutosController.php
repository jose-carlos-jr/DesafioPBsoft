<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListarProdutosController extends Controller
{
    public function index(){
        $users = DB::select('select * from produto');
        return view('ListarProdutos',['users'=>$users]);
        }

}

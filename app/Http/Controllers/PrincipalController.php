<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function Index()
    {
        return view('index');
    }

    public function Sobre()
    {
        return view('sobre');
    }

    public function ForroLiso()
    {
        return view('produtos.forro-liso');
    }

    public function Molduras()
    {
        return view('produtos.molduras');
    }

    public function GessoAcartonado()
    {
        return view('produtos.gesso-acartonado');
    }

    public function Sancas()
    {
        return view('produtos.sancas');
    }

    public function Colunas(){
        return view('produtos.colunas');
    }

    public function GessoDecorado(){
        return view('produtos.gesso-decorado');
    }
}

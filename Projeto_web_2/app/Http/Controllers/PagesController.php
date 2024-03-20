<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    function home(){
        return view('/pages/home');
    }

    function empresa(){
        return view('/pages/empresa');
    }

    function servicos(){
        return view('/pages/servicos');
    }
    public function editar(){
        return view('pages.editarSolicitacao');
    }

}

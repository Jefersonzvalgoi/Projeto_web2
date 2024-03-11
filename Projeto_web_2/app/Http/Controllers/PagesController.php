<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function index(){
        return view('index');
    }
    function home(){
        return view('/pages/home');
    }
    function cadastro(){
        return view('/pages/cadastro');
    }
    function edit_request(){
        return view('/pages/edit_request');
    }
    function empresa(){
        return view('/pages/empresa');
    }
    function perfil(){
        return view('/pages/perfil');
    }
    function servicos(){
        return view('/pages/servicos');
    }
    function solicitacao(){
        return view('/pages/solicitacao');
    }
}

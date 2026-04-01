<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreController extends Controller
{
    public function index()
    {
        $mensagem = "Esta é a página sobre o sistema de tarefas";
        return view('sobre', compact('mensagem'));
    }
}

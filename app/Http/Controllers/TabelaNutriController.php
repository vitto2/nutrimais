<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TabelaNutriController extends Controller
{

    public function tabela()
    {
        return view('login.tabela');
    }

}

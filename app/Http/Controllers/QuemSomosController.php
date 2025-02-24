<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuemSomosController extends Controller
{
    public function quem_somos()
    {
        return view('quem_somos');
    }
}

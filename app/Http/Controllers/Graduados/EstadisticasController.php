<?php

namespace App\Http\Controllers\Graduados;

use App\Graduado;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EstadisticasController extends Controller
{
    public function index()
    {
        return view('graduados.estadisticas.index');
    }
}

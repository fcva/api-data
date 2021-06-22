<?php

namespace App\Http\Controllers\Graduados;

use Excel;
use App\Graduado;
use App\Imports\GraduadosImport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GraduadosController extends Controller
{
    public function index()
    {
        $graduados = Graduado::paginate(100);

        return view('graduados.index', compact('graduados'));
    }

    public function importar()
    {
        return view('graduados.partials.import');
    }

    public function importarStore(Request $request)
    {
        $request->validate([
            'file' => ['required','mimes:xlsx,xls']
        ]);

        if ($request->hasFile('file')) {

            Excel::import(new GraduadosImport, $request->file('file'));

            return redirect()->route('graduados.index');
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\validarFormulario;
use Illuminate\Http\Request;

class ControladorFormulario extends Controller
{
    public function procesarFormulario(validarFormulario $req)
    {
        return redirect()->route('formulario')->with('success','Formulario validado');
    }
    public function showFormulario()
    {
        return view("formulario");
    }

    public function showTabla()
    {
        return view('tabla');
    }
}

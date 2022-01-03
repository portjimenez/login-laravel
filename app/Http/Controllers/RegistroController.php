<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistroStore;
use Illuminate\Http\Request;
use App\Models\Usuario;

class RegistroController extends Controller
{
    public function registro(){
        return view('registro');
    }

    public function store(RegistroStore $request){

    //para hacer uso de la siguiente funcion se debe de tenrer los mismos nombres de los campos en los input    
      $usuarios = Usuario::create($request->all());
      
      return back()->with('confirm', '¡Gracias Por Registrarse en Nuestro Sitio Web!');
    }
}

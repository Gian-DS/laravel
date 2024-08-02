<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RutasController extends Controller
{
    function saludo($cedula = null, $nombre = null, $adso = null){
        return view('saludo',compact('cedula','nombre','adso'));
    }
    function ruta2($telefono = null, $direccion = null) {
        return view('rutados',compact('telefono','direccion'));
    }
    function ruta3($num1 = null, $num2 = null, $num3= null) {
         // aqui estoy convirtiendo los numeros a entero(int)
    $num1 = (int)$num1;
    $num2 = (int)$num2;
    $num3 = (int)$num3;

    // aqui estoy determinando la logica de las operaciones
    $maximo = max($num1, $num2, $num3);
    $minimo = min($num1, $num2, $num3);

    if ($num1 == $num2 && $num2 == $num3) {
        $result = "Todos los números son iguales.";
    } else {
        $result = "Número mayor: $maximo<br> Número menor: $minimo";
    }

        return view('rutatres',compact('result'));
    }
}

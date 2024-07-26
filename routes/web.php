<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //return view('welcome');//
    return "Bienvenido Estudiante Sena";
});

Route::get('saludo/{saludo}/{cedula}/{adso}/{sangre}/{barrio}', function ($saludo,$cedula,$adso,$sangre,$barrio) {
    //return view('welcome');//
    return "<div style =
    'background-color: #91dcd0; 
    height: 50%;
    width: 50%;
    padding 1em; 
    border-style: solid; 
    color: #496561;
    display: flex;
    position: relative;
    left: 23%;
    top: 23%;
    border-radius: 10%;
    flex-direction: colum;
    justify-content: center;
    text-align: center;
    align-items: center;
    box-shadow: 5px 5px 5px 5px black;'> 
    <h1>Bienvenido estudiante del sena: $saludo<br> Tu cedula es: $cedula<br> Tu adso es: $adso<br>
    Tipo de sangre: $sangre<br> Barrio donde vive: $barrio<br><h1>
    </div>" ;
});
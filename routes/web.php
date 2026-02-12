<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mi-nombre', function () {
    return "Sofi";
});

Route::get('/contactanos', function () {
    return view("form");
});

Route::get('/store', function (Request $request) {
    print_r($request->all());
});

Route::get('/php-basico', function () {

    echo "<h1 style = 'color: red;'> Aprendiendo PHP </h1>";

    $name = "Sofía Oyola";
    $height = 1.6;
    $isLogic = true;
    $age = 18;

    echo "<h3>  " . $name . "</h3>";

    echo "<br><br> *****ESTRUCTURAS DE CONTROL*****<br><br>";

    $mensaje = "Soy $name, tengo $age años. " . valadateAge($age);
    $mensaje .= $isLogic ? "Estoy logueado" : "no estoy logueado";

    echo $mensaje;

    echo "<br><br> *****ESTRUCTURAS DE DATOS*****<br><br>";

    //Diccionarios 
    $pc = [
        "nombre" => "pc Gamer core9",
        "price" => 6000,
        "marca" => "Lenovo"
    ];

    $teclado = [
        "nombre" => "Teclado",
        "price" => 200,
        "marca" => "Aus"
    ];

    $listaProductos = [$pc, $teclado];

    //For
    foreach ($listaProductos as $item) {
        echo $item['nombre'] . "<br>";
    }
});

function valadateAge($age)
{

    if ($age >= 18) {
        return "Soy mayor de edad <br>";
    } else {
        return "Soy menor de edad <br>";
    }
};

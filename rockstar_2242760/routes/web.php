<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("variables", function(){
    $mensaje =10;
    var_dump($mensaje);
    echo"<hr />";
    $mensaje = "Pyke";
    var_dump($mensaje);
} );

Route::get("arreglos", function(){
//Arreglo
$estudiantes =[ "AN" => "Ana",
                "MA" =>"Maria",
                "JO" => "Jorge" ];
echo "<pre>";
print_r($estudiantes);
echo "<pre>";
});

Route::get('paises', function () {
    $paises =[
        "Colombia" =>[
            "capital" =>"Bogotá",
            "moneda" => "Peso",
            "población" => 50.34
            ],
        "Peru" =>[
            "capital" =>"Lima",
            "moneda" => "Sol",
            "población" => 32.84
            ],
        "Paraguay" =>[
            "capital" =>"Asunción",
            "moneda" => "Guaraní",
            "población" => 7.045
            ]
        ];


    //invocar vista
    //Llevar datos a la vista
    return view("paises")->with("naciones",$paises);



});

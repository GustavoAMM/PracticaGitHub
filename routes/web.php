<?php

use App\Http\Controllers\ControladorFormulario;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

route::controller(ControladorFormulario::class)->group(
    function (){
        Route::get('formulario','showFormulario')->name('formulario');
        Route::get('tabla','showTabla')->name('tabla');
    }
);

Route::post('guardarFormulario', [ControladorFormulario::class,'procesarFormulario'])->name('saveForm');

<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\usuarioscontroller;


route::get('login',[usuarioscontroller::class,'login'])->name('login');
route::get('registro',[usuarioscontroller::class,'registro'])->name('registro');


Route::get('/', function () {
    return view('welcome');
});

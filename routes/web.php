<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestinoController;

Route::get('/', [DestinoController::class, 'index'])->name('destinos.index');

Route::get('/destino/{id}', [DestinoController::class, 'show'])->name('destinos.show');

Route::post('/contacto', [DestinoController::class, 'enviarContacto'])->name('contacto.enviar');
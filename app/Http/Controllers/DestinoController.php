<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DestinoController extends Controller
{
    private function getDestinos()
{
    $rutaArchivo = storage_path('app/destinos.json');
    
    if (!file_exists($rutaArchivo)) {
        dd("El sistema no encuentra el archivo. Lo está buscando exactamente en esta ruta: " . $rutaArchivo);
    }

    $json = file_get_contents($rutaArchivo);
    return json_decode($json, true);
}
    public function index()
    {
        $destinos = $this->getDestinos();
        return view('destinos.index', compact('destinos'));
    }

    public function show($id)
    {
        $destinos = $this->getDestinos();
        
        $destino = collect($destinos)->firstWhere('id', (int)$id);

        if (!$destino) {
            abort(404, 'El destino turístico no fue encontrado');
        }

        return view('destinos.show', compact('destino'));
    }
}
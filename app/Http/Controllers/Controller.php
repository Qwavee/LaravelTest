<?php

namespace App\Http\Controllers;
use App\Models\Cliente;
use App\Models\Unidades;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function search(String $searchKey)
    {
        $unidades = Cliente::query()
            ->where('nombre', 'LIKE', "%{$searchKey}%") 
            ->unidades;
        return response()->json($unidades, 200);            
    }

    public function getAllUnidades()
    {
        $unidades = Unidades::with('cliente')->get();
        return response()->json($unidades, 200);            
    }    
}
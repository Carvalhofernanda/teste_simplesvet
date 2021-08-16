<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class AnimalController extends Controller
{
    public function import(Request $request){
        
        $animal=$this->obj->import([
            'Id'=>$request->Id,
            'IdCliente'=>$request->IdCliente,
            'Nome'=>$request->Nome,
            'Raca'=>$request->Raca,
            'Especie'=>$request->Especie,
            'HistoricoClinico'=>$request->HistoricoClinico,
            'Nascimento'=>$request->Nascimento
        ]);
        return response($request);   

    }
}

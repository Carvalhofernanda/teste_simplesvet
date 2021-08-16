<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function import(Request $request){
        
        $animal=$this->obj->import([
            'Id'=>$request->Id,
            'Nome'=>$request->Nome,
            'Telefone1'=>$request->Telefone1,
            'Telefone2'=>$request->Telefone2,
            'Email'=>$request->Email
        ]);
         return response($request);   
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    public $table = 'animal';
    public $primaryKey = 'id';

    protected $fillable = [
        'IdCliente'
    ];

    public function cliente(){
        return $this->belongsTo('App\Models\Cliente', 'IdCliente');
    }
}

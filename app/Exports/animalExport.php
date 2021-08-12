<?php

namespace App\Exports;

use App\Models\animal;
use Maatwebsite\Excel\Concerns\FromCollection;

class animalExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return animal::all();
    }
}

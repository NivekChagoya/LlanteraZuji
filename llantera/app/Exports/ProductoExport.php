<?php

namespace App\Exports;

use App\Models\Productos\Productos;
use Maatwebsite\Excel\Concerns\FromCollection;

class ProductoExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return collect(Productos::all());
    }

}

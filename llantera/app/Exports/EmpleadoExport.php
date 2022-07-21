<?php

namespace App\Exports;

use App\Models\Empleados\Empleados;
use Maatwebsite\Excel\Concerns\FromCollection;

class EmpleadoExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return collect(Empleados::all());
    }

}

<?php

namespace App\Exports;

use App\Models\Pagos\Pagos;
use Maatwebsite\Excel\Concerns\FromCollection;

class PagoExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return collect(Pagos::all());
    }

}

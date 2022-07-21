<?php

namespace App\Exports;

use App\Models\Clientes\Clientes;
use Maatwebsite\Excel\Concerns\FromCollection;

class ClientesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return collect(Clientes::all());
    }

}

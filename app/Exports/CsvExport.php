<?php

namespace App\Exports;


use Maatwebsite\Excel\Concerns\FromCollection;
use App\Models\City;

class CsvExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return City::all();
    }
}

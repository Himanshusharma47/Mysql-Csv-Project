<?php

namespace App\Http\Controllers;
use App\Models\City;
use App\Exports\CsvExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class CsvController extends Controller
{
    public function view_data(){
        $cities = City::all();

        return view('csv', compact('cities'));
    }

    Public function export(){
        return Excel::download(new CsvExport, 'cities.csv');   
    }
}

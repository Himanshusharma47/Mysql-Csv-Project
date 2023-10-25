<?php

namespace App\Http\Controllers;
use App\Models\City;
use App\Exports\CsvExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class CsvController extends Controller
{
    // display data function 
    public function view_data(){
        $cities = City::all();

        return view('csv', compact('cities'));
    }

    // download to csv function
    Public function export(){
        return Excel::download(new CsvExport, 'cities.csv');   
    }
}

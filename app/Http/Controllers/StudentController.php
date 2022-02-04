<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Studentdata;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\StudentDataImport;
use App\Exports\StudentDataExport;


class StudentController extends Controller
{
    public function getStudents(){
        return Studentdata::all();
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function fileImport(Request $request)
    {
        Excel::import(new StudentDataImport, $request->file('file')->store('temp'));
        return back();
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function fileExport()
    {
        return Excel::download(new StudentDataExport, 'studentData.xlsx');
    }
}

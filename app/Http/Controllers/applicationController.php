<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Applications;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ApplicationExport;
use App\Imports\ApplicationImport;

class applicationController extends Controller
{
    public function index()
    {
        $applications = Applications::all();
        return view('index', compact('applications' ));
    }

    public function create($applicationId = null)
    {
        return view('home', compact('applicationId'));
    }

    public function export() 
    {
        return Excel::download(new ApplicationExport, 'applications.xlsx');
    }

    public function import()
    {
        try {
            Excel::import(new ApplicationImport, request()->file('file'));
            return back()->with('success', 'los datos se han importado correctamente');
        } catch (\Maatwebsite\Excel\Validators\ValidationException $e) {
            $failures = $e->failures();
            foreach ($failures as $failure) {
                $failure->row(); 
                $failure->attribute(); 
                $failure->errors(); 
                $failure->values(); 
            }
            return back()->with('message', $failures);
        }
    }
}

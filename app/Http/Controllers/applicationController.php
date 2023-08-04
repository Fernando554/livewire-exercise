<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Applications;

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
}

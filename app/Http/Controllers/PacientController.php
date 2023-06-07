<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PacientController extends Controller
{
    public function index()
    {
        $pacients = ["Pedrinho"];
        return view('app.pacients', compact('pacients'));
    }
}

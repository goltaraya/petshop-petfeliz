<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pacient;

class PacientController extends Controller
{
    public function index()
    {
        return view('app.pacients.index');
    }
    public function create()
    {
        return view('app.pacients.create');
    }

    public function store(Request $request)
    {
        $pacient = new Pacient;
        $pacient->name = $request->name;
        $pacient->birth = $request->birth;
        $pacient->species = $request->species;
        $pacient->gender = $request->gender;
        $pacient->observation = $request->observation;

        $pacient->save();

        return redirect('app.pacient.index')
    }

}

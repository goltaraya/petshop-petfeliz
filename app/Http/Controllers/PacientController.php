<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pacient;

class PacientController extends Controller
{
    public function index()
    {
        $pacients = Pacient::all();

        return view('app.pacients.index', compact('pacients'));
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

        return redirect(route('app.pacients.index'));
    }

    public function show($id)
    {
        $pacient = Pacient::findOrFail($id);

        return view('app.pacients.show', compact('pacient'));
    }

    public function edit()
    {
        return view('app.pacients.edit');
    }
}

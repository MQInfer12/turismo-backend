<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Accesibilidad;

class AccesibilidadController extends Controller
{

    public function index()
    {
        return Accesibilidad::all();
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        return Accesibilidad::create($request->all());
    }

    public function show($id)
    {
        return Accesibilidad::find($id);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $accesibilidad = Accesibilidad::find($id);
        $accesibilidad->update($request->all());
        return $accesibilidad;
    }

    public function destroy($id)
    {
        $object = Accesibilidad::findOrFail($id);
        return $object->forceDelete();
    }
}

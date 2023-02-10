<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Estacionalidad;


class EstacionalidadController extends Controller
{

    public function index()
    {

        return Estacionalidad::all();
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        return Estacionalidad::create($request->all());
    }

    public function show($id)
    {
        return Estacionalidad::find($id);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $estacionalidad = Estacionalidad::find($id);
        $estacionalidad -> update($request->all());
        return $estacionalidad;
    }

    public function destroy($id)
    {
        return Estacionalidad::destroy($id);
    }
}

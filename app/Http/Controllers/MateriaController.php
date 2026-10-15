<?php
namespace App\Http\Controllers;

use App\Models\Materia;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    public function index()
    {
        $materias = Materia::all();
        return view('materia.index', compact('materias'));
    }

    public function create()
    {
        return view('materia.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'creditos' => 'required|integer',
            'profesor' => 'required',
        ]);

        Materia::create($request->only(['nombre', 'creditos', 'profesor']));

        return redirect()->route('materia.index')->with('success', 'Materia creada con éxito.');
    }

    public function show(Materia $materia)
    {
        return view('materia.show', compact('materia'));
    }

    public function edit(Materia $materia)
    {
        return view('materia.edit', compact('materia'));
    }

    public function update(Request $request, Materia $materia)
    {
        $request->validate([
            'nombre' => 'required',
            'creditos' => 'required|integer',
            'profesor' => 'required',
        ]);

        $materia->update($request->only(['nombre', 'creditos', 'profesor']));

       return redirect()->route('materia.index')->with('success', 'Materia actualizada con éxito.');
    }

    public function destroy(Materia $materia)
    {
        $materia->delete();

        return redirect()->route('materia.index')->with('success', 'Materia eliminada con éxito.');
    }
}



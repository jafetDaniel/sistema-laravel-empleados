<?php
namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
  
    public function index()
    {
        return view('empleado.index');
    }

    
    public function create()
    {

        return view('empleado.create');
    }


    public function store(Request $request)
    {
        $datosEmpleado = request()->all();

        return response()->json($datosEmpleado);
    }

  
    public function show(Empleado $empleado)
    {
        //
    }


    public function edit(Empleado $empleado)
    {
        //
    }

  
    public function update(Request $request, Empleado $empleado)
    {
        //
    }


    public function destroy(Empleado $empleado)
    {
        //
    }
}

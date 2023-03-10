<?php
namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EmpleadoController extends Controller
{
  
    public function index()
    {
        $datos['empleados']=Empleado::paginate(5);

        return view('empleado.index', $datos);
    }

    
    public function create()
    {

        return view('empleado.create');
    }


    public function store(Request $request)
    {
        //$datosEmpleado = request()->all();
        $datosEmpleado = request()->except('_token'); //enviar campos menos el token

        if ($request->hasFile('foto')) { //si se adjunto foto
            $datosEmpleado['foto']=$request->file('foto')->store('uploads','public'); //establecer nombre de foto y guardarla en el store
        }

        Empleado::insert($datosEmpleado); //insertar en la bd

        return redirect('empleado')->with('mensaje', 'Empleado agregado con éxito');
    }

  
    public function show(Empleado $empleado)
    {
        //
    }


    public function edit($id)
    {
        $empleado=Empleado::findOrFail($id); //obtener datos de un registro por medio de su id

        return view('empleado.edit', compact('empleado'));
    }

  
    public function update(Request $request, $id)
    {
        $datosEmpleado = request()->except('_token', '_method');

        if ($request->hasFile('foto')) { //si se adjunto una foto nueva
            $empleado=Empleado::findOrFail($id); //obtener datos de un registro por medio de su id
            Storage::delete('public/'.$empleado->foto); //borrar foto anterior
            $datosEmpleado['foto']=$request->file('foto')->store('uploads','public'); //establecer nombre de foto y guardarla en el store
        }

        Empleado::where('id','=', $id)->update($datosEmpleado);
        $empleado=Empleado::findOrFail($id); //obtener datos de un registro por medio de su id
        return view('empleado.edit', compact('empleado'));
    }


    
    public function destroy($id)
    {
        $empleado=Empleado::findOrFail($id); //obtener datos de un registro por medio de su id
        if (Storage::delete('public/'.$empleado->foto) ) { //borar foto del storage
            Empleado::destroy($id); //borrar registro de la bd
        }
        return redirect('empleado')->with('mensaje', 'Empleado borrado');
    }
}

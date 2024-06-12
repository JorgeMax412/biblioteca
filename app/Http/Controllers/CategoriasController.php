<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;
use Symfony\Component\VarDumper\Caster\RedisCaster;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $model = new Categorias();
        $categorias = $model->obtenerTodos();

        return view('categorias.mostrarCategorias', ['categorias' => $categorias]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categorias.nuevaCategoria');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $obj = new Categorias([
            'nombre' => $request->post('nombre'),
        ]);
        $model = new Categorias();
        $resultado = $model->crear($obj);
        return redirect('/categoria/lista')->with(['resultado' => $resultado]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Categorias $categorias)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $categoria = Categorias::find($id);
        try
        {
            if ($categoria)
            {
                return view('categorias.actualizarCategorias', compact('categoria'));
            }
            else
            {
                return redirect('/categoria/lista')->with('error', 'Categoria no encontrada');
            }
        }
        catch (\Exception $e)
        {
            return redirect('/categoria/lista')->with('error', 'Ocurrio un error inesperado');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $codigo)
    {
        try
        {
            $categoria = Categorias::where('codigo', $codigo)->first();
            if($categoria)
            {
                $categoria->update($request->all());
                return redirect('/categoria/lista')->with('success', 'Categoria actualizada correctamente');
            }

        }
        catch (\Exception $e)
        {
            return back()->withInput()->with(['error' => 'Ocurrio un error y no se puede realizar la eliminacion, error: ' . $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $categoria = Categorias::find($id);
        try
        {
            if ($categoria)
            {
                $categoria->delete();
                return redirect('/categoria/lista')->with('success', 'Categoria eliminada correctamente');
            }
        }
        catch (\Exception $e)
        {
            return redirect('/categoria/lista')->with('error', 'Ocurrio un error: ' . $e->getMessage());
        }
        
    }
}

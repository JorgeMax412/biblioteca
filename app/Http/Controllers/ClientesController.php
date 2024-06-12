<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use App\Models\Clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = new Clientes();
        $datos = $clientes->obtenerTodos();

        return view('clientes.mostrarClientes', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categorias::all();
        return view('clientes.nuevoCliente', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try
        {
            $obj = new Clientes([
                'nombre' => $request->post('nombre'),
                'edad' => $request->post('edad'),
                'categoria' => $request->post('categoria'),
            ]);

            $model = new Clientes();
            $resultado = $model->crear($obj);
            return redirect('/cliente/lista')->with(['resultado' => $resultado]);

        }
        catch (\Exception $e)
        {
            return back()->withInput()->withErrors(['error' => 'No se pudo hacer la inserccion']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Clientes $clientes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $cliente = Clientes::find($id);
        $categorias = Categorias::all();
        try
        {
            if ($cliente)
            {
                return view('clientes.actualizarClientes', compact('cliente', 'categorias'));
            }
            else
            {
                return redirect('/cliente/lista')->with('error', 'Cliente no encontrado');
            }
        }
        catch (\Exception $e)
        {
            return redirect('/cliente/lista')->with('error', 'Ocurrio un error inesperado');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $codigo)
    {
        try
        {
            $cliente = Clientes::where('codigo', $codigo)->first();
            if($cliente)
            {
                $cliente->update($request->all());
                return redirect('/cliente/lista')->with('success', 'Cliente actualizada correctamente');
            }
        }
        catch (\Exception $e)
        {
            return back()->withInput()->with('error', 'No se encuentra la categoria');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $cliente = Clientes::find($id);
        try
        {
            if ($cliente)
            {
                $cliente->delete();
                return redirect('/cliente/lista')->with('success', 'Cliente eliminada correctamente');
            }
        }
        catch (\Exception $e)
        {
            return back()->withInput()->withErrors(['error' => 'Ocurrio un error y no se puede realizar la eliminacion, error: ' . $e->getMessage()]);
        }
        
    }
}

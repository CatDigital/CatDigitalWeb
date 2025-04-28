<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::all();
        return view('productos.index', compact('productos'));
    }

    public function create()
    {
        return view('productos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre_producto' => 'required|string|max:100',
            'stok' => 'required|integer',
            'precio' => 'required|integer',
            'img' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'descripcion' => 'nullable|string|max:500',
        ]);

        $data = $request->all();

        if ($request->hasFile('img')) {
            $archivo = $request->file('img');
            $rutaImagen = $archivo->store('productos', 'public');
            $data['img'] = $rutaImagen;
        }

        Producto::create($data);

        return redirect()->route('productos.index')->with('success', 'Producto creado correctamente.');
    }


    public function edit(Producto $producto)
    {
        return view('productos.edit', compact('producto'));
    }

    public function update(Request $request, Producto $producto)
    {
        $request->validate([
            'nombre_producto' => 'required|string|max:100',
            'stok' => 'required|integer',
            'precio' => 'required|integer',
            'img' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'descripcion' => 'nullable|string|max:500',
        ]);

        // Actualizar los campos normales
        $producto->nombre_producto = $request->nombre_producto;
        $producto->stok = $request->stok;
        $producto->precio = $request->precio;
        $producto->descripcion = $request->descripcion;

        // Actualizar imagen si se subió una nueva
        if ($request->hasFile('img')) {
            $archivo = $request->file('img');
            $rutaImagen = $archivo->store('productos', 'public');
            $producto->img = $rutaImagen;
        }

        // Guardar los cambios (actualizar)
        $producto->save();

        return redirect()->route('productos.index')->with('success', 'Producto actualizado correctamente.');
    }





    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('productos.index')->with('success', 'Producto eliminado correctamente.');
    }

    public function listado()
    {
        $productos = Producto::all();
        return view('productos.listado', compact('productos'));
    }
}

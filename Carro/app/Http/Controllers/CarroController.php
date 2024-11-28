<?php

namespace App\Http\Controllers;

use App\Models\Carro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CarroController extends Controller
{
    public function index()
{
    $carros = Carro::all();
    return view('carros.index', compact('carros'));
}

public function create()
{
    return view('carros.create');
}

public function store(Request $request)
{
    Carro::create($request->all());

    $request->validate([
        'nome' => 'required',
        'modelo' => 'required',
        'ano' => 'required',  
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
    ]);
    $imageName = time().'.'.$request->image->extension();
    $request->image->move(public_path('images'), $imageName);

    $carro = new Carro();
    $carro->nome = $request->nome;
    $carro->modelo = $request->modelo;
    $carro->ano = $request->ano;
    $carro->image = 'images/'.$imageName;
    $carro->save();

    return redirect('carros')->with('success', 'Carro created successfully.');
}

public function edit($id)
{
    $carro = Carro::findOrFail($id);
    return view('carros.edit', compact('carro'));
}

public function update(Request $request, $id)
{
    $carro = Carro::findOrFail($id);
    $carro->update($request->all());


    $carro->nome = $request->nome;
    $carro->modelo = $request->modelo;
    $carro->ano = $request->ano;

    if(!is_null ($request->image)){
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        $carro->image = 'images/'.$imageName;
    }
    $carro->save();


    return redirect('carros')->with('success', 'Carro updated successfully.');
}

public function destroy($id)
{
    $carro = Carro::findOrFail($id);
    $carro->delete();
    return redirect('carros')->with('success', 'Carro deleted successfully.');
}
}

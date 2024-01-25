<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Libelle' => 'required|string',
            'Marque' => 'required|string',
            'Prix' => 'required|numeric',
            'Stock' => 'required|integer|min:1|max:9999',
            'Image' => 'nullable|file',
        ]);

        Product::create($request->all());

        return redirect()->route('products.index')->with('success', 'Produit créé avec succès.');
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'Libelle' => 'required|string',
            'Marque' => 'required|string',
            'Prix' => 'required|numeric',
            'Stock' => 'required|integer|min:1|max:9999',
            'Image' => 'nullable|file',
        ]);

        $product = Product::findOrFail($id);
        $product->update($request->all());

        return redirect()->route('products.show', $id)->with('success', 'Produit mis à jour avec succès.');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Produit supprimé avec succès.');
    }
}

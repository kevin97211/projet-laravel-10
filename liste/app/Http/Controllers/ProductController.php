<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Affiche la liste des produits 
    public function index()
    {
        $produits = Product::all();
        return view('index', compact('produits'));
    }

    // Affiche le formulaire de création d'un produit 
    public function create()
    {
        return view('create');
    }

    // Stocke un nouveau produit dans la base de données 
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
        ]);

        Product::create($request->all());

        return redirect()->route('index');
    }

    // Affiche un produit  
    public function show(Product $product)
    {
        return view('show', compact('product'));
    }

    // Affiche le formulaire d'édit  
    public function edit(Product $product)
    {
        return view('edit', compact('product'));
    }

    // Met à jour le produit 
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
        ]);

        $product->update($request->all());

        return redirect()->route('index');
    }

    // Supprime un produit 
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('index');
    }
}
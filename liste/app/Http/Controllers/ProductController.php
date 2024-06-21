<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Affiche la liste des produits 
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    // Affiche le formulaire de création d'un produit 
    public function create()
    {
        return view('products.create');
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

        return redirect()->route('products.index')
                         ->with('success', 'Product created successfully.');
    }

    // Affiche un produit  
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    // Affiche le formulaire d'édit  
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
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

        return redirect()->route('products.index')
                         ->with('success', 'Product updated successfully.');
    }

    // Supprime un produit 
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')
                         ->with('success', 'Product deleted successfully.');
    }
}
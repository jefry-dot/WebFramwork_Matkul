<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('products.index');
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        // Validasi dan penyimpanan data
        $validated = $request->validate([
            'name' => 'required|max:255',
            'description' => 'nullable',
        ]);

        // Simpan data ke database
        // Product::create($validated);

        return redirect()->route('products.index')
            ->with('success', 'Produk berhasil dibuat.');
    }

    public function show($id)
    {
        // $product = Product::findOrFail($id);
        // return view('products.show', compact('product'));
        return view('products.show', ['id' => $id]);
    }

    public function edit($id)
    {
        // $product = Product::findOrFail($id);
        // return view('products.edit', compact('product'));
        return view('products.edit', ['id' => $id]);
    }

    public function update(Request $request, $id)
    {
        // Validasi dan update data
        $validated = $request->validate([
            'name' => 'required|max:255',
            'description' => 'nullable',
        ]);

        // $product = Product::findOrFail($id);
        // $product->update($validated);

        return redirect()->route('products.index')
            ->with('success', 'Produk berhasil diperbarui.');
    }

    public function destroy($id)
    {
        // $product = Product::findOrFail($id);
        // $product->delete();

        return redirect()->route('products.index')
            ->with('success', 'Produk berhasil dihapus.');
    }
}
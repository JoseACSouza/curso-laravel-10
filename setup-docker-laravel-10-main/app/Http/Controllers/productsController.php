<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

use function Laravel\Prompts\search;

class productsController extends Controller

// index() mais utilizada para paginação
{
    public function __construct(Products $products)
    {
        $this->products = $products;
    }

    public function index(Request $request)
    {
        $search = $request->search;
        $findProducts = $this->products->getProductSearch(searchText: $search ?? '');
        return view('pages.products.pagination', compact('findProducts'));
    }

    public function delete(Request $request)
    {
        $id = $request->id;
        $buscaRegistro = Products::find($id);
        $buscaRegistro->delete();
        return response()->json(['succsess'=> true]);
    }
}

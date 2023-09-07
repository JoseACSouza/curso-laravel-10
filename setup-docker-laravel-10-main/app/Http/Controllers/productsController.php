<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormRequestNewProduct;
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

    public function addProduto(FormRequestNewProduct $request){
        if($request->method() == 'POST') {
            $data = $request->all();
            Products::create($data);
            return redirect()->route('home');
        }
        return view('pages.products.new-product');
    }

    public function editProduto(FormRequestNewProduct $request){
        if($request->method() == 'PUT') {
            $data = $request->all();
            Products::create($data);
            return redirect()->route('home');
        }
        return view('pages.products.new-product');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormRequestProduct;
use App\Models\Components;
use App\Models\Products;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

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
        Toastr::success('Produto excluído com sucesso!');
        return response()->json(['success'=> true]);
    }

    public function addProduto(FormRequestProduct $request) {
        if($request->method() == 'POST') {
            $data = $request->all();
            $componente = new Components();
            $data['value']= $componente->formatacaoMascaraDinheiroDecimal($data['value']);
            Products::create($data);
            Toastr::success('Produto adicionado com sucesso!');
            return redirect()->route('home');
        }
        return view('pages.products.new');
    }

    public function editProduto(FormRequestProduct $request, $id){
        if($request->method() == 'PUT') {
            $data = $request->all();
            $componente = new Components();
            $data['value']= $componente->formatacaoMascaraDinheiroDecimal($data['value']);
            $searchRegs = Products::find($id);
            $searchRegs->update($data);
            return redirect()->route('home');
        }
        $findProduct = Products::where('id','=',$id)->first();
        return view("pages.products.update", compact('findProduct'));
    }
}

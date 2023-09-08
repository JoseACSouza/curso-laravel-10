<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormRequestVendas;
use App\Models\Vendas;
use App\Models\Products;
use App\Models\Clientes;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class VendasController extends Controller
{
    public function __construct(Vendas $venda)
    {
        $this->venda = $venda;
    }

    public function index(Request $request)
    {
        $search = $request->search;
        $findVendas = $this->venda->getVendasSearch(searchText: $search ?? '');
        return view('pages.vendas.pagination', compact('findVendas'));
    }


    // public function addProduto(FormRequestVendas $request) {
    //     if($request->method() == 'POST') {
    //         $data = $request->all();
    //         Vendas::create($data);
    //         Toastr::success('Produto adicionado com sucesso!');
    //         return redirect()->route('home');
    //     }
    //     return view('pages.vendas.new');
    // }
}

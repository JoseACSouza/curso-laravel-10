<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormRequestClientes;
use App\Models\Clientes;
use App\Models\Components;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class clientController extends Controller
{
    public function __construct(Clientes $clientes)
    {
        $this->clientes = $clientes;
    }

    public function index(Request $request)
    {
        $search = $request->search;
        $findClientes = $this->clientes->getClienteSearch(searchText: $search ?? '');
        return view('pages.clientes.pagination', compact('findClientes'));
    }

    public function delete(Request $request)
    {
        $id = $request->id;
        $buscaRegistro = Clientes::find($id);
        $buscaRegistro->delete();
        Toastr::success('Cliente excluído com sucesso!');
        return response()->json(['success'=> true]);
    }

    public function addCliente(FormRequestClientes $request) {
        if($request->method() == 'POST') {
            $data = $request->all();
            Clientes::create($data);
            Toastr::success('Produto adicionado com sucesso!');
            return redirect()->route('homeClientes');
        }
        return view('pages.clientes.new');
    }

    public function editCliente(FormRequestClientes $request, $id){
        if($request->method() == 'PUT') {
            $data = $request->all();
            $searchRegs = Clientes::find($id);
            $searchRegs->update($data);
            return redirect()->route('homeClientes');
        }
        $findClientes = Clientes::where('id','=',$id)->first();
        return view("pages.clientes.update", compact('findClientes'));
    }
}

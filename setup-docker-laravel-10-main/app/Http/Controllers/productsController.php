<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;

class productsController extends Controller

//lembrete index() mais utilizada para paginação
{
    public function index() {
        $findProducts = products::all();
        return view('pages.products.pagination', compact('$findProducts'));
    }
}

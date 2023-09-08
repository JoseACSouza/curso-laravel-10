<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendas extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero_da_venda',
        'id_produto',
        'id_cliente',
    ];

    public function produto()
    {
        return $this->belongsTo(Products::class);
    }

    public function cliente()
    {
        return $this->belongsTo(Clientes::class);
    }

    public function getVendasSearch(string $searchText = '')
    {
        $produto = $this->where(function ($query) use ($searchText) {
            if ($searchText) {
                $query->where('numero_da_venda', $searchText);
                $query->orWhere('numero_da_venda', 'LIKE', "%{$searchText}%");
            }
        })->get();

        return $produto;
    }
}

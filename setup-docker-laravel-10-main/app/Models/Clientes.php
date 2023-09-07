<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'endereco',
        'logradouro',
        'cep',
        'bairro',
    ];

    public function getClienteSearch(string $searchText='') {
        $clientes = $this->where(function ($query) use ($searchText) {
            if ($searchText) {
                $query->where('name', $searchText);
                $query->orWhere('name', 'LIKE', "%{$searchText}%");
            }
        })->get();
        return $clientes;
    }
}

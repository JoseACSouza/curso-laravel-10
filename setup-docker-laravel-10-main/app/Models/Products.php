<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'value',
    ];

    public function vendas()
{
    return $this->hasMany(Vendas::class);
}

    public function getProductSearch(string $searchText='') {
        $products = $this->where(function ($query) use ($searchText) {
            if ($searchText) {
                $query->where('name', $searchText);
                $query->orWhere('name', 'LIKE', "%{$searchText}%");
            }
        })->get();
        return $products;
    }
};

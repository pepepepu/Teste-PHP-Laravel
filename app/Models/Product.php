<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['CodBarras', 'NomeProduto', 'ValorUnitario'];
    
    // Relacionamento com detalhes_pedidos
    public function detalhesPedidos()
    {
        return $this->hasMany(Purchase::class, 'produto_id');
    }
}

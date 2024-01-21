<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['NomeCliente', 'CPF', 'Email'];

    // Relacionamento com detalhes_pedidos
    public function detalhesPedidos()
    {
        return $this->hasMany(Purchase::class, 'cliente_id');
    }
}

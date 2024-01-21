<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['cliente_id', 'produto_id', 'Quantidade', 'Desconto', 'status'];

    // Relacionamento com clientes
    public function cliente()
    {
        return $this->belongsTo(Clients::class, 'cliente_id');
    }

    // Relacionamento com produtos
    public function produto()
    {
        return $this->belongsTo(Product::class, 'produto_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Empresa extends Model
{
    public function clientes(): HasMany
    {
        return $this->hasMany(Cliente::class);
    }
    use HasFactory;
}

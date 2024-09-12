<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public function empresa(): BelongsTo
    {
        return $this->belongsTo(Empresa::class);
    }
    use HasFactory;
}

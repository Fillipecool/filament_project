<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cliente extends Model
{
    public function empresa(): BelongsTo
    {
        return $this->belongsTo(Empresa::class);
    }
    use HasFactory;
}

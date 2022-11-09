<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Average extends Model
{
    use HasFactory;
    protected $table="average";

    public function average(): HasMany
    {
        return $this->hasMany(Ad::class);
    }
}

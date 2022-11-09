<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cats extends Model
{
    use HasFactory;
    //protected $connection="mysql2";
    protected $table="cats";

    public function ad():HasMany

    {
        return $this->hasMany(Ad::class);
    }
}
